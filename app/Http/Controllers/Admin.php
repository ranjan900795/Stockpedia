<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stocks;
class Admin extends Controller
{
    public function addStock(){
      return view('addStock');
    }

    public function add(){
      Stocks::addStockData();
    }
}
