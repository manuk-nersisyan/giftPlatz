@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark pb-2">Products</h1>
        </div>
        <div class="col-3 offset-3">
            <a href="{{route('products.create')}}"
               class="btn btn-primary float-right"
               role="button"
               aria-pressed="true">Create</a>
        </div>
    </div>
@stop

@section('content')
    <div class="content-box">
        <table class="product_datatable table  table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Subategory</th>
                <th>Name</th>
                <th>Description</th>
                <th>Is Active</th>
                <th>Is Actual</th>
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
        $('.product_datatable').DataTable({
            processing: false,
            serverSide: true,
            stateSave: true,
            order: [0, 'desc'],
            ajax: "{{ route('products.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'category.name', name: 'category.name'},
                {
                    "mData": "subcategory.name",
                    "render": function(data, type, row) {
                        return data ? data : "";
                    },
                 },

                {data: 'name', name: 'name'},
                {data: 'description', name: 'description'},
                {data: 'is_active', name: 'is_active'},
                {data: 'is_actual', name: 'is_actual'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
        });
    </script>
    @include('sweet-alert-messages')
@endpush
