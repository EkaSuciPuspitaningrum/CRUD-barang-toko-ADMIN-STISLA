@extends('layouts.app')

@section('title', 'Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
    href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">

@endpush
 
@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
    <div class="row">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Daftar Produk</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table-bordered table display nowrap" id="table" style="width: 110%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Masuk</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Details</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product + $products->firstItem()}}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td><img src="/image/{{ $product->image }}" width="100px"></td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->jenis }}</td>
                                    <td>{{ $product->detail }}</td>
                                    <td>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        
                                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                            
                                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                        
                                            @csrf
                                            @method('DELETE')
                            
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="../../js/table.js"></script>
    <script src="../../js/style.js"></script>
@endpush