<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/detail.css')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <section class="detail">
        <a href="{{route('home')}}"><img src="{{asset('asset/icon-back.svg')}}"></a>
        <h1><span>Detail</span> Section</h1>
        <div class="wrap">
            <img src="{{$food['picture_url']}}">

            <div class="desc">
                <h2>{{$food['title']}}</h2>
                <div class="capsule">
                    @foreach($food['categories'] as $category)
                        <p>{{$category}}</p>
                    @endforeach
                </div>
                <p class="description">{{$food['description']}}</p>
                <a href="" onclick="thanksAlert()">Order Now</a>
            </div>
        </div>
    </section>

    <script src="{{asset('js/script.js')}}"></script>

</body>

</html>
