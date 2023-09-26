@extends('adminlte::page')

@section('title', 'Edit Product')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark pb-2">Edit Product</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="content-box">
        @include('admin.products.__forms.edit-form')
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('js')
   <script src="{{asset('js/getSubcategoriesByCategoryId.js')}}"></script>
   <script src="{{asset('js/deleteProductImage.js')}}"></script>
   <script src="{{asset('classicEditor/build/ckeditor.js')}}"></script>
   <script>
        let getSubcategoriesByCategoaryIdUrl = {!!  json_encode(route('get-subcategories-by-categoary-id')) !!}
        let deleteProductImageUrl = {!!  json_encode(route('delete-image')) !!}
        ClassicEditor
             .create(document.querySelector('.editor'))
             .catch(error => {
                 console.error(error);
             });

   </script>
@endsection


