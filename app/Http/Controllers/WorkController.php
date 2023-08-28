<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::query()
        ->where('active', '=', true)
        ->whereDate('publish_at', '<=', Carbon::now())
        ->orderBy('publish_at', 'desc')
        ->get();
        return view('work.index', compact('works'));
    }

    public function show($id, Request $request)
    {
        $work = Work::query()
        ->where('active', '=', true)
        ->where('id', '=', $id)
        ->whereDate('publish_at', '<=', Carbon::now())
        ->limit(1)
        ->first();

        if(!$work){
            return redirect('/');
        }

        return response(view('work.show', compact('work')));
    }
}
