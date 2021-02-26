@extends("admin.layouts.layout")
@section("content")
                    <div class="container mt-4">
                        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12 mt-2 p-4">
                                            <h4>Ajouter des questions</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form method="POST" action="{{ route("question.update", $question) }}">
                                        @csrf
                                        @method("patch")
                                        <div class="form-group row mb-4">
                                            <label for="questionnaire" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Questionnaire</label>
                                            <div class="col-xl-8 col-lg-6 col-sm-8">
                                                <select id="questionnaire" name="questionnaire_id" class="form-control  basic">
                                                    @foreach ($questionnaires as $questionnaire)
                                                        <option value="{{ $questionnaire->id }}">{{ $questionnaire->designation }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="rubrique" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Rubrique</label>
                                            <div class="col-xl-8 col-lg-6 col-sm-8">
                                                <select id="rubrique" name="rubrique_id" class="form-control  basic">
                                                    @foreach ($rubriques as $rubrique)
                                                        <option value="{{ $rubrique->id }}">{{ $rubrique->designation }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row mb-4">
                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Designation</label>
                                            <div class="col-xl-8 col-lg-6 col-sm-8">
                                                <textarea id="demo1" name="enonce">{{ $question->enonce }}</textarea>
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
