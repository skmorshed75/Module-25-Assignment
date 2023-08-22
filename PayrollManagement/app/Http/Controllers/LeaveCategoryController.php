<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveCategory;

class LeaveCategoryController extends Controller
{
    public function index()
    {
        $categories = LeaveCategory::all();
        return view('leave_categories.index', compact('categories'));
    }
}
