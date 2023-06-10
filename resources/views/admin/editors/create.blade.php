@extends('adminlte::page')

@section('title', 'Create Editor')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark pb-2">Create Editor</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="content-box">
        @include('admin.editors.__forms.create-form')
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@push('js')
    <script src="{{asset('js/showHidePassword.js')}}"> </script>
@endpush


