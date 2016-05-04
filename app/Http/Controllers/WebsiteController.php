<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class WebsiteController extends Controller {

    public function index() {
        $title = "Home : BookBarterClub";
        return view('public.home',compact('title'));
    }
    
    public function searchByLocation(){
        $title = "Search by location : BookBarterClub";
    }
    
    public function searchByTitle(){
        $title = "Search by title : BookBarterClub";
    }
    
    public function showLoginForm(){
        return "Login Form";
    }
    
    public function showSignupForm(){
        return "Signup Form";
    }
}
