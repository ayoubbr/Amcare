@extends('admin.layout')

@section('title', 'Paramètres Supplémentaires')

@section('content')
    <section id="extra-settings" class="admin-section">
        <h3>Gestion des Paramètres Supplémentaires (Statistiques Accueil)</h3>
        <p class="text-muted">Modifiez les valeurs pour les statistiques affichées sur la page d'accueil (ex: Personnel,
            Véhicules, Patients Servis).</p>

        @if ($extraSettings->isEmpty())
            <div class="alert alert-info">
                Aucun paramètre supplémentaire trouvé. Veuillez exécuter le seeder `ExtraSettingSeeder`.
            </div>
        @else
            <div class="row">
                @foreach ($extraSettings as $extraSetting)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <strong>Clé :</strong> {{ $extraSetting->key }} (Non modifiable)
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.extra-settings.update', $extraSetting->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group mb-3">
                                        <label for="label_{{ $extraSetting->id }}">Label (Libellé)</label>
                                        <input type="text"
                                            class="form-control @error('label', 'extra_setting_' . $extraSetting->id) is-invalid @enderror"
                                            id="label_{{ $extraSetting->id }}" name="label"
                                            value="{{ old('label', $extraSetting->label) }}" required>
                                        @error('label', 'extra_setting_' . $extraSetting->id)
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="value_{{ $extraSetting->id }}">Valeur (Chiffre)</label>
                                        <input type="text"
                                            class="form-control @error('value', 'extra_setting_' . $extraSetting->id) is-invalid @enderror"
                                            id="value_{{ $extraSetting->id }}" name="value"
                                            value="{{ old('value', $extraSetting->value) }}" required>
                                        @error('value', 'extra_setting_' . $extraSetting->id)
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="value_suffix_{{ $extraSetting->id }}">Suffixe de la valeur
                                            (Optionnel)</label>
                                        <input type="text"
                                            class="form-control @error('value_suffix', 'extra_setting_' . $extraSetting->id) is-invalid @enderror"
                                            id="value_suffix_{{ $extraSetting->id }}" name="value_suffix"
                                            value="{{ old('value_suffix', $extraSetting->value_suffix) }}"
                                            placeholder="ex: + ou k+">
                                        @error('value_suffix', 'extra_setting_' . $extraSetting->id)
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="order_{{ $extraSetting->id }}">Ordre d'affichage</label>
                                        <input type="number"
                                            class="form-control @error('order', 'extra_setting_' . $extraSetting->id) is-invalid @enderror"
                                            id="order_{{ $extraSetting->id }}" name="order"
                                            value="{{ old('order', $extraSetting->order) }}" required>
                                        @error('order', 'extra_setting_' . $extraSetting->id)
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">Mettre à jour</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
