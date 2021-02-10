<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;

class ArticleController extends Controller
{
    protected $fillabel = ['message','file','image'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexadmin()
    {
        $file=Article::all();
        return view('allarticle', compact('file'));
    }
    public function indexhome()
    {
        $file=Article::all();
        return view('home', compact('file'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required|min:5",
            "email" => "required",
            "theme" => "required",
            "file" => "required|file|max:300"
        ]);
        $data=new Article;
        if($request->message == null){
            $data->message="";
        }
        $data->name=$request->name;
        $data->email=$request->email;
        $data->theme=$request->theme;
        if($request->message != null ){
        $data->message=$request->message;
        }
        if ($request->file('file')) {
            # code...
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/',$filename);
            
            $data->file= $filename;
        }
        $data->title="";
        $data->descricao="";
        $data->introdution="";
        $data->Desenvolvimento="";
        $data->Conclusão="";
        $data->title="";
        $data->image="";
        $data->image1="";
        $data->image2="";
        $data->image3="";
        $data->image4="";
        $token = $request->input('g-recaptcha-response');
        if($token){
            $data->save();
        }

        return redirect('/article/submit')->with('sucess', 'Your article was created successfully!');
        
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Article::find($id);
        return view('file', compact('data'));
    }

    public function download($file)
    {
        return response()->download('storage/'.$file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
?>
