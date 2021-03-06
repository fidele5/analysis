<?php

namespace App\Http\Controllers;

use App\Models\Rubrique;
use Illuminate\Http\Request;

class RubriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubriques = Rubrique::all();
        return view("admin.pages.rubriques.index")->with("rubriques", $rubriques);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.rubriques.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rubrique::create($request->except("_token"));
        return response()->json([
            "status" => "success",
            "back" => "rubrique",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function show(Rubrique $rubrique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function edit(Rubrique $rubrique)
    {
        return view("admin.pages.rubriques.edit")->with("rubrique", $rubrique);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rubrique $rubrique)
    {
        $rubrique->update($request->except("_token"));
        return response()->json([
            "status" => "success",
            "back" => "../rubrique",
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rubrique $rubrique)
    {
        //
    }
}
