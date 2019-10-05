<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stocks extends Controller
{
    public function stock($name)
    {
      $data['data'] = $name;
      return view('stock',$data);
    }
}
