@extends('layout.layout')
@section('container')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Rekam Medis</h1>
                    </div>
                    <div class="col-sm-6 text-right"> <!-- Bagian ini untuk tombol -->
                        <button type="button" class="btn btn-primary"><span style="font-size: larger">+</span> Tambah Data</button>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item" style="width: 33.00%;">
                                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                                        aria-selected="true">Semua</a>
                                </li>
                                <li class="nav-item" style="width: 33.00%;">
                                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile"
                                        aria-selected="false">Antrean</a>
                                </li>
                                <li class="nav-item" style="width: 33.00%;">
                                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages"
                                        aria-selected="false">Selesai</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>NAMA PASIEN</th>
                                                        <th>DOKTER</th>
                                                        <th>TANGGAL</th>
                                                        <th>STATUS</th>
                                                        <th style="width: 100px"></i></th>
                                                    </tr>
                                                </thead>
                                                <tbody style="font-weight: normal;">
                                                    <tr>
                                                        <td>Alex</td>
                                                        <td>Dr. Ujang</td>
                                                        <td>20-10-2024</td>
                                                        <td>Selesai</td>
                                                        <td align="center"><i class="fa fa-arrow-alt-circle-right"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="rekam_medis_antrean" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>

                                                        <th>NAMA PASIEN</th>
                                                        <th>DOKTER</th>
                                                        <th>TANGGAL</th>
                                                        <th>STATUS</th>
                                                        <th></i></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>Alex</td>
                                                        <td>Dr. Ujang</td>
                                                        <td>20-10-2024</td>
                                                        <td>Selesai</td>
                                                        <td align="center"><i class="fa fa-arrow-alt-circle-right"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="rekam_medis_selesai" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>

                                                        <th>NAMA PASIEN</th>
                                                        <th>DOKTER</th>
                                                        <th>TANGGAL</th>
                                                        <th>STATUS</th>
                                                        <th></i></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>Alex</td>
                                                        <td>Dr. Ujang</td>
                                                        <td>20-10-2024</td>
                                                        <td>Selesai</td>
                                                        <td align="center"><i class="fa fa-arrow-alt-circle-right"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
