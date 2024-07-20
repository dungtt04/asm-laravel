@extends('layout')
@section('title', 'Danh sách sp')
@section('content')
<section id="product1" class="section-p1">
  <h2>Sản phẩm</h2>
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

@endsection