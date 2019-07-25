<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Schedule;
use App\Attendance;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function login()
    {
        
    }

    public function register()
    {

    }

    public function index() {
        $users = DB::table('attendances')->get()->toArray();
        return view('index', compact('users'));
    }

    public function attend(Request $request)
    {
        $uid = $request->uid;
        $classId = $request->class_id;
        $macAddress = $request->mac_address;
        $timestamps = Carbon::now();

        return response()->json([
            'uid' => $uid,
            'class_id' => $classId,
            'mac_address' => $macAddress,
            'timestamps' => $timestamps
        ], 200);
    }
}