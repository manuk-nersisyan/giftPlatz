@extends('layouts.app')
@section('content')
<div class="pagelinks" id="pagelinks">
    <div class="container">
       <div class="row">
          <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная </a><span>&gt; </span></li>
                <li class="breadcrumb-item" aria-current="page">{{ $category->name }}</a><span>&gt; </span></li>
                @if (isset($subcategory))
                    <li class="breadcrumb-item active" aria-current="page">{{ $subcategory->name }}</a><span>&gt; </span></li>
                @endif
             </ol>
          </nav>
       </div>
    </div>
 </div>
 <div class="assortment">
    <div class="assortment__wrapper container">
       <div class="titlebox" id="titlebox">
          <div class="titlebox__wrapper">
            @if (isset($subcategory))
                <h2 class="titlebox__title">{{ $subcategory->name }}</h2>
            @else
                <h2 class="titlebox__title">{{ $category->name }}</h2>
            @endif
          </div>
       </div>
       <div class="assortment_product product row">
        @foreach ($products as $product)
            <div class="product-item product col-lg-4 col-xl-4 col-md-6">
                <a href="{{ route('get-product-by-id', ['product' => $product]) }}" class="productbox product__box" id="productbox">
                    <div class="productbox__image lazy">
                        <div class="content_img">
                            <img src="{{ Storage::disk('product')->url($product->id.'/'.$product->image->image) }}"/>
                            <div class="productbox__paragraph">{!! $product->hover_description !!}</div>
                        </div>
                    </div>
                    <div class="productbox__title">
                        <h3>{{ $product->name }}</h3>
                    </div>
                </a>
            </div>
        @endforeach
       </div>
    </div>
 </div>
@endsection
