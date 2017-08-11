<?php

namespace Tyondo\Career\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Tyondo\Career\Models\Career;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->can('access.all.posts')){

        }
        //$posts = Post::paginate(2);
        $careers= Career::all();

        //  return $testimony;
        return view(config('musoni-website-v5.views.back-end.career.index'), compact('careers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->can('create.posts')){

        }
        // $categories = Team::pluck('name', 'id')->all();
        return view(config('musoni-website-v5.views.back-end.career.create'), compact(''));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->can('store.posts')){

        }

        $input = $request->all();
        // return $input;
        $inputData = [
            'user_id' => Auth::user()->id,
            'career_title' => $request->input('career_title'),
            'career_slug' => str_slug($request->input('career_title')) .'-'.time(),
            'career_description' => $request->input('career_description'),
            'career_status' => $request->input('career_status'),
            'career_deadline' => $request->input('career_deadline'),
        ];
        // return $testimonyData;
        Career::create($inputData);
        // $user->posts()->create($input);
        Session::flash('message', 'Testimony Created');
        return redirect()->route('musoni.careers.list');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->can('access.single.posts')){

        }
        $testimony = Testimonial::findOrFail($id);
        //return $testimony->photo->file;
        return view(config('musoni-website-v5.views.back-end.career.show'), compact('testimony'));

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
