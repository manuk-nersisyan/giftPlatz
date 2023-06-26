@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark pb-2">Categories</h1>
        </div>
        <div class="col-3 offset-3">
            <a href="{{route('categories.create')}}"
               class="btn btn-primary float-right"
               role="button"
               aria-pressed="true">Create</a>
        </div>
    </div>
@stop

@section('content')
    <div class="content-box">
        <table class="category_datatable table  table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Is Active</th>
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
        $('.category_datatable').DataTable({
            processing: false,
            serverSide: true,
            stateSave: true,
            order: [0, 'desc'],
            ajax: "{{ route('categories.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {
                    "mData": "is_active",
                    "render": function(data, type, row) {
                        return data == 1? true: false
                    },
                },
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
        });
    </script>
    @include('sweet-alert-messages')
@endpush
