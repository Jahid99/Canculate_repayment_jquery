<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
         <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            button {
                color: #333;
    background-color: #fff;
    border-color: #ccc;
        
    padding: 6px 12px;
    margin-bottom: 22px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    
    white-space: nowrap;
    vertical-align: middle;

            }

            button.pressed {
                background-color: orange;
            }
        </style>
    </head>
    <body>
<br>
<br>
<br>
<br>
<br>

<div class="container">
  <div class="row">

    <div class="col-md-2 col-sm-2">
    <button style=" visibility: hidden;">hidden</button>
	    	<h4 id=""><b>Penalties</b></h4>
	    	<h4 id=""><b>Fees</b></h4>
	    	<h4 id=""><b>Interest</b></h4>
	    	<h4 id=""><b>Principal</b></h4>
    </div>

    <div class="col-md-2 col-sm-2">
    	<button>Old Months</button>
	    	<h4>20.02</h4>
	    	<input type="hidden" id="old_month_1" name="old_month_1" value="20.02" />
	    	<h4>20.04</h4>
	    	<input type="hidden" id="old_month_2" name="old_month_2" value="20.04" />
	    	<h4>20.06</h4>
	    	<input type="hidden" id="old_month_3" name="old_month_3" value="20.06" />
	    	<h4>20.08</h4>
	    	<input type="hidden" id="old_month_4" name="old_month_4" value="20.08" />
    </div>

    <div class="col-md-2 col-sm-2">
    	<button>1st Month</button>
    		<h4>20.02</h4>
    		<input type="hidden" id="first_month_1" name="first_month_1" value="20.02" />
	    	<h4>20.02</h4>
	    	<input type="hidden" id="first_month_2" name="first_month_2" value="20.02" />
	    	<h4>20.02</h4>
	    	<input type="hidden" id="first_month_3" name="first_month_3" value="20.02" />
	    	<h4>20.02</h4>
	    	<input type="hidden" id="first_month_4" name="first_month_4" value="20.02" />
    </div>

    <div class="col-md-2 col-sm-2">
    	<button>2nd Month</button>
    		<h4>20.02</h4>
    		<input type="hidden" id="second_month_1" name="second_month_1" value="20.02" />
	    	<h4>20.02</h4>
	    	<input type="hidden" id="second_month_2" name="second_month_2" value="20.02" />
	    	<h4>20.02</h4>
	    	<input type="hidden" id="second_month_3" name="second_month_3" value="20.02" />
	    	<h4>20.02</h4>
	    	<input type="hidden" id="second_month_4" name="second_month_4" value="20.02" />
    </div>

    <div class="col-md-2 col-sm-2">
    	 <button>3rd Month</button>
    	 <h4>20.02</h4>
    	 <input type="hidden" id="third_month_1" name="third_month_1" value="20.02" />
	    	<h4>20.02</h4>
	    	<input type="hidden" id="third_month_2" name="third_month_2" value="20.02" />
	    	<h4>20.02</h4>
	    	<input type="hidden" id="third_month_3" name="third_month_3" value="20.02" />
	    	<h4>20.02</h4>
	    	<input type="hidden" id="third_month_4" name="third_month_4" value="20.02" />
    </div>


    <div class="col-md-2 col-sm-2">
    	 <p style="font-size: 21px;    margin: 0 0 7px;">Total Pay Now</p><br>
    	 <h4 id="total_pay_div_1">00.00</h4>
    	 <input type="hidden" id="total_pay_1" name="total_pay_1" value="00.00" />
	    	<h4 id="total_pay_div_2">00.00</h4>
	    	<input type="hidden" id="total_pay_2" name="total_pay_2" value="00.00" />
	    	<h4 id="total_pay_div_3">00.00</h4>
	    	<input type="hidden" id="total_pay_3" name="total_pay_3" value="00.00" />
	    	<h4 id="total_pay_div_4">00.00</h4>
	    	<input type="hidden" id="total_pay_4" name="total_pay_4" value="00.00" />
	    	
    </div>




    <div class="col-md-8 col-sm-8">
    	 
    	 
    	 
    	
	    	
    </div>

<div class="col-md-2  col-sm-2">
    	 <h4 id=""><b>Excess Amount</b></h4>
    	 <h4 id=""><b>Total Amount</b></h4>
    </div>

<div class="col-md-2  col-sm-2">
    	 <h4 id="excess_amount_div">10.00</h4>
    	 <input type="hidden" id="excess_amount" name="excess_amount" value="10.00" />
    	 <h4 id="total_amount_div">10.00</h4>
    	 <input type="hidden" id="total_amount" name="total_amount" value="10.00" />
    </div>
        
        
       

    
  </div>
