<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wine;

class PageController extends Controller
{
    public function index(){

        $wines = Wine::paginate(12);

        return view('home', compact('wines'));

    }

}
