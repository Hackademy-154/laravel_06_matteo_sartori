<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }
}
