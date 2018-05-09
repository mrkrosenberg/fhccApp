<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    
    public function index() {
        $title = 'Welcome to the Foothills Climbing Community!';
        return view('pages/index')->with('title', $title);
    }

    public function about() {
        $title = 'About Us';
        return view('pages/about')->with('title', $title);
    }

    public function events() {
        $data = array(
            'title' => 'Community Events'
        );
        return view('pages/events')->with($data);
    }

}
