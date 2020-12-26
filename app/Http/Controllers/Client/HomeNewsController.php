<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeNewsController extends Controller
{
    public function index()
    {





        return view('client.index');
    }


}
