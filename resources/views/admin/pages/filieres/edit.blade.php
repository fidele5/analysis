@extends("admin.layouts.layout")
@section("content")
                    <div class="container mt-4">
                        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12 mt-2 p-4">
                                            <h4>Modifier une filiere</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form method="POST" action="{{ route("filiere.update", $filiere->id) }}">
                                        @csrf
                                        @method("patch")
                                        <div class="form-group row mb-4">
                                            <label for="hNom" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Nom</label>
                                            <div class="col-xl-8 col-lg-6 col-sm-8">
                                                <input type="text" class="form-control champ" name="nom" id="hNom" value="{{ $filiere->nom }}" placeholder="Nom">
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
