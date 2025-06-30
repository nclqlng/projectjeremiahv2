<?php

namespace App\Http\Controllers;

use App\Models\Admin\Counselor;
use Illuminate\Http\Request;

class CounselorController extends Controller
{
    //
    public function showCounselor($id)
    {
        $counselor = Counselor::with('schedules')->findOrFail($id);
        return view('user.services.counselor_details', compact('counselor'));
    }
}
