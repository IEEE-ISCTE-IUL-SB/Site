<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function about()
    {
        return view('about');
    }

     /**
     * Return the articles page.
     *
     * @return \Illuminate\Http\Response
     */
    public function articles()
    {
        return view('articlespage');
    }
    public function team()
    {
        return view('team');
    }

    public function contact(Request $request){


        DB::insert('insert into contact (name,mail,subject,message) values (?, ?, ?, ?)', [$request->name,$request->mail,$request->subject,$request->message]);
        
        return redirect('/')->with('sucess', 'Your article was created successfully!');
    }

    public function newsletter(Request $request){


        DB::insert('insert into newsletterlist (email) values (?)', [$request->email]);
        
        return redirect('/')->with('sucess', 'Your article was created successfully!');
    }
}
