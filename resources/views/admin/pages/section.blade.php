<section id="pages" class="admin-section" style="display: none;">
    <h3>Gestion des Pages</h3>
    <button class="btn-add-new">Ajouter une nouvelle page</button>
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
                @foreach($pages ?? [] as $page)
                <tr data-entity="page" 
                    data-id="{{ $page->id }}" 
                    data-title="{{ $page->title }}"
                    data-slug="{{ $page->slug }}" 
                    data-content="{{ $page->content }}"
                    data-meta-title="{{ $page->meta_title }}" 
                    data-description="{{ $page->description }}"
                    data-image="{{ $page->image }}" 
                    data-is-published="{{ $page->is_published ? 'true' : 'false' }}">
                    <td>{{ $page->id }}</td>
                    <td>{{ $page->title }}</td>
                    <td>{{ $page->slug }}</td>
                    <td>{{ $page->meta_title }}</td>
                    <td>{{ $page->is_published ? 'Oui' : 'Non' }}</td>
                    <td class="action-buttons">
                        <button class="btn btn-edit">Modifier</button>
                        <button class="btn btn-delete">Supprimer</button>
                    </td>
                </tr>
                @endforeach
                <!-- Exemple de données statiques pour la démonstration -->
                <tr data-entity="page" 
                    data-id="1" 
                    data-title="À propos de nous"
                    data-slug="a-propos-de-nous" 
                    data-content="<p>Contenu de la page À propos...</p>"
                    data-meta-title="À propos de Amcare" 
                    data-description="En savoir plus sur notre service d'ambulance"
                    data-image="about.jpg" 
                    data-is-published="true">
                    <td>1</td>
                    <td>À propos de nous</td>
                    <td>a-propos-de-nous</td>
                    <td>À propos de Amcare</td>
                    <td>Oui</td>
                    <td class="action-buttons">
                        <button class="btn btn-edit">Modifier</button>
                        <button class="btn btn-delete">Supprimer</button>
                    </td>
                </tr>
                <tr data-entity="page" 
                    data-id="2" 
                    data-title="Foire Aux Questions"
                    data-slug="faq" 
                    data-content="<p>Contenu de la page FAQ...</p>"
                    data-meta-title="FAQ - Amcare" 
                    data-description="Réponses aux questions fréquemment posées"
                    data-image="faq.jpg" 
                    data-is-published="true">
                    <td>2</td>
                    <td>Foire Aux Questions</td>
                    <td>faq</td>
                    <td>FAQ - Amcare</td>
                    <td>Oui</td>
                    <td class="action-buttons">
                        <button class="btn btn-edit">Modifier</button>
                        <button class="btn btn-delete">Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="form-section mt-4" style="display: none;">
        <h4>Ajouter/Modifier une Page</h4>
        <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="POST" id="pageFormMethod">
            <input type="hidden" name="id" id="pageId">
            
            <div class="form-group">
                <label for="pageTitle">Titre</label>
                <input type="text" class="form-control" id="pageTitle" name="title" placeholder="Entrez le titre de la page" required>
            </div>
            
            <div class="form-group">
                <label for="pageContent">Contenu</label>
                <textarea class="form-control" id="pageContent" name="content" rows="10" placeholder="Entrez le contenu HTML de la page" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="pageMetaTitle">Meta Titre (SEO)</label>
                <input type="text" class="form-control" id="pageMetaTitle" name="meta_title" placeholder="Entrez le meta titre pour le SEO">
            </div>
            
            <div class="form-group">
                <label for="pageDescription">Description (SEO)</label>
                <textarea class="form-control" id="pageDescription" name="description" rows="3" placeholder="Entrez la description pour le SEO"></textarea>
            </div>
            
            <div class="form-group">
                <label for="pageImage">Image d'en-tête</label>
                <input type="file" class="form-control" id="pageImage" name="image">
                <div id="currentImageContainer" style="display: none; margin-top: 10px;">
                    <p>Image actuelle: <span id="currentImageName"></span></p>
                </div>
            </div>
            
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="pageIsPublished" name="is_published" value="1">
                <label class="form-check-label" for="pageIsPublished">Publié</label>
            </div>
            
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
        </form>
    </div>
</section>
