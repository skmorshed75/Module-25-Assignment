<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use Illuminate\Http\Request;

class LeaveApprovalController extends Controller
{
    public function approve(LeaveRequest $request)
    {
        $request->update(['status' => 'approved']);
        $request->sendApprovalNotification('approved');
    }
    
    public function reject(LeaveRequest $request)
    {
        $request->update(['status' => 'rejected']);
        $request->sendApprovalNotification('rejected');
    }
}
