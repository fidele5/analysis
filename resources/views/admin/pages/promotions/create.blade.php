@extends("admin.layouts.layout")
@section("content")
                    <div class="container mt-4">
                        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12 mt-2 p-4">
                                            <h4>Creer une promotion</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form method="POST" action="{{ route("promotion.store") }}">
                                        @csrf
                                        <div class="form-group row mb-4">
                                            <label for="hDesignation" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Designation</label>
                                            <div class="col-xl-8 col-lg-6 col-sm-8">
                                                <input type="text" class="form-control champ" name="designation" id="hDesignation" placeholder="Designation">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="hAnnee" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Annee</label>
                                            <div class="col-xl-8 col-lg-6 col-sm-8">
                                                <input type="text" class="form-control champ" name="annee" id="hAnnee" placeholder="Annee">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="filiere" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Filiere</label>
                                            <div class="col-xl-8 col-lg-6 col-sm-8">
                                                <select id="filiere" name="filiere_id" class="form-control  basic">
                                                    @foreach ($filieres as $filiere)
                                                        <option value="{{ $filiere->id }}">{{ $filiere->nom }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


@endsection
