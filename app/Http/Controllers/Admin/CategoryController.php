<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function listCategory() {
        $list = Category::get();
        return view('admin.category.list')->with([
            'list' => $list
        ]);
    }
}
