<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::orderByDesc('created_at')->get();
        return view('admin.team.index', compact('team'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'qualification' => 'required|string',
            'description'   => 'required|string',
        ]);

        Team::create([
            'name'          => $request->name,
            'qualification' => $request->qualification,
            'profilephoto'  => $request->profilephoto,
            'bannerimage'   => $request->bannerimage,
            'career'        => $request->career,
            'description'   => $request->description,
            'experience'    => $request->experience,
            'instagramlink' => $request->instagramlink,
            'facebooklink'  => $request->facebooklink,
            'twitterlink'   => $request->twitterlink,
            'linkedinlink'  => $request->linkedinlink,
            'contactno'     => $request->contactno,
            'email'         => $request->email,
            'status'        => $request->status ?? 1,
        ]);

        return redirect()->route('admin.team.index')
            ->with('success', 'Team member added.');
    }

    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name'          => 'required|string',
            'qualification' => 'required|string',
            'description'   => 'required|string',
        ]);

        $team->update($request->only([
            'name', 'qualification', 'profilephoto', 'bannerimage', 'career',
            'description', 'experience', 'instagramlink', 'facebooklink',
            'twitterlink', 'linkedinlink', 'contactno', 'email', 'status'
        ]));

        return redirect()->route('admin.team.index')
            ->with('success', 'Team member updated.');
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('admin.team.index')
            ->with('success', 'Deleted successfully.');
    }
}
