<?php

namespace App\Http\Controllers;

use App\Advertise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdvertiseRequest;

class AdvertiseController extends Controller
{

    public function submit(AdvertiseRequest $request){

        $user = Auth::user()->id;
        $advertise = new Advertise();
        $advertise->title = $request->input('title');
        $advertise->description = $request->input('description');
        $advertise->category_id = $request->input('category_id');
        $advertise->price = $request->input('price');
        $advertise->img = $request->file('img')->store('public/img');
        $advertise->user()->associate($user);
        $advertise->save();

        


        // $advertise = Advertise::create($request->validated());
        return redirect(route('thank.you.ads'));
    }


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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function show(Advertise $advertise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertise $advertise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertise $advertise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertise $advertise)
    {
        //
    }
}
