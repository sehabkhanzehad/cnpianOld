<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BlogSignOutController extends Controller
{
   function blogSignOut(){
    Auth::guard('author')->logout();
    return redirect()->route("blogHome");
   } // End Method
}
