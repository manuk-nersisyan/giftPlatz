@extends('layouts.app')
@section('content')
<div class="pagelinks" id="pagelinks">
    <div class="container">
       <div class="row">
          <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная </a><span>&gt; </span></li>
                <li class="breadcrumb-item"><a href="{{ route('get-products-by-category-id', ['category' => $category]) }}">{{ $category->name }}</a><span>&gt; </span></li>
                @if (isset($subcategory))
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('get-products-by-subcategory-id', ['subcategory' => $subcategory]) }}">{{ $subcategory->name }}</a><span>&gt; </span></li>
                @endif
                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
             </ol>
          </nav>
       </div>
    </div>
 </div>
 <div class="about">
    <div class="about__box container">
       <div class="about__wrapper row">
          <div class="about__imagebox imagebox col-xl-6 col-lg-6 col-md-12">
             <div class="imagebox__wrapper" data-toggle="modal" data-target="#lightbox">
                <img class="imagebox__photo" id="imagebox__main" src="{{ Storage::disk('product')->url($product->id.'/'.$product->image->image) }}" alt=""></div>
             <div class="modal fade" id="lightbox">
                <div class="modal-dialog modal-dialog-centered" role="document">
                   <div class="modal-content">
                      <div class="modal-body">
                         <div class="carousel" id="carouselExampleCaptions" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner">
                            @foreach ($product->images as $key=>$image)
                                @if ($key == 0)
                                        <div class="carousel-item active"><img class="d-block w-100" src="{{ Storage::disk('product')->url($product->id.'/'.$image->image) }}"></div>
                                @else
                                <div class="carousel-item"><img class="d-block w-100" src="{{ Storage::disk('product')->url($product->id.'/'.$image->image) }}"></div>
                                @endif
                            @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="imagebox__open">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAhCAYAAABX5MJvAAAE+ElEQVRYR72YXWwUVRTH/2dmS2vUSIuZmXvb5bP1KyHqgw/akrRYH9AXSdDE+EBMiDEaREI0oCAERSWi+IExRn3xURN8w+gDoKWIX0WJVB8gSLrzuVIgCmz3Y465u9tldru7na3G+zh77vn/5n/PnXvuUupcqieRS8w3TXOciEL8jyOVSi1IJBK95LrubdD4JIBJML6FxiMMGr108dIPfX19U/8lk+/7Swso9GvAABNWgHELAR8SM5MXuB4Ao0ZQAXzPjFHS6Ui2LXt00fxF5+NCMbNup+3lCdAKDjFARP0MdNfOJ8ajpB66vvMZgDVNBK4w8KA05VdxITzPu5Yp/ALAimZzCokwWYTwAns9M73TIFgBrJam/DIuwHRcEATXFTh/oAnIaWHK3hKE5y1nCk/UF6G1whSftApQBYL8OBjJ2hxM+Fgacl0Rgpk1L3ADAAtmiDF+17XEkGEYqm5aHq5v7wBoe7MXLEIU3fCdz9W61w2eI4jru9sB3tGInAtYLKU8W4FwPOcZIuwFkCXmJ5m0zQD3VhIQftNYHzJN049jRx0AZsYmENYQcA+AP4Qpl6hcFQg7sO/UmI6BaLUwxAH1EdPz+qEqEGBcg75yNhDXd7cBvDMCywA9JUzx/uTk5A2ZXOYAAaeEKddWQai6cAN3OLoNSyDaYQDLIgnHibUhy7JUDc0YjudsJcJL9QCmnymQbDZ7q2VZx6ogGlls23ZSS5ACWRqJOYmQhoQQ6eg8x3NeIMLLVQBE64Uh3mu2hJXlaBYUB8QLnC3MeKUagJ8WRve+2WooFoRK4jjOQtKhHCkWU3n8ipBWks7ragGIeINldL87G0Cs5aiy23EWkY5DNSAuABF1gBgbLUu+HQegZYiyIwpEObK4jgi3CjAnCDXJdd3F0HgMQGcUhBnbpCWjhRnLjNg1Ec3m+u4mgPfUKhDwcz4XDvf09JyLpV4OahmiEcC06FxAWoJwPGcjEd6sfkvaDfAjABZGnh/PZwvDyWRyMo4jsSEiZ0skLz0rTLFHtW0hFQ7XHNdj+WzhvjggsSDKAMqBSDw9J0zx+jSR7/vLQhTUrumJUI5l23PDs7WFVRATExPXJJPJK1ELPc/ZwKXT9Wos8WZhdO+utToIJnoLrA69CAjjp0z71PCSziUXovFRrav9hOcZoHD/vLaOB7q6ui6qCeW2T310KnFE2GIZ8rVGax0HxPGcxzUNCy1Dbq36TriB+xCYP2XgaHuifVWukFnLTLUAz1uGfHW2YguCib6Q9UNV3TXjx/Z5HcOZbOZhInwAYFSYstgEV97Q9e196swvCdApgNXxXfmdGVulJXfNBjD9eyqduikRagdr2vzT5dNY5c1yAZ1SystRiBMALa8n0ipAFEQPi42RrJeXWLvXsqyDRQh1HdPbNNUbzNgtRNg1vXZxXYjG2Wn7Zi2k0bpNNHinMLu3F0Ud31lNwP4GIiM6Je43DOPvuUC4gf0YmD4CoM2Yz/haWHKwBBE4bxFjQxOREWJtlWVZl1oBaQpQSpTJXJ7qLF1+fOc4A3c0EPiLge+IaK9qgONCnDl/Zn7HVMcbIB6saQ2rU2g0SGcvnO2cN9X2Z8Qudck5oi7C0DEibhS/EFE+rni9uHQ6LfKcH+CQB4gwAOB2AHp5J76o/hq4C4QnoOEbHflRw0ie+jeCceam0+nrc2HubgL3E5H2DxXcLmyPnw/SAAAAAElFTkSuQmCC" alt="">
                </div>
             </div>
             <ul class="imagebox__items">
                @foreach ($product->images as $key=>$image)
                    @if ($key == 0)
                        <li class="imagebox__item" data-target="#carouselExampleCaptions" data-slide-to="{{ $key }}">
                            <img class="itemclick  active" src="{{ Storage::disk('product')->url($product->id.'/'.$image->image) }}">
                        </li>
                    @else
                        <li class="imagebox__item" data-target="#carouselExampleCaptions" data-slide-to="{{ $key }}"><img class="itemclick active" src="{{ Storage::disk('product')->url($product->id.'/'.$image->image) }}"></li>
                    @endif
                @endforeach
             </ul>
          </div>
          <div class="about__text col-xl-6 col-lg-6 col-md-12">
             <div class="titlebox" id="titlebox">
                <div class="titlebox__wrapper">
                   <h2 class="titlebox__title">{{ $product->name }}</h2>
                </div>
             </div>
             {!! $product->description !!}
          </div>
       </div>
    </div>
 </div>
@endsection
