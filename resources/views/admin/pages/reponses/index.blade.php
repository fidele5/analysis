@extends('admin.layouts.layout')
@section('content')
                <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="column-filter" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>texte</th>
                                            <th>question</th>
                                            <th>user</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reponses as $reponse)
                                            <tr>
                                                <td>{{ $reponse->id }}</td>
                                                <td>{{ $reponse->text }}</td>
                                                <td>{{ $reponse->question->enonce }}</td>
                                                <td>{{ $reponse->user->name }}</td>
                                                <td class="text-center">
                                                    <div class="dropdown custom-dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                            <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>texte</th>
                                            <th>question</th>
                                            <th>user</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
