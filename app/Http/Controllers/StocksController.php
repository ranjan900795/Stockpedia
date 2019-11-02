<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stocks;
class StocksController extends Controller
{
    public function stock($name)
    {
      $data['data'] = $name;
      return view('stock',$data);
    }

    public function getCurrentPrice($name)
    {
      $data['data']=Stocks::getPrice($name);
      foreach ($data as $row ) {
        return json_encode($row);
      }
    }

    public function bid($name)
    {
      Stocks::bidStock($name);
    }

    public function offer($name)
    {
      Stocks::offerStock($name);
    }
}
