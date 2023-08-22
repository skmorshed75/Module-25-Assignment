<?php

namespace App\Http\Controllers;

use App\Models\LeaveBalance;
use Illuminate\Http\Request;

class LeaveBalanceController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $balance = LeaveBalance::where('user_id', $user->id)->first();
        return view('leave_balances.index', compact('balance'));
    }
}
