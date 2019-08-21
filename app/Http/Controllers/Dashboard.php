<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
  public function myprofile()
  {
      return view('profile');
  }
  public function portfolio()
  {
      return view('portfolio');
  }
  public function orderBook()
  {
      return view('orderBook');
  }
  public function transaction()
  {
      return view('transaction');
  }
}
