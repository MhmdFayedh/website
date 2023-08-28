<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;


class HomeController extends Controller
{
    public function __invoke(Request $request): View|Factory

    {
        $posts = DB::table('posts')->select(['id', 'name', 'thumbnail'])->limit(3)->get();
        $getFile = DB::table('resumes')->select('file')->latest()->limit(1)->get();
        $resume = $getFile[0]->file ?? '';

        return view('home', compact('posts', 'resume'));
    }
}
