<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\PostModel;
use App\Http\Resources\PostResource;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('post.post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
         $validatedData = $request->validate([
            'title' => 'bail|required|max:255',
            'category' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required|max:1000'
         ],
            [
                'title.required' => '* Kolom judul tidak boleh kosong !',
                'category.required' => '* Kolom kategori tidak boleh kosong !',
                'img.required' => '* Kolom sampul tidak boleh kosong !',
                'content.required' => '* Kolom isi konten tidak boleh kosong !'
            ]);

        
        $x = new PostModel();
        
        $x->title = $request->input('title');
        $x->category = $request->input('category');
        $x->content = $request->input('content');

        if($request->hasfile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $x->img = $filename;
        }else{
            return $request;
            $x->img = '';
        }

        $x->save();

        // (['data' => $request]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $Post)
    {
        return view('post.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