</div>
        
        
        <script>
            $(() => {
                'use strict';
                $('button').click(function() {
                    $(this).toggleClass('pressed');
                    
                    //Old Months

        if($(this).text()=='Old Months' && ($(this).hasClass("pressed"))){

            var old_month_1 = parseFloat($('#old_month_1').val());
            var old_month_2 = parseFloat($('#old_month_2').val());
            var old_month_3 = parseFloat($('#old_month_3').val());
            var old_month_4 = parseFloat($('#old_month_4').val());
            
            var val1 = old_month_1+ parseFloat($('#total_pay_1').val());
            var val2 = old_month_2+ parseFloat($('#total_pay_2').val());
            var val3 = old_month_3+ parseFloat($('#total_pay_3').val());
            var val4 = old_month_4+ parseFloat($('#total_pay_4').val());

            document.getElementById("total_pay_div_1").innerHTML = parseFloat(val1).toFixed(2);
            document.getElementById("total_pay_div_2").innerHTML = parseFloat(val2).toFixed(2);
            document.getElementById("total_pay_div_3").innerHTML = parseFloat(val3).toFixed(2);
            document.getElementById("total_pay_div_4").innerHTML = parseFloat(val4).toFixed(2);

            $('#total_pay_1').val(parseFloat(val1).toFixed(2));
            $('#total_pay_2').val(parseFloat(val2).toFixed(2));
            $('#total_pay_3').val(parseFloat(val3).toFixed(2));
            $('#total_pay_4').val(parseFloat(val4).toFixed(2));

            var excess_amount = parseFloat($('#excess_amount').val());
            var total = excess_amount+val1+val2+val3+val4;
            document.getElementById("total_amount_div").innerHTML = parseFloat(total).toFixed(2);
            $('#total_amount').val(parseFloat(total).toFixed(2));

        }else if($(this).text()=='Old Months' && !($(this).hasClass("pressed"))){

            var old_month_1 = parseFloat($('#old_month_1').val());
            var old_month_2 = parseFloat($('#old_month_2').val());
            var old_month_3 = parseFloat($('#old_month_3').val());
            var old_month_4 = parseFloat($('#old_month_4').val());
            
            var val1 =  parseFloat($('#total_pay_1').val()) - old_month_1;
            var val2 =  parseFloat($('#total_pay_2').val()) - old_month_2;
            var val3 =  parseFloat($('#total_pay_3').val()) - old_month_3;
            var val4 =  parseFloat($('#total_pay_4').val()) - old_month_4;

            document.getElementById("total_pay_div_1").innerHTML = parseFloat(val1).toFixed(2);
            document.getElementById("total_pay_div_2").innerHTML = parseFloat(val2).toFixed(2);
            document.getElementById("total_pay_div_3").innerHTML = parseFloat(val3).toFixed(2);
            document.getElementById("total_pay_div_4").innerHTML = parseFloat(val4).toFixed(2);

            $('#total_pay_1').val(parseFloat(val1).toFixed(2));
            $('#total_pay_2').val(parseFloat(val2).toFixed(2));
            $('#total_pay_3').val(parseFloat(val3).toFixed(2));
            $('#total_pay_4').val(parseFloat(val4).toFixed(2));

            var excess_amount = parseFloat($('#excess_amount').val());
            var total = excess_amount+val1+val2+val3+val4;
            document.getElementById("total_amount_div").innerHTML = parseFloat(total).toFixed(2);
            $('#total_amount').val(parseFloat(total).toFixed(2));

        }

    //1st Month

    if($(this).text()=='1st Month' && ($(this).hasClass("pressed"))){

            var first_month_1 = parseFloat($('#first_month_1').val());
            var first_month_2 = parseFloat($('#first_month_2').val());
            var first_month_3 = parseFloat($('#first_month_3').val());
            var first_month_4 = parseFloat($('#first_month_4').val());
            
            var val1 = first_month_1+ parseFloat($('#total_pay_1').val());
            var val2 = first_month_2+ parseFloat($('#total_pay_2').val());
            var val3 = first_month_3+ parseFloat($('#total_pay_3').val());
            var val4 = first_month_4+ parseFloat($('#total_pay_4').val());

            document.getElementById("total_pay_div_1").innerHTML = parseFloat(val1).toFixed(2);
            document.getElementById("total_pay_div_2").innerHTML = parseFloat(val2).toFixed(2);
            document.getElementById("total_pay_div_3").innerHTML = parseFloat(val3).toFixed(2);
            document.getElementById("total_pay_div_4").innerHTML = parseFloat(val4).toFixed(2);

            $('#total_pay_1').val(parseFloat(val1).toFixed(2));
            $('#total_pay_2').val(parseFloat(val2).toFixed(2));
            $('#total_pay_3').val(parseFloat(val3).toFixed(2));
            $('#total_pay_4').val(parseFloat(val4).toFixed(2));

            var excess_amount = parseFloat($('#excess_amount').val());
            var total = excess_amount+val1+val2+val3+val4;
            document.getElementById("total_amount_div").innerHTML = parseFloat(total).toFixed(2);
            $('#total_amount').val(parseFloat(total).toFixed(2));



    }else if($(this).text()=='1st Month' && !($(this).hasClass("pressed"))){

            var first_month_1 = parseFloat($('#first_month_1').val());
            var first_month_2 = parseFloat($('#first_month_2').val());
            var first_month_3 = parseFloat($('#first_month_3').val());
            var first_month_4 = parseFloat($('#first_month_4').val());
            
            var val1 =  parseFloat($('#total_pay_1').val()) - first_month_1;
            var val2 =  parseFloat($('#total_pay_2').val()) - first_month_2;
            var val3 =  parseFloat($('#total_pay_3').val()) - first_month_3;
            var val4 =  parseFloat($('#total_pay_4').val()) - first_month_4;

            document.getElementById("total_pay_div_1").innerHTML = parseFloat(val1).toFixed(2);
            document.getElementById("total_pay_div_2").innerHTML = parseFloat(val2).toFixed(2);
            document.getElementById("total_pay_div_3").innerHTML = parseFloat(val3).toFixed(2);
            document.getElementById("total_pay_div_4").innerHTML = parseFloat(val4).toFixed(2);

            $('#total_pay_1').val(parseFloat(val1).toFixed(2));
            $('#total_pay_2').val(parseFloat(val2).toFixed(2));
            $('#total_pay_3').val(parseFloat(val3).toFixed(2));
            $('#total_pay_4').val(parseFloat(val4).toFixed(2));

            var excess_amount = parseFloat($('#excess_amount').val());
            var total = excess_amount+val1+val2+val3+val4;
            document.getElementById("total_amount_div").innerHTML = parseFloat(total).toFixed(2);
            $('#total_amount').val(parseFloat(total).toFixed(2));

    }


    //2nd Month

    if($(this).text()=='2nd Month' && ($(this).hasClass("pressed"))){

            var second_month_1 = parseFloat($('#second_month_1').val());
            var second_month_2 = parseFloat($('#second_month_2').val());
            var second_month_3 = parseFloat($('#second_month_3').val());
            var second_month_4 = parseFloat($('#second_month_4').val());
            
            var val1 = second_month_1+ parseFloat($('#total_pay_1').val());
            var val2 = second_month_2+ parseFloat($('#total_pay_2').val());
            var val3 = second_month_3+ parseFloat($('#total_pay_3').val());
            var val4 = second_month_4+ parseFloat($('#total_pay_4').val());

            document.getElementById("total_pay_div_1").innerHTML = parseFloat(val1).toFixed(2);
            document.getElementById("total_pay_div_2").innerHTML = parseFloat(val2).toFixed(2);
            document.getElementById("total_pay_div_3").innerHTML = parseFloat(val3).toFixed(2);
            document.getElementById("total_pay_div_4").innerHTML = parseFloat(val4).toFixed(2);

            $('#total_pay_1').val(parseFloat(val1).toFixed(2));
            $('#total_pay_2').val(parseFloat(val2).toFixed(2));
            $('#total_pay_3').val(parseFloat(val3).toFixed(2));
            $('#total_pay_4').val(parseFloat(val4).toFixed(2));

            var excess_amount = parseFloat($('#excess_amount').val());
            var total = excess_amount+val1+val2+val3+val4;
            document.getElementById("total_amount_div").innerHTML = parseFloat(total).toFixed(2);
            $('#total_amount').val(parseFloat(total).toFixed(2));

    }else if($(this).text()=='2nd Month' && !($(this).hasClass("pressed"))){

            var second_month_1 = parseFloat($('#second_month_1').val());
            var second_month_2 = parseFloat($('#second_month_2').val());
            var second_month_3 = parseFloat($('#second_month_3').val());
            var second_month_4 = parseFloat($('#second_month_4').val());
            
            var val1 =  parseFloat($('#total_pay_1').val()) - second_month_1;
            var val2 =  parseFloat($('#total_pay_2').val()) - second_month_2;
            var val3 =  parseFloat($('#total_pay_3').val()) - second_month_3;
            var val4 =  parseFloat($('#total_pay_4').val()) - second_month_4;

            document.getElementById("total_pay_div_1").innerHTML = parseFloat(val1).toFixed(2);
            document.getElementById("total_pay_div_2").innerHTML = parseFloat(val2).toFixed(2);
            document.getElementById("total_pay_div_3").innerHTML = parseFloat(val3).toFixed(2);
            document.getElementById("total_pay_div_4").innerHTML = parseFloat(val4).toFixed(2);

            $('#total_pay_1').val(parseFloat(val1).toFixed(2));
            $('#total_pay_2').val(parseFloat(val2).toFixed(2));
            $('#total_pay_3').val(parseFloat(val3).toFixed(2));
            $('#total_pay_4').val(parseFloat(val4).toFixed(2));

            var excess_amount = parseFloat($('#excess_amount').val());
            var total = excess_amount+val1+val2+val3+val4;
            document.getElementById("total_amount_div").innerHTML = parseFloat(total).toFixed(2);
            $('#total_amount').val(parseFloat(total).toFixed(2));

    }


    //3rd Month

    if($(this).text()=='3rd Month' && ($(this).hasClass("pressed"))){

            var third_month_1 = parseFloat($('#third_month_1').val());
            var third_month_2 = parseFloat($('#third_month_2').val());
            var third_month_3 = parseFloat($('#third_month_3').val());
            var third_month_4 = parseFloat($('#third_month_4').val());
            
            var val1 = third_month_1+ parseFloat($('#total_pay_1').val());
            var val2 = third_month_2+ parseFloat($('#total_pay_2').val());
            var val3 = third_month_3+ parseFloat($('#total_pay_3').val());
            var val4 = third_month_4+ parseFloat($('#total_pay_4').val());

            document.getElementById("total_pay_div_1").innerHTML = parseFloat(val1).toFixed(2);
            document.getElementById("total_pay_div_2").innerHTML = parseFloat(val2).toFixed(2);
            document.getElementById("total_pay_div_3").innerHTML = parseFloat(val3).toFixed(2);
            document.getElementById("total_pay_div_4").innerHTML = parseFloat(val4).toFixed(2);

            $('#total_pay_1').val(parseFloat(val1).toFixed(2));
            $('#total_pay_2').val(parseFloat(val2).toFixed(2));
            $('#total_pay_3').val(parseFloat(val3).toFixed(2));
            $('#total_pay_4').val(parseFloat(val4).toFixed(2));

            var excess_amount = parseFloat($('#excess_amount').val());
            var total = excess_amount+val1+val2+val3+val4;
            document.getElementById("total_amount_div").innerHTML = parseFloat(total).toFixed(2);
            $('#total_amount').val(parseFloat(total).toFixed(2));

    }else if($(this).text()=='3rd Month' && !($(this).hasClass("pressed"))){

            var third_month_1 = parseFloat($('#third_month_1').val());
            var third_month_2 = parseFloat($('#third_month_2').val());
            var third_month_3 = parseFloat($('#third_month_3').val());
            var third_month_4 = parseFloat($('#third_month_4').val());
            
            var val1 =  parseFloat($('#total_pay_1').val()) - third_month_1;
            var val2 =  parseFloat($('#total_pay_2').val()) - third_month_2;
            var val3 =  parseFloat($('#total_pay_3').val()) - third_month_3;
            var val4 =  parseFloat($('#total_pay_4').val()) - third_month_4;

            document.getElementById("total_pay_div_1").innerHTML = parseFloat(val1).toFixed(2);
            document.getElementById("total_pay_div_2").innerHTML = parseFloat(val2).toFixed(2);
            document.getElementById("total_pay_div_3").innerHTML = parseFloat(val3).toFixed(2);
            document.getElementById("total_pay_div_4").innerHTML = parseFloat(val4).toFixed(2);

            $('#total_pay_1').val(parseFloat(val1).toFixed(2));
            $('#total_pay_2').val(parseFloat(val2).toFixed(2));
            $('#total_pay_3').val(parseFloat(val3).toFixed(2));
            $('#total_pay_4').val(parseFloat(val4).toFixed(2));

            var excess_amount = parseFloat($('#excess_amount').val());
            var total = excess_amount+val1+val2+val3+val4;
            document.getElementById("total_amount_div").innerHTML = parseFloat(total).toFixed(2);
            $('#total_amount').val(parseFloat(total).toFixed(2));

    }









                });
            });
        </script>
    </body>
</html>