@extends('guest.layouts.layout')
@section('content')
                <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="text-center">
                                <a href="{{ route("question.create") }}" class="btn btn-outline-primary mb-2">Ajouter</a>
                            </div>
                            <div class="table-responsive mb-4 mt-4">
                                <table id="multi-column-ordering" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Enonce</th>
                                            <th>Questionnaire</th>
                                            <th>Rubrique</th>
                                            <th>Reponses</th>
                                            <th>Assertions</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($questions as $question)
                                            <tr>
                                                <td>{{ $question->id }}</td>
                                                <td class="text-truncate" style="max-width: 100px;">{{ $question->enonce }}</td>
                                                <td>{{ $question->questionnaire->designation }}</td>
                                                <td>{{ $question->rubrique->designation }}</td>
                                                <td>{{ count($question->reponses) }}</td>
                                                <td>{{ count($question->assertions) }}</td>
                                                <td class="text-center">
                                                    <div class="dropdown custom-dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                            <a class="dropdown-item" href="{{ route("question.show", $question->id) }}">View</a>
                                                            <a class="dropdown-item" href="{{ route("question.edit", $question->id) }}">Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                            <a class="dropdown-item delete" methpd="DELETE" token="{{ csrf_token() }}" href="{{ route("question.destroy", $question->id) }}">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Enonce</th>
                                            <th>Questionnaire</th>
                                            <th>Rubrique</th>
                                            <th>Reponses</th>
                                            <th>Assertions</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
