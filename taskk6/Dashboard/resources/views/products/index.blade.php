@extends('layouts.main')
@section('title,all products')
@section('links')

@endsection
@section('content')
<table id="table" class="table">
    <thead class="thead-inverse">
        <tr>
            <th>Id</th>
            <th>English Name</th>
            <th>Arabic Name</th>
            <th>Product Code</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Status</th>
            <th>Creation Date</th>
            <th>Update Date</th>
            <th>Operations</th>
        </tr>
    </thead>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name_en}}</td>
            <td>{{$product->name_ar}}</td>
            <td>{{$product->code}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->status}}</td>
            <td>{{$product->created_at}}</td>
            <td>{{$product->updated_at}}</td>
            <td>
                <a href="" class="btn btn-outline-warning btn-sm btn-rounded">Edit</a>
                <a href="" class="btn btn-outline-danger btn-sm btn-rounded">Delete</a>
            </td>
        </tr>
    @endforeach
    @endsection

@section('scripts')
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    <tbody>