@extends('layouts.app')

@section('title', 'Tampil Produk')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
    href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush
 
@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Produk</h1>
        </div>
    <div class="">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Deskripsi Produk</h4>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card-body">
                <form> 
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name">Nama Produk</label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="harga">Harga Produk</label>
                                <input type="text" name="harga" class="form-control" value="{{ $product->harga }}" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="stok">Stok Produk</label>
                                <input type="text" name="stok" class="form-control" value="{{ $product->stok }}" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="detail">Deskripsi Produk</label>
                                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"  disabled>{{ $product->detail }}</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="image">Foto Produk</label>
                                <img src="/image/{{ $product->image }}" width="600px">
                            </div>
                        </div>
                </form>
                <div class="card-footer text-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Kembali</a>
                </div>
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
    <script src="../../js/style.js"></script>
@endpush