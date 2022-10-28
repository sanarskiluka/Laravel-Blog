<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class PostController extends Controller {
  public function index() {
    $posts = Post::latest("created_at")->
    filter(request(['search', 'category', 'author']))->
    paginate(6)->withQueryString();
    return view("posts.index", [
      "posts" => $posts
    ]);
  }
  
  public function show(Post $post) {
    return view("posts.show", ["post" => $post]);
  }

  public function create() {
    return view('posts.create');
  }

  public function store() {
    $attributes = request()->validate([
      'title' => 'required',
      'slug' => ['required', Rule::unique('posts', 'slug')],
      'body' => 'required',
      'excerpt' => 'required',
      'category_id' => ['required', Rule::exists('categories', 'id')]
    ]);

    $attributes['user_id'] = auth()->user()->id;

    Post::create($attributes);
    
    return redirect('/');
  }
}
