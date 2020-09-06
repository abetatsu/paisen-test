<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Senior;
use Auth;
use Carbon\Carbon;

class SeniorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seniors = Senior::all();

        return view('seniors.index', compact('seniors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seniors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $senior = new Senior;

        $senior->name = $request->name;
        $senior->age = $request->age;
        $senior->home_country = $request->home_country;
        $senior->previous_job = $request->previous_job;
        $senior->hobby = $request->hobby;
        $senior->need_person = $request->need_person;
        $senior->message = $request->message;
        $senior->user_id = Auth::id();

        $senior->save();

        return redirect()->route('seniors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $senior = Senior::find($id);
        $senior->load('user', 'comments');
        return view('seniors.show', compact('senior'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $senior = Senior::find($id);

        return view('seniors.edit', compact('senior'));
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
        $senior = Senior::find($id);
        $time = new Carbon(Carbon::now());

        $senior->name = $request->name;
        $senior->age = $request->age;
        $senior->home_country = $request->home_country;
        $senior->previous_job = $request->previous_job;
        $senior->hobby = $request->hobby;
        $senior->need_person = $request->need_person;
        $senior->message = $request->message;
        $senior->updated_at = $time;

        $senior->save();

        return view('seniors.show', compact('senior'));
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
