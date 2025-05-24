@extends('admin.layout')
@section('content')
    {{-- Pages Section --}}
    <section id="pages" class="admin-section">
        <h3>Gestion des Pages</h3>
        {{-- No "Add New" button as per request --}}
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Slug</th>
                        <th>Publiée</th>
                        <th>Dernière modification</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pages as $page)
                        <tr data-entity="pages" data-id="{{ $page->id }}" data-title="{{ $page->title }}"
                            data-slug="{{ $page->slug }}" data-content="{{ $page->content }}"
                            data-meta-title="{{ $page->meta_title ?? '' }}"
                            data-meta-description="{{ $page->meta_description ?? '' }}"
                            data-description='@json($page->description ?? [])' {{-- Pass as JSON string --}}
                            data-image-path="{{ $page->image ? Storage::url($page->image) : '' }}"
                            data-is-published="{{ $page->is_published ? 'true' : 'false' }}">
                            <td>{{ $page->id }}</td>
                            <td>{{ $page->title }}</td>
                            <td>/{{ $page->slug }}</td>
                            <td>{{ $page->is_published ? 'Oui' : 'Non' }}</td>
                            <td>{{ $page->updated_at->format('d/m/Y H:i') }}</td>
                            <td class="action-buttons">
                                <button class="btn btn-edit">Modifier</button>
                                {{-- No delete button as per request --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Aucune page trouvée.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
