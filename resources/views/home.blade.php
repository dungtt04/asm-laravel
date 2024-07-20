@extends('layout')
@section('title', 'Homepage')
@section('content')
    <!---- home page section -------->
    <section id="hero">
    </section>

    <!---- feature section -------->
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="./img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="./img/features/f6.png" alt="">
            <h6>F24/7 Supper</h6>
        </div>

    </section>

    <!---- feature product section -------->
    <section id="product1" class="section-p1">
        <h2>Sản phẩm mới nhât</h2>
        <div class="pro-container">
            @foreach ($books as $book)
                <div class="pro">
                    <a href="/detail/{{$book->id}}">
                        <img src="{{ $book->thumbnail }}" alt="">

                    </a>
                    <div class="des">
                        <h6>{{ $book->name }}</h6>
                        <a href="" style="text-decoration: none">

                            <h5>{{ $book->title }}</h5>
                        </a>

                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>${{ $book->price }}</h4>
                    </div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            @endforeach

        </div>
    </section>

    <!---- arrivals section start  -->

    <!---- newletter section start -->

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Đăng ký nhận tin tức</h4>
            <p>Nhận thông tin cập nhật qua Email về cửa hàng mới nhất của chúng tôi và các <span>ưu đãi đặc biệt.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Nhập email cuả bạn">
            <button class="normal">Đăng ký</button>
        </div>
    </section>


@endsection
