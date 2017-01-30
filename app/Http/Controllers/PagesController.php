<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home Page
    public function index() {
        return view('welcome');//resources/views/welcome.blade.php
    }

    // About us page
    public function about() {
        return view('pages.about'); //resources/views/pages/about.blade.php
    }

    // Padnell Rules Page
    public function rules() {
        return view('pages.rules'); //resources/views/pages/rules.blade.php
    }

    // Padnell Contact Page
    public function contact() {
        return view('pages.contact'); //resources/views/pages/contact.blade.php
    }
}
