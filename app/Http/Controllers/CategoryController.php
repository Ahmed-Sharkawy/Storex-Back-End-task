<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;

class CategoryController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Category;
    }

    public function index()
    {
        $categorys = $this->model->get();
        return view('category.index', compact('categorys'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(StoreRequest $request)
    {
        $this->model->create($request->validated());
        return redirect()->route('categorys.index');
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $category->update($request->validated());
        return redirect()->route('categorys.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categorys.index');
    }
}
