@extends('adminlte::page')

@section('title', 'Product')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark pb-2">Product</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="content-box">
        <div class="form-group row">
            <div class="col-2">
                <label for="category_id" class="required">Category Id</label>
                <select id="category_id"
                        name="category_id"
                        class="form-control @error('category_id') is-invalid @enderror"
                        disabled>
                    <option value="" selected>Choose</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            @if ($product->category_id == $category->id)
                            selected
                            @endif>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="subcategory_id">Subcategory Id</label>
                <select id="subcategory_id"
                        name="subcategory_id"
                        class="form-control @error('subcategory_id') is-invalid @enderror"
                        disabled>
                    <option value="" selected>Choose</option>
                    @foreach($product->category->subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}"
                            @if($product->subcategory_id == $subcategory->id)
                            selected
                            @endif>
                            {{ $subcategory->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-2">
                <label for="name" class="required">Name</label>
                <input type="text"
                    name="name"
                    id="name"
                    class="form-control"
                    value="{{ $product->name }}"
                    disabled>
            </div>
            <div class="col-2">
                <label class="pt-2 mt-30" for="is_active">Is Active</label>
                <input type="checkbox" name="is_active" id="is_active" @if($product->is_active == true)checked @endif disabled>
            </div>
            <div class="col-2">
                <label class="pt-2 mt-30" for="is_actual">Is Actual</label>
                <input type="checkbox"
                       name="is_actual"
                       id="is_actual"
                       class="@error('is_actual') is-invalid @enderror"
                       @if($product->is_actual == true)checked @endif disabled>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-6">
                <label for="description"  class="required">Description</label>
                <textarea name="description"
                        id="description"
                        class="form-control @error('description') is-invalid @enderror"
                        rows="5"
                        disabled>@if($product->description){{ $product->description }}@endif</textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-6">
                @foreach ($product->images as $image)
                    <img src="{{ Storage::disk('product')->url($product->id .'/'. $image->image) }}" width="200">
                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-block">Back</a>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
