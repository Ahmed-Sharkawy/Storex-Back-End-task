<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Movie\StoreRequest;
use App\Http\Requests\Movie\UpdateRequest;

class MovieController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new Movie();
    }

    public function index()
    {
        $movies = Movie::with('category')->get();
        return view('index', compact('movies'));
    }

    public function create()
    {
        $categorys = Category::get();
        return view('movie.create', compact('categorys'));
    }

    public function store(StoreRequest $request)
    {
        $imageName = uploadImage($request, 'image');
        $this->model->create(['image' => $imageName] + $request->validated());
        return redirect()->route('home');
    }

    public function edit(Movie $movie)
    {
        $categorys = Category::get();
        return view('movie.edit', compact('movie', 'categorys'));
    }

    public function update(UpdateRequest $request, Movie $movie)
    {
        $imageName = $movie->image;

        if ($request->image) {
            deletImage("image/$imageName");
            $imageName = uploadImage($request, 'image');
        }

        $movie->update(['image' => $imageName] + $request->validated());
        return redirect()->route('home');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
