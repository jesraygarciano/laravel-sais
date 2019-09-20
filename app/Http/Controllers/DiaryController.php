<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;
use App\Http\Requests\CreateDiary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

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

    public function store(CreateDiary $request)
    {

        $diary = new Diary (); // Instantiate the Diary model       

        $diary->title = $request->title ; // Substitute the title entered on the screen 
        $diary->body = $request->body ; // Substitute the body entered on the screen $ diary- > save ( ); // Save to DB      

        return redirect()->route('diary.index'); // Redirect to list page

    }
}
