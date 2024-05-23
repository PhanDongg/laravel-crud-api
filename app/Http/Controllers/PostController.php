<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Rating;

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
            if (!file_exists($pathImage)) {
                //Tạo thư mục nếu không tồn tại
                mkdir($pathImage, '0775', true);
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
    // //home-page
    // public function index()
    // {
    //     $posts = Post::all();
    //     return view('home', compact('posts'));
    // }
    // //post detail
    // public function postDetail($slug)
    // {
    //     $post = Post::where('slug', $slug)->first();
    //     // Tăng view_count lên 1
    //     $post->view_count += 1;
    //     $post->save();

    //     $listComments = $post->comments;
    //     return view('posts.post-detail', ['post' => $post, 'comments' => $listComments]); //còn trường hợp ko có cmt nữa
    // }

    public function index()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            $ratings = $post->ratings()->get();
            $averageRating = $ratings->avg('score');
            $comments = $post->comments()->get();
            // Thêm ratings và averageRating vào mỗi post
            $post->ratings = $ratings;
            $post->averageRating = $averageRating;
            $post->comments = $comments;
        }
        return view('home', compact('posts'));
    }

    public function postDetail($slug)
    {
        $post = Post::where('slug', $slug)->first();
        // Tăng view_count lên 1
        $post->view_count += 1;
        $post->save();

        $listComments = $post->comments;
        $ratings = $post->ratings()->get();
        $averageRating = $ratings->avg('score');

        return view('posts.post-detail', [
            'post' => $post,
            'comments' => $listComments,
            'ratings' => $ratings,
            'averageRating' => $averageRating
        ]);
    }


    //add comment
    public function addComment($slug, Request $request)
    {
        // dd($request->all());
        $post = Post::where('slug', $slug)->first();

        $validatedData = $request->validate([
            'content' => 'required|string',
        ]);

        // Tạo một bản ghi Comment mới
        $add_comment = new Comment();
        $add_comment->content = $validatedData['content'];

        // Gán post_id cho comment bằng id của bài post tương ứng
        $add_comment->post_id = $post->id;
        $add_comment->name = $request->input('name');
        $add_comment->save();
        //lấy ra tất cả comment, có cả cái mới thêm
        $listComments = optional($post->comments)->all();
        if (!empty($listComments)) {
            return view('post.post-detail', ['post' => $post, 'comments' => $listComments]);
        } else {
            return view('post.post-detail', ['post' => $post]);
        }
    }

    //add ratinggggggggggggggggggggggggggggggg
    public function ratePost($slug, Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'rating' => 'required|numeric|min:1|max:5',
        ]);

        // Retrieve the post by slug
        $post = Post::where('slug', $slug)->firstOrFail();

        // Create a new rating
        $rating = new Rating();
        $rating->post_id = $post->id;
        $rating->score = $validatedData['rating'];
        $rating->save();

        // Retrieve all ratings for the post
        $ratings = $post->ratings()->get();

        // Calculate the average rating
        $averageRating = round($ratings->avg('score'), 2);

        // Return the post-detail view with the post and ratings data
        return view('posts.post-detail', [
            'post' => $post,
            'ratings' => $ratings,
            'averageRating' => $averageRating
        ]);
    }
}
