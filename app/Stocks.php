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

    //method to return all stock names to controller (dashboard.php) for Transaction page
    public static function getStockData(){
      $name = DB::table('stocks')->pluck('stockName');
      return $name;

    }

    //Fetch current price of stock specific to stockName
    public static function getPrice($name){
      $price =  DB::table('stocks')->where('stockName', $name)->value('currPrice');
      return $price;
    }

    public static function bidStock($name){
      $stockId =  DB::table('stocks')->where('stockName', $name)->value('id');
      $shares = $_POST["quantity"];
      $bidPrice = $_POST["price"];
      DB::table('bid')->insert(
        ['userId' => "1", 'stockId' => "$stockId", 'bidPrice' => "$bidPrice", 'shares' => "$shares"]
      );
    }

    public static function offerStock($name){
      $stockId = DB::table('stocks')->where('stockName', $name)->value('id');
      $shares = $_POST["quantity"];
      $offerPrice = $_POST["price"];
      DB::table('offers')->insert(
        ['userId' => "1", 'stockId' => "$stockId", 'offerPrice' => "$offerPrice", 'shares' => "$shares"]
      );
    }
}
