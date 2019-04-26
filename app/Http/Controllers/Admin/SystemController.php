<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SystemController extends Controller
{
    public function index()
    {
        $data = Setting::all();
        return view('admin.system.index', [
            'list' => $data
        ]);
    }
}
