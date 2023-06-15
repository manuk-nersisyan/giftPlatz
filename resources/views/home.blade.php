@extends('layouts.app')

@section('content')
    <div class="content">
        @foreach ($products as $product)
        {{-- {{ dd($product) }} --}}
           {{-- <h1>{{ $product->name }}</h1> --}}
           <h1>{{ $product->name }}</h1>
        @endforeach
    </div>
@endsection
