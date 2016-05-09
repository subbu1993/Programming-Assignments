<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Story;
use App\Tag;
use App\Location;
class StoryController extends Controller
{
    public function index()
    {
	$stories = Story::with('tags')->get();
	return view('stories' ,['stories' => $stories]);
    }

    public function tags()
    {
	$tags = Tag::all();
  	return view('tags', ['tags' => $tags]);
    }
    public function create()
    {
	$locations = Location::all();
	return view('story.create',['locations' => $locations ]);

    }
    public function store(Request $request)
    {
	   $story = new Story;
	   $story->title = $request->input('title');
	   $story->story = $request->input('story');
	   $story->location_id = $request->input('location_id');
	   $story->published = $request->input('published');
	   $story->save();

    }

    public function api_stories()
    {
      $results = Story::all();
      return response()->json($results);
    }
}
