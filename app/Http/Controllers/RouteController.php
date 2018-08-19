<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Motivation;
use App;

class RouteController extends Controller
{
    //return home page views
    public function home()
    {
        $motivations = Motivation::all();
        return view('homepage')->with('motivations',$motivations);
    }

    //return individual forms page views
    public function individual()
    {
        $questions = Question::all();
        return view('surveys.individual')->with('questions',$questions);
    }

    //return individual forms page views
    public function group()
    {
        $questions = Question::all();
        return view('surveys.group')->with('questions',$questions);
    }

    public function result()
    {
        return view('surveys.results');
    }
}
