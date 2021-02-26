<?php

namespace App\Http\Controllers;

use App\Models\Assertion;
use Illuminate\Http\Request;

class AssertionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assertions = Assertion::all();
        return view("admin.pages.assertions.index")->withAssertions($assertions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assertion  $assertion
     * @return \Illuminate\Http\Response
     */
    public function show(Assertion $assertion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assertion  $assertion
     * @return \Illuminate\Http\Response
     */
    public function edit(Assertion $assertion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assertion  $assertion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assertion $assertion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assertion  $assertion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assertion $assertion)
    {
        //
    }
}
