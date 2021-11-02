<section class="catalog" id="catalog">
    <div class="container">
        <h1>Catalog Section</h1>
        <h2>Best Seller</h2>

        <div class="wrap">
            @foreach($foods as $food)

            <div class="card" onclick="location.href='{{route('detail', $food['id'])}}';">
                <img src="{{$food['picture_url']}}">
                <div class="desc">
                    <h3>{{$food['title']}}</h3>
                    <div class="capsule">
                        @foreach($food['categories'] as $category)
                        <p>{{$category}}</p>
                        @endforeach
                    </div>
                    <h3>Rp. {{$food['base_price']}}</h3>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>