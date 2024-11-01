<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        echo "berhasil halo";
        echo "<h1>" . Auth::user()->name. "</h1>";
        echo "<a href='/logout' >Logout</a>";
    }
    function admin(){
        echo "berhasil halo admin";
        echo "<h1>" . Auth::user()->name. "</h1>";
        echo "<a href='/logout' >Logout</a>";
    }
    function penyewa(){
        echo "berhasil halo penyewa";
        echo "<h1>" . Auth::user()->name. "</h1>";
        echo "<a href='/logout' >Logout</a>";
    }
}