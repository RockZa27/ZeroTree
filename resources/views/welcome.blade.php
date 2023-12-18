<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="icon" href="https://htmljstemplates.com/static_files/images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Quicksand:wght@400;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/dd5559ee21.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    .customLink>a {
        text-decoration: none;
        color: #121111;
    }

    #circleIcon {
        width: 60px;
        height: 60px;
        line-height: 60px;
        border: 2px dotted #121111;
        border-radius: 100%;
        text-align: center
    }
    </style>

</head>

<body>

    <body class="p-2">

        <div>
            <div class="container-fluid" role="navigation">
                <div class="text-center py-2">
                    <img src="{{asset('storage/image/logo.png')}}" alt="" height="60">
                </div>
                <div class="row text-center align-items-center g-0">
                    <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none ms-auto">
                        <div class="d-flex justify-content-around border-top border-bottom border-dark">
                            <div class="customLink"><a class="d-inline-block p-3" href="#">Home</a></div>
                            <div class="customLink"><a class="d-inline-block p-3" href="#">Product</a></div>
                            <div class="customLink"><a class="d-inline-block p-3" href="#">Pricing</a></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 mx-auto d-xs-none d-none d-lg-block d-md-block"
                        style="max-width:120px;">
                        <i class="fas  fs-3 text-danger" id="circleIcon"></i>
                    </div>
                    <div class="col-lg-5 col-md-5 d-none d-lg-block d-md-block d-xs-none me-auto">
                        <div class="d-flex justify-content-around border-top border-bottom border-dark">
                            <div class="customLink"><a class="d-inline-block p-3" href="#">Company</a></div>
                            <div class="customLink"><a class="d-inline-block p-3" href="#">Services</a></div>
                            <div class="customLink"><a class="d-inline-block p-3" href="#">Contact Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </body>

</html>
