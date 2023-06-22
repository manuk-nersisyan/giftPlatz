@extends('adminlte::page')

@section('title', 'About Us')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark pb-2">About Us</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="content-box">
        @include('admin.about-us.__forms.edit-form')
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@push('js')
   <script src="{{asset('classicEditor/build/ckeditor.js')}}"></script>
   <script>
        ClassicEditor
            .create(document.querySelector('.editor'))
            .catch(error => {
                console.error(error);
            });
   </script>
    @include('sweet-alert-messages')
@endpush
