@extends('layouts.app')

@section('title', 'Tambah Produk')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
    href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush
 
@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Produk</h1>
        </div>
    <div class="">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Data Produk</h4>
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
                <form method="POST" action="{{ route('products.store') }}"  enctype="multipart/form-data">
                    @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Nama Produk</label>
                                <input type="text" name="name" class="form-control" placeholder="Nama Produk">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jenis">Jenis Produk</label>
                                <select class="form-control" id="jenis" name="jenis">
                                    @foreach ($jenis as $jeniss)
                                        <option value="{{ $jeniss->id }}">{{ $jeniss->jenis_nama }}</option>
                                    @endforeach
                                </select required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="stok">Stok Produk</label>
                                <input type="text" name="stok" class="form-control" placeholder="Total stok produk">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nama">Foto Produk</label>
                                <div class="">
                                    <div class="input-group mb-3">
                                        <label style="color: white" class="input-group-text btn btn-primary"  for="image" >Upload</label>
                                        <input type="file" name="image" class="choose form-control" id="image" placeholder="image">
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="detail">Deskripsi Produk</label>
                                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                            </div>
                        </div>
                    <div class="card-footer text-right">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
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