<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogsCategory;
use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BlogsController extends Controller
{
    public function index($lang, $category = null)
    {


        $search = request()->search;


        $language = Language::where('slug', $lang)->first();
        $blogs = [];
        $categories = [];
        $cat = null;
        if ($language) {
            $categories = BlogsCategory::all();

            if ($category) {
                $cat = BlogsCategory::where('slug', $category)->first();
                if ($cat) {
                    $blogs = $cat->blogs()->when($search, function ($blogs) use ($search) {
                        $blogs->where('title', 'like', '%' . $search . '%');
                    })->where('published', 1)->where('language_id', $language->id)->orderBy('published_date', 'desc')->paginate(9);
                    return view('blogs', ['categories' => $categories, 'blogs' => $blogs, 'activeCategory' => $cat, 'preview'=>false]);
                } else {
                    // if ($language->id != 24){
                    //     $language->id = 1;
                    // }
                    $blog = Blog::where('slug', $category)->where('published', 1)->where('language_id', $language->id)->first();
                    if ($blog) {
                        $otherBlogs = Blog::where('id', '!=', $blog->id)->where('category_id', $blog->category->id)->where('language_id', $language->id)->orderBy('published_date', 'desc')->where('published', 1)->take(3)->get();
                        return view('singleBlog', ['blog' => $blog, 'otherBlogs' => $otherBlogs, 'categories' => $categories,'preview'=>false]);
                    }else{
                        return redirect()->route('blogs');
                    }
                }
            } else {
                $blogs = Blog::select()
                    ->when($search, function ($blogs) use ($search) {
                        $blogs->where('title', 'like', '%' . $search . '%');
                    })->where('published', 1)->where('language_id', $language->id)->orderBy('published_date', 'desc')->paginate(9);
            }

        }

        return view('blogs', ['categories' => $categories, 'blogs' => $blogs, 'activeCategory' => $cat,'preview'=>false]);
    }

    public function show($lang, $slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('published', 1)
            ->where('language_id', Language::where('slug', $lang)->value('id'))
            ->first();


        if (!$blog) {
            $englishBlog = Blog::where('slug', $slug)
                ->where('published', 1)
                ->where('language_id', Language::where('slug', 'en')->value('id'))
                ->first();


            if ($englishBlog) {

                $otherBlogs = Blog::where('id', '!=', $englishBlog->id)
                    ->where('language_id', $englishBlog->language_id)
                    ->where('published', 1)
                    ->take(3)
                    ->get();

                $categories = BlogsCategory::all();

                return redirect()->route('blogs.show', ['lang' => 'en', 'slug' => $slug]);
            }
        }

        abort(404);
    }

    public function listPreview($lang, $category = null)
    {

        $search = request()->search;


        $language = Language::where('slug', $lang)->first();
        $blogs = [];
        $categories = [];
        $cat = null;
        if ($language) {
            $categories = BlogsCategory::all();

            if ($category) {
                $cat = BlogsCategory::where('slug', $category)->first();
                if($cat){

                    $blogs = $cat->blogs()->when($search, function ($blogs) use ($search) {
                        $blogs->whereTranslationLike('title', '%' . $search . '%');
                    })->where('language_id', $language->id)->orderBy('published_date', 'desc')->paginate(9);
                    return view('blogs', ['categories' => $categories, 'blogs' => $blogs, 'activeCategory' => $cat, 'preview' =>true]);
                }else{
                    $blog = Blog::where('slug', $category)->first(); 

                    if ($blog){
                        $otherBlogs = Blog::where('id', '!=', $blog->id)
                        ->where('category_id', $blog->category->id)
                        ->take(3)->get(); 
                        return view('singleBlog', ['blog' => $blog, 'otherBlogs' => $otherBlogs, 'preview'=>true ]);
                    }

                }
                } else {
                $blogs = Blog::select()
                    ->when($search, function ($blogs) use ($search) {
                        $blogs->whereTranslationLike('title', '%' . $search . '%');
                    })->where('language_id', $language->id)->orderBy('published_date', 'desc')->paginate(9);
            }
        }

        return view('blogs', ['categories' => $categories, 'blogs' => $blogs, 'activeCategory' => $cat, 'preview' =>true]);
    }

    public function shareOnFacebook(Request $request)
    {
        $url = 'https://www.facebook.com/sharer/sharer.php?t=' . $request->url;
        return redirect()->away($url);
    }

    public function shareOnTwitter(Request $request)
    {
        $url = 'https://x.com/intent/tweet?url=' . $request->url;
        return redirect()->away($url);
    }

    public function shareOnLinkedIn(Request $request)
    {
        $url = 'https://www.linkedin.com/sharing/share-offsite/?url=' . $request->url;
        return redirect()->away($url);
    }
}