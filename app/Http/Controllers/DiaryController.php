<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;

class DiaryController extends Controller
{
    //
    public function index()
    {
        $diaries = Diary::all();

        // dd($diaries);
        // return 'Hello World!';
        return view('diaries.index',[
            'diaries' => $diaries,
        ]);
    }

    public function create(){
        
        $diaries = Diary::all();

        // dd($diaries);
        // return 'Hello Wati';
        return view('diaries.create');

    }

    public function store(Request $request)
    {

        dd($request->title);

        $diaries = Diary::all();

        dd($diaries);
        return view('diaries.index');
    }
}
