@extends('layout')

@section('title' , @trans('front.products.index.title'))

@section('content')
    <!-- chocolate section -->

    <section class="chocolate_section layout_padding">
        <div class="container">
          <div class="heading_container">
            <h2>
            {{ @trans('front.products.index.inf') }}
            </h2>
            <p>
              {{ @trans('front.products.index.info') }}
            </p>
          </div>
        </div>
        <div class="container">
          <div class="chocolate_container">
            @foreach ($productList as $product)
            <div class="box">
              <div class="img-box"> 
                <img src="{{ $product->img }}" alt="IMG">
              </div>
              <div class="detail-box">
                <h6>
                  <span> {{ $product->name }} </span>
                </h6>
                <h5>
                  ${{ $product->price}}
                </h5>
                <a href="{{route('products.show' , [$product->id])}}">{{ @trans('front.products.index.detail') }}</a>
                <a href="">
                  {{ @trans('front.products.index.buy') }}
                </a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- end chocolate section -->

@endsection