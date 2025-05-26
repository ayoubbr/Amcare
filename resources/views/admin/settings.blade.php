@extends('admin.layout')
@section('title', 'Paramètres du Site')
@section('content')
    {{-- Settings Section (Existing) --}}
    <section id="settings" class="admin-section">
        <h3>Paramètres du Site</h3>
        <div class="setting-form-container mt-4">
            <h4>Gérer les Paramètres Généraux</h4>
            <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $settings->id ?? '' }}">
                <div class="form-group">
                    <label for="siteName">Nom du Site</label>
                    <input type="text" class="form-control" name="site_name" id="siteName"
                        placeholder="Entrez le nom du site" value="{{ old('site_name', $settings->site_name ?? '') }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="siteEmail">Email</label>
                    <input type="email" class="form-control" name="email" id="siteEmail"
                        placeholder="Entrez l'adresse email" value="{{ old('email', $settings->email ?? '') }}">
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
                    <label>Numéros de Téléphone</label>
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
                <button type="submit" class="btn btn-primary">Enregistrer les Paramètres</button>
            </form>
        </div>
    </section>
@endsection
