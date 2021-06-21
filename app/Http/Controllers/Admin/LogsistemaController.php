<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log\LogSistema;
use Illuminate\Http\Request;

class LogsistemaController extends Controller
{
    
    public function index()
    {
        $logs = LogSistema::all();
        return view('admin.logs.index', compact('logs'));
    }

}
