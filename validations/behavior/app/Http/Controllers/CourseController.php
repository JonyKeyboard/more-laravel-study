<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    // public function store(Course $request)
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'tutor' => 'required|min:3',
            'email' => 'required|email'
        ];

        $messages = [
            'name.required' => 'por favor, Insira o nome do curso',
            'email.required' => 'por favor, Insira o email do curso'
        ];

        $validate = Validator::make($request->all(), $rules, $messages);

        var_dump($validate->fails());

        if($validate->fails()){
            return redirect()->route('course.create')->withInput()->withErrors($validate);
        }

        // $request->validate($rules, $messages);

        var_dump($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
