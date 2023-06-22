@extends('layouts.home')

@section('content')

<div class="about">
    <div class="about__box container">
        <div class="about__wrapper row">
            <div class="about__imagebox imagebox col-xl-5 col-lg-6 col-md-12">
                <div class="imagebox__wrapper">
                    <img class="imagebox__photo" src="{{ Storage::disk('aboutUs')->url($aboutUs->image) }}" alt=""/>
                </div>
            </div>
            <div class="about__text col-xl-7 col-lg-6 col-md-12">
                <h2>{{ $aboutUs->name }}</h2>
                {!! $aboutUs->description !!}
            </div>
        </div>
    </div>
</div>
<div class="actual">
<div class="actual__wrapper container">
    <div class="titlebox" id="titlebox">
        <div class="titlebox__wrapper">
            <h2 class="titlebox__title">Актуальное сейчас</h2>
        </div>
    </div>
    <div class="actual__assortment row">
        @foreach ($products as $product)
        <div class="product-item product col-lg-4 col-xl-4 col-md-6">
            <a class="productbox product__box" id="productbox">
                <div class="productbox__image lazy">
                    <div class="content_img">
                        <img src="{{ Storage::disk('product')->url($product->id .'/'. $product->image->image) }}"/>
                        <div class="productbox__paragraph">{{ $product->description }}</div>
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
@endsection
