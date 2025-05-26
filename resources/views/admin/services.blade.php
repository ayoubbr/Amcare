@extends('admin.layout')
@section('title', 'Services')
@section('content')
    <section id="services" class="admin-section">
        <h3>Gestion des Services</h3>
        <button class="btn-add-new" data-target-form="service-form">Ajouter un nouveau service</button>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Description Courte</th>
                        <th>Publié</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        @php
                            $imagePath = $service->image;
                            $imageUrl = null;
                            $defaultImageUrl = asset('assets/images/service/service-1.jpg');

                            if ($imagePath) {
                                if (Illuminate\Support\Str::startsWith($imagePath, 'assets/seed_images/')) {
                                    $imageUrl = asset($imagePath);
                                } else {
                                    $imageUrl = Storage::url($imagePath);
                                }
                            }
                        @endphp

                        <tr data-entity="services" data-id="{{ $service->id }}" data-title="{{ $service->title }}"
                            data-short-description="{{ $service->short_description }}" data-content="{{ $service->content }}"
                            data-image="{{ $imageUrl ?? $defaultImageUrl }}" data-order="{{ $service->order }}"
                            data-is-published="{{ $service->is_published ? 'true' : 'false' }}">
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ Str::limit($service->short_description, 50) }}</td>
                            <td>{{ $service->is_published ? 'Oui' : 'Non' }}</td>
                            <td class="action-buttons">
                                <button class="btn btn-edit">Modifier</button>
                                <button class="btn btn-delete">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="form-section mt-4" style="display: none;" id="service-form">
            <h4>Ajouter/Modifier Service</h4>
            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="serviceId"> {{-- For updates --}}
                <div class="form-group">
                    <label for="serviceTitle">Titre</label>
                    <input type="text" class="form-control" name="title" id="serviceTitle"
                        placeholder="Entrez le titre du service" required>
                </div>
                <div class="form-group">
                    <label for="serviceShortDescription">Description Courte</label>
                    <textarea class="form-control" name="short_description" id="serviceShortDescription" rows="2"
                        placeholder="Entrez une courte description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="serviceContent">Contenu Complet</label>
                    <textarea class="form-control" name="content" id="serviceContent" rows="5"
                        placeholder="Entrez le contenu complet du service" required></textarea>
                </div>
                <div class="form-group">
                    <label for="serviceImage">Image</label>
                    <input type="file" class="form-control" name="image" id="serviceImage">
                    <img id="currentServiceImage" src="#" alt="Image actuelle" class="current-image-preview"
                        style="display:none;">
                </div>
                <div class="form-group">
                    <label for="serviceOrder">Ordre d'affichage</label>
                    <input type="number" class="form-control" name="order" id="serviceOrder" value="0">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="is_published" id="serviceIsPublished"
                        value="1">
                    <label class="form-check-label" for="serviceIsPublished">Publié</label>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
            </form>
        </div>
    </section>
@endsection
