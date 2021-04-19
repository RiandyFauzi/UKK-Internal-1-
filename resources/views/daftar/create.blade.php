@extends('layouts.app', ['title'=>'Daftar'])
@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Silahkan isi pendaftaran</div>

                <div class="card-body">
                    <form action="{{ route('daftar.store')}}" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for="nama">nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                            @error('nama')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="nama">jenis kelamin</label>

                            <select class="form-control" id="jk" name="jk">
                                <option value disable>Pilih jenis kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Laki-laki">Perempuan</option>
                            </select>
                            @error('jk')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control">
                            @error('alamat')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>





                        <div class="form-group">
                            <label for="agama">agama</label>
                            <input type="text" name="agama" id="agama" class="form-control">
                            @error('agama')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="asal_sekolah">asal_sekolah</label>
                            <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control">
                            @error('asal_sekolah')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="minat_jurusan">minat_jurusan</label>

                            <select class="form-control" id="minat_jurusan" name="minat_jurusan">
                                <option value disable>Pilih Jurusan</option>
                                <option value="RPL">RPL</option>
                                <option value="TBG">TBG</option>
                                <option value="TBS">TBS</option>
                                <option value="MMD">MMD</option>
                            </select>
                            @error('minat_jurusan')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-primary">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection