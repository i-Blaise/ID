<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Http\Controllers\Controller;
use App\Models\BlogTags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profile = Auth::user();
        $blog_tags = BlogTags::all();
        if ($profile->access_level == 1) {
            return view('dashboard.pages.blogs.create', ['tags' => $blog_tags]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */

    public function saveImage($destinationPath, $file): string
    {
        $hashed_image_name = $file->hashName();
        $image_path = $destinationPath.$hashed_image_name;
        $file->move(public_path($destinationPath), $hashed_image_name);

        return $image_path;
    }

    public function sortBlogTags($new_tags, $selected_tags, $blog_tags = null): mixed
    {
        if(!is_null($new_tags) && is_null($selected_tags))
        {
            $blog_tags = explode(", ", $new_tags);
        }elseif(is_null($new_tags) && !is_null($selected_tags))
        {
            $blog_tags = $selected_tags;
        }

        $blog_tags = !is_null($selected_tags) && !is_null($new_tags) ?
            array_merge(
                explode(", ", $new_tags),
                $selected_tags
                ) : $blog_tags;

        return $blog_tags;
    }

    public function timeToRead($body): int
    {
        // We will set average words per minute(wpm) to 200
        $wpm = 200;

        $word_count = str_word_count($body);
        $time_to_read = round($word_count/$wpm);

        return $time_to_read;

    }

    public function store(Request $request)
    {
        $request->validate([
            'main_image' => 'required|mimes:jpg,webp,png,jpeg',
            'sub_image1' => 'nullable|mimes:jpg,webp,png,jpeg',
            'sub_image2' => 'nullable|mimes:jpg,webp,png,jpeg',
            'blog_title' => 'required|max:255',
            'blog_body' => 'required',
            'quotes' => 'nullable|max:500',
            'quotes_author' => 'nullable',
            'mimes:jpg,bmp,png' => 'nullable|array'
        ]);


        $destinationPath = 'dashboard/images/uploads/blogs/';

        $main_image = $this->saveImage($destinationPath, $request->file('main_image'));

        $sub_image1 = is_null($request->file('sub_image1')) ? null : $this->saveImage($destinationPath, $request->file('sub_image1'));

        $sub_image2 = is_null($request->file('sub_image2')) ? null : $this->saveImage($destinationPath, $request->file('sub_image2'));

        $blog_tags = $this->sortBlogTags($request->new_blog_tags, $request->blog_tags);


        $profile = Auth::user();
        $blogs = new Blogs;

        $blogs->main_image = $main_image;
        $blogs->sub_image1 = $sub_image1;
        $blogs->sub_image2 = $sub_image2;
        $blogs->blog_title = $request->blog_title;
        $blogs->blog_body = $request->blog_body;
        $blogs->quotes = $request->quotes;
        $blogs->quotes_author = $request->quotes_author;
        $blogs->blog_author = $profile->name;
        $blogs->author_id = $profile->uid;
        $blogs->time_to_read = $this->timeToRead($request->blog_body);
        $blogs->blog_tags = json_encode($blog_tags);
        $blogs->blog_id = uniqid();

        $blogs->save();

        return Redirect::back()->withSuccess('New Blog added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blogs $blogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blogs $blogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blogs $blogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blogs $blogs)
    {
        //
    }
}
