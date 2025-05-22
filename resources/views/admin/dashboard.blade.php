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


    @vite('resources/css/admin.css') {{-- Custom admin styles --}}
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
                        <li><a href="#blog-posts" class="active">Articles de Blog</a></li>
                        <li><a href="#pages">Pages</a></li>
                        <li><a href="#categories">Catégories</a></li>
                        <li><a href="#events">Événements</a></li>
                        <li><a href="#faqs">FAQs</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#zones">Zones</a></li>
                        <li><a href="#settings">Paramètres du Site</a></li>
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

                <section id="blog-posts" class="admin-section">
                    <h3>Gestion des Articles de Blog</h3>
                    <button class="btn-add-new">Ajouter un nouvel article</button>
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
                                <tr data-entity="blog-post" data-id="1"
                                    data-title="Visites autoguidées et promenades de la grande ville"
                                    data-slug="visites-autoguidées-promenades-grande-ville" data-category-id="1"
                                    data-category-name="Ambulance d'urgence" data-is-published="true"
                                    data-published-at="2025-04-19T00:00" data-content="Contenu complet du blog 1..."
                                    data-image="image1.jpg">
                                    <td>1</td>
                                    <td>Visites autoguidées et promenades de la grande ville</td>
                                    <td>visites-autoguidées-promenades-grande-ville</td>
                                    <td>Ambulance d'urgence</td>
                                    <td>Oui</td>
                                    <td>2025-04-19</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                                <tr data-entity="blog-post" data-id="2"
                                    data-title="Assistance pour les maisons et les propriétés immobilières"
                                    data-slug="assistance-maisons-proprietes-immobilieres" data-category-id="2"
                                    data-category-name="Ambulance aérienne" data-is-published="true"
                                    data-published-at="2025-04-18T00:00" data-content="Contenu complet du blog 2..."
                                    data-image="image2.jpg">
                                    <td>2</td>
                                    <td>Assistance pour les maisons et les propriétés immobilières</td>
                                    <td>assistance-maisons-proprietes-immobilieres</td>
                                    <td>Ambulance aérienne</td>
                                    <td>Oui</td>
                                    <td>2025-04-18</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-section mt-4" style="display: none;">
                        <h4>Ajouter/Modifier un Article de Blog</h4>
                        <form>
                            <div class="form-group">
                                <label for="blogPostTitle">Titre</label>
                                <input type="text" class="form-control" id="blogPostTitle"
                                    placeholder="Entrez le titre de l'article">
                            </div>
                            <div class="form-group">
                                <label for="blogPostSlug">Slug</label>
                                <input type="text" class="form-control" id="blogPostSlug"
                                    placeholder="Entrez le slug (ex: mon-super-article)">
                            </div>
                            <div class="form-group">
                                <label for="blogPostContent">Contenu</label>
                                <textarea class="form-control" id="blogPostContent" rows="5" placeholder="Entrez le contenu de l'article"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="blogPostImage">Image</label>
                                <input type="file" class="form-control" id="blogPostImage">
                            </div>
                            <div class="form-group">
                                <label for="blogPostCategory">Catégorie</label>
                                <select class="form-control" id="blogPostCategory">
                                    <option value="">Sélectionner une catégorie</option>
                                    <option value="1">Ambulance d'urgence</option>
                                    <option value="2">Ambulance aérienne</option>
                                </select>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="blogPostIsPublished">
                                <label class="form-check-label" for="blogPostIsPublished">Publié</label>
                            </div>
                            <div class="form-group">
                                <label for="blogPostPublishedAt">Date de publication</label>
                                <input type="datetime-local" class="form-control" id="blogPostPublishedAt">
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="categories" class="admin-section" style="display: none;">
                    <h3>Gestion des Catégories</h3>
                    <button class="btn-add-new">Ajouter une nouvelle catégorie</button>
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
                                <tr data-entity="category" data-id="1" data-name="Ambulance d'urgence"
                                    data-slug="ambulance-urgence">
                                    <td>1</td>
                                    <td>Ambulance d'urgence</td>
                                    <td>ambulance-urgence</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                                <tr data-entity="category" data-id="2" data-name="Ambulance aérienne"
                                    data-slug="ambulance-aerienne">
                                    <td>2</td>
                                    <td>Ambulance aérienne</td>
                                    <td>ambulance-aerienne</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-section mt-4" style="display: none;">
                        <h4>Ajouter/Modifier une Catégorie</h4>
                        <form>
                            <div class="form-group">
                                <label for="categoryName">Nom</label>
                                <input type="text" class="form-control" id="categoryName"
                                    placeholder="Entrez le nom de la catégorie">
                            </div>
                            <div class="form-group">
                                <label for="categorySlug">Slug</label>
                                <input type="text" class="form-control" id="categorySlug"
                                    placeholder="Entrez le slug (ex: ma-categorie)">
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="events" class="admin-section" style="display: none;">
                    <h3>Gestion des Événements</h3>
                    <button class="btn-add-new">Ajouter un nouvel événement</button>
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
                                <tr data-entity="event" data-id="1" data-title="Événements sportifs"
                                    data-slug="evenements-sportifs" data-event-date="2025-08-20T10:00"
                                    data-location="6391 Elgin St. Celina" data-is-published="true"
                                    data-content="Contenu complet de l'événement 1..." data-image="event1.jpg">
                                    <td>1</td>
                                    <td>Événements sportifs</td>
                                    <td>evenements-sportifs</td>
                                    <td>2025-08-20 10:00</td>
                                    <td>6391 Elgin St. Celina</td>
                                    <td>Oui</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                                <tr data-entity="event" data-id="2" data-title="Événements communautaires"
                                    data-slug="evenements-communautaires" data-event-date="2025-09-15T14:30"
                                    data-location="12, Victoria St, Australie" data-is-published="true"
                                    data-content="Contenu complet de l'événement 2..." data-image="event2.jpg">
                                    <td>2</td>
                                    <td>Événements communautaires</td>
                                    <td>evenements-communautaires</td>
                                    <td>2025-09-15 14:30</td>
                                    <td>12, Victoria St, Australie</td>
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
                        <h4>Ajouter/Modifier un Événement</h4>
                        <form>
                            <div class="form-group">
                                <label for="eventTitle">Titre de l'événement</label>
                                <input type="text" class="form-control" id="eventTitle"
                                    placeholder="Entrez le titre">
                            </div>
                            <div class="form-group">
                                <label for="eventSlug">Slug</label>
                                <input type="text" class="form-control" id="eventSlug"
                                    placeholder="Entrez le slug (ex: mon-evenement)">
                            </div>
                            <div class="form-group">
                                <label for="eventContent">Contenu</label>
                                <textarea class="form-control" id="eventContent" rows="5" placeholder="Entrez le contenu de l'événement"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="eventDate">Date et Heure de l'événement</label>
                                <input type="datetime-local" class="form-control" id="eventDate">
                            </div>
                            <div class="form-group">
                                <label for="eventLocation">Lieu</label>
                                <input type="text" class="form-control" id="eventLocation"
                                    placeholder="Entrez le lieu">
                            </div>
                            <div class="form-group">
                                <label for="eventImage">Image</label>
                                <input type="file" class="form-control" id="eventImage">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="eventIsPublished">
                                <label class="form-check-label" for="eventIsPublished">Publié</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="faqs" class="admin-section" style="display: none;">
                    <h3>Gestion des FAQs</h3>
                    <button class="btn-add-new">Ajouter une nouvelle FAQ</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Question</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-entity="faq" data-id="1"
                                    data-question="Quels types d'urgences médicales traitez-vous ?"
                                    data-answer="Notre service d'ambulance est équipé pour gérer un large éventail d'urgences médicales, y compris les traumatismes.">
                                    <td>1</td>
                                    <td>Quels types d'urgences médicales traitez-vous ?</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                                <tr data-entity="faq" data-id="2"
                                    data-question="Quel équipement vos ambulances transportent-elles ?"
                                    data-answer="Notre service d'ambulance est équipé pour gérer un large éventail d'urgences médicales, y compris les traumatismes.">
                                    <td>2</td>
                                    <td>Quel équipement vos ambulances transportent-elles ?</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-section mt-4" style="display: none;">
                        <h4>Ajouter/Modifier une FAQ</h4>
                        <form>
                            <div class="form-group">
                                <label for="faqQuestion">Question</label>
                                <input type="text" class="form-control" id="faqQuestion"
                                    placeholder="Entrez la question">
                            </div>
                            <div class="form-group">
                                <label for="faqAnswer">Réponse</label>
                                <textarea class="form-control" id="faqAnswer" rows="3" placeholder="Entrez la réponse"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="services" class="admin-section" style="display: none;">
                    <h3>Gestion des Services</h3>
                    <button class="btn-add-new">Ajouter un nouveau service</button>
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
                                <tr data-entity="service" data-id="1" data-title="Ambulance Routière"
                                    data-icon="icon-ambulance"
                                    data-short-description="Transport rapide et sûr des patients."
                                    data-content="Contenu complet du service Ambulance Routière..."
                                    data-image="service1.jpg" data-whatsapp-number="+1234567890" data-order="0"
                                    data-is-published="true">
                                    <td>1</td>
                                    <td>Ambulance Routière</td>
                                    <td>icon-ambulance</td>
                                    <td>Transport rapide et sûr des patients.</td>
                                    <td>Oui</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                                <tr data-entity="service" data-id="2" data-title="Ambulance Aérienne"
                                    data-icon="icon-plane"
                                    data-short-description="Services de transport aérien médical d'urgence."
                                    data-content="Contenu complet du service Ambulance Aérienne..."
                                    data-image="service2.jpg" data-whatsapp-number="+0987654321" data-order="1"
                                    data-is-published="true">
                                    <td>2</td>
                                    <td>Ambulance Aérienne</td>
                                    <td>icon-plane</td>
                                    <td>Services de transport aérien médical d'urgence.</td>
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
                        <h4>Ajouter/Modifier un Service</h4>
                        <form>
                            <div class="form-group">
                                <label for="serviceTitle">Titre</label>
                                <input type="text" class="form-control" id="serviceTitle"
                                    placeholder="Entrez le titre du service">
                            </div>
                            <div class="form-group">
                                <label for="serviceIcon">Icône (classe CSS)</label>
                                <input type="text" class="form-control" id="serviceIcon"
                                    placeholder="Ex: icon-ambulance">
                            </div>
                            <div class="form-group">
                                <label for="serviceShortDescription">Description Courte</label>
                                <textarea class="form-control" id="serviceShortDescription" rows="2"
                                    placeholder="Entrez une courte description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="serviceContent">Contenu Complet</label>
                                <textarea class="form-control" id="serviceContent" rows="5"
                                    placeholder="Entrez le contenu complet du service"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="serviceImage">Image</label>
                                <input type="file" class="form-control" id="serviceImage">
                            </div>
                            <div class="form-group">
                                <label for="serviceWhatsappNumber">Numéro WhatsApp</label>
                                <input type="text" class="form-control" id="serviceWhatsappNumber"
                                    placeholder="Ex: +1234567890">
                            </div>
                            <div class="form-group">
                                <label for="serviceOrder">Ordre d'affichage</label>
                                <input type="number" class="form-control" id="serviceOrder" value="0">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="serviceIsPublished">
                                <label class="form-check-label" for="serviceIsPublished">Publié</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="zones" class="admin-section" style="display: none;">
                    <h3>Gestion des Zones</h3>
                    <button class="btn-add-new">Ajouter une nouvelle zone</button>
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
                                <tr data-entity="zone" data-id="1" data-name="Los Angeles" data-code="LA"
                                    data-description="Zone de service pour Los Angeles." data-is-active="true">
                                    <td>1</td>
                                    <td>Los Angeles</td>
                                    <td>LA</td>
                                    <td>Zone de service pour Los Angeles.</td>
                                    <td>Oui</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                                <tr data-entity="zone" data-id="2" data-name="New York" data-code="NY"
                                    data-description="Zone de service pour New York." data-is-active="true">
                                    <td>2</td>
                                    <td>New York</td>
                                    <td>NY</td>
                                    <td>Zone de service pour New York.</td>
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
                        <h4>Ajouter/Modifier une Zone</h4>
                        <form>
                            <div class="form-group">
                                <label for="zoneName">Nom</label>
                                <input type="text" class="form-control" id="zoneName"
                                    placeholder="Entrez le nom de la zone">
                            </div>
                            <div class="form-group">
                                <label for="zoneCode">Code</label>
                                <input type="text" class="form-control" id="zoneCode"
                                    placeholder="Entrez le code de la zone (ex: LA, NY)">
                            </div>
                            <div class="form-group">
                                <label for="zoneDescription">Description</label>
                                <textarea class="form-control" id="zoneDescription" rows="3" placeholder="Entrez une description de la zone"></textarea>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="zoneIsActive">
                                <label class="form-check-label" for="zoneIsActive">Active</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="settings" class="admin-section" style="display: none;">
                    <h3>Gestion des Paramètres du Site</h3>
                    <button class="btn-add-new">Ajouter/Modifier les paramètres</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom du Site</th>
                                    <th>Téléphone</th>
                                    <th>Email</th>
                                    <th>Logo</th>
                                    <th>Texte de Pied de Page</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-entity="setting" data-id="1" data-site-name="Amcare"
                                    data-phone="+91 (234) 5432" data-email="info@example.com" data-logo="logo.png"
                                    data-footer-text="Copyright 2025 par Amcare.">
                                    <td>1</td>
                                    <td>Amcare</td>
                                    <td>+91 (234) 5432</td>
                                    <td>info@example.com</td>
                                    <td>logo.png</td>
                                    <td>Copyright 2025 par Amcare.</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-section mt-4" style="display: none;">
                        <h4>Ajouter/Modifier les Paramètres du Site</h4>
                        <form>
                            <div class="form-group">
                                <label for="siteName">Nom du Site</label>
                                <input type="text" class="form-control" id="siteName"
                                    placeholder="Entrez le nom du site">
                            </div>
                            <div class="form-group">
                                <label for="sitePhone">Téléphone</label>
                                <input type="text" class="form-control" id="sitePhone"
                                    placeholder="Entrez le numéro de téléphone">
                            </div>
                            <div class="form-group">
                                <label for="siteEmail">Email</label>
                                <input type="email" class="form-control" id="siteEmail"
                                    placeholder="Entrez l'adresse email">
                            </div>
                            <div class="form-group">
                                <label for="siteLogo">Logo</label>
                                <input type="file" class="form-control" id="siteLogo">
                            </div>
                            <div class="form-group">
                                <label for="siteFooterText">Texte de Pied de Page</label>
                                <textarea class="form-control" id="siteFooterText" rows="3" placeholder="Entrez le texte du pied de page"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                @include('admin.pages.section')
                
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
                    <form id="modalForm">
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
                document.querySelector('#blog-posts').style.display = 'block'; // Show blogs by default
                document.querySelector('#categories').style.display = 'none';
                document.querySelector('#events').style.display = 'none';
                document.querySelector('#faqs').style.display = 'none';
                document.querySelector('#services').style.display = 'none';
                document.querySelector('#zones').style.display = 'none';
                document.querySelector('#settings').style.display = 'none';


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
                    });
                });

                // Handle "Add New" button clicks to show/hide forms
                document.querySelectorAll('.admin-section .btn-add-new').forEach(button => {
                    button.addEventListener('click', function() {
                        const formSection = this.nextElementSibling
                            .nextElementSibling; // Get the form-section div
                        formSection.style.display = 'block';
                        this.style.display = 'none'; // Hide the "Add New" button
                    });
                });

                // Handle "Cancel" button clicks to hide forms
                document.querySelectorAll('.admin-section .cancel-form').forEach(button => {
                    button.addEventListener('click', function() {
                        const formSection = this.closest('.form-section');
                        formSection.style.display = 'none';
                        formSection.previousElementSibling.previousElementSibling.style.display =
                            'inline-block'; // Show "Add New" button
                    });
                });

                // Modal Logic (Edit Modal)
                const editModal = document.getElementById('editModal');
                const closeEditModalButton = editModal.querySelector('.close-button');
                const modalCancelButton = document.getElementById('modalCancel');
                const modalSaveButton = document.getElementById('modalSave');
                const modalForm = document.getElementById('modalForm');
                const modalTitle = document.getElementById('modalTitle');

                // Function to open the edit modal and populate its form
                function openEditModal(entityType, data) {
                    modalForm.innerHTML = ''; // Clear previous form fields

                    let formHtml = '';
                    switch (entityType) {
                        case 'blog-post':
                            modalTitle.textContent = 'Modifier l\'Article de Blog';
                            formHtml = `
                                <div class="form-group">
                                    <label for="modalBlogPostTitle">Titre</label>
                                    <input type="text" class="form-control" id="modalBlogPostTitle" value="${data.title || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalBlogPostSlug">Slug</label>
                                    <input type="text" class="form-control" id="modalBlogPostSlug" value="${data.slug || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalBlogPostContent">Contenu</label>
                                    <textarea class="form-control" id="modalBlogPostContent" rows="5">${data.content || ''}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="modalBlogPostImage">Image (actuel: ${data.image || 'N/A'})</label>
                                    <input type="file" class="form-control" id="modalBlogPostImage">
                                </div>
                                <div class="form-group">
                                    <label for="modalBlogPostCategory">Catégorie</label>
                                    <select class="form-control" id="modalBlogPostCategory">
                                        <option value="">Sélectionner une catégorie</option>
                                        <option value="1" ${data.categoryId == '1' ? 'selected' : ''}>Ambulance d'urgence</option>
                                        <option value="2" ${data.categoryId == '2' ? 'selected' : ''}>Ambulance aérienne</option>
                                    </select>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="modalBlogPostIsPublished" ${data.isPublished === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalBlogPostIsPublished">Publié</label>
                                </div>
                                <div class="form-group">
                                    <label for="modalBlogPostPublishedAt">Date de publication</label>
                                    <input type="datetime-local" class="form-control" id="modalBlogPostPublishedAt" value="${data.publishedAt || ''}">
                                </div>
                            `;
                            break;
                        case 'category':
                            modalTitle.textContent = 'Modifier la Catégorie';
                            formHtml = `
                                <div class="form-group">
                                    <label for="modalCategoryName">Nom</label>
                                    <input type="text" class="form-control" id="modalCategoryName" value="${data.name || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalCategorySlug">Slug</label>
                                    <input type="text" class="form-control" id="modalCategorySlug" value="${data.slug || ''}">
                                </div>
                            `;
                            break;
                        case 'event':
                            modalTitle.textContent = 'Modifier l\'Événement';
                            formHtml = `
                                <div class="form-group">
                                    <label for="modalEventTitle">Titre de l'événement</label>
                                    <input type="text" class="form-control" id="modalEventTitle" value="${data.title || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalEventSlug">Slug</label>
                                    <input type="text" class="form-control" id="modalEventSlug" value="${data.slug || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalEventContent">Contenu</label>
                                    <textarea class="form-control" id="modalEventContent" rows="5">${data.content || ''}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="modalEventDate">Date et Heure de l'événement</label>
                                    <input type="datetime-local" class="form-control" id="modalEventDate" value="${data.eventDate || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalEventLocation">Lieu</label>
                                    <input type="text" class="form-control" id="modalEventLocation" value="${data.location || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalEventImage">Image (actuel: ${data.image || 'N/A'})</label>
                                    <input type="file" class="form-control" id="modalEventImage">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="modalEventIsPublished" ${data.isPublished === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalEventIsPublished">Publié</label>
                                </div>
                            `;
                            break;
                        case 'faq':
                            modalTitle.textContent = 'Modifier la FAQ';
                            formHtml = `
                                <div class="form-group">
                                    <label for="modalFaqQuestion">Question</label>
                                    <input type="text" class="form-control" id="modalFaqQuestion" value="${data.question || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalFaqAnswer">Réponse</label>
                                    <textarea class="form-control" id="modalFaqAnswer" rows="3">${data.answer || ''}</textarea>
                                </div>
                            `;
                            break;
                        case 'service':
                            modalTitle.textContent = 'Modifier le Service';
                            formHtml = `
                                <div class="form-group">
                                    <label for="modalServiceTitle">Titre</label>
                                    <input type="text" class="form-control" id="modalServiceTitle" value="${data.title || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceIcon">Icône (classe CSS)</label>
                                    <input type="text" class="form-control" id="modalServiceIcon" value="${data.icon || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceShortDescription">Description Courte</label>
                                    <textarea class="form-control" id="modalServiceShortDescription" rows="2">${data.shortDescription || ''}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceContent">Contenu Complet</label>
                                    <textarea class="form-control" id="modalServiceContent" rows="5">${data.content || ''}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceImage">Image (actuel: ${data.image || 'N/A'})</label>
                                    <input type="file" class="form-control" id="modalServiceImage">
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceWhatsappNumber">Numéro WhatsApp</label>
                                    <input type="text" class="form-control" id="modalServiceWhatsappNumber" value="${data.whatsappNumber || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalServiceOrder">Ordre d'affichage</label>
                                    <input type="number" class="form-control" id="modalServiceOrder" value="${data.order || '0'}">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="modalServiceIsPublished" ${data.isPublished === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalServiceIsPublished">Publié</label>
                                </div>
                            `;
                            break;
                        case 'zone':
                            modalTitle.textContent = 'Modifier la Zone';
                            formHtml = `
                                <div class="form-group">
                                    <label for="modalZoneName">Nom</label>
                                    <input type="text" class="form-control" id="modalZoneName" value="${data.name || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalZoneCode">Code</label>
                                    <input type="text" class="form-control" id="modalZoneCode" value="${data.code || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalZoneDescription">Description</label>
                                    <textarea class="form-control" id="modalZoneDescription" rows="3">${data.description || ''}</textarea>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="modalZoneIsActive" ${data.isActive === 'true' ? 'checked' : ''}>
                                    <label class="form-check-label" for="modalZoneIsActive">Active</label>
                                </div>
                            `;
                            break;
                        case 'setting':
                            modalTitle.textContent = 'Modifier les Paramètres du Site';
                            formHtml = `
                                <div class="form-group">
                                    <label for="modalSiteName">Nom du Site</label>
                                    <input type="text" class="form-control" id="modalSiteName" value="${data.siteName || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalSitePhone">Téléphone</label>
                                    <input type="text" class="form-control" id="modalSitePhone" value="${data.phone || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalSiteEmail">Email</label>
                                    <input type="email" class="form-control" id="modalSiteEmail" value="${data.email || ''}">
                                </div>
                                <div class="form-group">
                                    <label for="modalSiteLogo">Logo (actuel: ${data.logo || 'N/A'})</label>
                                    <input type="file" class="form-control" id="modalSiteLogo">
                                </div>
                                <div class="form-group">
                                    <label for="modalSiteFooterText">Texte de Pied de Page</label>
                                    <textarea class="form-control" id="modalSiteFooterText" rows="3">${data.footerText || ''}</textarea>
                                </div>
                            `;
                            break;
                        default:
                            formHtml = '<p>Aucune donnée de formulaire disponible pour ce type d\'entité.</p>';
                            break;
                    }
                    modalForm.innerHTML = formHtml;
                    editModal.style.display = 'flex';
                }

                // Event listener for all "Modifier" buttons
                document.querySelectorAll('.btn-edit').forEach(button => {
                    button.addEventListener('click', function() {
                        const row = this.closest('tr');
                        const entityType = row.dataset.entity;
                        const data = row.dataset;
                        openEditModal(entityType, data);
                    });
                });

                // Close edit modal when clicking on (x)
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

                // Handle save button click (placeholder for actual update logic)
                modalSaveButton.onclick = function() {
                    // Here you would collect data from the modalForm fields
                    // and send it to your Laravel backend via an AJAX request (e.g., fetch API)
                    console.log('Données du modal à enregistrer...');
                    // Example: const updatedTitle = document.getElementById('modalBlogPostTitle').value;
                    // Then send this data to your Laravel update endpoint.

                    // For now, just close the modal
                    editModal.style.display = 'none';
                    // alert('Données enregistrées (simulé) !'); // Replaced by custom message box in a real app
                };


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

                // Handle confirm delete button click (placeholder for actual delete logic)
                confirmDeleteButton.onclick = function() {
                    if (itemToDelete) {
                        console.log(
                            `Suppression de l'élément de type: ${itemToDelete.type} avec l'ID: ${itemToDelete.id}`
                        );
                        // Here you would send an AJAX request to your Laravel backend
                        // to delete the item (e.g., DELETE /api/${itemToDelete.type}s/${itemToDelete.id})

                        // For now, just close the modal and simulate deletion
                        deleteConfirmationModal.style.display = 'none';
                        alert(
                            `L'élément ${itemToDelete.id} (${itemToDelete.type}) a été supprimé (simulé) !`
                            ); // Use a custom message box
                        itemToDelete = null; // Clear the item to delete
                        // You might want to refresh the table or remove the row from the DOM here
                    }
                };
            });
        </script>

    </div>

</body>

</html>
