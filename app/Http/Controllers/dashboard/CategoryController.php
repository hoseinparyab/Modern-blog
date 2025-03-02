<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\CategoryRequest;
use App\Models\dashboard\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('articles')->orderBy('id', 'desc')->paginate(5);
        $categoryCount = Category::count();

        return view('dashboard.category', compact('categories', 'categoryCount'));
    }

    public function store(CategoryRequest $categoryRequest)
    {
        return Category::create($categoryRequest->all())
            ? redirect()->back()->with('success', 'دسته بندی مورد نظر شما با موفقیت ایجاد گردید')
            : redirect()->back()->with('error', 'خطایی در ثبت دسته بندی رخ داده است!');
    }
}
