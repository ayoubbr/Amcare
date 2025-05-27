@extends('admin.layout')
@section('title', 'Pages')
@section('content')
    <section id="pages" class="admin-section">
        <h3>Gestion des Pages</h3>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Slug</th>
                        <th>Titre principal</th>
                        <th>Publiée</th>
                        <th>Dernière modification</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pages as $page)
                        @php
                            $imagePath = $page->image;
                            $imageUrl = null;
                            $defaultImageUrl = asset('assets/images/resource/about-1.jpg');

                            if ($imagePath) {
                                if (Illuminate\Support\Str::startsWith($imagePath, 'assets/seed_images/')) {
                                    $imageUrl = asset($imagePath);
                                } else {
                                    $imageUrl = Storage::url($imagePath);
                                }
                            }
                        @endphp
                        <tr data-entity="pages" data-id="{{ $page->id }}" data-title="{{ $page->title }}"
                            data-slug="{{ $page->slug }}" data-content="{{ $page->content }}"
                            data-main-title="{{ $page->main_title ?? '' }}" data-meta-title="{{ $page->meta_title ?? '' }}"
                            data-meta-description="{{ $page->meta_description ?? '' }}"
                            data-description='@json($page->description ?? [])' {{-- Pass as JSON string --}}
                            data-image-path="{{ $imageUrl ?? $defaultImageUrl }}"
                            data-is-published="{{ $page->is_published ? 'true' : 'false' }}">
                            <td>{{ $page->id }}</td>
                            <td>{{ $page->title }}</td>
                            <td>/{{ $page->slug }}</td>
                            <td>{{ $page->main_title }}</td>
                            <td>{{ $page->is_published ? 'Oui' : 'Non' }}</td>
                            <td>{{ $page->updated_at->format('d/m/Y H:i') }}</td>
                            <td class="action-buttons">
                                <button class="btn btn-edit">Modifier</button>
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
