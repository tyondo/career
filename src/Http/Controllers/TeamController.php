<?php

namespace Tyondo\Team\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Tyondo\Team\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        /*if(Auth::user()->can('access.all.posts')){

        }*/
        //$posts = Post::paginate(2);
        $team = Team::all();
       // return $team;
        return view(config('tteam.views.back-end.team.index'), compact('team'));
    }
    public function manageTeam()
    {
        /*if(Auth::user()->can('manage.posts')){

        }*/
        $posts = Team::all();
        return view('aggregator::portal.admin.blog.posts.manage', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*if(Auth::user()->can('create.posts')){

        }*/
        Auth::loginUsingId(1);
        return view(config('tteam.views.back-end.team.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*if(Auth::user()->can('store.posts')){

        }*/

        $input = $request->all();
        //return $input;

        $teamData = [
            'user_id' => isset(Auth::user()->id)?Auth::user()->id:1,
            'title' => $request->input('title'),
            'name' => $request->input('name'),
            'team_slug' => str_slug($request->input('name')) .'-'.time(),
            'bio' => $request->input('bio'),
            'team_image' => $input['team_image'],
            'team_status' => $request->input('team_status'),
            'team_role' => $request->input('team_role'),
        ];

       Team::create($teamData);

        // $user->posts()->create($input);
        Session::flash('message', 'Post Created');
        return redirect()->route('tyondo.team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*if(Auth::user()->can('access.single.posts')){

        }*/
        $team = Team::findOrFail($id);
        //return $post;
        return view(config('tteam.views.back-end.team.show'), compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*if(Auth::user()->can('edit.posts')){

        }*/
        $post = Team::findOrFail($id);
        //return $post;
       // $categories = Category::pluck('name', 'id')->all();
        return view(config('tteam.views.back-end.team.edit'), compact( 'post'));
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
        /*if(Auth::user()->can('store.posts')){

        }*/

        $team = Team::find($id);
            if ($team->name != $request->input('name')){
                $team->name = $request->input('name');
                $team->team_slug = str_slug($request->input('name')) .'-'.time();
            }
            $team->bio = $request->input('bio');
            $team->team_image = $request->input('team_image');
            $team->team_status = $request->input('team_status');
            $team->team_role = $request->input('team_role');
            $team->save();

        Session::flash('message', 'Team updated');
        return redirect()->route('tyondo.team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*if(Auth::user()->can('destroy.posts')){

        }*/
        $team = Team::findOrFail($id);
        $team->delete();
        Session::flash('message', 'The member has been deleted :-(');
        return redirect(route('tyondo.team.manage'));
    }
}
