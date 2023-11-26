<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home(){
        return view("pages.home");
    }

    public function aboutMe(){
        return view("pages.aboutMe");
    }

    public function projects(){
        return view("pages.projects");
    }

    public function contactMe(){
        return view("pages.contactMe");
    }

    public function downloadCV()
    {
        $file_path = public_path('image/fatin_CV.pdf');

        return response()->download($file_path);
    }


}
