<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\PostModel;
use App\Http\Resources\PostResource;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\Category\CategoryModel;
Use Alert;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryModel::All();

       return view('post.post',['category' => $category]);
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
        
         $id = Auth::id();
        
        $posting = new PostModel();
        
        $posting->title = $request->input('title');
        $posting->category = $request->input('category');
        $posting->content = $request->input('content');
        $posting->users_id = $id;

        if($request->hasfile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $posting->img = $filename;
        }else{
            return $request;
            $posting->img = '';
        }

        $posting->save();
        Alert::success('Berhasil', 'Buat Postingan Baru Berhasil.');

        return back();
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
