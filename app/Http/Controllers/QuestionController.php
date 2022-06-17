<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all;

        return response()->json($questions, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms/add-question');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        $question = new Question;

        $question->question = $request->question;
        $question->subject_id = $request->subject_id;
        $question->form_id = $request->form_id;

        try{
            $question->save();
            return response()->json('question saved successfully', 200);
        }catch(Throwable $ex){
            return response()->json($ex->getMessage, 500);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::findOrFail($id);

        return response()->json($question, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);

        return view('forms/update-question')->with($question, 'question');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionRequest $request, $id)
    {
        $question = Question::findOrFail($id);

        try{
            $question->update(request()->all);
            return response()->json('question updated successfully', 200);
        }catch(Throwable $ex){
            return response()->json($ex->getMessage, 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);

        try{
            $question->delete();
            return response()->json('question deleted successfully', 200);
        }catch(Throwable $ex){
            return response()->json($ex->getMessage, 500);
        }
    }
}
