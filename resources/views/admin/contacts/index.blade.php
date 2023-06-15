@extends('adminlte::page')

@section('title', 'Contact')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark pb-2">Contact</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="content-box">
        @include('admin.contacts.__forms.edit-form')
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@push('js')
    @include('sweet-alert-messages')
@endpush
