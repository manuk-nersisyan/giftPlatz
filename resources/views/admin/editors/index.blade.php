@extends('adminlte::page')

@section('title', 'Editors')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark pb-2">Editors</h1>
        </div>
        <div class="col-3 offset-3">
            <a href="{{route('editors.create')}}"
               class="btn btn-primary float-right"
               role="button"
               aria-pressed="true">Create</a>
        </div>
    </div>
@stop

@section('content')
    <div class="content-box">
        <table class="editor_datatable table  table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th class="col-2 action-th">Actions</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@push('js')
    <script>
        $('.editor_datatable').DataTable({
            processing: false,
            serverSide: true,
            stateSave: true,
            order: [0, 'desc'],
            ajax: "{{ route('editors.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
        });
    </script>
    @include('sweet-alert-messages')
@endpush
