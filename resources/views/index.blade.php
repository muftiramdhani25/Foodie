<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <p>Foodie</p>
    </header>

    <section class="home">
        <div class="container">
            <div class="headline">
                <h1>All Delicious</h1>
                <h1>Asean Food</h1>
                <h2>Mie, Fried, Rice, Egg & Soup</h2>
                <a href="#catalog">See Our Menu</a>
            </div>
        </div>

        <img class="image-noodles" src="{{asset('asset/main.png')}}">
        <img class="image-circle" src="{{asset('asset/circle.svg')}}">
        <img class="image-pattern" src="{{asset('asset/pattern.svg')}}">
    </section>

    <section class="catalog" id="catalog">
        <div class="container">
            <h1>Catalog Section</h1>
            <h2>Best Seller</h2>

            <div class="wrap">
                <div class="card">
                    <img src="{{asset('asset/image-1.png')}}">
                    <div class="desc">
                        <h3>Nasi Goreng</h3>
                        <div class="capsule">
                            <p>food</p>
                            <p>rice</p>
                        </div>
                        <h3>IDR. 15k</h3>
                    </div>
                </div>

                <div class="card">
                    <img src="{{asset('asset/image-1.png')}}">
                    <div class="desc">
                        <h3>Nasi Goreng</h3>
                        <div class="capsule">
                            <p>food</p>
                            <p>rice</p>
                        </div>
                        <h3>IDR. 15k</h3>
                    </div>
                </div>

                <div class="card">
                    <img src="{{asset('asset/image-1.png')}}">
                    <div class="desc">
                        <h3>Nasi Goreng</h3>
                        <div class="capsule">
                            <p>food</p>
                            <p>rice</p>
                        </div>
                        <h3>IDR. 15k</h3>
                    </div>
                </div>

                <div class="card">
                    <img src="{{asset('asset/image-1.png')}}">
                    <div class="desc">
                        <h3>Nasi Goreng</h3>
                        <div class="capsule">
                            <p>food</p>
                            <p>rice</p>
                        </div>
                        <h3>IDR. 15k</h3>
                    </div>
                </div>
            </div>

            <h2>New Menu</h2>

            <div class="wrap">
                <div class="card">
                    <img src="{{asset('asset/image-1.png')}}">
                    <div class="desc">
                        <h3>Nasi Goreng</h3>
                        <div class="capsule">
                            <p>food</p>
                            <p>rice</p>
                        </div>
                        <h3>IDR. 15k</h3>
                    </div>
                </div>

                <div class="card">
                    <img src="{{asset('asset/image-1.png')}}">
                    <div class="desc">
                        <h3>Nasi Goreng</h3>
                        <div class="capsule">
                            <p>food</p>
                            <p>rice</p>
                        </div>
                        <h3>IDR. 15k</h3>
                    </div>
                </div>

                <div class="card">
                    <img src="{{asset('asset/image-1.png')}}">
                    <div class="desc">
                        <h3>Nasi Goreng</h3>
                        <div class="capsule">
                            <p>food</p>
                            <p>rice</p>
                        </div>
                        <h3>IDR. 15k</h3>
                    </div>
                </div>

                <div class="card">
                    <img src="{{asset('asset/image-1.png')}}">
                    <div class="desc">
                        <h3>Nasi Goreng</h3>
                        <div class="capsule">
                            <p>food</p>
                            <p>rice</p>
                        </div>
                        <h3>IDR. 15k</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('js/script.js')}}"></script>

</body>

</html>
