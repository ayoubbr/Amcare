<section id="pages" class="admin-section" style="display: none;">
    <h3>Gestion des Pages</h3>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Slug</th>
                    <th>Meta Titre</th>
                    <th>Description</th>
                    <th>Publié</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->title }}</td>
                        <td>{{ $page->slug }}</td>
                        <td>{{ $page->meta_title }}</td>
                        <td>
                            @if(is_array($page->description))
                                @foreach($page->description as $index => $slide)
                                    <div>
                                        <strong>Slide {{ $index + 1 }} :</strong><br>
                                        <small><strong>Title:</strong> {{ $slide['title'] ?? '-' }}</small><br>
                                        <small><strong>Description:</strong> {{ $slide['description'] ?? '-' }}</small><br>
                                        <small><strong>Logo:</strong> {!! $slide['logo'] ?? '-' !!}</small><br>
                                        <hr>
                                    </div>
                                @endforeach
                            @else
                                @php
                                    $slides = json_decode($page->description, true);
                                @endphp
                                @if(is_array($slides))
                                    @foreach($slides as $index => $slide)
                                        <div>
                                            <strong>Slide {{ $index + 1 }} :</strong><br>
                                            <small><strong>Title:</strong> {{ $slide['title'] ?? '-' }}</small><br>
                                            <small><strong>Description:</strong> {{ $slide['description'] ?? '-' }}</small><br>
                                            <small><strong>Logo:</strong> {!! $slide['logo'] ?? '-' !!}</small><br>
                                            <hr>
                                        </div>
                                    @endforeach
                                @else
                                    <em>Pas de slides</em>
                                @endif
                            @endif
                        </td>
                        <td>{{ $page->is_published ? 'Oui' : 'Non' }}</td>
                        <td>
                            <button class="btn btn-sm btn-primary edit-page-btn"
                                data-id="{{ $page->id }}"
                                data-title="{{ $page->title }}"
                                data-slug="{{ $page->slug }}"
                                data-meta_title="{{ $page->meta_title }}"
                                data-description='@json($page->description)'>
                                Modifier
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Aucune page trouvée</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="modal" id="editPageModal" style="display:none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editPageForm" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="modal-header">
                        <h5 class="modal-title">Modifier la Page</h5>
                        <button type="button" class="close" onclick="closeModal()">&times;</button>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" name="id" id="pageId">

                        <div class="form-group">
                            <label>Titre</label>
                            <input type="text" name="title" id="pageTitle" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug" id="pageSlug" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Meta Titre</label>
                            <input type="text" name="meta_title" id="pageMetaTitle" class="form-control">
                        </div>

                        <div>
                            <label>Slides</label>
                            <div id="slidesContainer"></div>
                            <button type="button" class="btn btn-sm btn-primary mt-2" onclick="addSlide()">+ Ajouter un Slide</button>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                        <button type="button" class="btn btn-secondary" onclick="closeModal()">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let slideIndex = 0;

        function addSlide(slide = { title: '', description: '', logo: '' }) {
            const container = document.getElementById('slidesContainer');

            const slideHTML = `
                <div class="slide-group border p-2 mb-2" data-index="${slideIndex}">
                    <h6>Slide ${slideIndex + 1}</h6>
                    <div class="form-group">
                        <label>Titre</label>
                        <input type="text" name="description[${slideIndex}][title]" class="form-control" value="${slide.title}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description[${slideIndex}][description]" class="form-control">${slide.description}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Logo (balise img)</label>
                        <input type="text" name="description[${slideIndex}][logo]" class="form-control" value="${slide.logo}">
                    </div>
                    <button type="button" class="btn btn-sm btn-danger" onclick="removeSlide(this)">Supprimer</button>
                </div>
            `;

            container.insertAdjacentHTML('beforeend', slideHTML);
            slideIndex++;
        }

        function removeSlide(button) {
            const slideDiv = button.closest('.slide-group');
            slideDiv.remove();
        }

        function openEditModal(page) {
            document.getElementById('editPageModal').style.display = 'block';
            document.getElementById('editPageForm').action = `/admin/pages/${page.id}`;
            document.getElementById('pageId').value = page.id;
            document.getElementById('pageTitle').value = page.title;
            document.getElementById('pageSlug').value = page.slug;
            document.getElementById('pageMetaTitle').value = page.meta_title;

            const container = document.getElementById('slidesContainer');
            container.innerHTML = '';
            slideIndex = 0;

            if (Array.isArray(page.description)) {
                page.description.forEach(slide => addSlide(slide));
            }
        }

        function closeModal() {
            document.getElementById('editPageModal').style.display = 'none';
        }

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.edit-page-btn').forEach(button => {
                button.addEventListener('click', function () {
                    const page = {
                        id: this.getAttribute('data-id'),
                        title: this.getAttribute('data-title'),
                        slug: this.getAttribute('data-slug'),
                        meta_title: this.getAttribute('data-meta_title'),
                        description: JSON.parse(this.getAttribute('data-description') || '[]')
                    };
                    openEditModal(page);
                });
            });
        });
    </script>

</section>
