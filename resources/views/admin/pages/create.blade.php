@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <i class="fas fa-file-alt text-primary mr-2"></i>Ajouter une nouvelle page
        </h1>
        <a href="{{ route('admin.pages.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50 mr-1"></i> Retour à la liste
        </a>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger shadow-sm border-left-danger">
        <h5 class="alert-heading font-weight-bold">
            <i class="fas fa-exclamation-triangle mr-2"></i>Erreurs de validation
        </h5>
        <hr>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data" id="pageForm">
        @csrf
        
        <div class="row">
            <div class="col-lg-8">
                <!-- Contenu principal -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <i class="fas fa-edit mr-1"></i>Contenu de la page
                        </h6>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#contentCard" aria-expanded="true">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse show" id="contentCard">
                        <div class="form-group">
                            <label for="title" class="font-weight-bold">Titre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" 
                                id="title" name="title" value="{{ old('title') }}" required
                                placeholder="Entrez le titre de la page">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">
                                <i class="fas fa-info-circle mr-1"></i>Le titre sera visible en haut de la page et dans les résultats de recherche.
                            </small>
                        </div>
                        
                        <div class="form-group mt-4">
                            <label for="content" class="font-weight-bold">Contenu <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('content') is-invalid @enderror" 
                                id="content" name="content" rows="12" required>{{ old('content') }}</textarea>
                            @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- SEO -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex align-items-center justify-content-between bg-gradient-light">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <i class="fas fa-search mr-1"></i>Optimisation SEO
                        </h6>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-toggle="collapse" data-target="#seoCard" aria-expanded="true">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body collapse show" id="seoCard">
                        <div class="form-group">
                            <label for="meta_title" class="font-weight-bold">Meta Titre</label>
                            <input type="text" class="form-control @error('meta_title') is-invalid @enderror" 
                                id="meta_title" name="meta_title" value="{{ old('meta_title') }}"
                                placeholder="Titre pour les moteurs de recherche">
                            @error('meta_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">
                                <i class="fas fa-info-circle mr-1"></i>Si vide, le titre de la page sera utilisé. Idéalement 50-60 caractères.
                                <span class="float-right" id="metaTitleCounter">0/60</span>
                            </small>
                        </div>
                        
                        <div class="form-group">
                            <label for="description" class="font-weight-bold">Meta Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                id="description" name="description" rows="3"
                                placeholder="Description courte pour les moteurs de recherche">{{ old('description') }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">
                                <i class="fas fa-info-circle mr-1"></i>Description qui apparaîtra dans les résultats de recherche. Idéalement 150-160 caractères.
                                <span class="float-right" id="metaDescCounter">0/160</span>
                            </small>
                        </div>

                        <!-- Aperçu SEO -->
                        <div class="seo-preview mt-3 p-3 border rounded bg-light">
                            <h6 class="font-weight-bold text-primary mb-2">
                                <i class="fas fa-eye mr-1"></i>Aperçu dans les résultats de recherche
                            </h6>
                            <div class="seo-preview-title text-primary" id="seoPreviewTitle">Titre de la page</div>
                            <div class="seo-preview-url text-success small">www.votresite.com/<span id="seoPreviewSlug">titre-de-la-page</span></div>
                            <div class="seo-preview-description small text-muted" id="seoPreviewDesc">Description de la page qui apparaîtra dans les résultats de recherche...</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Publication -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-primary text-white">
                        <h6 class="m-0 font-weight-bold">
                            <i class="fas fa-paper-plane mr-1"></i>Publication
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="is_published" name="is_published" value="1" {{ old('is_published') ? 'checked' : '' }}>
                                <label class="custom-control-label font-weight-bold" for="is_published">Publier immédiatement</label>
                            </div>
                            <small class="form-text text-muted mt-2">
                                <i class="fas fa-info-circle mr-1"></i>Si désactivé, la page sera enregistrée comme brouillon.
                            </small>
                        </div>
                        
                        <div class="d-flex mt-4">
                            <button type="submit" class="btn btn-primary btn-icon-split mr-2">
                                <span class="icon text-white-50">
                                    <i class="fas fa-save"></i>
                                </span>
                                <span class="text">Enregistrer</span>
                            </button>
                            <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Annuler</a>
                        </div>
                    </div>
                </div>

                <!-- Image d'en-tête -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-info text-white">
                        <h6 class="m-0 font-weight-bold">
                            <i class="fas fa-image mr-1"></i>Image d'en-tête
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3" id="imagePreviewContainer" style="display: none;">
                            <img id="imagePreview" src="#" alt="Aperçu de l'image" class="img-fluid img-thumbnail mb-2">
                            <button type="button" class="btn btn-sm btn-danger" id="removeImage">
                                <i class="fas fa-trash-alt mr-1"></i>Supprimer
                            </button>
                        </div>
                        
                        <div class="form-group" id="imageUploadContainer">
                            <label for="image" class="font-weight-bold">Sélectionner une image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                                <label class="custom-file-label" for="image">Choisir un fichier</label>
                            </div>
                            @error('image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted mt-2">
                                <i class="fas fa-info-circle mr-1"></i>Format recommandé: 1200x600px, max 2MB. Formats acceptés: JPG, PNG, GIF.
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Options avancées -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-secondary text-white">
                        <h6 class="m-0 font-weight-bold">
                            <i class="fas fa-cogs mr-1"></i>Options avancées
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="template" class="font-weight-bold">Template</label>
                            <select class="form-control" id="template" name="template">
                                <option value="default">Template par défaut</option>
                                <option value="full-width">Pleine largeur</option>
                                <option value="sidebar">Avec barre latérale</option>
                                <option value="landing">Page d'atterrissage</option>
                            </select>
                            <small class="form-text text-muted">
                                <i class="fas fa-info-circle mr-1"></i>Sélectionnez un template pour cette page.
                            </small>
                        </div>
                        
                        <div class="form-group">
                            <label for="parent_id" class="font-weight-bold">Page parente</label>
                            <select class="form-control" id="parent_id" name="parent_id">
                                <option value="">Aucune (page de premier niveau)</option>
                                <!-- Ici, vous pouvez ajouter une boucle pour afficher les pages existantes -->
                                <option value="1">À propos</option>
                                <option value="2">Services</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="order" class="font-weight-bold">Ordre d'affichage</label>
                            <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}" min="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<style>
    .seo-preview {
        font-family: Arial, sans-serif;
    }
    .seo-preview-title {
        font-size: 18px;
        color: #1a0dab;
        margin-bottom: 3px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .seo-preview-url {
        color: #006621;
        margin-bottom: 3px;
    }
    .seo-preview-description {
        color: #545454;
        line-height: 1.4;
    }
    .note-editor .dropdown-toggle::after {
        display: none;
    }
    .note-editor .note-btn {
        padding: 0.25rem 0.5rem;
    }
    .note-toolbar {
        background-color: #f8f9fc;
    }
    .custom-file-label::after {
        content: "Parcourir";
    }
    #imagePreview {
        max-height: 200px;
        object-fit: contain;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialisation de l'éditeur Summernote
        $('#content').summernote({
            height: 400,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onImageUpload: function(files) {
                    // Ici, vous pouvez implémenter le téléchargement d'images via AJAX
                    for (let i = 0; i < files.length; i++) {
                        uploadImage(files[i]);
                    }
                }
            },
            placeholder: 'Commencez à rédiger le contenu de votre page ici...',
            styleTags: [
                'p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'blockquote', 'pre'
            ],
            popover: {
                image: [
                    ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                    ['float', ['floatLeft', 'floatRight', 'floatNone']],
                    ['remove', ['removeMedia']]
                ],
                link: [
                    ['link', ['linkDialogShow', 'unlink']]
                ],
                table: [
                    ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                    ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
                ],
                air: [
                    ['color', ['color']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['para', ['ul', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']]
                ]
            }
        });

        // Fonction pour télécharger une image via AJAX
        function uploadImage(file) {
            let formData = new FormData();
            formData.append('file', file);
            formData.append('_token', '{{ csrf_token() }}');
            
            $.ajax({
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    $('#content').summernote('insertImage', data.url);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + ": " + errorThrown);
                    alert('Erreur lors du téléchargement de l\'image. Veuillez réessayer.');
                }
            });
        }

        // Initialisation de l'input file personnalisé
        bsCustomFileInput.init();

        // Prévisualisation de l'image
        $('#image').change(function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').attr('src', e.target.result);
                    $('#imagePreviewContainer').show();
                    $('#imageUploadContainer').hide();
                }
                reader.readAsDataURL(file);
            }
        });

        // Supprimer l'image
        $('#removeImage').click(function() {
            $('#image').val('');
            $('#imagePreviewContainer').hide();
            $('#imageUploadContainer').show();
            $('.custom-file-label').text('Choisir un fichier');
        });

        // Mise à jour de l'aperçu SEO
        function updateSEOPreview() {
            const title = $('#meta_title').val() || $('#title').val() || 'Titre de la page';
            const desc = $('#description').val() || 'Description de la page qui apparaîtra dans les résultats de recherche...';
            const slug = $('#title').val() ? slugify($('#title').val()) : 'titre-de-la-page';
            
            $('#seoPreviewTitle').text(title);
            $('#seoPreviewDesc').text(desc);
            $('#seoPreviewSlug').text(slug);
            
            // Mise à jour des compteurs
            $('#metaTitleCounter').text(title.length + '/60');
            $('#metaDescCounter').text(desc.length + '/160');
            
            // Avertissement si trop long
            if (title.length > 60) {
                $('#metaTitleCounter').addClass('text-danger font-weight-bold');
            } else {
                $('#metaTitleCounter').removeClass('text-danger font-weight-bold');
            }
            
            if (desc.length > 160) {
                $('#metaDescCounter').addClass('text-danger font-weight-bold');
            } else {
                $('#metaDescCounter').removeClass('text-danger font-weight-bold');
            }
        }

        // Fonction pour créer un slug
        function slugify(text) {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-')           // Remplace les espaces par -
                .replace(/[^\w\-]+/g, '')       // Supprime tous les caractères non-word
                .replace(/\-\-+/g, '-')         // Remplace multiple - par un seul -
                .replace(/^-+/, '')             // Supprime - au début
                .replace(/-+$/, '');            // Supprime - à la fin
        }

        // Événements pour mettre à jour l'aperçu SEO
        $('#title, #meta_title, #description').on('input', updateSEOPreview);
        
        // Initialisation de l'aperçu SEO
        updateSEOPreview();
        
        // Validation du formulaire avant soumission
        $('#pageForm').submit(function(e) {
            const title = $('#title').val();
            const content = $('#content').summernote('code');
            
            if (!title || title.trim() === '') {
                e.preventDefault();
                alert('Le titre de la page est obligatoire.');
                $('#title').focus();
                return false;
            }
            
            if (!content || content.trim() === '' || content === '<p><br></p>') {
                e.preventDefault();
                alert('Le contenu de la page est obligatoire.');
                $('#content').summernote('focus');
                return false;
            }
            
            return true;
        });
    });
</script>
@endpush
