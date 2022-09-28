<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="resources\assests\boostrap\css\bootstrap.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <title>Ecommerce</title>
</head>
<body>

    {{ View::make('header') }}

        @yield('content')

    {{ View::make('footer') }}




</body>

<script>

</script>

<style>
    .custom-login{
        height: 500px;
        padding-top: 200px;
    }
    img.slider-img{
        height: 450px !important;
        width: 100%;
    }
    .custom-product{
        height: 550px !important;
    }
    .slider-text{
        background-color: #0000005c;
    }
    img.trending-img{
        height: 100px !important;
    }
    .trending-wrapper{
        margin:30px;
    }
    .trending-content{
        float: left;
        width: 20%;

    }
    .detail-img{
        height: 300px;
        width: 100%;
    }
    .search-img{
        height: 150px;
        width: 300px;


    }
    .cart-img{
        height: 300 px;
        width: 150px;
    }
    .cart_item{
        border-bottom: 1px solid rgb(212, 206, 206) !important;
        margin-bottom: 20px !important;
        padding-bottom: 20px;
    }
    .header-nav ul li{
        padding: 0 20px 0px 20px;
    }
    .footer{
        height: 100px;
        background-color:  #adb5bd63;
        text-align: center;
        font-size: 40px;
        color: black;
    }
    .footer h1{
        padding: 20px;
    }
    }
</style>



</html>
