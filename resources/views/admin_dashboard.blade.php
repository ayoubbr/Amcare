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
                        <li><a href="#blogs" class="active">Blogs</a></li>
                        <li><a href="#contact-infos">Infos Contact</a></li>
                        <li><a href="#events">Événements</a></li>
                        <li><a href="#faqs">FAQs</a></li>
                        <li><a href="#services">Services</a></li>
                    </ul>
                </nav>
            </aside>

            <main class="admin-content">
                <section class="page-title">
                    <h1>Gestion du Contenu</h1>
                </section>

                <section id="blogs" class="admin-section">
                    <h3>Gestion des Blogs</h3>
                    <button class="btn-add-new">Ajouter un nouveau blog</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Visites autoguidées et promenades de la grande ville</td>
                                    <td>19 avr. 2025</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Assistance pour les maisons et les propriétés immobilières</td>
                                    <td>18 avr. 2025</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-section mt-4" style="display: none;">
                        <h4>Ajouter/Modifier un Blog</h4>
                        <form>
                            <div class="form-group">
                                <label for="blogTitle">Titre du Blog</label>
                                <input type="text" class="form-control" id="blogTitle" placeholder="Entrez le titre">
                            </div>
                            <div class="form-group">
                                <label for="blogDate">Date</label>
                                <input type="date" class="form-control" id="blogDate">
                            </div>
                            <div class="form-group">
                                <label for="blogContent">Contenu</label>
                                <textarea class="form-control" id="blogContent" rows="5" placeholder="Entrez le contenu du blog"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="contact-infos" class="admin-section">
                    <h3>Gestion des Informations de Contact</h3>
                    <button class="btn-add-new">Ajouter une nouvelle info contact</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Valeur</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Téléphone (Urgence 1)</td>
                                    <td>+91 (234) 5431</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Email</td>
                                    <td>info@example.com</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-section mt-4" style="display: none;">
                        <h4>Ajouter/Modifier une Info Contact</h4>
                        <form>
                            <div class="form-group">
                                <label for="contactType">Type</label>
                                <input type="text" class="form-control" id="contactType"
                                    placeholder="Ex: Téléphone, Email, Adresse">
                            </div>
                            <div class="form-group">
                                <label for="contactValue">Valeur</label>
                                <input type="text" class="form-control" id="contactValue"
                                    placeholder="Ex: +91 (234) 5431, info@example.com">
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="events" class="admin-section">
                    <h3>Gestion des Événements</h3>
                    <button class="btn-add-new">Ajouter un nouvel événement</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Date</th>
                                    <th>Lieu</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Événements sportifs</td>
                                    <td>20 Août</td>
                                    <td>6391 Elgin St. Celina</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Événements communautaires</td>
                                    <td>15 Sept.</td>
                                    <td>12, Victoria St, Australie</td>
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
                                <label for="eventDate">Date</label>
                                <input type="date" class="form-control" id="eventDate">
                            </div>
                            <div class="form-group">
                                <label for="eventLocation">Lieu</label>
                                <input type="text" class="form-control" id="eventLocation"
                                    placeholder="Entrez le lieu">
                            </div>
                            <div class="form-group">
                                <label for="eventDescription">Description</label>
                                <textarea class="form-control" id="eventDescription" rows="5"
                                    placeholder="Entrez la description de l'événement"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>

                <section id="faqs" class="admin-section">
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
                                <tr>
                                    <td>1</td>
                                    <td>Quels types d'urgences médicales traitez-vous ?</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                                <tr>
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

                <section id="services" class="admin-section">
                    <h3>Gestion des Services</h3>
                    <button class="btn-add-new">Ajouter un nouveau service</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom du Service</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Soins intensifs</td>
                                    <td>Services de soins intensifs pour les patients gravement malades.</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-edit">Modifier</button>
                                        <button class="btn btn-delete">Supprimer</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Transport d'urgence</td>
                                    <td>Transport rapide et sûr des patients en cas d'urgence.</td>
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
                                <label for="serviceName">Nom du Service</label>
                                <input type="text" class="form-control" id="serviceName"
                                    placeholder="Entrez le nom du service">
                            </div>
                            <div class="form-group">
                                <label for="serviceDescription">Description</label>
                                <textarea class="form-control" id="serviceDescription" rows="3"
                                    placeholder="Entrez la description du service"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
                        </form>
                    </div>
                </section>
            </main>
        </div>

        @include('shared.js')

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('#blogs').style.display = 'block';
                document.querySelector('#contact-infos').style.display = 'none';
                document.querySelector('#events').style.display = 'none';
                document.querySelector('#faqs').style.display = 'none';
                document.querySelector('#services').style.display = 'none';

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

                // Initially show the Blogs section
                document.querySelector('#blogs').style.display = 'block';

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
            });
        </script>

    </div>

</body>

</html>
