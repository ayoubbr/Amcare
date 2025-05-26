@extends('admin.layout')
@section('title', 'Zones')
@section('content')
    <section id="zones" class="admin-section">
        <h3>Gestion des Zones</h3>
        <button class="btn-add-new" data-target-form="zone-form">Ajouter une nouvelle zone</button>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Code</th>
                        <th>Description</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($zones as $zone)
                        <tr data-entity="zones" data-id="{{ $zone->id }}" data-name="{{ $zone->name }}"
                            data-code="{{ $zone->code ?? '' }}" data-description="{{ $zone->description ?? '' }}"
                            data-is-active="{{ $zone->is_active ? 'true' : 'false' }}">
                            <td>{{ $zone->id }}</td>
                            <td>{{ $zone->name }}</td>
                            <td>{{ $zone->code ?? 'N/A' }}</td>
                            <td>{{ Str::limit($zone->description, 50) ?? 'N/A' }}</td>
                            <td>{{ $zone->is_active ? 'Oui' : 'Non' }}</td>
                            <td class="action-buttons">
                                <button class="btn btn-edit">Modifier</button>
                                <button class="btn btn-delete">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="form-section mt-4" style="display: none;" id="zone-form">
            <h4>Ajouter/Modifier Zone</h4>
            <form action="{{ route('admin.zones.store') }}" method="POST">
                @csrf
                <input type="hidden" name="id" id="zoneId"> {{-- For updates --}}
                <div class="form-group">
                    <label for="zoneName">Nom</label>
                    <input type="text" class="form-control" name="name" id="zoneName"
                        placeholder="Entrez le nom de la zone" required>
                </div>
                <div class="form-group">
                    <label for="zoneCode">Code</label>
                    <input type="text" class="form-control" name="code" id="zoneCode"
                        placeholder="Entrez le code de la zone (ex: LA, NY)">
                </div>
                <div class="form-group">
                    <label for="zoneDescription">Description</label>
                    <textarea class="form-control" name="description" id="zoneDescription" rows="3"
                        placeholder="Entrez une description de la zone"></textarea>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="is_active" id="zoneIsActive" value="1">
                    <label class="form-check-label" for="zoneIsActive">Active</label>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
            </form>
        </div>
    </section>
@endsection
