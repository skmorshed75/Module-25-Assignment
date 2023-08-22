<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use Illuminate\Http\Request;
use App\Models\LeaveCategory;

class LeaveRequestController extends Controller
{
    public function create()
    {
        $categories = LeaveCategory::all();
        return view('leave_requests.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $request->merge(['user_id' => $user->id]);
        LeaveRequest::create($request->all());
        return redirect()->route('home')->with('success', 'Leave request submitted.');
    }
}
