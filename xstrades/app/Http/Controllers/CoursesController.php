<?php

namespace App\Http\Controllers;

use App\Course;
use App\CoursesCategory;
use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CoursesController extends Controller
{
    public function index($lang, $category = null)
    {

        $search = request()->search;

        $language = Language::where('slug', $lang)->first();
        $cat = null;
        if ($language) {
            $categories = CoursesCategory::all();

            if ($category) {
                $cat = CoursesCategory::where('slug', $category)->first();
                if ($cat) {
                    $courses = $cat->courses()->when($search, function ($courses) use ($search) {
                        $courses->where('title', 'like', '%' . $search . '%');
                    })->where('published', 1)->where('language_id', $language->id)->orderBy('published_date', 'desc')->paginate(3);
                    return view('courses', ['categories' => $categories, 'courses' => $courses, 'activeCategory' => $cat, 'preview'=>false]);
                } else {
                    // if ($language->id != 24){
                    //     $language->id = 1;
                    // }
                    $course = Course::where('slug', $category)->where('published', 1)->where('language_id', $language->id)->first();
                    if ($course) {
                        $otherCourses = Course::where('id', '!=', $course->id)->where('category_id', $course->category->id)->where('published', 1)->take(3)->get();
                        return view('singleCourse', ['course' => $course, 'otherCourses' => $otherCourses, 'categories' => $categories,'preview'=>false]);
                    }else{
                        return redirect()->route('courses');
                    }
                }
            } else {
                $courses = Course::where('published', 1)
                    ->where('language_id', Language::where('slug', $lang)->value('id'))
                    ->orderBy('published_date', 'desc')->paginate(3);

            }

        }

        return view('courses', ['categories' => $categories, 'courses' => $courses, 'activeCategory' => $cat,'preview'=>false]);
    }

    public function show($lang, $slug)
    {
        $course = Course::where('slug', $slug)
            ->where('published', 1)
            ->where('language_id', Language::where('slug', $lang)->value('id'))
            ->first();


        if (!$course) {
            $englishCourse = Course::where('slug', $slug)
                ->where('published', 1)
                ->where('language_id', Language::where('slug', 'en')->value('id'))
                ->first();


            if ($englishCourse) {

                $otherCourses = Course::where('id', '!=', $englishCourse->id)
                    ->where('language_id', $englishCourse->language_id)
                    ->where('published', 1)
                    ->take(3)
                    ->get();

                $categories = CoursesCategory::all();

                return redirect()->route('courses.show', ['lang' => 'en', 'slug' => $slug]);
            }
        }

        abort(404);
    }

    public function listPreview($lang, $category = null)
    {

        $search = request()->search;


        $language = Language::where('slug', $lang)->first();
        $courses = [];
        $categories = [];
        $cat = null;
        if ($language) {
            $categories = CoursesCategory::all();

            if ($category) {
                $cat = CoursesCategory::where('slug', $category)->first();
                if($cat){

                    $courses = $cat->courses()->when($search, function ($courses) use ($search) {
                        $courses->whereTranslationLike('title', '%' . $search . '%');
                    })->where('language_id', $language->id)->orderBy('published_date', 'desc')->paginate(3);
                    return view('courses', ['categories' => $categories, 'courses' => $courses, 'activeCategory' => $cat, 'preview' =>true]);
                }else{
                    $course = Course::where('slug', $category)->first(); 

                    if ($course){
                        $otherCourses = Course::where('id', '!=', $course->id)
                        ->where('category_id', $course->category->id)
                        ->take(3)->get(); 
                        return view('singleCourse', ['course' => $course, 'otherCourses' => $otherCourses, 'preview'=>true ]);
                    }

                }
                } else {
                $courses = Course::select()
                    ->when($search, function ($courses) use ($search) {
                        $courses->whereTranslationLike('title', '%' . $search . '%');
                    })->where('language_id', $language->id)->orderBy('published_date', 'desc')->paginate(3);
            }
        }

        return view('courses', ['categories' => $categories, 'courses' => $courses, 'activeCategory' => $cat, 'preview' =>true]);
    }

    public function courseOverview($lang, $slug){

        $course = Course::where('slug', $slug)
            ->where('published', 1)
            ->where('language_id', Language::where('slug', $lang)->value('id'))
            ->with('benefit') // Add benefit relation
            ->first();

        return view('trading-academy.course-overview', ['course' => $course]);
    }

    public function singleCourse($lang, $slug){

        $course = Course::where('slug', $slug)
            ->where('published', 1)
            ->where('language_id', Language::where('slug', $lang)->value('id'))
            ->first();

        return view('trading-academy.singleCourse', ['course' => $course]);
    }

}
