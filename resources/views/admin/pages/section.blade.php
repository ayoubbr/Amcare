<section id="pages" class="admin-section" style="display: none;">
    <h3>Gestion des Pages</h3>
    <a href="{{ route('admin.pages.create') }}" class="btn-add-new">Ajouter une nouvelle page</a>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Slug</th>
                    <th>Meta Titre</th>
                    <th>Publié</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pages ?? [] as $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td>{{ $page->title }}</td>
                    <td>{{ $page->slug }}</td>
                    <td>{{ $page->meta_title }}</td>
                    <td>{{ $page->description }}</td>
                    <td>{{ $page->is_published ? 'Oui' : 'Non' }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-edit">Modifier</a>
                        <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette page?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Aucune page trouvée</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>  