<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title') - {{ $settings->site_name ?? 'Amcare' }} </title>

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elpath.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- TinyMCE CDN --}}
    <script src="https://cdn.tiny.cloud/1/q9ypn617foqxxvh27h597ji1xh18rygt22durn56hhd6wsfw/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>


    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 30px;
            border: 1px solid #888;
            width: 80%;
            max-width: 700px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .modal-header {
            padding-bottom: 15px;
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h2 {
            margin: 0;
            color: var(--title-color);
            font-size: 1.8rem;
        }

        .close-button {
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-button:hover,
        .close-button:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-body .form-group {
            margin-bottom: 15px;
        }

        .modal-body .form-group label {
            font-weight: 600;
        }

        .modal-footer {
            padding-top: 20px;
            border-top: 1px solid #eee;
            margin-top: 20px;
            text-align: right;
        }

        .modal-footer button {
            margin-left: 10px;
        }

        .delete-confirmation-modal .modal-content {
            max-width: 450px;
            text-align: center;
        }

        .delete-confirmation-modal .modal-body p {
            font-size: 1.1rem;
            margin-bottom: 25px;
            color: var(--text-color);
        }

        .delete-confirmation-modal .modal-footer {
            display: flex;
            justify-content: center;
            border-top: none;
            padding-top: 0;
            margin-top: 0;
        }

        .delete-confirmation-modal .modal-footer button {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
        }

        .delete-confirmation-modal .btn-confirm-delete {
            background-color: var(--theme-color);
            color: #fff;
            border: none;
        }

        .delete-confirmation-modal .btn-confirm-delete:hover {
            background-color: #a5130d;
        }

        .delete-confirmation-modal .btn-cancel-delete {
            background-color: var(--bs-gray-400);
            color: #fff;
            border: none;
        }

        .delete-confirmation-modal .btn-cancel-delete:hover {
            background-color: var(--bs-gray-500);
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            text-align: center;
        }

        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }

        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }


        .phone-input-group,
        .description-item-group {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
            align-items: center;
        }

        .phone-input-group input,
        .description-item-group input {
            flex: 1;
        }

        .phone-input-group .btn-remove-phone,
        .description-item-group .btn-remove-item {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .phone-input-group .btn-remove-phone:hover,
        .description-item-group .btn-remove-item:hover {
            background-color: #c82333;
        }


        #settings .setting-form-container {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        #settings .setting-form-container h4 {
            margin-top: 0;
            margin-bottom: 25px;
            color: var(--title-color);
            font-size: 1.5rem;
            text-align: center;
        }

        #settings .form-group label {
            font-weight: 600;
            color: var(--title-color);
            margin-bottom: 8px;
            display: block;
        }

        #settings .form-group input[type="text"],
        #settings .form-group input[type="email"],
        #settings .form-group textarea,
        #settings .form-group input[type="file"] {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-size: 1rem;
            color: var(--text-color);
            transition: border-color 0.3s ease;
        }

        #settings .form-group input:focus,
        #settings .form-group textarea:focus {
            border-color: var(--theme-color);
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(var(--theme-color-rgb), .25);
        }

        #settings .btn-primary,
        #settings .btn-secondary {
            padding: 10px 25px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        #settings .btn-primary {
            background-color: var(--theme-color);
            color: #fff;
            border: none;
        }

        #settings .btn-primary:hover {
            background-color: #a5130d;
        }

        #settings .btn-secondary {
            background-color: #6c757d;
            color: #fff;
            border: none;
        }

        #settings .btn-secondary:hover {
            background-color: #5a6268;
        }

        #settings .form-group.d-flex {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #settings .form-group.d-flex img {
            max-height: 80px;
            border-radius: 5px;
            border: 1px solid #eee;
        }

        .current-image-preview {
            max-width: 150px;
            max-height: 100px;
            margin-top: 5px;
            border: 1px solid #ddd;
            padding: 5px;
            border-radius: 4px;
        }

        .remove-image-btn {
            font-size: 0.8em;
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <div class="boxed_wrapper ltr">

        <div class="loader-wrap">
            <div class="preloader">
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="a" class="letters-loading">a</span>
                            <span data-text-preloader="m" class="letters-loading">m</span>
                            <span data-text-preloader="b" class="letters-loading">b</span>
                            <span data-text-preloader="u" class="letters-loading">u</span>
                            <span data-text-preloader="l" class="letters-loading">l</span>
                            <span data-text-preloader="a" class="letters-loading">a</span>
                            <span data-text-preloader="n" class="letters-loading">n</span>
                            <span data-text-preloader="c" class="letters-loading">c</span>
                            <span data-text-preloader="e" class="letters-loading">e</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="admin-wrapper">
            <aside class="admin-sidebar">
                <h2>Tableau de Bord Admin</h2>
                <nav>
                    <ul>
                        <li><a href="{{ url('admin/settings') }}"
                                class="{{ request()->is('admin/settings') ? 'active' : '' }}">Paramètres du Site</a>
                        </li>
                        <li><a href="{{ url('admin/slider-images') }}"
                                class="{{ request()->is('admin/slider-images') ? 'active' : '' }}">Images du Slider</a>
                        </li>
                        <li><a href="{{ url('admin/partners') }}"
                                class="{{ request()->is('admin/partners') ? 'active' : '' }}">Partenaires</a></li>
                        <li><a href="{{ url('admin/faqs') }}"
                                class="{{ request()->is('admin/faqs') ? 'active' : '' }}">FAQs</a></li>
                        <li><a href="{{ url('admin/services') }}"
                                class="{{ request()->is('admin/services') ? 'active' : '' }}">Services</a></li>
                        <li><a href="{{ url('admin/pages') }}"
                                class="{{ request()->is('admin/pages') ? 'active' : '' }}">Pages</a></li>
                        <li><a href="{{ url('admin/zones') }}"
                                class="{{ request()->is('admin/zones') ? 'active' : '' }}">Zones</a></li>
                        <li><a href="{{ url('admin/events') }}"
                                class="{{ request()->is('admin/events') ? 'active' : '' }}">Événements</a></li>
                        <li><a href="{{ route('admin.extra-settings.index') }}"
                                class="{{ request()->routeIs('admin.extra-settings.index') ? 'active' : '' }}">Paramètres
                                Supp.</a>
                        </li>
                        <li><a href="{{ url('admin/categories') }}"
                                class="{{ request()->is('admin/categories') ? 'active' : '' }}">Catégories</a></li>
                        <li><a href="{{ url('admin/blog-posts') }}"
                                class="{{ request()->is('admin/blog-posts') ? 'active' : '' }}">Articles de Blog</a>
                        </li>

                        <li class="logout-item">
                            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                @csrf
                                <button type="submit" class="logout-button">
                                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                                </button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </aside>

            <main class="admin-content">
                <section class="page-title mb-4">
                    <h1>@yield('title', 'Gestion du Contenu')</h1>
                </section>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert"
                        onclick="this.style.display='none'">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oups !</strong> Quelques erreurs se sont produites :<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif

                @yield('content')

            </main>
        </div>

        {{-- Edit Modal (Generic) --}}
        <div id="editModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 id="modalTitle">Modifier l'élément</h2>
                    <span class="close-button">&times;</span>
                </div>
                <div class="modal-body">
                    <form id="modalForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        {{-- Content will be added by JS --}}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="modalCancel">Annuler</button>
                    <button type="submit" class="btn btn-primary" id="modalSave">Enregistrer</button>
                </div>
            </div>
        </div>

        {{-- Delete Confirmation Modal (Generic) --}}
        <div id="deleteConfirmationModal" class="modal delete-confirmation-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 id="deleteModalTitle">Confirmer la suppression</h2>
                    <span class="close-button" id="closeDeleteModalButton">&times;</span>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir supprimer cet élément ? Cette action est irréversible.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel-delete"
                        id="cancelDeleteButton">Annuler</button>
                    <button type="button" class="btn btn-primary btn-confirm-delete"
                        id="confirmDeleteButton">Supprimer</button>
                </div>
            </div>
        </div>

        @include('shared.js')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize TinyMCE if the textarea exists
                // Note: Replace #modalPageContent with the actual ID of the textarea when the modal is populated
                function initTinyMCE(selector) {
                    if (typeof tinymce !== 'undefined') {
                        tinymce.init({
                            selector: selector,
                            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                            height: 300,
                        });
                    } else {
                        console.warn('TinyMCE not loaded. Rich text editing will not be available.');
                    }
                }

                function destroyTinyMCE(selector) {
                    if (typeof tinymce !== 'undefined' && tinymce.get(selector.substring(1))) {
                        tinymce.remove(selector);
                    }
                }


                document.querySelectorAll('.admin-section .btn-add-new').forEach(button => {
                    button.addEventListener('click', function() {
                        const targetFormId = this.dataset.targetForm;
                        const formSection = document.getElementById(targetFormId);

                        // Hide all other forms in the same parent section
                        const parentAdminSection = this.closest('.admin-section');
                        parentAdminSection.querySelectorAll('.form-section').forEach(fs => {
                            if (fs.id !== targetFormId) {
                                fs.style.display = 'none';
                                // Reset its corresponding "Add New" button
                                const prevAddNewBtn = parentAdminSection.querySelector(
                                    `.btn-add-new[data-target-form="${fs.id}"]`);
                                if (prevAddNewBtn) prevAddNewBtn.style.display = 'inline-block';
                            }
                        });

                        // Clear form and set for "add new"
                        formSection.querySelector('form').reset();
                        formSection.querySelector('form').action = formSection.querySelector('form')
                            .action.replace(/\/\d+$/, ''); // Remove ID for store
                        if (formSection.querySelector('input[name="id"]')) {
                            formSection.querySelector('input[name="id"]').value = '';
                        }
                        if (formSection.querySelector('input[name="_method"]')) {
                            formSection.querySelector('input[name="_method"]').value = 'POST';
                        } else {
                            // ensure _method is not present for POST
                        }
                        // Clear current image previews
                        formSection.querySelectorAll('.current-image-preview').forEach(img => {
                            img.style.display = 'none';
                            img.src = '#';
                        });


                        formSection.style.display = 'block';
                        this.style.display = 'none';
                    });
                });

                document.querySelectorAll('.admin-section .cancel-form').forEach(button => {
                    button.addEventListener('click', function() {
                        const formSection = this.closest('.form-section');
                        formSection.style.display = 'none';
                        const parentSection = formSection.closest('.admin-section');
                        const addNewButton = parentSection.querySelector('.btn-add-new');
                        if (addNewButton) {
                            addNewButton.style.display = 'inline-block';
                        }
                    });
                });

                const editModal = document.getElementById('editModal');
                const closeEditModalButton = editModal.querySelector('.close-button');
                const modalCancelButton = document.getElementById('modalCancel');
                const modalSaveButton = document.getElementById('modalSave');
                const modalForm = document.getElementById('modalForm');
                const modalFormBody = modalForm; // The form itself will contain the inputs
                const modalTitle = document.getElementById('modalTitle');

                function openEditModal(entityType, data) {
                    // Destroy existing TinyMCE instance if any
                    destroyTinyMCE('#modalPageContent');

                    // Clear previous form content except for CSRF and _method
                    const csrfToken = modalForm.querySelector('input[name="_token"]').outerHTML;
                    const methodInput = modalForm.querySelector('input[name="_method"]').outerHTML;
                    modalForm.innerHTML = csrfToken + methodInput;


                    let formHtml = '';
                    let actionRoute = '';
                    let currentImageHTML = ''; // For displaying current image

                    switch (entityType) {
                        case 'pages':
                            modalTitle.textContent = 'Modifier la Page';
                            actionRoute = `/admin/pages/${data.id}`; // Ensure this route is defined for PUT/PATCH
                            currentImageHTML = data.imagePath ?
                                `<div class="mb-2">Image actuelle: <img src="${data.imagePath}" alt="Current Image" class="current-image-preview" 
                                    style="background: #c5c5d1;"> 
                                <button type="button" class="btn btn-xs btn-warning remove-image-btn" data-field="image">Retirer l'image</button></div>` :
                                '<p class="text-muted">Aucune image actuelle.</p>';

                            formHtml = `
                                <input type="hidden" name="id" value="${data.id || ''}">
                                <div class="form-group">
                                    <label for="modalPageTitle">Titre</label>
                                    <input type="text" class="form-control" name="title" id="modalPageTitle" value="${data.title || ''}" required>
                                </div>
                                <div class="form-group">
                                    <label for="modalPageSlug">Slug (auto-généré si titre change, non modifiable ici)</label>
                                    <input type="text" class="form-control" name="slug" id="modalPageSlug" value="${data.slug || ''}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="modalPageContent">Contenu Principal</label>
                                    <textarea class="form-control" name="content" id="modalPageContent" rows="10">${data.content || ''}</textarea>
                                </div>
                                  <div class="form-group">
                                    <label for="modalPageMainTitle">Titre principal</label>
                                    <input type="text" class="form-control" name="main_title" id="modalPageMainTitle" value="${data.mainTitle || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalPageMetaTitle">Meta Titre (SEO)</label>
                                    <input type="text" class="form-control" name="meta_title" id="modalPageMetaTitle" value="${data.metaTitle || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalPageMetaDescription">Meta Description (SEO)</label>
                                    <textarea class="form-control" name="meta_description" id="modalPageMetaDescription" rows="3">${data.metaDescription || ''}</textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label>Éléments de Description (pour listes, etc.)</label>
                                    <div id="modalPageDescriptionItemsContainer">
                                        </div>
                                    <button type="button" id="addPageDescriptionItemBtn" class="btn btn-sm btn-info mt-2">Ajouter un élément</button>
                                </div>

                                <div class="form-group">
                                    <label for="modalPageImage">Image Principale</label>
                                    ${currentImageHTML}
                                    <input type="file" class="form-control-file" name="image" id="modalPageImage">
                                    <input type="hidden" name="remove_image" id="modalPageRemoveImageFlag" value="0">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="is_published" id="modalPageIsPublished" value="1" ${data.isPublished === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalPageIsPublished">Publiée</label>
                                </div>
                            `;
                            modalForm.insertAdjacentHTML('beforeend', formHtml);
                            initTinyMCE('#modalPageContent'); // Initialize TinyMCE for the content field

                            // Populate description items
                            const descriptionItemsContainer = document.getElementById(
                                'modalPageDescriptionItemsContainer');
                            descriptionItemsContainer.innerHTML = ''; // Clear previous items
                            let descriptionData = [];
                            try {
                                descriptionData = JSON.parse(data.description || '[]');
                                if (!Array.isArray(descriptionData)) descriptionData = [];
                            } catch (e) {
                                console.error("Error parsing description data:", e);
                                descriptionData = [];
                            }

                            descriptionData.forEach(itemText => {
                                addDescriptionItemField(descriptionItemsContainer, itemText);
                            });

                            document.getElementById('addPageDescriptionItemBtn').addEventListener('click', function() {
                                addDescriptionItemField(descriptionItemsContainer, '');
                            });

                            // Handle remove image button
                            const removeImageBtn = modalForm.querySelector('.remove-image-btn[data-field="image"]');
                            if (removeImageBtn) {
                                removeImageBtn.addEventListener('click', function() {
                                    document.getElementById('modalPageRemoveImageFlag').value = '1';
                                    this.parentElement.innerHTML =
                                        '<p class="text-success">L\'image sera retirée lors de la sauvegarde.</p>';
                                });
                            }
                            break;
                        case 'blog-posts':
                            modalTitle.textContent = 'Modifier l\'Article de Blog';
                            actionRoute = `/admin/blog-posts/${data.id}`;
                            currentImageHTML = data.image ?
                                `<div class="mb-2">Image actuelle: <img src="${data.image}" alt="Current Image" class="current-image-preview"> 
                                    <button type="button" class="btn btn-xs btn-warning remove-image-btn" data-field="image_blog">Retirer l'image</button></div>` :
                                '<p class="text-muted">Aucune image actuelle.</p>';
                            formHtml = `
                                <input type="hidden" name="id" value="${data.id || ''}">
                                <div class="form-group">
                                    <label for="modalBlogPostTitle">Titre</label>
                                    <input type="text" class="form-control" name="title" id="modalBlogPostTitle" value="${data.title || ''}" required>
                                </div>
                                <div class="form-group">
                                    <label for="modalBlogPostContent">Contenu</label>
                                    <textarea class="form-control" name="content" id="modalBlogPostContent" rows="5">${data.content || ''}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="modalBlogPostImage">Image</label>
                                    ${currentImageHTML}
                                    <input type="file" class="form-control" name="image" id="modalBlogPostImage">
                                    <input type="hidden" name="remove_image_blog" id="modalBlogRemoveImageFlag" value="0">
                                </div>
                                <div class="form-group">
                                    <label for="modalBlogPostCategory">Catégorie</label>
                                    <select class="form-control" name="category_id" id="modalBlogPostCategory" required>
                                        <option value="">Sélectionner une catégorie</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" ${data.categoryId == '{{ $category->id }}' ? 'selected' : ''}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="hidden" name="is_published" value="0">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="is_published" id="modalBlogPostIsPublished" value="1" ${data.isPublished === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalBlogPostIsPublished">Publié</label>
                                </div>
                                <div class="form-group">
                                    <label for="modalBlogPostPublishedAt">Date de publication</label>
                                    <input type="datetime-local" class="form-control" name="published_at" id="modalBlogPostPublishedAt" value="${data.publishedAt || ''}">
                                </div>
                            `;
                            modalForm.insertAdjacentHTML('beforeend', formHtml);
                            initTinyMCE('#modalBlogPostContent');
                            const removeBlogImageBtn = modalForm.querySelector(
                                '.remove-image-btn[data-field="image_blog"]');
                            if (removeBlogImageBtn) {
                                removeBlogImageBtn.addEventListener('click', function() {
                                    document.getElementById('modalBlogRemoveImageFlag').value = '1';
                                    this.parentElement.innerHTML =
                                        '<p class="text-success">L\'image sera retirée lors de la sauvegarde.</p>';
                                });
                            }
                            break;
                        case 'categories':
                            modalTitle.textContent = 'Modifier la Catégorie';
                            actionRoute = `/admin/categories/${data.id}`;
                            formHtml = `
                                <input type="hidden" name="id" value="${data.id || ''}">
                                <div class="form-group">
                                    <label for="modalCategoryName">Nom</label>
                                    <input type="text" class="form-control" name="name" id="modalCategoryName" value="${data.name || ''}" required>
                                </div>`;
                            modalForm.insertAdjacentHTML('beforeend', formHtml);
                            break;
                        case 'events':
                            modalTitle.textContent = 'Modifier l\'Événement';
                            actionRoute = `/admin/events/${data.id}`;
                            currentImageHTML = data.image ?
                                `<div class="mb-2">Image actuelle: <img src="${data.image}" alt="Current Image" class="current-image-preview"> 
                                    <button type="button" class="btn btn-xs btn-warning remove-image-btn" data-field="image_event">Retirer l'image</button></div>` :
                                '<p class="text-muted">Aucune image actuelle.</p>';
                            formHtml = `
                                <input type="hidden" name="id" value="${data.id || ''}">
                                <div class="form-group">
                                    <label for="modalEventTitle">Titre</label>
                                    <input type="text" class="form-control" name="title" id="modalEventTitle" value="${data.title || ''}" required>
                                </div>
                                <div class="form-group">
                                    <label for="modalEventContent">Contenu</label>
                                    <textarea class="form-control" name="content" id="modalEventContent" rows="5">${data.content || ''}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="modalEventDate">Date et Heure</label>
                                    <input type="datetime-local" class="form-control" name="event_date" id="modalEventDate" value="${data.eventDate || ''}" required>
                                </div>
                                <div class="form-group">
                                    <label for="modalEventLocation">Lieu</label>
                                    <input type="text" class="form-control" name="location" id="modalEventLocation" value="${data.location || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalEventImage">Image</label>
                                    ${currentImageHTML}
                                    <input type="file" class="form-control" name="image" id="modalEventImage">
                                    <input type="hidden" name="remove_image_event" id="modalEventRemoveImageFlag" value="0">
                                </div>
                                <input type="hidden" name="is_published" value="0">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="is_published" id="modalEventIsPublished" value="1" ${data.isPublished === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalEventIsPublished">Publié</label>
                                </div>`;
                            modalForm.insertAdjacentHTML('beforeend', formHtml);
                            initTinyMCE('#modalEventContent');
                            const removeEventImageBtn = modalForm.querySelector(
                                '.remove-image-btn[data-field="image_event"]');
                            if (removeEventImageBtn) {
                                removeEventImageBtn.addEventListener('click', function() {
                                    document.getElementById('modalEventRemoveImageFlag').value = '1';
                                    this.parentElement.innerHTML =
                                        '<p class="text-success">L\'image sera retirée lors de la sauvegarde.</p>';
                                });
                            }
                            break;
                        case 'faqs':
                            modalTitle.textContent = 'Modifier la FAQ';
                            actionRoute = `/admin/faqs/${data.id}`;
                            formHtml = `
                                <input type="hidden" name="id" value="${data.id || ''}">
                                <div class="form-group">
                                    <label for="modalFaqQuestion">Question</label>
                                    <input type="text" class="form-control" name="question" id="modalFaqQuestion" value="${data.question || ''}" required>
                                </div>
                                <div class="form-group">
                                    <label for="modalFaqAnswer">Réponse</label>
                                    <textarea class="form-control" name="answer" id="modalFaqAnswer" rows="3">${data.answer || ''}</textarea>
                                </div>`;
                            modalForm.insertAdjacentHTML('beforeend', formHtml);
                            break;
                        case 'services':
                            modalTitle.textContent = 'Modifier le Service';
                            actionRoute = `/admin/services/${data.id}`;
                            currentImageHTML = data.image ?
                                `<div class="mb-2">Image actuelle: <img src="${data.image}" alt="Current Image" class="current-image-preview"> 
                                    <button type="button" class="btn btn-xs btn-warning remove-image-btn" data-field="image_service">Retirer l'image</button></div>` :
                                '<p class="text-muted">Aucune image actuelle.</p>';
                            formHtml = `
                                <input type="hidden" name="id" value="${data.id || ''}">
                                <div class="form-group">
                                    <label for="modalServiceTitle">Titre</label>
                                    <input type="text" class="form-control" name="title" id="modalServiceTitle" value="${data.title || ''}" required>
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceShortDescription">Description Courte</label>
                                    <textarea class="form-control" name="short_description" id="modalServiceShortDescription" rows="2">${data.shortDescription || ''}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceContent">Contenu Complet</label>
                                    <textarea class="form-control" name="content" id="modalServiceContent" rows="5">${data.content || ''}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceImage">Image</label>
                                    ${currentImageHTML}
                                    <input type="file" class="form-control" name="image" id="modalServiceImage">
                                    <input type="hidden" name="remove_image_service" id="modalServiceRemoveImageFlag" value="0">
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceOrder">Ordre d'affichage</label>
                                    <input type="number" class="form-control" name="order" id="modalServiceOrder" value="${data.order || '0'}">
                                </div>
                                 <input type="hidden" name="is_published" value="0">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="is_published" id="modalServiceIsPublished" value="1" ${data.isPublished === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalServiceIsPublished">Publié</label>
                                </div>`;
                            modalForm.insertAdjacentHTML('beforeend', formHtml);
                            initTinyMCE('#modalServiceContent');
                            const removeServiceImageBtn = modalForm.querySelector(
                                '.remove-image-btn[data-field="image_service"]');
                            if (removeServiceImageBtn) {
                                removeServiceImageBtn.addEventListener('click', function() {
                                    document.getElementById('modalServiceRemoveImageFlag').value = '1';
                                    this.parentElement.innerHTML =
                                        '<p class="text-success">L\'image sera retirée lors de la sauvegarde.</p>';
                                });
                            }
                            break;
                        case 'zones':

                            modalTitle.textContent = 'Modifier la Zone';
                            actionRoute = `/admin/zones/${data.id}`;
                            currentImageHTML = data.image ?
                                `<div class="mb-2">Image actuelle: <img src="${data.image}" alt="Current Image" class="current-image-preview"> 
                                <button type="button" class="btn btn-xs btn-warning remove-image-btn" data-field="image_zone">Retirer l'image</button></div>` :
                                '<p class="text-muted">Aucune image actuelle.</p>';
                            formHtml = `
                                <input type="hidden" name="id" value="${data.id || ''}">
                                <div class="form-group">
                                    <label for="modalZoneName">Nom</label>
                                    <input type="text" class="form-control" name="name" id="modalZoneName" value="${data.name || ''}" required>
                                </div>
                                <div class="form-group">
                                    <label for="modalZoneCode">Code</label>
                                    <input type="text" class="form-control" name="code" id="modalZoneCode" value="${data.code || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalZoneDescription">Description</label>
                                    <textarea class="form-control" name="description" id="modalZoneDescription" rows="3">${data.description || ''}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="modalZoneImage">Image</label>
                                    ${currentImageHTML}
                                    <input type="file" class="form-control" name="image" id="modalZoneImage">
                                    <input type="hidden" name="remove_image_zone" id="modalZoneRemoveImageFlag" value="0">
                                </div>
                                <input type="hidden" name="is_active" value="0">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="is_active" id="modalZoneIsActive" value="1" ${data.isActive === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalZoneIsActive">Active</label>
                                </div>`;
                            modalForm.insertAdjacentHTML('beforeend', formHtml);
                            const removeZoneImageBtn = modalForm.querySelector(
                                '.remove-image-btn[data-field="image_zone"]');
                            if (removeZoneImageBtn) {
                                removeZoneImageBtn.addEventListener('click', function() {
                                    document.getElementById('modalZoneRemoveImageFlag').value = '1';
                                    this.parentElement.innerHTML =
                                        '<p class="text-success">L\'image sera retirée lors de la sauvegarde.</p>';
                                });
                            }

                            break;
                        case 'slider-images':
                            modalTitle.textContent = 'Modifier l\'Image du Slider';
                            actionRoute = `/admin/slider-images/${data.id}`;
                            currentImageHTML = data.imagePath ?
                                `<div class="mb-2">Image actuelle: <img src="${data.imagePath}" alt="Current Image" class="current-image-preview"> 
                                    <button type="button" class="btn btn-xs btn-warning remove-image-btn" data-field="image_slider">Retirer l'image</button></div>` :
                                '<p class="text-muted">Aucune image actuelle.</p>';
                            formHtml = `
                                <input type="hidden" name="id" value="${data.id || ''}">
                                <div class="form-group">
                                    <label for="modalSliderImageTitle">Titre</label>
                                    <input type="text" class="form-control" name="title" id="modalSliderImageTitle" value="${data.title || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalSliderImageOrder">Ordre d'affichage</label>
                                    <input type="number" class="form-control" name="order" id="modalSliderImageOrder" value="${data.order || '0'}">
                                </div>
                                <div class="form-group">
                                    <label for="modalSliderImageFile">Image</label>
                                    ${currentImageHTML}
                                    <input type="file" class="form-control" name="image_path" id="modalSliderImageFile">
                                    <input type="hidden" name="remove_image_slider" id="modalSliderRemoveImageFlag" value="0">
                                </div>
                                <input type="hidden" name="is_published" value="0">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="is_published" id="modalSliderImageIsPublished" value="1" ${data.isPublished === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalSliderImageIsPublished">Publié</label>
                                </div>`;
                            modalForm.insertAdjacentHTML('beforeend', formHtml);
                            const removeSliderImageBtn = modalForm.querySelector(
                                '.remove-image-btn[data-field="image_slider"]');
                            if (removeSliderImageBtn) {
                                removeSliderImageBtn.addEventListener('click', function() {
                                    document.getElementById('modalSliderRemoveImageFlag').value = '1';
                                    this.parentElement.innerHTML =
                                        '<p class="text-success">L\'image sera retirée lors de la sauvegarde.</p>';
                                });
                            }
                            break;
                        case 'partners':
                            modalTitle.textContent = 'Modifier le Partenaire';
                            actionRoute = `/admin/partners/${data.id}`;
                            currentImageHTML = data.logoPath ?
                                `<div class="mb-2">Logo actuel: <img src="${data.logoPath}" alt="Current Logo" class="current-image-preview"> 
                                    <button type="button" class="btn btn-xs btn-warning remove-image-btn" data-field="logo_partner">Retirer le logo</button></div>` :
                                '<p class="text-muted">Aucun logo actuel.</p>';
                            formHtml = `
                                <input type="hidden" name="id" value="${data.id || ''}">
                                <div class="form-group">
                                    <label for="modalPartnerName">Nom du Partenaire</label>
                                    <input type="text" class="form-control" name="name" id="modalPartnerName" value="${data.name || ''}" required>
                                </div>
                                <div class="form-group">
                                    <label for="modalPartnerWebsiteUrl">URL du Site Web</label>
                                    <input type="url" class="form-control" name="website_url" id="modalPartnerWebsiteUrl" value="${data.websiteUrl || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalPartnerOrder">Ordre d'affichage</label>
                                    <input type="number" class="form-control" name="order" id="modalPartnerOrder" value="${data.order || '0'}">
                                </div>
                                <div class="form-group">
                                    <label for="modalPartnerLogo">Logo</label>
                                    ${currentImageHTML}
                                    <input type="file" class="form-control" name="logo_path" id="modalPartnerLogo">
                                    <input type="hidden" name="remove_logo_partner" id="modalPartnerRemoveImageFlag" value="0">
                                </div>
                                <input type="hidden" name="is_published" value="0">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="is_published" id="modalPartnerIsPublished" value="1" ${data.isPublished === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalPartnerIsPublished">Publié</label>
                                </div>`;
                            modalForm.insertAdjacentHTML('beforeend', formHtml);
                            const removePartnerImageBtn = modalForm.querySelector(
                                '.remove-image-btn[data-field="logo_partner"]');
                            if (removePartnerImageBtn) {
                                removePartnerImageBtn.addEventListener('click', function() {
                                    document.getElementById('modalPartnerRemoveImageFlag').value = '1';
                                    this.parentElement.innerHTML =
                                        '<p class="text-success">Le logo sera retiré lors de la sauvegarde.</p>';
                                });
                            }
                            break;
                        default:
                            formHtml = '<p>Type d\'entité non pris en charge pour la modification.</p>';
                            modalForm.insertAdjacentHTML('beforeend', formHtml);
                            break;
                    }
                    modalForm.action = actionRoute;
                    editModal.style.display = 'flex';
                }

                function addDescriptionItemField(container, value = '') {
                    const div = document.createElement('div');
                    div.classList.add('description-item-group', 'input-group', 'mb-2');
                    div.innerHTML = `
                        <input type="text" class="form-control" name="description[]" value="${escapeHtml(value)}" placeholder="Texte de l'élément">
                        <button type="button" class="btn btn-danger btn-sm btn-remove-item">Retirer</button>
                    `;
                    container.appendChild(div);
                    div.querySelector('.btn-remove-item').addEventListener('click', function() {
                        div.remove();
                    });
                }

                function escapeHtml(unsafe) {
                    return unsafe
                        .replace(/&/g, "&amp;")
                        .replace(/</g, "&lt;")
                        .replace(/>/g, "&gt;")
                        .replace(/"/g, "&quot;")
                        .replace(/'/g, "&#039;");
                }


                document.querySelectorAll('.btn-edit').forEach(button => {
                    button.addEventListener('click', function() {
                        const row = this.closest('tr');
                        const entityType = row.dataset.entity;
                        const data = {
                            ...row.dataset
                        }; // Clone dataset
                        openEditModal(entityType, data);
                    });
                });

                closeEditModalButton.onclick = function() {
                    destroyTinyMCE('#modalPageContent'); // Also for other TinyMCE instances if any
                    destroyTinyMCE('#modalBlogPostContent');
                    destroyTinyMCE('#modalEventContent');
                    destroyTinyMCE('#modalServiceContent');
                    editModal.style.display = 'none';
                }

                modalCancelButton.onclick = function() {
                    destroyTinyMCE('#modalPageContent');
                    destroyTinyMCE('#modalBlogPostContent');
                    destroyTinyMCE('#modalEventContent');
                    destroyTinyMCE('#modalServiceContent');
                    editModal.style.display = 'none';
                }

                window.addEventListener('click', function(event) {
                    if (event.target == editModal) {
                        destroyTinyMCE('#modalPageContent');
                        destroyTinyMCE('#modalBlogPostContent');
                        destroyTinyMCE('#modalEventContent');
                        destroyTinyMCE('#modalServiceContent');
                        editModal.style.display = 'none';
                    }
                });

                modalSaveButton.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent default button behavior
                    // Trigger save for TinyMCE instances before submitting form
                    if (typeof tinymce !== 'undefined') {
                        if (tinymce.get('modalPageContent')) tinymce.get('modalPageContent').save();
                        if (tinymce.get('modalBlogPostContent')) tinymce.get('modalBlogPostContent').save();
                        if (tinymce.get('modalEventContent')) tinymce.get('modalEventContent').save();
                        if (tinymce.get('modalServiceContent')) tinymce.get('modalServiceContent').save();
                        // Add for other TinyMCE instances if you have them
                    }
                    modalForm.submit();
                });

                const deleteConfirmationModal = document.getElementById('deleteConfirmationModal');
                const closeDeleteModalButton = document.getElementById('closeDeleteModalButton');
                const cancelDeleteButton = document.getElementById('cancelDeleteButton');
                const confirmDeleteButton = document.getElementById('confirmDeleteButton');
                let itemToDelete = null;

                function openDeleteConfirmationModal(entityId, entityType) {
                    itemToDelete = {
                        id: entityId,
                        type: entityType
                    };
                    deleteConfirmationModal.style.display = 'flex';
                }

                document.querySelectorAll('.btn-delete').forEach(button => {
                    button.addEventListener('click', function() {
                        const row = this.closest('tr');
                        openDeleteConfirmationModal(row.dataset.id, row.dataset.entity);
                    });
                });

                closeDeleteModalButton.onclick = function() {
                    deleteConfirmationModal.style.display = 'none';
                    itemToDelete = null;
                }
                cancelDeleteButton.onclick = function() {
                    deleteConfirmationModal.style.display = 'none';
                    itemToDelete = null;
                }
                window.addEventListener('click', function(event) {
                    if (event.target == deleteConfirmationModal) {
                        deleteConfirmationModal.style.display = 'none';
                        itemToDelete = null;
                    }
                });

                confirmDeleteButton.onclick = function() {
                    if (itemToDelete) {
                        const deleteForm = document.createElement('form');
                        deleteForm.method = 'POST';
                        // Adjust action based on your route structure, e.g., /admin/blog/{id}, /admin/categories/{id}
                        deleteForm.action = `/admin/${itemToDelete.type}/${itemToDelete.id}`;
                        deleteForm.innerHTML = `
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            `;
                        document.body.appendChild(deleteForm);
                        deleteForm.submit();
                    }
                };
            });
        </script>
</body>

</html>
