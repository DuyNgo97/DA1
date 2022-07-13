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
            <div class="container_fluid row">
                <div class="ab col-12 col-md-8 ">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <form class=" row" action="">
                                <div class="form-name col-12">
                                    <div class="bc col-6 ">
                                        <input type="text">
                                    </div>


                                    <div class="bc col-6">
                                        <input type="text">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>

                    </div>
                </div>

                <div class="col-12 col-md-4">
                    123
                </div>
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
            $("#form-left-wrapper").css({
                "min-height": "278px"
            });
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