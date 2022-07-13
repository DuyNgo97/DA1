<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link rel="icon" href="public/images/logo.png">
    <base href="http://localhost/da1/" target="_blank">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
   
</head>

<body>
    <!-- Header -->
    <?php
    require_once 'mvc/views/body/header.php'
    ?>

    <!-- Form check out -->
   <div class="form-checkout">
	<!-- Form Wrapper -->
	<form id="form-wrapper">
		<div id="form-left-wrapper">
			<div id="form-tab-menu">
				<div class="tab-menu-item current shipping-tab">Shipping</div>
				<div class="tab-menu-item payment-tab">Payment</div>
				<div class="tab-menu-item confirmation-tab">Confirmation</div>
			</div>
			<!-- Body of the Form -->
			<div id="form-body">
				<div id="shipping-body">
					<div id="contact-details">
						<div class='form-input input-small'>
							<label>First name ship</label><br/>
							<input type='text' name='firstname' placeholder='First Name' id='firstname-input' class='name-input'/>
						</div>
						<div class='form-input input-small'>
							<label>Last name</label><br/>
							<input type='text' name='lastname' placeholder='Last Name' id='lastname-input' class='name-input'/>
						</div>
						<div class='form-input input-small'>
							<label>E-mail</label><br/>
							<input type='email' name='email' placeholder='E-Mail Address' id='email-input' class='email-input'/>
						</div>
					</div>
					<div class='hr'></div>
					<div id="Address-details">
						<div class='form-input input-small'>
							<label>Contact Number</label><br/>
							<input type='number' name='company' placeholder='Contact Number' id='contact-input' class='number-input'/>
						</div>
						<div class='form-input input-medium'>
							<label>Street Address</label><br/>
							<input type='text' name='address' placeholder='Street Address' id='address-input' class='address-input'/>
						</div>
						<!-- Line Break -->
						<div class='form-input input-small'>
							<label>Country</label><br/>
							<input type='text' name='country' placeholder='Country' id='country-input' class='country-input'/>
						</div>
						<div class='form-input input-small'>
							<label>City</label><br/>
							<input type='text' name='city' placeholder='City' id='city-input' class='city-input'/>
						</div>
						<div class='form-input input-small'>
							<label>Post Code</label><br/>
							<input type='number' name='postcode' placeholder='Post Code' id='postcode-input' class='postcode-input'/>
						</div>
						<div class='hr' style='margin-bottom: 5px;'></div>
						<div class='form-input-checkbox'>
							<input type="checkbox" id="shipping-checkbox"/> My shipping and billing information is the same.
						</div>
					</div>
					<div id="form-submit">
						<input type='submit' value='Next'/>
					</div>
				</div>
				<div id="payment-body">
					<div id="contact-details">
						<div class='form-input input-small'>
							<label>First name paym</label><br/>
							<input type='text' name='firstname' placeholder='First Name' id='firstname-input'/>
						</div>
						<div class='form-input input-small'>
							<label>Last name</label><br/>
							<input type='text' name='lastname' placeholder='Last Name' id='lastname-input'/>
						</div>
						<div class='form-input input-small'>
							<label>E-mail</label><br/>
							<input type='email' name='email' placeholder='E-Mail Address' id='email-input'/>
						</div>
					</div>
					<div class='hr'></div>
					<div id="Address-details">
						<div class='form-input input-small'>
							<label>Contact Number</label><br/>
							<input type='number' name='company' placeholder='Contact Number' id='contact-input'/>
						</div>
						<div class='form-input input-medium'>
							<label>Street Address</label><br/>
							<input type='text' name='address' placeholder='Street Address' id='address-input'/>
						</div>
						<!-- Line Break -->
						<div class='form-input input-small'>
							<label>Country</label><br/>
							<input type='text' name='country' placeholder='Country' id='country-input'/>
						</div>
						<div class='form-input input-small'>
							<label>City</label><br/>
							<input type='text' name='city' placeholder='City' id='city-input'/>
						</div>
						<div class='form-input input-small'>
							<label>Post Code</label><br/>
							<input type='number' name='postcode' placeholder='Post Code' id='postcode-input'/>
						</div>
						<div class='hr' style='margin-bottom: 5px;'></div>
						<div class='form-input-checkbox'>
							<input type="checkbox" id="shipping-checkbox"/> My shipping and billing information is the same.
						</div>
					</div>
					<div id="form-submit">
						<input type='submit' value='Next'/>
					</div>
				</div>
				<div id="confirmation-body">
					<div id="contact-details">
						<div class='form-input input-small'>
							<label>First name conf</label><br/>
							<input type='text' name='firstname' placeholder='First Name' id='firstname-input'/>
						</div>
						<div class='form-input input-small'>
							<label>Last name</label><br/>
							<input type='text' name='lastname' placeholder='Last Name' id='lastname-input'/>
						</div>
						<div class='form-input input-small'>
							<label>E-mail</label><br/>
							<input type='email' name='email' placeholder='E-Mail Address' id='email-input'/>
						</div>
					</div>
					<div class='hr'></div>
					<div id="Address-details">
						<div class='form-input input-small'>
							<label>Contact Number</label><br/>
							<input type='number' name='company' placeholder='Contact Number' id='contact-input'/>
						</div>
						<div class='form-input input-medium'>
							<label>Street Address</label><br/>
							<input type='text' name='address' placeholder='Street Address' id='address-input'/>
						</div>
						<!-- Line Break -->
						<div class='form-input input-small'>
							<label>Country</label><br/>
							<input type='text' name='country' placeholder='Country' id='country-input'/>
						</div>
						<div class='form-input input-small'>
							<label>City</label><br/>
							<input type='text' name='city' placeholder='City' id='city-input'/>
						</div>
						<div class='form-input input-small'>
							<label>Post Code</label><br/>
							<input type='number' name='postcode' placeholder='Post Code' id='postcode-input'/>
						</div>
						<div class='hr' style='margin-bottom: 5px;'></div>
						<div class='form-input-checkbox'>
							<input type="checkbox" id="shipping-checkbox"/> My shipping and billing information is the same.
						</div>
					</div>
					<div id="form-submit">
						<input type='submit' value='Next'/>
					</div>
				</div>
			</div>
		</div>
		<!-- Shopping Cart Menu -->
		<div id="form-cart-menu">
			<div class="shopping-cart-head">
				<h1>Shopping Cart</h1>
			</div>
			<table id="shopping-cart-menu">
				<tr class='shopping-cart-item'>
					<td class='cart-title'>Apply First Aid</td>
					<td class='cart-price'>192.50</td>
				</tr>
				<tr class='shopping-cart-item'>
					<td class='cart-title'>Standard 11 (Generic Mining Induction)</td>
					<td class='cart-price'>660.00</td>
				</tr>
				<tr class='shopping-cart-item'>
					<td class='cart-title'>Confined Space Entry</td>
					<td class='cart-price'>302.50</td>
				</tr>
				<tr class='shopping-cart-total'>
					<td class='cart-total'>Total</td>
					<td class='cart-price-total'></td>
				</tr>
			</table>
		</div>
	</form>
   </div>


