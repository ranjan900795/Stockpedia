$(document).ready(function (){
  $('#listPriceBid').click(function (){
    $('#priceBid').removeAttr("disabled");
    $('#typeBid').text('List Price');
  });

  $('#currentPriceBid').click(function (){
    $('#typeBid').text('Current Price');
  });

/*  $('#currentPriceBid').click(function (){
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
*/

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
      $('#typeOffer').text('Current Price');
    });

/*    $('#currentPriceOffer').click(function (){
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
*/
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



    function getBidQueue(){
      var url = "/stocks/bidQueue/"+stockName;
      $.ajax(url,{
          type: "GET",
          success: bidQueue
      });
    }

    var bidQueue = function(data) {
        //console.log the response
        $("#bidQueue").empty();
        $.each(JSON.parse(data), function (index, value) {
        $("#bidQueue").append('<p>' + value + '</p>');
        if(index == 10){
          return false;
        }
        });
        //Send another request in 10 seconds.
        setTimeout(function(){
            getBidQueue();
        }, 5000);
    }

    //Call our function
    getBidQueue();

    function getOfferQueue(){
      var url = "/stocks/offerQueue/"+stockName;
      $.ajax(url,{
          type: "GET",
          success: offerQueue
      });
    }

    var offerQueue = function(data) {
        //console.log the response
        $("#offerQueue").empty();
        $.each(JSON.parse(data), function (index, value) {
        $("#offerQueue").append('<p>' + value + '</p>');
        if(index == 10){
          return false;
        }
        });

        //Send another request in 10 seconds.
        setTimeout(function(){
            getOfferQueue();
        }, 5000);
    }

    //Call our function
    getOfferQueue();
});
