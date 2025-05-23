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

    {{-- TinyMCE CDN --}}
    <script src="https://cdn.tiny.cloud/1/q9ypn617foqxxvh27h597ji1xh18rygt22durn56hhd6wsfw/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>


    <style>
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1000;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
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
            /* Increased width for page content */
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
            /* Make sure --theme-color-rgb is defined or use a static color */
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
            /* Darker shade of theme-color */
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
                        {{-- Reordered for better flow --}}
                        <li><a href="#settings" class="active">Paramètres du Site</a></li>
                        <li><a href="#pages">Pages</a></li> {{-- Added Pages Link --}}
                        <li><a href="#slider-images">Images du Slider</a></li>
                        <li><a href="#partners">Partenaires</a></li>
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


                @if (session('success'))
                    <div class="alert alert-success" onclick="this.style.display='none'">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger" onclick="this.style.display='none'">
                        {{ session('error') }}
                    </div>
                @endif

                {{-- Settings Section (Existing) --}}
                <section id="settings" class="admin-section">
                    <h3>Paramètres du Site</h3>
                    <div class="setting-form-container mt-4">
                        <h4>Gérer les Paramètres Généraux</h4>
                        <form action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $settings->id ?? '' }}">
                            <div class="form-group">
                                <label for="siteName">Nom du Site</label>
                                <input type="text" class="form-control" name="site_name" id="siteName"
                                    placeholder="Entrez le nom du site"
                                    value="{{ old('site_name', $settings->site_name ?? '') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="siteEmail">Email</label>
                                <input type="email" class="form-control" name="email" id="siteEmail"
                                    placeholder="Entrez l'adresse email"
                                    value="{{ old('email', $settings->email ?? '') }}">
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
                                    @if (old('phone_keys'))
                                        @foreach (old('phone_keys') as $index => $key)
                                            <div class="phone-input-group">
                                                <input type="text" class="form-control" name="phone_keys[]"
                                                    placeholder="Clé (ex: Support)" value="{{ $key }}"
                                                    style="width: 40%;">
                                                <input type="text" class="form-control" name="phone_values[]"
                                                    placeholder="Numéro (ex: +1234567890)"
                                                    value="{{ old('phone_values')[$index] ?? '' }}"
                                                    style="width: 40%;">
                                                <button type="button" class="btn btn-danger btn-remove-phone"
                                                    style="width: 20%;">Supprimer</button>
                                            </div>
                                        @endforeach
                                    @elseif ($settings && $settings->phones)
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
                                <label for="siteAddress">Addresse</label>
                                <textarea class="form-control" name="address" id="siteAddress" rows="2" placeholder="Entrez l'addresse">{{ old('address', $settings->address ?? '') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="siteFooterText">Texte de Pied de Page</label>
                                <textarea class="form-control" name="footer_text" id="siteFooterText" rows="2"
                                    placeholder="Entrez le texte du pied de page">{{ old('footer_text', $settings->footer_text ?? '') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer les Paramètres</button>
                        </form>
                    </div>
                </section>

                {{-- Pages Section --}}
                <section id="pages" class="admin-section" style="display: none;">
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
                                    <tr data-entity="pages" data-id="{{ $page->id }}"
                                        data-title="{{ $page->title }}" data-slug="{{ $page->slug }}"
                                        data-content="{{ $page->content }}"
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


                {{-- Other sections like #slider-images, #partners, etc. remain here --}}
                <section id="slider-images" class="admin-section" style="display: none;">
                    <h3>Gestion des Images du Slider</h3>
                    <button class="btn-add-new" data-target-form="slider-image-form">Ajouter une nouvelle image de
                        slider</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Ordre</th>
                                    <th>Publié</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliderImages as $sliderImage)
                                    <tr data-entity="slider-images" data-id="{{ $sliderImage->id }}"
                                        data-image-path="{{ $sliderImage->image_path ? Storage::url($sliderImage->image_path) : '' }}"
                                        data-title="{{ $sliderImage->title ?? '' }}"
                                        data-subtitle="{{ $sliderImage->subtitle ?? '' }}" {{-- Assuming subtitle exists --}}
                                        data-description="{{ $sliderImage->description ?? '' }}"
                                        {{-- Assuming description exists --}} data-order="{{ $sliderImage->order }}"
                                        data-is-published="{{ $sliderImage->is_published ? 'true' : 'false' }}">
                                        <td>{{ $sliderImage->id }}</td>
                                        <td>
                                            @if ($sliderImage->image_path)
                                                <img src="{{ Storage::url($sliderImage->image_path) }}"
                                                    alt="Slider Image" style="max-height: 50px;">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $sliderImage->title ?? 'N/A' }}</td>
                                        <td>{{ $sliderImage->order }}</td>
                                        <td>{{ $sliderImage->is_published ? 'Oui' : 'Non' }}</td>
                                        <td class="action-buttons">
                                            <button class="btn btn-edit">Modifier</button>
                                            <button class="btn btn-delete">Supprimer</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="form-section mt-4" style="display: none;" id="slider-image-form">
                        <h4>Ajouter/Modifier Image de Slider</h4>
                        <form action="{{ route('admin.slider-images.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="sliderImageId"> {{-- For updates --}}
                            <div class="form-group">
                                <label for="sliderImageFile">Fichier Image</label>
                                <input type="file" class="form-control" name="image_path" id="sliderImageFile">
                                <img id="currentSliderImage" src="#" alt="Image actuelle"
                                    class="current-image-preview" style="display:none;">
                            </div>
                            <div class="form-group">
                                <label for="sliderImageTitle">Titre</label>
                                <input type="text" class="form-control" name="title" id="sliderImageTitle"
                                    placeholder="Titre principal du slider">
                            </div>
                            <div class="form-group">
                                <label for="sliderImageSubtitle">Sous-titre</label>
                                <input type="text" class="form-control" name="subtitle" id="sliderImageSubtitle"
                                    placeholder="Sous-titre (optionnel)">
                            </div>
                            <div class="form-group">
                                <label for="sliderImageDescription">Description</label>
                                <textarea class="form-control" name="description" id="sliderImageDescription" rows="3"
                                    placeholder="Description (optionnel)"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="sliderImageOrder">Ordre d'affichage</label>
                                <input type="number" class="form-control" name="order" id="sliderImageOrder"
                                    value="0">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" name="is_published"
                                    id="sliderImageIsPublished" value="1">
                                <label class="form-check-label" for="sliderImageIsPublished">Publié</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="partners" class="admin-section" style="display: none;">
                    <h3>Gestion des Partenaires</h3>
                    <button class="btn-add-new" data-target-form="partner-form">Ajouter un nouveau partenaire</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Logo</th>
                                    <th>URL du Site Web</th>
                                    <th>Ordre</th>
                                    <th>Publié</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($partners as $partner)
                                    <tr data-entity="partners" data-id="{{ $partner->id }}"
                                        data-name="{{ $partner->name }}"
                                        data-logo-path="{{ $partner->logo_path ? Storage::url($partner->logo_path) : '' }}"
                                        data-website-url="{{ $partner->website_url ?? '' }}"
                                        data-order="{{ $partner->order }}"
                                        data-is-published="{{ $partner->is_published ? 'true' : 'false' }}">
                                        <td>{{ $partner->id }}</td>
                                        <td>{{ $partner->name }}</td>
                                        <td>
                                            @if ($partner->logo_path)
                                                <img src="{{ Storage::url($partner->logo_path) }}" alt="Partner Logo"
                                                    style="max-height: 50px;">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td><a href="{{ $partner->website_url ?? '#' }}"
                                                target="_blank">{{ Str::limit($partner->website_url, 30) ?? 'N/A' }}</a>
                                        </td>
                                        <td>{{ $partner->order }}</td>
                                        <td>{{ $partner->is_published ? 'Oui' : 'Non' }}</td>
                                        <td class="action-buttons">
                                            <button class="btn btn-edit">Modifier</button>
                                            <button class="btn btn-delete">Supprimer</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="form-section mt-4" style="display: none;" id="partner-form">
                        <h4>Ajouter/Modifier Partenaire</h4>
                        <form action="{{ route('admin.partners.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="partnerId"> {{-- For updates --}}
                            <div class="form-group">
                                <label for="partnerName">Nom du Partenaire</label>
                                <input type="text" class="form-control" name="name" id="partnerName"
                                    placeholder="Nom du partenaire" required>
                            </div>
                            <div class="form-group">
                                <label for="partnerLogo">Logo du Partenaire</label>
                                <input type="file" class="form-control" name="logo_path" id="partnerLogo">
                                <img id="currentPartnerLogo" src="#" alt="Logo actuel"
                                    class="current-image-preview" style="display:none;">
                            </div>
                            <div class="form-group">
                                <label for="partnerWebsiteUrl">URL du Site Web</label>
                                <input type="url" class="form-control" name="website_url" id="partnerWebsiteUrl"
                                    placeholder="Ex: https://www.example.com">
                            </div>
                            <div class="form-group">
                                <label for="partnerOrder">Ordre d'affichage</label>
                                <input type="number" class="form-control" name="order" id="partnerOrder"
                                    value="0">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" name="is_published"
                                    id="partnerIsPublished" value="1">
                                <label class="form-check-label" for="partnerIsPublished">Publié</label>
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
                                        <td>{{ Str::limit($faq->question, 50) }}</td>
                                        <td>{{ Str::limit($faq->answer, 70) }}</td>
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
                        <h4>Ajouter/Modifier FAQ</h4>
                        <form action="{{ route('admin.faqs.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" id="faqId"> {{-- For updates --}}
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
                                        <td>{{ Str::limit($service->short_description, 50) }}</td>
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
                        <h4>Ajouter/Modifier Service</h4>
                        <form action="{{ route('admin.services.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="serviceId"> {{-- For updates --}}
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
                                <img id="currentServiceImage" src="#" alt="Image actuelle"
                                    class="current-image-preview" style="display:none;">
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
                        <form action="{{ route('admin.zone.store') }}" method="POST">
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
                                <input type="checkbox" class="form-check-input" name="is_active" id="zoneIsActive"
                                    value="1">
                                <label class="form-check-label" for="zoneIsActive">Active</label>
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
                                        data-event-date="{{ $event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('Y-m-d\TH:i') : '' }}"
                                        data-location="{{ $event->location ?? '' }}"
                                        data-is-published="{{ $event->is_published ? 'true' : 'false' }}"
                                        data-content="{{ $event->content }}"
                                        data-image="{{ $event->image ? Storage::url($event->image) : '' }}">
                                        <td>{{ $event->id }}</td>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ $event->slug }}</td>
                                        <td>{{ $event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('Y-m-d H:i') : 'N/A' }}
                                        </td>
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
                        <h4>Ajouter/Modifier Événement</h4>
                        <form action="{{ route('admin.events.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="eventId"> {{-- For updates --}}
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
                                <img id="currentEventImage" src="#" alt="Image actuelle"
                                    class="current-image-preview" style="display:none;">
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
                <section id="blog-posts" class="admin-section" style="display: none;">
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
                        <form action="{{ route('admin.blog.store') }}" method="POST"
                            enctype="multipart/form-data">
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
                                <img id="currentBlogPostImage" src="#" alt="Image actuelle"
                                    class="current-image-preview" style="display:none;">
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
                    {{-- Form will be injected here by JavaScript --}}
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


        @include('shared.js') Assuming this includes jQuery or other necessary base JS

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


                // Initial display setup: Show settings by default, hide others
                const allSections = document.querySelectorAll('.admin-content .admin-section');
                allSections.forEach(s => s.style.display = 'none'); // Hide all first

                const defaultSectionId = '#settings'; // Default section
                const defaultSection = document.querySelector(defaultSectionId);
                if (defaultSection) {
                    defaultSection.style.display = 'block';
                }
                // Activate the corresponding nav link
                const defaultNavLink = document.querySelector(`.admin-sidebar nav ul li a[href="${defaultSectionId}"]`);
                if (defaultNavLink) {
                    document.querySelectorAll('.admin-sidebar nav ul li a').forEach(nav => nav.classList.remove(
                        'active'));
                    defaultNavLink.classList.add('active');
                }


                const navLinks = document.querySelectorAll('.admin-sidebar nav ul li a');
                const sections = document.querySelectorAll('.admin-content .admin-section');

                navLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        navLinks.forEach(nav => nav.classList.remove('active'));
                        this.classList.add('active');
                        sections.forEach(section => section.style.display = 'none');
                        const targetId = this.getAttribute('href');
                        const targetSection = document.querySelector(targetId);
                        if (targetSection) {
                            targetSection.style.display = 'block';
                        }

                        // Special handling for settings if needed (e.g., re-init dynamic fields)
                        if (targetId === '#settings') {
                            const phonesContainer = document.getElementById('phone-numbers-container');
                            // Clear existing before re-populating to avoid duplicates if re-clicked
                            phonesContainer.innerHTML = '';
                            const settingsData = {!! json_encode($settings ?? ['phones' => []]) !!};
                            const phonesData = settingsData.phones || {};
                            if (Object.keys(phonesData).length > 0 && phonesContainer.children
                                .length === 0) {
                                for (const key in phonesData) {
                                    if (Object.hasOwnProperty.call(phonesData, key)) {
                                        addPhoneNumberField('phone-numbers-container', key, phonesData[
                                            key]);
                                    }
                                }
                            }
                        }
                    });
                });

                // If settings is the default visible tab, ensure phone numbers are populated
                if (defaultSectionId === '#settings') {
                    const phonesContainer = document.getElementById('phone-numbers-container');
                    if (phonesContainer.children.length === 0) { // Only populate if empty
                        const settingsData = {!! json_encode($settings ?? ['phones' => []]) !!};
                        const phonesData = settingsData.phones || {};
                        for (const key in phonesData) {
                            if (Object.hasOwnProperty.call(phonesData, key)) {
                                addPhoneNumberField('phone-numbers-container', key, phonesData[key]);
                            }
                        }
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


                document.querySelectorAll('.btn-remove-phone').forEach(div => {
                    div.addEventListener('click', function() {
                        div.closest('.phone-input-group').remove();
                    });
                });


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
                        console.log('dddd');

                        div.remove();
                    });
                }
                if (document.getElementById('add-phone-button')) {
                    document.getElementById('add-phone-button').addEventListener('click', function() {
                        addPhoneNumberField('phone-numbers-container');
                    });
                }


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
                                `<div class="mb-2">Image actuelle: <img src="${data.imagePath}" alt="Current Image" class="current-image-preview"> <button type="button" class="btn btn-xs btn-warning remove-image-btn" data-field="image">Retirer l'image</button></div>` :
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
                            // ... cases for other entities like 'blog', 'categories', etc.
                        case 'blog':
                            modalTitle.textContent = 'Modifier l\'Article de Blog';
                            actionRoute = `/admin/blog/${data.id}`;
                            currentImageHTML = data.image ?
                                `<div class="mb-2">Image actuelle: <img src="${data.image}" alt="Current Image" class="current-image-preview"> <button type="button" class="btn btn-xs btn-warning remove-image-btn" data-field="image_blog">Retirer l'image</button></div>` :
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
                                `<div class="mb-2">Image actuelle: <img src="${data.image}" alt="Current Image" class="current-image-preview"> <button type="button" class="btn btn-xs btn-warning remove-image-btn" data-field="image_event">Retirer l'image</button></div>` :
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
                                `<div class="mb-2">Image actuelle: <img src="${data.image}" alt="Current Image" class="current-image-preview"> <button type="button" class="btn btn-xs btn-warning remove-image-btn" data-field="image_service">Retirer l'image</button></div>` :
                                '<p class="text-muted">Aucune image actuelle.</p>';
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
                                    <label for="modalServiceImage">Image</label>
                                    ${currentImageHTML}
                                    <input type="file" class="form-control" name="image" id="modalServiceImage">
                                    <input type="hidden" name="remove_image_service" id="modalServiceRemoveImageFlag" value="0">
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceWhatsappNumber">Numéro WhatsApp</label>
                                    <input type="text" class="form-control" name="whatsapp_number" id="modalServiceWhatsappNumber" value="${data.whatsappNumber || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceOrder">Ordre d'affichage</label>
                                    <input type="number" class="form-control" name="order" id="modalServiceOrder" value="${data.order || '0'}">
                                </div>
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
                            actionRoute = `/admin/zone/${data.id}`;
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
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="is_active" id="modalZoneIsActive" value="1" ${data.isActive === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalZoneIsActive">Active</label>
                                </div>`;
                            modalForm.insertAdjacentHTML('beforeend', formHtml);
                            break;
                        case 'slider-images':
                            modalTitle.textContent = 'Modifier l\'Image du Slider';
                            actionRoute = `/admin/slider-images/${data.id}`;
                            currentImageHTML = data.imagePath ?
                                `<div class="mb-2">Image actuelle: <img src="${data.imagePath}" alt="Current Image" class="current-image-preview"> <button type="button" class="btn btn-xs btn-warning remove-image-btn" data-field="image_slider">Retirer l'image</button></div>` :
                                '<p class="text-muted">Aucune image actuelle.</p>';
                            formHtml = `
                                <input type="hidden" name="id" value="${data.id || ''}">
                                <div class="form-group">
                                    <label for="modalSliderImageTitle">Titre</label>
                                    <input type="text" class="form-control" name="title" id="modalSliderImageTitle" value="${data.title || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalSliderImageSubtitle">Sous-titre</label>
                                    <input type="text" class="form-control" name="subtitle" id="modalSliderImageSubtitle" value="${data.subtitle || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalSliderImageDescription">Description</label>
                                    <textarea class="form-control" name="description" id="modalSliderImageDescription" rows="2">${data.description || ''}</textarea>
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
                                `<div class="mb-2">Logo actuel: <img src="${data.logoPath}" alt="Current Logo" class="current-image-preview"> <button type="button" class="btn btn-xs btn-warning remove-image-btn" data-field="logo_partner">Retirer le logo</button></div>` :
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

    </div>

</body>

</html>
