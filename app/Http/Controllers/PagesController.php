<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PagesController extends Controller
{
    public function home () {
        return view('home.index');
    }

    // public function apis () {
       // return view('apis');
    // }

    public function youssef () {
        return view('apis.youssef.index');
    }

    // public function users () {
       // return view('apis.users');
    // }

    // public function projects () {
       // return view('apis.projects');
    // }
}
