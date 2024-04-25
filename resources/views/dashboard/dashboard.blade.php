@extends('layout.layout')
@section('container')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>1</h3>
                <p>Daftar Obat</p>
              </div>
              <div class="icon">
                <i class="ion ion-medkit"></i>
              </div>
              <a href="/daftarObat" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>1</h3>
                <p>Riwayat Transaksi</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-time"></i>
              </div>
              <a href="/riwayatTransaksi" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>Kasir</h3>
                <p><br></p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paper"></i>
              </div>
              <a href="/kasir" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Pembelian Stok</h3>
                <p><br></p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/pembelianStok" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <section class="col-lg-7 connectedSortable">
          </section>
        </div>
      </div>
    </section>
  </div>

@endsection
