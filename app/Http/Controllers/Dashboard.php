<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
  public function users()
  {
      return view('dashboard');
  }
}
