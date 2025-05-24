@extends('admin.layout')

@section('content')
    <section id="partners" class="admin-section">
        <h3>Gestion des Partenaires</h3>
        <button class="btn-add-new" data-target-form="partner-form">Ajouter un nouveau partenaire</button>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Logo</th>
                        <th>URL du Site Web</th>
                        <th>Ordre</th>
                        <th>Publié</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partners as $partner)
                        <tr data-entity="partners" data-id="{{ $partner->id }}" data-name="{{ $partner->name }}"
                            data-logo-path="{{ $partner->logo_path ? Storage::url($partner->logo_path) : '' }}"
                            data-website-url="{{ $partner->website_url ?? '' }}" data-order="{{ $partner->order }}"
                            data-is-published="{{ $partner->is_published ? 'true' : 'false' }}">
                            <td>{{ $partner->id }}</td>
                            <td>{{ $partner->name }}</td>
                            <td>
                                @if ($partner->logo_path)
                                    <img src="{{ Storage::url($partner->logo_path) }}" alt="Partner Logo"
                                        style="max-height: 50px;">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td><a href="{{ $partner->website_url ?? '#' }}"
                                    target="_blank">{{ Str::limit($partner->website_url, 30) ?? 'N/A' }}</a>
                            </td>
                            <td>{{ $partner->order }}</td>
                            <td>{{ $partner->is_published ? 'Oui' : 'Non' }}</td>
                            <td class="action-buttons">
                                <button class="btn btn-edit">Modifier</button>
                                <button class="btn btn-delete">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="form-section mt-4" style="display: none;" id="partner-form">
            <h4>Ajouter/Modifier Partenaire</h4>
            <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="partnerId"> {{-- For updates --}}
                <div class="form-group">
                    <label for="partnerName">Nom du Partenaire</label>
                    <input type="text" class="form-control" name="name" id="partnerName"
                        placeholder="Nom du partenaire" required>
                </div>
                <div class="form-group">
                    <label for="partnerLogo">Logo du Partenaire</label>
                    <input type="file" class="form-control" name="logo_path" id="partnerLogo">
                    <img id="currentPartnerLogo" src="#" alt="Logo actuel" class="current-image-preview"
                        style="display:none;">
                </div>
                <div class="form-group">
                    <label for="partnerWebsiteUrl">URL du Site Web</label>
                    <input type="url" class="form-control" name="website_url" id="partnerWebsiteUrl"
                        placeholder="Ex: https://www.example.com">
                </div>
                <div class="form-group">
                    <label for="partnerOrder">Ordre d'affichage</label>
                    <input type="number" class="form-control" name="order" id="partnerOrder" value="0">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="is_published" id="partnerIsPublished"
                        value="1">
                    <label class="form-check-label" for="partnerIsPublished">Publié</label>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
            </form>
        </div>
    </section>
@endsection
