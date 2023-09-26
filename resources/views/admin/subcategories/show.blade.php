@extends('adminlte::page')

@section('title', 'Subcategory')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark pb-2">Subcategory</h1>
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
                        class="form-control"
                        disabled>
                    <option value="" selected>Choose</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}"@if($subcategory->category_id == $category->id)selected @endif>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('status')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
            <div class="col-2">
                <label for="name" class="required">Name</label>
                <input type="text"
                       name="name"
                       id="name"
                       class="form-control"
                       value="{{ $subcategory->name }}"
                       disabled>
            </div>
            <div class="col-2">
                <label class="pt-2 mt-30" for="is_active">Is Active</label>
                <input type="checkbox" name="is_active" id="is_active" @if($subcategory->is_active == true)checked @endif disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <a href="{{ route('subcategories.index') }}" class="btn btn-primary btn-block">Back</a>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
