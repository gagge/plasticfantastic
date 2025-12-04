<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller {
  public function index()
  {
    $title = 'Login';
    return view('login')->with('title', $title);
  }
}
