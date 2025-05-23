<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Amcare - Tableau de Bord Admin</title>

    <link rel="icon" href="{{ Vite::asset('resources/assets/images/favicon.ico') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">


    @vite('resources/css/admin.css')
    @vite('resources/css/font-awesome-all.css')
    @vite('resources/css/owl.css')
    @vite('resources/css/flaticon.css')
    @vite('resources/css/bootstrap.css')
    @vite('resources/css/jquery.fancybox.min.css')
    @vite('resources/css/animate.css')
    @vite('resources/css/nice-select.css')
    @vite('resources/css/odometer.css')
    @vite('resources/css/elpath.css')
    @vite('resources/css/color.css')
    @vite('resources/css/style.css')
    @vite('resources/css/module-css/page-title.css')

    <style>
        /* Styles pour le modal d'édition */
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

        .modal-footer {
            padding-top: 20px;
            border-top: 1px solid #eee;
            margin-top: 20px;
            text-align: right;
        }

        .modal-footer button {
            margin-left: 10px;
        }

        /* Styles pour le modal de confirmation de suppression */
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
            /* Red color for delete */
            color: #fff;
            border: none;
        }

        .delete-confirmation-modal .btn-confirm-delete:hover {
            background-color: #a5130d;
            /* Darker red */
        }

        .delete-confirmation-modal .btn-cancel-delete {
            background-color: var(--bs-gray-400);
            /* Gray for cancel */
            color: #fff;
            border: none;
        }

        .delete-confirmation-modal .btn-cancel-delete:hover {
            background-color: var(--bs-gray-500);
        }

        /* Styles for session alerts */
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

        /* Styles for dynamic phone inputs */
        .phone-input-group {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
            align-items: center;
        }

        .phone-input-group input {
            flex: 1;
        }

        .phone-input-group .btn-remove-phone {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .phone-input-group .btn-remove-phone:hover {
            background-color: #c82333;
        }

        /* Specific styles for the settings section */
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
            background-color: #0056b3;
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
                            <span data-text-preloader="c" class="letters-loading">c</span>
                            <span data-text-preloader="a" class="letters-loading">a</span>
                            <span data-text-preloader="r" class="letters-loading">r</span>
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
                        <li><a href="#settings" class="active">Paramètres du Site</a></li>
                        <li><a href="#faqs">FAQs</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#zones">Zones</a></li>
                        <li><a href="#events">Événements</a></li>
                        <li><a href="#categories">Catégories</a></li>
                        <li><a href="#blog-posts">Articles de Blog</a></li>

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
                <section class="page-title">
                    <h1>Gestion du Contenu</h1>
                </section>

                {{-- Session Messages --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

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
                                    <tr data-entity="blog" data-id="{{ $post->id }}"
                                        data-title="{{ $post->title }}" data-slug="{{ $post->slug }}"
                                        data-category-id="{{ $post->category_id }}"
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
                                        <td>{{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('Y-m-d') : 'N/A' }}
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
                        <h4>Ajouter un nouvel Article de Blog</h4>
                        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
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
                                <input type="checkbox" class="form-check-input" name="is_published"
                                    id="blogPostIsPublished" value="1">
                                <label class="form-check-label" for="blogPostIsPublished">Publié</label>
                            </div>
                            <div class="form-group">
                                <label for="blogPostPublishedAt">Date de publication (optionnel)</label>
                                <input type="datetime-local" class="form-control" name="published_at"
                                    id="blogPostPublishedAt">
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="categories" class="admin-section" style="display: none;">
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
                                    <tr data-entity="categories" data-id="{{ $category->id }}"
                                        data-name="{{ $category->name }}" data-slug="{{ $category->slug }}">
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
                        <h4>Ajouter une nouvelle Catégorie</h4>
                        <form action="{{ route('admin.categories.store') }}" method="POST">
                            @csrf
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

                <section id="events" class="admin-section" style="display: none;">
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
                                    <tr data-entity="events" data-id="{{ $event->id }}"
                                        data-title="{{ $event->title }}" data-slug="{{ $event->slug }}"
                                        data-event-date="{{ \Carbon\Carbon::parse($event->event_date)->format('Y-m-d\TH:i') }}"
                                        data-location="{{ $event->location ?? '' }}"
                                        data-is-published="{{ $event->is_published ? 'true' : 'false' }}"
                                        data-content="{{ $event->content }}"
                                        data-image="{{ $event->image ? Storage::url($event->image) : '' }}">
                                        <td>{{ $event->id }}</td>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ $event->slug }}</td>
                                        <td>{{ \Carbon\Carbon::parse($event->event_date)->format('Y-m-d H:i') }}</td>
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
                        <h4>Ajouter un nouvel Événement</h4>
                        <form action="{{ route('admin.events.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="eventTitle">Titre de l'événement</label>
                                <input type="text" class="form-control" name="title" id="eventTitle"
                                    placeholder="Entrez le titre" required>
                            </div>
                            <div class="form-group">
                                <label for="eventContent">Contenu</label>
                                <textarea class="form-control" name="content" id="eventContent" rows="5"
                                    placeholder="Entrez le contenu de l'événement"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="eventDate">Date et Heure de l'événement</label>
                                <input type="datetime-local" class="form-control" name="event_date" id="eventDate"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="eventLocation">Lieu</label>
                                <input type="text" class="form-control" name="location" id="eventLocation"
                                    placeholder="Entrez le lieu">
                            </div>
                            <div class="form-group">
                                <label for="eventImage">Image</label>
                                <input type="file" class="form-control" name="image" id="eventImage">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" name="is_published"
                                    id="eventIsPublished" value="1">
                                <label class="form-check-label" for="eventIsPublished">Publié</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="faqs" class="admin-section" style="display: none;">
                    <h3>Gestion des FAQs</h3>
                    <button class="btn-add-new" data-target-form="faq-form">Ajouter une nouvelle FAQ</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Question</th>
                                    <th>Reponse</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $faq)
                                    <tr data-entity="faqs" data-id="{{ $faq->id }}"
                                        data-question="{{ $faq->question }}" data-answer="{{ $faq->answer }}">
                                        <td>{{ $faq->id }}</td>
                                        <td>{{ $faq->question }}</td>
                                        <td>{{ $faq->answer }}</td>
                                        <td class="action-buttons">
                                            <button class="btn btn-edit">Modifier</button>
                                            <button class="btn btn-delete">Supprimer</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="form-section mt-4" style="display: none;" id="faq-form">
                        <h4>Ajouter une nouvelle FAQ</h4>
                        <form action="{{ route('admin.faqs.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="faqQuestion">Question</label>
                                <input type="text" class="form-control" name="question" id="faqQuestion"
                                    placeholder="Entrez la question" required>
                            </div>
                            <div class="form-group">
                                <label for="faqAnswer">Réponse</label>
                                <textarea class="form-control" name="answer" id="faqAnswer" rows="3" placeholder="Entrez la réponse"
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="services" class="admin-section" style="display: none;">
                    <h3>Gestion des Services</h3>
                    <button class="btn-add-new" data-target-form="service-form">Ajouter un nouveau service</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Icône</th>
                                    <th>Description Courte</th>
                                    <th>Publié</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr data-entity="services" data-id="{{ $service->id }}"
                                        data-title="{{ $service->title }}" data-icon="{{ $service->icon ?? '' }}"
                                        data-short-description="{{ $service->short_description }}"
                                        data-content="{{ $service->content }}"
                                        data-image="{{ $service->image ? Storage::url($service->image) : '' }}"
                                        data-whatsapp-number="{{ $service->whatsapp_number ?? '' }}"
                                        data-order="{{ $service->order }}"
                                        data-is-published="{{ $service->is_published ? 'true' : 'false' }}">
                                        <td>{{ $service->id }}</td>
                                        <td>{{ $service->title }}</td>
                                        <td><i class="{{ $service->icon }}"></i></td>
                                        <td>{{ $service->short_description }}</td>
                                        <td>{{ $service->is_published ? 'Oui' : 'Non' }}</td>
                                        <td class="action-buttons">
                                            <button class="btn btn-edit">Modifier</button>
                                            <button class="btn btn-delete">Supprimer</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="form-section mt-4" style="display: none;" id="service-form">
                        <h4>Ajouter un nouveau Service</h4>
                        <form action="{{ route('admin.services.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="serviceTitle">Titre</label>
                                <input type="text" class="form-control" name="title" id="serviceTitle"
                                    placeholder="Entrez le titre du service" required>
                            </div>
                            <div class="form-group">
                                <label for="serviceIcon">Icône (classe CSS)</label>
                                <input type="text" class="form-control" name="icon" id="serviceIcon"
                                    placeholder="Ex: icon-ambulance">
                            </div>
                            <div class="form-group">
                                <label for="serviceShortDescription">Description Courte</label>
                                <textarea class="form-control" name="short_description" id="serviceShortDescription" rows="2"
                                    placeholder="Entrez une courte description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="serviceContent">Contenu Complet</label>
                                <textarea class="form-control" name="content" id="serviceContent" rows="5"
                                    placeholder="Entrez le contenu complet du service" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="serviceImage">Image</label>
                                <input type="file" class="form-control" name="image" id="serviceImage">
                            </div>
                            <div class="form-group">
                                <label for="serviceWhatsappNumber">Numéro WhatsApp</label>
                                <input type="text" class="form-control" name="whatsapp_number"
                                    id="serviceWhatsappNumber" placeholder="Ex: +1234567890">
                            </div>
                            <div class="form-group">
                                <label for="serviceOrder">Ordre d'affichage</label>
                                <input type="number" class="form-control" name="order" id="serviceOrder"
                                    value="0">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" name="is_published"
                                    id="serviceIsPublished" value="1">
                                <label class="form-check-label" for="serviceIsPublished">Publié</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="zones" class="admin-section" style="display: none;">
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
                                    <tr data-entity="zones" data-id="{{ $zone->id }}"
                                        data-name="{{ $zone->name }}" data-code="{{ $zone->code ?? '' }}"
                                        data-description="{{ $zone->description ?? '' }}"
                                        data-is-active="{{ $zone->is_active ? 'true' : 'false' }}">
                                        <td>{{ $zone->id }}</td>
                                        <td>{{ $zone->name }}</td>
                                        <td>{{ $zone->code ?? 'N/A' }}</td>
                                        <td>{{ $zone->description ?? 'N/A' }}</td>
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
                        <h4>Ajouter une nouvelle Zone</h4>
                        <form action="{{ route('admin.zone.store') }}" method="POST">
                            @csrf
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
                                <input type="checkbox" class="form-check-input" name="is_active" id="zoneIsActive"
                                    value="1">
                                <label class="form-check-label" for="zoneIsActive">Active</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="settings" class="admin-section">
                    <h3>Paramètres du Site</h3>
                    <div class="setting-form-container mt-4">
                        <h4>Gérer les Paramètres Généraux</h4>
                        <form action="{{ route('admin.settings.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $settings->id ?? '' }}">
                            <div class="form-group">
                                <label for="siteName">Nom du Site</label>
                                <input type="text" class="form-control" name="site_name" id="siteName"
                                    placeholder="Entrez le nom du site" value="{{ $settings->site_name ?? '' }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="siteEmail">Email</label>
                                <input type="email" class="form-control" name="email" id="siteEmail"
                                    placeholder="Entrez l'adresse email" value="{{ $settings->email ?? '' }}">
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <label for="siteLogo" class="mb-0 mr-3">Logo</label>
                                @if ($settings && $settings->logo)
                                    <img src="{{ Storage::url($settings->logo) }}" alt="Logo actuel"
                                        class="img-thumbnail mr-3" style="max-height: 80px;">
                                    <a href="{{ Storage::url($settings->logo) }}" target="_blank"
                                        class="btn btn-sm btn-info mr-2">Voir actuel</a>
                                @else
                                    <span class="text-muted mr-3">Aucun logo actuel</span>
                                @endif
                                <input type="file" class="form-control-file" name="logo" id="siteLogo">
                            </div>

                            <div class="form-group">
                                <label>Numéros de Téléphone</label>
                                <div id="phone-numbers-container">
                                    @if ($settings && $settings->phones)
                                        @foreach ($settings->phones as $key => $value)
                                            <div class="phone-input-group">
                                                <input type="text" class="form-control" name="phone_keys[]"
                                                    placeholder="Clé (ex: Support)" value="{{ $key }}"
                                                    style="width: 40%;">
                                                <input type="text" class="form-control" name="phone_values[]"
                                                    placeholder="Numéro (ex: +1234567890)"
                                                    value="{{ $value }}" style="width: 40%;">
                                                <button type="button" class="btn btn-danger btn-remove-phone"
                                                    style="width: 20%;">Supprimer</button>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <button type="button" id="add-phone-button" class="btn btn-info mt-2">Ajouter un
                                    numéro</button>
                            </div>

                            <div class="form-group">
                                <label for="siteFooterText">Texte de Pied de Page</label>
                                <textarea class="form-control" name="footer_text" id="siteFooterText" rows="3"
                                    placeholder="Entrez le texte du pied de page">{{ $settings->footer_text ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer les Paramètres</button>
                        </form>
                    </div>
                </section>

            </main>
        </div>

        @include('shared.js')

        <div id="editModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 id="modalTitle">Modifier l'élément</h2>
                    <span class="close-button">&times;</span>
                </div>
                <div class="modal-body">
                    <form id="modalForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT" id="modalFormMethod">
                        {{-- Form fields will be dynamically inserted here --}}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="modalCancel">Annuler</button>
                    <button type="submit" class="btn btn-primary" id="modalSave">Enregistrer</button>
                </div>
            </div>
        </div>

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


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initial display setup
                document.querySelector('#blog-posts').style.display = 'none'; // Show blogs by default
                document.querySelector('#categories').style.display = 'none';
                document.querySelector('#events').style.display = 'none';
                document.querySelector('#faqs').style.display = 'none';
                document.querySelector('#services').style.display = 'none';
                document.querySelector('#zones').style.display = 'none';
                document.querySelector('#settings').style.display =
                    'block'; // Keep settings hidden initially, JS will show it on tab click


                // Handle sidebar navigation clicks
                const navLinks = document.querySelectorAll('.admin-sidebar nav ul li a');
                const sections = document.querySelectorAll('.admin-content .admin-section');

                navLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();

                        // Remove active class from all links
                        navLinks.forEach(nav => nav.classList.remove('active'));
                        // Add active class to the clicked link
                        this.classList.add('active');

                        // Hide all sections
                        sections.forEach(section => section.style.display = 'none');

                        // Show the target section
                        const targetId = this.getAttribute('href');
                        document.querySelector(targetId).style.display = 'block';

                        // Special handling for settings section to initialize phone numbers
                        if (targetId === '#settings') {
                            const phonesContainer = document.getElementById('phone-numbers-container');
                            phonesContainer.innerHTML =
                                ''; // Clear existing fields to avoid duplication

                            const settingsData =
                                {!! json_encode($settings ?? []) !!}; // Get settings data from Blade
                            const phonesData = settingsData.phones || {};

                            for (const key in phonesData) {
                                if (Object.hasOwnProperty.call(phonesData, key)) {
                                    addPhoneNumberField('phone-numbers-container', key, phonesData[
                                        key]);
                                }
                            }
                        }
                    });
                });

                // Handle "Add New" button clicks to show/hide forms
                document.querySelectorAll('.admin-section .btn-add-new').forEach(button => {
                    button.addEventListener('click', function() {
                        const targetFormId = this.dataset.targetForm;
                        const formSection = document.getElementById(targetFormId);

                        // Hide all other forms in the current section
                        document.querySelectorAll('.admin-section .form-section').forEach(fs => {
                            if (fs.id !== targetFormId) {
                                fs.style.display = 'none';
                            }
                        });

                        formSection.style.display = 'block';
                        this.style.display = 'none'; // Hide the "Add New" button
                    });
                });

                // Handle "Cancel" button clicks to hide forms
                document.querySelectorAll('.admin-section .cancel-form').forEach(button => {
                    button.addEventListener('click', function() {
                        const formSection = this.closest('.form-section');
                        formSection.style.display = 'none';
                        // Find the corresponding "Add New" button and show it
                        const parentSection = formSection.closest('.admin-section');
                        const addNewButton = parentSection.querySelector('.btn-add-new');
                        if (addNewButton) {
                            addNewButton.style.display = 'inline-block';
                        }
                    });
                });

                // Function to add a phone number field dynamically (for both main settings form and modal)
                function addPhoneNumberField(containerId, key = '', value = '') {
                    const container = document.getElementById(containerId);
                    const div = document.createElement('div');
                    div.classList.add('phone-input-group');
                    div.innerHTML = `
                        <input type="text" class="form-control" name="phone_keys[]" placeholder="Clé (ex: Support)" value="${key}" style="width: 40%;">
                        <input type="text" class="form-control" name="phone_values[]" placeholder="Numéro (ex: +1234567890)" value="${value}" style="width: 40%;">
                        <button type="button" class="btn btn-danger btn-remove-phone" style="width: 20%;">Supprimer</button>
                    `;
                    container.appendChild(div);

                    div.querySelector('.btn-remove-phone').addEventListener('click', function() {
                        div.remove();
                    });
                }

                // Initial population for the main settings form (when the page loads and settings tab is active)
                // This will run only once when the DOM is ready.
                const initialSettingsTab = document.querySelector('.admin-sidebar nav ul li a[href="#settings"]');
                if (initialSettingsTab && initialSettingsTab.classList.contains('active')) {
                    const phonesContainer = document.getElementById('phone-numbers-container');
                    phonesContainer.innerHTML = ''; // Clear existing fields to avoid duplication

                    const settingsData = {!! json_encode($settings ?? []) !!};
                    const phonesData = settingsData.phones || {};

                    for (const key in phonesData) {
                        if (Object.hasOwnProperty.call(phonesData, key)) {
                            addPhoneNumberField('phone-numbers-container', key, phonesData[key]);
                        }
                    }
                }

                // Add event listener for the "Add Phone" button in the main settings form
                document.getElementById('add-phone-button').addEventListener('click', function() {
                    addPhoneNumberField('phone-numbers-container');
                });


                // Modal Logic (Edit Modal - for other sections)
                const editModal = document.getElementById('editModal');
                const closeEditModalButton = editModal.querySelector('.close-button');
                const modalCancelButton = document.getElementById('modalCancel');
                const modalSaveButton = document.getElementById('modalSave');
                const modalForm = document.getElementById('modalForm');
                const modalTitle = document.getElementById('modalTitle');

                // Function to open the edit modal and populate its form
                function openEditModal(entityType, data) {
                    modalForm.innerHTML = `
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    `; // Clear previous form fields and add CSRF/Method spoofing

                    let formHtml = '';
                    let actionRoute = '';
                    let currentImage = '';

                    switch (entityType) {
                        case 'blog':
                            modalTitle.textContent = 'Modifier l\'Article de Blog';
                            actionRoute = `/admin/blog/${data.id}`;
                            currentImage = data.image;
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
                                    <label for="modalBlogPostImage">Image ${currentImage ? '(actuel: <a href="' + currentImage + '" target="_blank">Voir</a>)' : '(N/A)'}</label>
                                    <input type="file" class="form-control" name="image" id="modalBlogPostImage">
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
                            break;
                        case 'categories':
                            modalTitle.textContent = 'Modifier la Catégorie';
                            actionRoute = `/admin/categories/${data.id}`;
                            formHtml = `
                                <input type="hidden" name="id" value="${data.id || ''}">
                                <div class="form-group">
                                    <label for="modalCategoryName">Nom</label>
                                    <input type="text" class="form-control" name="name" id="modalCategoryName" value="${data.name || ''}" required>
                                </div>
                            `;
                            break;
                        case 'events':
                            modalTitle.textContent = 'Modifier l\'Événement';
                            actionRoute = `/admin/events/${data.id}`;
                            currentImage = data.image;
                            formHtml = `
                                <input type="hidden" name="id" value="${data.id || ''}">
                                <div class="form-group">
                                    <label for="modalEventTitle">Titre de l'événement</label>
                                    <input type="text" class="form-control" name="title" id="modalEventTitle" value="${data.title || ''}" required>
                                </div>
                                <div class="form-group">
                                    <label for="modalEventContent">Contenu</label>
                                    <textarea class="form-control" name="content" id="modalEventContent" rows="5">${data.content || ''}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="modalEventDate">Date et Heure de l'événement</label>
                                    <input type="datetime-local" class="form-control" name="event_date" id="modalEventDate" value="${data.eventDate || ''}" required>
                                </div>
                                <div class="form-group">
                                    <label for="modalEventLocation">Lieu</label>
                                    <input type="text" class="form-control" name="location" id="modalEventLocation" value="${data.location || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalEventImage">Image ${currentImage ? '(actuel: <a href="' + currentImage + '" target="_blank">Voir</a>)' : '(N/A)'}</label>
                                    <input type="file" class="form-control" name="image" id="modalEventImage">
                                </div>
                                
                                <input type="hidden" name="is_published" value="0">

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="is_published" id="modalEventIsPublished" value="1" ${data.isPublished === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalEventIsPublished">Publié</label>
                                </div>
                            `;
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
                                </div>
                            `;
                            break;
                        case 'services':
                            modalTitle.textContent = 'Modifier le Service';
                            actionRoute = `/admin/services/${data.id}`;
                            currentImage = data.image;
                            formHtml = `
                                <input type="hidden" name="id" value="${data.id || ''}">
                                <div class="form-group">
                                    <label for="modalServiceTitle">Titre</label>
                                    <input type="text" class="form-control" name="title" id="modalServiceTitle" value="${data.title || ''}" required>
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceIcon">Icône (classe CSS)</label>
                                    <input type="text" class="form-control" name="icon" id="modalServiceIcon" value="${data.icon || ''}">
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
                                    <label for="modalServiceImage">Image ${currentImage ? '(actuel: <a href="' + currentImage + '" target="_blank">Voir</a>)' : '(N/A)'}</label>
                                    <input type="file" class="form-control" name="image" id="modalServiceImage">
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceWhatsappNumber">Numéro WhatsApp</label>
                                    <input type="text" class="form-control" name="whatsapp_number" id="modalServiceWhatsappNumber" value="${data.whatsappNumber || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceOrder">Ordre d'affichage</label>
                                    <input type="number" class="form-control" name="order" id="modalServiceOrder" value="${data.order || '0'}">
                                </div>
                                <input type="hidden" name="is_published" value="0">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="is_published" id="modalServiceIsPublished" value="1" ${data.isPublished === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalServiceIsPublished">Publié</label>
                                </div>
                            `;
                            break;
                        case 'zones':
                            modalTitle.textContent = 'Modifier la Zone';
                            actionRoute = `/admin/zone/${data.id}`; // Assuming admin.zone.update route exists
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
                                <input type="hidden" name="is_active" value="0">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="is_active" id="modalZoneIsActive" value="1" ${data.isActive === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalZoneIsActive">Active</label>
                                </div>
                            `;
                            break;
                            // The settings case is removed from the modal logic as it will be a direct form
                        default:
                            formHtml = '<p>Aucune donnée de formulaire disponible pour ce type d\'entité.</p>';
                            break;
                    }
                    modalForm.innerHTML += formHtml; // Append dynamic fields
                    modalForm.action = actionRoute;
                    modalForm.method = 'POST'; // Always POST for Laravel, use _method for PUT/DELETE
                    modalForm.querySelector('input[name="_method"]').value = 'PUT'; // Set spoofing method

                    // If the form contains a file input, ensure enctype is set
                    if (modalForm.querySelector('input[type="file"]')) {
                        modalForm.enctype = 'multipart/form-data';
                    } else {
                        modalForm.removeAttribute('enctype');
                    }

                    editModal.style.display = 'flex';
                }

                // Event listener for all "Modifier" buttons
                document.querySelectorAll('.btn-edit').forEach(button => {
                    button.addEventListener('click', function() {
                        const row = this.closest('tr');
                        const entityType = row.dataset.entity;
                        const data = row.dataset;

                        // Only open modal for non-settings entities
                        if (entityType !== 'settings') {
                            openEditModal(entityType, data);
                        } else {
                            // For settings, directly show the form (it's already visible if tab is active)
                            // and ensure it's populated. This part is handled by the tab click logic.
                            // If user clicks "Modifier" on settings table row, it should just ensure the form is shown
                            // and potentially re-populate it (though it should already be).
                            document.querySelector('.admin-sidebar nav ul li a[href="#settings"]')
                                .click();
                        }
                    });
                });

                // Close edit modal when clicking on <span> (x)
                closeEditModalButton.onclick = function() {
                    editModal.style.display = 'none';
                }

                // Close edit modal when clicking on "Annuler" button
                modalCancelButton.onclick = function() {
                    editModal.style.display = 'none';
                }

                // Close edit modal when clicking outside of it
                window.addEventListener('click', function(event) {
                    if (event.target == editModal) {
                        editModal.style.display = 'none';
                    }
                });

                // Handle save button click for the modal form
                modalSaveButton.addEventListener('click', function() {
                    modalForm.submit(); // Submit the dynamically generated form
                });


                // Delete Confirmation Modal Logic
                const deleteConfirmationModal = document.getElementById('deleteConfirmationModal');
                const closeDeleteModalButton = document.getElementById('closeDeleteModalButton');
                const cancelDeleteButton = document.getElementById('cancelDeleteButton');
                const confirmDeleteButton = document.getElementById('confirmDeleteButton');

                let itemToDelete = null; // To store the ID and entity type of the item to be deleted

                // Function to open the delete confirmation modal
                function openDeleteConfirmationModal(entityId, entityType) {
                    itemToDelete = {
                        id: entityId,
                        type: entityType
                    };
                    deleteConfirmationModal.style.display = 'flex'; // Use flex to center the modal
                }

                // Event listener for all "Supprimer" buttons
                document.querySelectorAll('.btn-delete').forEach(button => {
                    button.addEventListener('click', function() {
                        const row = this.closest('tr');
                        const entityId = row.dataset.id;
                        const entityType = row.dataset.entity;

                        // Prevent deletion of settings via the modal
                        if (entityType === 'settings') {
                            // Optionally show a message or do nothing
                            console.warn(
                                "Cannot delete settings via this button. Please manage settings directly."
                            );
                            return;
                        }

                        openDeleteConfirmationModal(entityId, entityType);
                    });
                });

                // Close delete modal when clicking on <span> (x)
                closeDeleteModalButton.onclick = function() {
                    deleteConfirmationModal.style.display = 'none';
                    itemToDelete = null; // Clear the item to delete
                }

                // Close delete modal when clicking on "Annuler" button
                cancelDeleteButton.onclick = function() {
                    deleteConfirmationModal.style.display = 'none';
                    itemToDelete = null; // Clear the item to delete
                }

                // Close delete modal when clicking outside of it
                window.addEventListener('click', function(event) {
                    if (event.target == deleteConfirmationModal) {
                        deleteConfirmationModal.style.display = 'none';
                        itemToDelete = null; // Clear the item to delete
                    }
                });

                // Handle confirm delete button click
                confirmDeleteButton.onclick = function() {
                    if (itemToDelete) {
                        // Construct the form dynamically for DELETE request
                        const deleteForm = document.createElement('form');
                        deleteForm.method = 'POST';
                        deleteForm.action =
                            `/admin/${itemToDelete.type}/${itemToDelete.id}`; // e.g., /admin/blog/1, /admin/categories/1

                        const methodInput = document.createElement('input');
                        methodInput.type = 'hidden';
                        methodInput.name = '_method';
                        methodInput.value = 'DELETE';
                        deleteForm.appendChild(methodInput);

                        const csrfInput = document.createElement('input');
                        csrfInput.type = 'hidden';
                        csrfInput.name = '_token';
                        csrfInput.value = '{{ csrf_token() }}';
                        deleteForm.appendChild(csrfInput);

                        document.body.appendChild(deleteForm); // Append to body to submit
                        deleteForm.submit(); // Submit the form


                    }
                };
            });
        </script>

    </div>

</body>

</html>
