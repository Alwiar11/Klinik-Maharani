@extends('layout.layout')
@section('container')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Jadwal Kerja</h1>
                    </div>
                    <div class="col-sm-6 text-right"> <!-- Bagian ini untuk tombol -->
                        <button type="button" class="btn btn-primary"><span style="font-size: larger">+</span> Jadwal</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="table-jadwal-kerja" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 350px">NAKES</th>
                                            <th style="width: 500px">HARI KERJA</th>
                                            <th>BAGIAN</th>
                                            <th style="width: 150px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td align="center">
                                                <div class="btn-group dropleft">
                                                    <button style="border: none; background: none;" data-toggle="modal" data-target="#modal-detail-pasien"><a class="dropdown-item" href="#"><i
                                                                class="fas fa-eye"></i></a></button>
                                                    <button type="button" class="" style="border: none; background: none;" data-toggle="dropdown">
                                                        <i class="fas fa-bars"></i>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <button style="border: none; background: none;" data-toggle="modal" data-target="#modal-edit-pasien"><a class="dropdown-item" href="#">Edit
                                                                Barang</a></button>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- modal detail --}}
                                        {{-- <div class="modal fade" id="modal-detail-pasien-{{ $pasien->id }}">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Detail Data Pasien</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @php
                                                                $alamat_parts = explode(', ', $pasien->alamat);
                                                                $alamat = $alamat_parts[0]; // Ambil bagian pertama sebagai alamat
                                                            @endphp
                                                            <div class="row ml-1">
                                                                <h4>Data Pribadi</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="namaProduk" class="form-label" style="font-weight: normal;">Nama
                                                                            Pasien</label>
                                                                        <input name="namaProduk" type="text" class="form-control" id="namaProduk" aria-describedby="namaProduk" disabled
                                                                            value="{{ $pasien->nama }}">
                                                                        <div id="namaProduk" class="form-text"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="hargaProduk" class="form-label" style="font-weight: normal;">No Rekam
                                                                            Medis</label>
                                                                        <input name="hargaProduk" type="text" class="form-control" id="hargaProduk" aria-describedby="hargaProduk" disabled
                                                                            value="{{ $pasien->nomor_rekam_medis }}">
                                                                        <div id="hargaProduk" class="form-text"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="tanggalPenjualan" class="form-label" style="font-weight: normal;">Tanggal
                                                                            Lahir</label>
                                                                        <input name="tanggalPenjualan" type="text" class="form-control" id="tanggalPenjualan" aria-describedby="tanggalPenjualan"
                                                                            disabled value="{{ $pasien->tanggal_lahir }}">
                                                                        <div id="tanggalPenjualan" class="form-text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="nomorTelepon" class="form-label" style="font-weight: normal;">Nomor
                                                                            Telepon</label>
                                                                        <input name="nomorTelepon" type="text" class="form-control" id="nomorTelepon" aria-describedby="nomorTelepon" disabled
                                                                            value="{{ $pasien->nomor_telepon }}">
                                                                        <div id="nomorTelepon" class="form-text"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="jenisKelamin" class="form-label" style="font-weight: normal;">Jenis Kelamin</label>
                                                                        <input name="jenisKelamin" type="text" class="form-control" id="jenisKelamin" aria-describedby="jenisKelamin" disabled
                                                                            value="{{ $pasien->jenis_kelamin }}">
                                                                        <div id="jenisKelamin" class="form-text"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="riwayatPenyakit" class="form-label" style="font-weight: normal;">Riwayat Penyakit</label>
                                                                        <input name="riwayatPenyakit" type="text" class="form-control" id="riwayatPenyakit" aria-describedby="riwayatPenyakit"
                                                                            disabled value="{{ $pasien->riwayat_penyakit }}">
                                                                        <div id="riwayatPenyakit" class="form-text"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row ml-1 mt-2">
                                                                <h4>Alamat</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="desa" class="form-label" style="font-weight: normal;">Desa</label>
                                                                        <input name="desa" type="text" class="form-control" id="desa" aria-describedby="desa" disabled
                                                                            value="{{ $alamat_parts[0] }}">
                                                                        <div id="desa" class="form-text"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="mb-3">
                                                                        <label for="hargaProduk" class="form-label" style="font-weight: normal;">RT</label>
                                                                        <input name="hargaProduk" type="text" class="form-control" id="hargaProduk" aria-describedby="hargaProduk" disabled
                                                                            value="{{ $alamat_parts[1] }}">
                                                                        <div id="hargaProduk" class="form-text"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <div class="mb-3">
                                                                        <label for="tanggalPenjualan" class="form-label" style="font-weight: normal;">RW</label>
                                                                        <input name="tanggalPenjualan" type="text" class="form-control" id="tanggalPenjualan" aria-describedby="tanggalPenjualan"
                                                                            disabled value="{{ $alamat_parts[2] }}">
                                                                        <div id="tanggalPenjualan" class="form-text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="nomorTelepon" class="form-label" style="font-weight: normal;">Kecamatan</label>
                                                                        <input name="nomorTelepon" type="text" class="form-control" id="nomorTelepon" aria-describedby="nomorTelepon" disabled
                                                                            value="{{ $alamat_parts[3] }}">
                                                                        <div id="nomorTelepon" class="form-text"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="namaProduk" class="form-label" style="font-weight: normal;">Kota/Kabupaten</label>
                                                                        <input name="namaProduk" type="text" class="form-control" id="namaProduk" aria-describedby="namaProduk" disabled
                                                                            value="{{ $alamat_parts[4] }}">
                                                                        <div id="namaProduk" class="form-text"></div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="row">

                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="hargaProduk" class="form-label" style="font-weight: normal;">Provinsi</label>
                                                                        <input name="hargaProduk" type="text" class="form-control" id="hargaProduk" aria-describedby="hargaProduk" disabled
                                                                            value="{{ $alamat_parts[5] }}">
                                                                        <div id="hargaProduk" class="form-text"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-end">
                                                            <button type="button" data-dismiss="modal" class="btn btn-primary">Kembali</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        {{-- modal edit --}}
                                        {{-- <div class="modal fade" id="modal-edit-pasien">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Data Pasien</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Anda yakin untuk keluar?</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-end">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                                            <button type="button" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
