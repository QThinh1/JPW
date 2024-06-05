@extends('layoutdetail')

@section('title' , @trans('front.products.index.titledetail'))

@section('content')
<main>
    <div class="row">
      <div class="img-holder">
        <img
          src="{{ url($product->img) }}"
          class="img"
          alt="chocolate"
        />
      </div>
      <div class="product-details-holder">
        <h1 class="product-name">{{ $product->name }}</h1>
        <h2 class="product-price">${{ $product->price }}</h2>
        <div class="btn-container">
          <button class="btn btn-primary">Buy Now</button>
          <button class="btn btn-outline-primary">Add Cart</button>
        </div>
        <p class="short-description">
          {{ $product->desc }}
        </p>
        <p class="free-shipping">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="#000"
            class="cart"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"
            />
          </svg>

          Free shipping on orders over $29.00
        </p>
        <p class="return">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="#000"
            class="clock"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"
            />
          </svg>
          60 days return policy
        </p>
      </div>
    </div>
  </main>
@endsection