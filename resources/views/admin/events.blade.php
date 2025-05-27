@extends('admin.layout')
@section('title', 'Événements')
@section('content')
    <section id="events" class="admin-section">
        <h3>Gestion des Événements</h3>
        <button class="btn-add-new" data-target-form="event-form">Ajouter un nouvel événement</button>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Slug</th>
                        <th>Date de l'événement</th>
                        <th>Lieu</th>
                        <th>Publié</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        @php
                            $imagePath = $event->image;
                            $imageUrl = null;
                            $defaultImageUrl = asset('assets/images/resource/event-1.jpg');

                            if ($imagePath) {
                                if (Illuminate\Support\Str::startsWith($imagePath, 'assets/seed_images/')) {
                                    $imageUrl = asset($imagePath);
                                } else {
                                    $imageUrl = Storage::url($imagePath);
                                }
                            }
                        @endphp
                        <tr data-entity="events" data-id="{{ $event->id }}" data-title="{{ $event->title }}"
                            data-slug="{{ $event->slug }}"
                            data-event-date="{{ $event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('Y-m-d\TH:i') : '' }}"
                            data-location="{{ $event->location ?? '' }}"
                            data-is-published="{{ $event->is_published ? 'true' : 'false' }}"
                            data-content="{{ $event->content }}" data-image="{{ $imageUrl ?? $defaultImageUrl }}">
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->title }}</td>
                            <td><img src="{{ $imageUrl ?? $defaultImageUrl }}" alt="{{ $event->title }}" width="100px"></td>
                            <td>{{ $event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('Y-m-d H:i') : 'N/A' }}
                            </td>
                            <td>{{ $event->location ?? 'N/A' }}</td>
                            <td>{{ $event->is_published ? 'Oui' : 'Non' }}</td>
                            <td class="action-buttons">
                                <button class="btn btn-edit">Modifier</button>
                                <button class="btn btn-delete">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="form-section mt-4" style="display: none;" id="event-form">
            <h4>Ajouter/Modifier Événement</h4>
            <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="eventId">
                <div class="form-group">
                    <label for="eventTitle">Titre de l'événement</label>
                    <input type="text" class="form-control" name="title" id="eventTitle" placeholder="Entrez le titre"
                        required>
                </div>
                <div class="form-group">
                    <label for="eventContent">Contenu</label>
                    <textarea class="form-control" name="content" id="eventContent" rows="5"
                        placeholder="Entrez le contenu de l'événement"></textarea>
                </div>
                <div class="form-group">
                    <label for="eventDate">Date et Heure de l'événement</label>
                    <input type="datetime-local" class="form-control" name="event_date" id="eventDate" required>
                </div>
                <div class="form-group">
                    <label for="eventLocation">Lieu</label>
                    <input type="text" class="form-control" name="location" id="eventLocation"
                        placeholder="Entrez le lieu">
                </div>
                <div class="form-group">
                    <label for="eventImage">Image</label>
                    <input type="file" class="form-control" name="image" id="eventImage">
                    <img id="currentEventImage" src="#" alt="Image actuelle" class="current-image-preview"
                        style="display:none;">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="is_published" id="eventIsPublished"
                        value="1">
                    <label class="form-check-label" for="eventIsPublished">Publié</label>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
            </form>
        </div>
    </section>
@endsection
