<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stocks;
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
      $data['data']=Stocks::getStockData();
      return view('transaction',$data);
  }
}
