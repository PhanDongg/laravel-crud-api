<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{

    public function addForm()
    {
        $listCate = Category::all();
        return view('posts.addpost', ['categories' => $listCate]);
    }

    public function posts()
    {
        $listPosts = Post::all();
        return view('posts.posts', ['posts' => $listPosts]);
    }

    //add post
    public function addPost(Request $request)
    {
        // dd($request->all());
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->content = $request->input('content');
        $post->author = $request->input('author');
        $post->category = $request->input('category');
        $post->status = $request->input('status');
        // Xử lý hình ảnh tải lên
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $post->image = $imagePath;
        }
        $post->save();
        return redirect()->route('posts')->with('success', 'Post created successfully!');
    }
    // edit post
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('posts.update', compact('post', 'categories'));
    }

    //update post
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $pathImage = storage_path('public/images');
            if(!file_exists($pathImage)){
                //Tạo thư mục nếu không tồn tại
                mkdir($pathImage,'0775',true);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }
        $post->update($data);
        $posts = Post::all();
        return view('posts.posts', compact('posts'));
        // $listCate = Category::all();
        // return view('posts.update', ['post' => $post, 'categories' => $listCate]);
    }

    // delete
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts');
    }
    //home-page
    public function index()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }
    //post detail
    public function postDetail($id)
    {
        $post = Post::find($id);
        return view('posts/post-detail', ['post' => $post]);
    }
    
}