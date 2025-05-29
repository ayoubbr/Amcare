@extends('admin.layout')
@section('title', 'Paramètres')
@section('content')
    <section id="site-settings" class="admin-section mb-5">
        <h3>Paramètres du Site</h3>
        <div class="setting-form-container mt-4">
            <h4>Gérer les Paramètres Généraux</h4>

            <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="siteName">Nom du Site</label>
                    <input type="text" class="form-control" name="site_name" id="siteName"
                        placeholder="Entrez le nom du site" value="{{ old('site_name', $settings->site_name ?? '') }}"
                        required>
                    @error('site_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="siteEmail">Email (Contact Principal)</label>
                    <input type="email" class="form-control" name="email" id="siteEmail"
                        placeholder="Entrez l'adresse email de contact" value="{{ old('email', $settings->email ?? '') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="siteLogo" class="mb-0 mr-3">Logo</label>
                    @php
                        $imagePath = $settings->logo;
                        $imageUrl = null;
                        $defaultImageUrl = asset('assets/images/logo.png');

                        if ($imagePath) {
                            if (Illuminate\Support\Str::startsWith($imagePath, 'assets/seed_images/')) {
                                $imageUrl = asset($imagePath);
                            } else {
                                $imageUrl = Storage::url($imagePath);
                            }
                        }
                    @endphp
                    @if ($settings && $settings->logo)
                        <img src="{{ $imageUrl ?? $defaultImageUrl }}" alt="Logo actuel" class="img-thumbnail mr-3"
                            style="max-height: 80px;">
                        <a href="{{ $imageUrl ?? $defaultImageUrl }}" target="_blank" class="btn btn-sm btn-info mr-2">Voir
                            actuel</a>
                    @else
                        <span class="text-muted mr-3">Aucun logo actuel</span>
                    @endif
                    <input type="file" class="form-control-file" name="logo" id="siteLogo">
                    @error('logo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Numéros de Téléphone (Contact)</label>
                    <div id="phone-numbers-container">
                        @if (old('phone_keys') && is_array(old('phone_keys')))
                            @foreach (old('phone_keys') as $index => $key)
                                <div class="phone-input-group d-flex mb-2">
                                    <input type="text" class="form-control" name="phone_keys[]"
                                        placeholder="Clé (ex: Support)" value="{{ $key }}"
                                        style="width: 40%; margin-right: 5px;">
                                    <input type="text" class="form-control" name="phone_values[]"
                                        placeholder="Numéro (ex: +1234567890)"
                                        value="{{ old('phone_values')[$index] ?? '' }}" style="width: 40%;">
                                    <button type="button" class="btn btn-danger btn-remove-phone ml-2"
                                        style="width: 20%;">Supprimer</button>
                                </div>
                            @endforeach
                        @elseif ($settings && $settings->phones && is_array($settings->phones))
                            @foreach ($settings->phones as $phone)
                                <div class="phone-input-group d-flex mb-2">
                                    <input type="text" class="form-control" name="phone_keys[]"
                                        placeholder="Clé (ex: Support)" value="{{ $phone['key'] ?? '' }}"
                                        style="width: 40%; margin-right: 5px;">
                                    <input type="text" class="form-control" name="phone_values[]"
                                        placeholder="Numéro (ex: +1234567890)" value="{{ $phone['value'] ?? '' }}"
                                        style="width: 40%;">
                                    <button type="button" class="btn btn-danger btn-remove-phone ml-2"
                                        style="width: 20%;">Supprimer</button>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <button type="button" id="add-phone-button" class="btn btn-info mt-2">Ajouter un
                        numéro</button>
                    @error('phone_keys.*')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    @error('phone_values.*')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="siteAddress">Addresse</label>
                    <textarea class="form-control" name="address" id="siteAddress" rows="2" placeholder="Entrez l'addresse">{{ old('address', $settings->address ?? '') }}</textarea>
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer les Paramètres du Site</button>
            </form>
        </div>
    </section>

    <hr class="my-5">

    <section id="admin-profile-settings" class="admin-section">
        <h3>Gérer Mon Profil</h3>
        <div class="setting-form-container mt-4">
            <h4>Informations Personnelles et Sécurité</h4>
            <form action="{{ route('admin.profile.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="adminCurrentEmail">Email Actuel</label>
                    <input type="email" class="form-control" id="adminCurrentEmail" value="{{ auth()->user()->email }}"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="adminNewEmail">Nouvel Email (Optionnel)</label>
                    <input type="email" class="form-control @error('new_email') is-invalid @enderror" name="new_email"
                        id="adminNewEmail" placeholder="Entrez le nouvel email">
                    @error('new_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <hr class="my-4">

                <h5 class="mb-3">Changer le Mot de Passe</h5>
                <div class="form-group">
                    <label for="adminCurrentPassword">Mot de Passe Actuel (Obligatoire pour changer email ou mot de
                        passe)</label>
                    <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                        name="current_password" id="adminCurrentPassword">
                    @error('current_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="adminNewPassword">Nouveau Mot de Passe (Optionnel)</label>
                    <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                        name="new_password" id="adminNewPassword">
                    @error('new_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="adminNewPasswordConfirmation">Confirmer le Nouveau Mot de Passe</label>
                    <input type="password" class="form-control" name="new_password_confirmation"
                        id="adminNewPasswordConfirmation">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Mettre à Jour le Profil</button>
            </form>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const phoneNumbersContainer = document.getElementById('phone-numbers-container');
            const addPhoneButton = document.getElementById('add-phone-button');

            function addPhoneInputGroup(key = '', value = '') {
                const newGroup = document.createElement('div');
                newGroup.className = 'phone-input-group d-flex mb-2';
                newGroup.innerHTML = `
                    <input type="text" class="form-control" name="phone_keys[]"
                        placeholder="Clé (ex: Support)" value="${key}" style="width: 40%; margin-right: 5px;">
                    <input type="text" class="form-control" name="phone_values[]"
                        placeholder="Numéro (ex: +1234567890)" value="${value}" style="width: 40%;">
                    <button type="button" class="btn btn-danger btn-remove-phone ml-2"
                        style="width: 20%;">Supprimer</button>
                `;
                phoneNumbersContainer.appendChild(newGroup);
            }

            addPhoneButton.addEventListener('click', function() {
                addPhoneInputGroup();
            });

            phoneNumbersContainer.addEventListener('click', function(event) {
                if (event.target.classList.contains('btn-remove-phone')) {
                    event.target.closest('.phone-input-group').remove();
                }
            });
        });
    </script>
@endsection
