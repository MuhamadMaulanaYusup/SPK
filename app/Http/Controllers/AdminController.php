<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Lowongan;

class AdminController extends Controller
{
    public function index(){
    	 $data = Lowongan::latest()->get();
    	return view("admin.index",compact('data'));
    }
}
