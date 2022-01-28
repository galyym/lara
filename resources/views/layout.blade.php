<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <title></title>
</head>
<body>
    <div class="px-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class=" container container-fluid">
                <a class="navbar-brand" href="/">Items Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="nav" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="/addItem" style="color: white">Добавить</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/products">Наши товары</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/addproducts">Добавить товар</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">

        @yield('contentPart')
        @yield("footer")

    </div>
</body>
</html>