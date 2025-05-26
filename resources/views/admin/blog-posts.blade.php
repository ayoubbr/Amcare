@extends('admin.layout')
@section('title', 'Articles de Blog')
@section('content')
    <section id="blog-posts" class="admin-section">
        <h3>Gestion des Articles de Blog</h3>
        <button class="btn-add-new" data-target-form="blog-post-form">Ajouter un nouvel article</button>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Slug</th>
                        <th>Catégorie</th>
                        <th>Publié</th>
                        <th>Date de publication</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr data-entity="blog-posts" data-id="{{ $post->id }}" data-title="{{ $post->title }}"
                            data-slug="{{ $post->slug }}" data-category-id="{{ $post->category_id }}"
                            data-category-name="{{ $post->category->name ?? 'N/A' }}"
                            data-is-published="{{ $post->is_published ? 'true' : 'false' }}"
                            data-published-at="{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('Y-m-d\TH:i') : '' }}"
                            data-content="{{ $post->content }}"
                            data-image="{{ $post->image ? Storage::url($post->image) : '' }}">
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->category->name ?? 'N/A' }}</td>
                            <td>{{ $post->is_published ? 'Oui' : 'Non' }}</td>
                            <td>{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('d/m/Y') : 'N/A' }}
                            </td>
                            <td class="action-buttons">
                                <button class="btn btn-edit">Modifier</button>
                                <button class="btn btn-delete">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="form-section mt-4" style="display: none;" id="blog-post-form">
            <h4>Ajouter/Modifier Article de Blog</h4>
            <form action="{{ route('admin.blog-posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="blogPostId"> {{-- For updates --}}
                <div class="form-group">
                    <label for="blogPostTitle">Titre</label>
                    <input type="text" class="form-control" name="title" id="blogPostTitle"
                        placeholder="Entrez le titre de l'article" required>
                </div>
                <div class="form-group">
                    <label for="blogPostContent">Contenu</label>
                    <textarea class="form-control" name="content" id="blogPostContent" rows="5"
                        placeholder="Entrez le contenu de l'article"></textarea>
                </div>
                <div class="form-group">
                    <label for="blogPostImage">Image</label>
                    <input type="file" class="form-control" name="image" id="blogPostImage">
                    <img id="currentBlogPostImage" src="#" alt="Image actuelle" class="current-image-preview"
                        style="display:none;">
                </div>
                <div class="form-group">
                    <label for="blogPostCategory">Catégorie</label>
                    <select class="form-control" name="category_id" id="blogPostCategory" required>
                        <option value="">Sélectionner une catégorie</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="is_published" id="blogPostIsPublished"
                        value="1">
                    <label class="form-check-label" for="blogPostIsPublished">Publié</label>
                </div>
                <div class="form-group">
                    <label for="blogPostPublishedAt">Date de publication (optionnel)</label>
                    <input type="datetime-local" class="form-control" name="published_at" id="blogPostPublishedAt">
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
            </form>
        </div>
    </section>
@endsection
