<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Thanh toán</title>
    <?php
    require_once 'base.php';
    ?>
    <link rel="stylesheet" href="./public/css/checkout.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
    <link rel="icon" href="public/images/logo.png">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <style>
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">

</head>
<?php
require_once 'mvc/views/body/header.php';
?>


<?php
// var_dump($_SESSION['user']);
?>

<body>
    <div class="container" style="padding-top: 100px;">
        <div class="input-group" style="width: 50%; margin-left: 25%;">
            <h1>Tìm kiếm sản phẩm</h1>
            <form action="" style="width: 100%;">
                <input type="search" id="search" class="form-control rounded" placeholder="Nhập sản phẩm cần tìm kiếm" aria-label="Search" aria-describedby="search-addon" />
            </form>
        </div>
        <section style="min-height: 50vh;">
            <div class="container py-5">
                <div class="row justify-content-center" id="output">

                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
    <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>
</body>
<?php include 'body/footer.php' ?>

</html>

<script type="text/javascript">
    $(document).ready(function() {

        var action = "searchAJ";

        $("#search").keyup(function() {
            var search = $("#search").val();

            if ($("#search").val() != '') {
                $.ajax({
                    url: "find_item/searchAJ",
                    method: "POST",
                    data: {
                        action: action,
                        search_pro: search
                    },
                    success: function(data) {
                        $("#output").html(data);

                    }
                });
            } else {
                $("#output").html("");
            }


            // console.log(action);
        })
    });
</script>