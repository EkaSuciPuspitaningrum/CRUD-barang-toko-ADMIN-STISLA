@extends('layouts.regis')

@section('title', 'Registrasi')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header"><h4>Registrasi</h4></div>
        <div class="card-body">
          <form method="POST" action="{{ route('register.perform') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="floatingNim">NIM</label>
                        <input type="text" class="form-control" name="nim" value="{{ old('nim') }}" placeholder="Nomor Induk Mahasiswa" required="required" autofocus>
                        @if ($errors->has('nim'))
                            <span class="text-danger text-left">{{ $errors->first('nim') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="floatingName">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" placeholder="Nama Lengkap" required="required" autofocus>
                        @if ($errors->has('nama'))
                            <span class="text-danger text-left">{{ $errors->first('nama') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="floatingEmail">Kelas</label>
                        <input type="kelas" class="form-control" name="kelas" value="{{ old('kelas') }}"  required="required" autofocus>
                        @if ($errors->has('kelas'))
                            <span class="text-danger text-left">{{ $errors->first('kelas') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            @foreach ($jurusan as $jurusans)
                                <option value="{{ $jurusans->id }}">{{ $jurusans->jurusan_name }}</option>
                            @endforeach
                        </select required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="prodi">Prodi</label>
                        <select class="form-control" id="prodi" name="prodi">
                            @foreach ($prodi as $prodis)
                                <option value="{{ $prodis->id }}">{{ $prodis->prodi_name }}</option>
                            @endforeach
                        </select required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="floatingEmail">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="floatingPassword">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    
                </div>
                <br>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 200px">
                      Daftar
                    </button>
                </div>
          </form>
          <br>
          <div class="text-right">
            <a href="{{route("login.show")}}"
                class="text-medium">
                Sudah Punya Akun?
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('scripts')
      <!-- JS Libraies -->
      <script src="{{ asset("/js/page/auth-register.js") }}"></script>
      <!-- Page Specific JS File -->

@endpush