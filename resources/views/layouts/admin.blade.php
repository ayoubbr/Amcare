<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Administration Amcare">
    <meta name="author" content="Amcare">
    <title>Amcare - Administration</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/admin/sb-admin-2.min.css') }}" rel="stylesheet">
    
    <!-- Additional CSS -->
    @stack('styles')
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-ambulance"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Amcare Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Contenu
            </div>

            <!-- Nav Item - Pages -->
            <li class="nav-item {{ request()->routeIs('admin.pages.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.pages.index') }}">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Pages</span>
                </a>
            </li>

            <!-- Nav Item - Services -->
            <li class="nav-item {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.services.index') }}">
                    <i class="fas fa-fw fa-ambulance"></i>
                    <span>Services</span>
                </a>
            </li>

            <!-- Nav Item - Team -->
            <li class="nav-item {{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.team.index') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Équipe</span>
                </a>
            </li>

            <!-- Nav Item - Events -->
            <li class="nav-item {{ request()->routeIs('admin.events.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.events.index') }}">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Événements</span>
                </a>
            </li>

            <!-- Nav Item - Blog -->
            <li class="nav-item {{ request()->routeIs('admin.blog.*') || request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="false" aria-controls="collapseBlog">
                    <i class="fas fa-fw fa-blog"></i>
                    <span>Blog</span>
                </a>
                <div id="collapseBlog" class="collapse {{ request()->routeIs('admin.blog.*') || request()->routeIs('admin.categories.*') ? 'show' : '' }}" aria-labelledby="headingBlog" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->routeIs('admin.blog.index') || request()->routeIs('admin.blog.create') || request()->routeIs('admin.blog.edit') ? 'active' : '' }}" href="{{ route('admin.blog.index') }}">Articles</a>
                        <a class="collapse-item {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}" href="{{ route('admin.categories.index') }}">Catégories</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Testimonials -->
            <li class="nav-item {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.testimonials.index') }}">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>Témoignages</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Demandes
            </div>

            <!-- Nav Item - Contact Requests -->
            <li class="nav-item {{ request()->routeIs('admin.contact-requests.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.contact-requests.index') }}">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Contacts</span>
                </a>
            </li>

            <!-- Nav Item - Quote Requests -->
            <li class="nav-item {{ request()->routeIs('admin.quote-requests.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.quote-requests.index') }}">
                    <i class="fas fa-fw fa-file-invoice-dollar"></i>
                    <span>Devis</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Configuration
            </div>

            <!-- Nav Item - Settings -->
            <li class="nav-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.settings.edit') }}">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Paramètres</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                @if($alertsCount > 0)
                                    <span class="badge badge-danger badge-counter">{{ $alertsCount }}</span>
                                @endif
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alertes
                                </h6>
                                
                                
                                @forelse($unreadContacts as $contact)
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.contact-requests.show', $contact) }}">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-envelope text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">{{ $contact->created_at->format('d/m/Y H:i') }}</div>
                                            <span class="font-weight-bold">Nouveau message de {{ $contact->name }}</span>
                                        </div>
                                    </a>
                                @empty
                                @endforelse
                                
                                @forelse($unprocessedQuotes as $quote)
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.quote-requests.show', $quote) }}">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-file-invoice-dollar text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">{{ $quote->created_at->format('d/m/Y H:i') }}</div>
                                            <span class="font-weight-bold">Nouvelle demande de devis de {{ $quote->name }}</span>
                                        </div>
                                    </a>
                                @empty
                                @endforelse
                                
                                @if($unreadContacts->count() == 0 && $unprocessedQuotes->count() == 0)
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-info">
                                                <i class="fas fa-check text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span>Aucune nouvelle alerte</span>
                                        </div>
                                    </a>
                                @endif
                                
                                <a class="dropdown-item text-center small text-gray-500" href="{{ route('admin.contact-requests.index') }}">Voir toutes les demandes</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('admin.profile.edit') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Déconnexion
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @if(session('success'))
                    <div class="container-fluid">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif

                @if(session('error'))
                    <div class="container-fluid">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif

                @yield('content')
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Amcare {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Prêt à partir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à mettre fin à votre session en cours.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Déconnexion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <script src="{{ asset('js/admin/sb-admin-2.min.js') }}"></script>

    @stack('scripts')
</body>
</html>
