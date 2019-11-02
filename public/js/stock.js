$(document).ready(function (){
  $('#listPriceBid').click(function (){
    $('#priceBid').removeAttr("disabled");
    $('#typeBid').text('List Price');
  });

  $('#currentPriceBid').click(function (){
    var url = "/stocks/getCurrentPrice/"+stockName;

    $.ajax(url, {
      type: "GET",
      success: currentPriceBid
    });

  });

    var currentPriceBid = function(response){

      $('#typeBid').text('Current Price');
      $("#priceBid").val(response);


    };


    $('#bid').click(function (){
       var data = $('#bidForm').serialize();
       var url = "/stocks/bid/"+stockName;
       $.ajax(url, {
           data: data,
           success: bid_success,
           type: "POST"

       });
       return false;
    });
    var bid_success = function (data) {
         alert('SUCCESS!!');
    };




    $('#listPriceOffer').click(function (){
      $('#priceOffer').removeAttr("disabled");
      $('#typeOffer').text('List Price');
    });



    $('#currentPriceOffer').click(function (){
      var url = "/stocks/getCurrentPrice/"+stockName;

      $.ajax(url, {
        type: "GET",
        success: currentPriceOffer
      });

    });
    var currentPriceOffer = function(response){
      
      $('#typeOffer').text('Current Price');
      $("#priceOffer").val(response);

    };

    $('#offer').click(function (){
       var data = $('#offerForm').serialize();
       var url = "/stocks/offer/"+stockName;
       $.ajax(url, {
           data: data,
           success: offer_success,
           type: "POST"

       });
       return false;
    });

    var offer_success = function (data) {

         alert('SUCCESS!!');
    };
});
