<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    public static function addStockData(){
      $stockName = $_POST["name"];
      $shares = $_POST["share"];
      $currPrice = $_POST["cPrice"];


      DB::table('stocks')->insert(
    ['stockName' => "$stockName", 'shares' => "$shares", 'currPrice' => "$currPrice", 'leftOff' => "$shares"]
);
    }

    public static function getStockData(){
      $name = DB::table('stocks')->pluck('stockName');
      return $name;
      
    }
}
