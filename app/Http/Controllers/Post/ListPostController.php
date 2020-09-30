<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\PostModel;
use Illuminate\Pagination\Paginator;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use App\Models\Category\CategoryModel;
Use Alert;

class ListPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();

        $posts = PostModel::orderBy('created_at', 'desc')->paginate(2);

        return view('post.show',['posts' => $posts]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decrypted = Crypt::decryptString($id);

        $posts = PostModel::WHERE('id',$decrypted)->get();

        $category = CategoryModel::All();

        return view('post.edit',['posts' => $posts])->with('category',$category);
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
         $validatedData = $request->validate([
            'title' => 'bail|required|max:255',
            'category' => 'required',
            // 'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required|max:1000'
         ],
            [
                'title.required' => '* Kolom judul tidak boleh kosong !',
                'category.required' => '* Kolom kategori tidak boleh kosong !',
                'img.required' => '* Kolom sampul tidak boleh kosong !',
                'content.required' => '* Kolom isi konten tidak boleh kosong !'
            ]);
        
        $x = PostModel::where('id',$id)->first();
        
        $x->title = $request->input('title');
        $x->category = $request->input('category');
        $x->content = $request->input('content');

        if($request->hasfile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $x->img = $filename;
        }

        $x->save();
        Alert::success('Berhasil', 'Perubahan data terbaru telah tersimpan.');

        return redirect('postingan');
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
