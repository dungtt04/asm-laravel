@extends('layout')
@section('title', 'Chi tiết SP')
@section('content')
@foreach ($books as $book)
<section id="prodetails" class="section-p1">
  <div class="single-product-image">
    <img src="{{ $book->thumbnail }}" alt="" width="100%" id="mainImg" />
  </div>

  <div class="single-product-details">
    <h4>{{ $book->title }}</h4>
    <h2>$ {{ $book->price }}</h2>
    <input type="number" value="1" />
    <button>Thêm vào giỏ hàng</button>
    <h4>Thông tin sản phẩm</h4>
    <span>

      Tác giả: {{ $book->author }} <br>
      Nhà xuất bản: {{ $book->publisher }} <br>
      Ngày xuất bản: {{ $book->publication }}

    </span>
  </div>
</section>


@endforeach

<!---- sản phẩm liên quan -------->
<section id="product1" class="section-p1">
  <h2>Các sản phẩm liên quan</h2>
  <!-- <p>Summer Collection New Mordern Design</p> -->
  <div class="pro-container">
    <div class="pro">
      <img src="./img/products/f1.jpg" alt="" />
      <div class="des">
        <span>adidas</span>
        <h5>Cartoon Astronaut T-Shirts</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4>$78</h4>
      </div>
      <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
    </div>

    <div class="pro">
      <img src="./img/products/f2.jpg" alt="" />
      <div class="des">
        <span>adidas</span>
        <h5>Cartoon Astronaut T-Shirts</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4>$78</h4>
      </div>
      <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
    </div>

    <div class="pro">
      <img src="./img/products/f3.jpg" alt="" />
      <div class="des">
        <span>adidas</span>
        <h5>Cartoon Astronaut T-Shirts</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4>$78</h4>
      </div>
      <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
    </div>

    <div class="pro">
      <img src="./img/products/f4.jpg" alt="" />
      <div class="des">
        <span>adidas</span>
        <h5>Cartoon Astronaut T-Shirts</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4>$78</h4>
      </div>
      <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
    </div>
  </div>
</section>

@endsection