<?php include 'body/footer.php' ?>
</body>

</html>


<script>
	$(document).ready(function() {
    var formheight = $("#form-wrapper").height();
    var formleftheight = $("#form-left-wrapper").height();
    var currentformpage = "shipping";
    var paymentbody = $("#payment-body");
    var confirmationbody = $("#confirmation-body");
    var shippingbody = $("#shipping-body");
    var currentformpagediv;

    // Variable decleration to check whether information has been submitted on each page. //
    var shippingstatus = false;
    var paymentstatus = false;
    var confirmationstatus = false;

    function shippingPageInit() {
        paymentbody.hide();
        confirmationbody.hide();
        shippingbody.fadeIn(700);
    }

    function paymentPageInit() {
        confirmationbody.hide();
        shippingbody.hide();
        paymentbody.fadeIn(700);
    }

    function confirmationPageInit() {
        shippingbody.hide();
        paymentbody.hide();
        confirmationbody.fadeIn(700);
    }
    // Getting the prices and adding them together to get the total //
    var cartprice = $(".cart-price");
    var cartitemcount = cartprice.length - 1;
    var cartitempricelist = [];

    function getSum(total, num) {
        return total + num;
    }
    cartprice.each(function() {
        cartitempricelist.push($(this).html());
    });
    var converttofloat = cartitempricelist.join(" ").split(" ").map(Number);
    $(".cart-price-total").html(converttofloat.reduce(getSum));
    // Changing form screen when user clicks on the form tabs //
    $(".tab-menu-item").click(function() {
        $("#form-left-wrapper").css({ "min-height": "278px" });
        $(".tab-menu-item").removeClass("current");
        if ($(this).hasClass("current")) {
            return false;
        } else {
            $(this).toggleClass("current");
            var currenttab = $(this).html();
            if (currenttab == "Shipping") {
                currentformpage = "shipping";
                shippingPageInit();
                currentformpagediv = "#" + currentformpage + "-body";
            } else if (currenttab == "Payment") {
                currentformpage = "payment";
                paymentPageInit();
                currentformpagediv = "#" + currentformpage + "-body";
            } else if (currenttab == "Confirmation") {
                currentformpage = "confirmation";
                confirmationPageInit();
                currentformpagediv = "#" + currentformpage + "-body";
            }
        }
    });
    $(".form-input-checkbox, #shipping-checkbox").click(function() {
        var checkbox = document.getElementById("shipping-checkbox");
        if (checkbox.checked == true) {
            checkbox.checked = false;
        } else {
            checkbox.checked = true;
        }
    });

    function nextPageForm() {
        $(".tab-menu-item").removeClass("current");
        if (currentformpage == "shipping") {
            $(".payment-tab").addClass("current");
            $("#shipping-body").hide();
            $("#confirmation-body").hide();
            $("#payment-body").fadeIn(700);
            currentformpage = "payment";
        } else if (currentformpage == "payment") {
            $(".confirmation-tab").addClass("current");
            $("#shipping-body").hide();
            $("#payment-body").hide();
            $("#confirmation-body").fadeIn(700);
            currentformpage = "confirmation";
        } else {
            $(".confirmation-tab").addClass("current");
        }
    }

    function checkValidation(i) {
        nextPageForm();
    }

    $("#form-wrapper").submit(function(event) {
        event.preventDefault();
        checkValidation(currentformpage);
    });
});
</script>