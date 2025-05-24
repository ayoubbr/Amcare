@extends('admin.layout')

@section('content')
    <section id="categories" class="admin-section">
        <h3>Gestion des Catégories</h3>
        <button class="btn-add-new" data-target-form="category-form">Ajouter une nouvelle
            catégorie</button>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr data-entity="categories" data-id="{{ $category->id }}" data-name="{{ $category->name }}"
                            data-slug="{{ $category->slug }}">
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td class="action-buttons">
                                <button class="btn btn-edit">Modifier</button>
                                <button class="btn btn-delete">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="form-section mt-4" style="display: none;" id="category-form">
            <h4>Ajouter/Modifier Catégorie</h4>
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <input type="hidden" name="id" id="categoryId"> {{-- For updates --}}
                <div class="form-group">
                    <label for="categoryName">Nom</label>
                    <input type="text" class="form-control" name="name" id="categoryName"
                        placeholder="Entrez le nom de la catégorie" required>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
            </form>
        </div>
    </section>
@endsection
