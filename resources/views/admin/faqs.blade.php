@extends('admin.layout')
@section('title', 'Faq')
@section('content')
    <section id="faqs" class="admin-section">
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
                        <tr data-entity="faqs" data-id="{{ $faq->id }}" data-question="{{ $faq->question }}"
                            data-answer="{{ $faq->answer }}">
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
                    <textarea class="form-control" name="answer" id="faqAnswer" rows="3" placeholder="Entrez la réponse" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="button" class="btn btn-secondary cancel-form">Annuler</button>
            </form>
        </div>
    </section>
@endsection
