@extends('admin.layout')
@section('title', 'Slider images')
@section('content')
    <section id="slider-images" class="admin-section">
        <h3>Gestion des Images du Slider</h3>
        <button class="btn-add-new" data-target-form="slider-image-form">Ajouter une nouvelle image de
            slider</button>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Titre</th>
                        <th>Ordre</th>
                        <th>Publié</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sliderImages as $sliderImage)
                        <tr data-entity="slider-images" data-id="{{ $sliderImage->id }}"
                            data-image-path="{{ $sliderImage->image_path ? Storage::url($sliderImage->image_path) : '' }}"
                            data-title="{{ $sliderImage->title ?? '' }}" data-subtitle="{{ $sliderImage->subtitle ?? '' }}"
                            {{-- Assuming subtitle exists --}} data-description="{{ $sliderImage->description ?? '' }}"
                            {{-- Assuming description exists --}} data-order="{{ $sliderImage->order }}"
                            data-is-published="{{ $sliderImage->is_published ? 'true' : 'false' }}">
                            <td>{{ $sliderImage->id }}</td>
                            <td>
                                @if ($sliderImage->image_path)
                                    <img src="{{ Storage::url($sliderImage->image_path) }}" alt="Slider Image"
                                        style="max-height: 50px;">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{ $sliderImage->title ?? 'N/A' }}</td>
                            <td>{{ $sliderImage->order }}</td>
                            <td>{{ $sliderImage->is_published ? 'Oui' : 'Non' }}</td>
                            <td class="action-buttons">
                                <button class="btn btn-edit">Modifier</button>
                                <button class="btn btn-delete">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="form-section mt-4" style="display: none;" id="slider-image-form">
            <h4>Ajouter/Modifier Image de Slider</h4>
            <form action="{{ route('admin.slider-images.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="sliderImageId"> {{-- For updates --}}
                <div class="form-group">
                    <label for="sliderImageFile">Fichier Image</label>
                    <input type="file" class="form-control" name="image_path" id="sliderImageFile">
                    <img id="currentSliderImage" src="#" alt="Image actuelle" class="current-image-preview"
                        style="display:none;">
                </div>
                <div class="form-group">
                    <label for="sliderImageTitle">Titre</label>
                    <input type="text" class="form-control" name="title" id="sliderImageTitle"
                        placeholder="Titre principal du slider">
                </div>
                <div class="form-group">
                    <label for="sliderImageOrder">Ordre d'affichage</label>
                    <input type="number" class="form-control" name="order" id="sliderImageOrder" value="0">
                </div>
                <input type="hidden" name="is_published" value="0">
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="is_published" id="sliderImageIsPublished"
                        value="1">
                    <label class="form-check-label" for="sliderImageIsPublished">Publié</label>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
            </form>
        </div>
    </section>
@endsection
