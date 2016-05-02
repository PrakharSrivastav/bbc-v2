<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class WebsiteController extends Controller {

    public function index() {
        $title = "Home : Book Barter Club";
        return view('public.home',compact('title'));
    }

}
