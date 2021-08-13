<?php

namespace VendorName\MainProjectName\PluginName\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PluginNameController extends Controller
{
    public function index()
    {
        return view('plugin-name::index');
    }
}
