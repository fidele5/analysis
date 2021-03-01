<?php

namespace App\Http\Controllers;

use App\Models\Assertion;
use App\Models\Question;
use App\Models\Questionnaire;
use App\Models\Rubrique;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('admin.pages.questions.index')->with("questions", $questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questionnaires = Questionnaire::all();
        $rubriques = Rubrique::all();
        return view("admin.pages.questions.create")->with(compact("questionnaires", "rubriques"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request->assertions)) {
            $question = Question::create([
                "questionnaire_id" => $request->questionnaire_id,
                "rubrique_id" => $request->rubrique_id,
                "enonce" => $request->enonce,
            ]);
            $assertions = explode(",", $request->assertions);
            foreach ($assertions as $value) {
                Assertion::create([
                    "texte" => $value,
                    "question_id" => $question->id,
                ]);
            }
        } else {
            $question = Question::create([
                "questionnaire_id" => $request->questionnaire_id,
                "rubrique_id" => $request->rubrique_id,
                "enonce" => $request->enonce,
            ]);

        }

        return response()->json([
            "status" => "success", "back" => "question",
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view("admin.pages.questions.show")->with("question", $question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $questionnaires = Questionnaire::all();
        $rubriques = Rubrique::all();
        return view("admin.pages.questions.edit")->with(compact("question", "questionnaires", "rubriques"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question->update($request->except("_token"));
        return response()->json([
            "status" => "success", "back" => "question",
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        Question::destroy($question);
    }
}
