@extends('admin.layout')
@section('title', 'Paramètres') {{-- Changed title slightly for brevity --}}
@section('content')
    {{-- Existing Site Settings Section --}}
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
                </div>
                <div class="form-group">
                    <label for="siteEmail">Email (Contact Principal)</label>
                    <input type="email" class="form-control" name="email" id="siteEmail"
                        placeholder="Entrez l'adresse email de contact" value="{{ old('email', $settings->email ?? '') }}">
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="siteLogo" class="mb-0 mr-3">Logo</label>
                    @if ($settings && $settings->logo)
                        <img src="{{ Storage::url($settings->logo) }}" alt="Logo actuel" class="img-thumbnail mr-3"
                            style="max-height: 80px;">
                        <a href="{{ Storage::url($settings->logo) }}" target="_blank" class="btn btn-sm btn-info mr-2">Voir
                            actuel</a>
                    @else
                        <span class="text-muted mr-3">Aucun logo actuel</span>
                    @endif
                    <input type="file" class="form-control-file" name="logo" id="siteLogo">
                </div>

                <div class="form-group">
                    <label>Numéros de Téléphone (Contact)</label>
                    <div id="phone-numbers-container">
                        @if (old('phone_keys'))
                            @foreach (old('phone_keys') as $index => $key)
                                <div class="phone-input-group">
                                    <input type="text" class="form-control" name="phone_keys[]"
                                        placeholder="Clé (ex: Support)" value="{{ $key }}" style="width: 40%;">
                                    <input type="text" class="form-control" name="phone_values[]"
                                        placeholder="Numéro (ex: +1234567890)"
                                        value="{{ old('phone_values')[$index] ?? '' }}" style="width: 40%;">
                                    <button type="button" class="btn btn-danger btn-remove-phone"
                                        style="width: 20%;">Supprimer</button>
                                </div>
                            @endforeach
                        @elseif ($settings && $settings->phones)
                            @foreach ($settings->phones as $key => $value)
                                <div class="phone-input-group">
                                    <input type="text" class="form-control" name="phone_keys[]"
                                        placeholder="Clé (ex: Support)" value="{{ $key }}" style="width: 40%;">
                                    <input type="text" class="form-control" name="phone_values[]"
                                        placeholder="Numéro (ex: +1234567890)" value="{{ $value }}"
                                        style="width: 40%;">
                                    <button type="button" class="btn btn-danger btn-remove-phone"
                                        style="width: 20%;">Supprimer</button>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <button type="button" id="add-phone-button" class="btn btn-info mt-2">Ajouter un
                        numéro</button>
                </div>

                <div class="form-group">
                    <label for="siteAddress">Addresse</label>
                    <textarea class="form-control" name="address" id="siteAddress" rows="2" placeholder="Entrez l'addresse">{{ old('address', $settings->address ?? '') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="siteFooterText">Texte de Pied de Page</label>
                    <textarea class="form-control" name="footer_text" id="siteFooterText" rows="2"
                        placeholder="Entrez le texte du pied de page">{{ old('footer_text', $settings->footer_text ?? '') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer les Paramètres du Site</button>
            </form>
        </div>
    </section>

    <hr class="my-5">

    {{-- New Admin Profile Section --}}
    <section id="admin-profile-settings" class="admin-section">
        <h3>Gérer Mon Profil</h3>
        <div class="setting-form-container mt-4">
            <h4>Informations Personnelles et Sécurité</h4>
            <form action="{{ route('admin.profile.update') }}" method="POST">
                @csrf
                @method('PUT') {{-- Using PUT for update is conventional --}}

                {{-- Display Current Admin Email --}}
                <div class="form-group">
                    <label for="adminCurrentEmail">Email Actuel</label>
                    <input type="email" class="form-control" id="adminCurrentEmail" value="{{ auth()->user()->email }}"
                        readonly>
                </div>

                {{-- Change Email --}}
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

                {{-- Change Password --}}
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
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const phoneContainer = document.getElementById('phone-numbers-container');
            const addPhoneButton = document.getElementById('add-phone-button');

            if (addPhoneButton) {
                addPhoneButton.addEventListener('click', function() {
                    addPhoneNumberField('');
                });
            }

            function addPhoneNumberField(key = '', value = '') {
                const div = document.createElement('div');
                div.classList.add('phone-input-group');
                div.innerHTML = `
                <input type="text" class="form-control" name="phone_keys[]" placeholder="Clé (ex: Support)" value="${key}" style="width: 40%;">
                <input type="text" class="form-control" name="phone_values[]" placeholder="Numéro (ex: +1234567890)" value="${value}" style="width: 40%;">
                <button type="button" class="btn btn-danger btn-remove-phone" style="width: 20%;">Supprimer</button>
            `;
                if (phoneContainer) {
                    phoneContainer.appendChild(div);
                    div.querySelector('.btn-remove-phone').addEventListener('click', function() {
                        this.closest('.phone-input-group').remove();
                    });
                }
            }

            // Initialize existing phone number removal buttons
            if (phoneContainer) {
                phoneContainer.querySelectorAll('.btn-remove-phone').forEach(button => {
                    button.addEventListener('click', function() {
                        this.closest('.phone-input-group').remove();
                    });
                });
            }
        });
    </script>
@endpush
