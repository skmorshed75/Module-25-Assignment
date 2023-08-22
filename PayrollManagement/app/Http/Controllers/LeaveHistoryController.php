<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use Illuminate\Http\Request;

class LeaveHistoryController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $leaveRequests = LeaveRequest::where('user_id', $user->id)->get();
        return view('reports.leave_history', compact('leaveRequests'));
    }
}
