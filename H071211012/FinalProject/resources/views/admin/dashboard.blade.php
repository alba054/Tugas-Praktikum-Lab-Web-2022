@extends('template.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h1><strong>Dashboard</strong></h1>
        <hr>
        <p class="h1"> Kelas </p>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far bi bi-door-closed"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Kelas</span>
                        <span class="info-box-number">10</span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <p class="h1"> Mahasiswa </p>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far bi bi-person-vcard"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total</span>
                        <span class="info-box-number">10</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="far bi bi-gender-male"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Laki-Laki</span>
                        <span class="info-box-number">10</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="far bi bi-gender-female"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Perempuan</span>
                        <span class="info-box-number">10</span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <p class="h1"> Dosen </p>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far bi bi-person-lines-fill"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total</span>
                        <span class="info-box-number">10</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far bi bi-gender-male"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Laki-Laki</span>
                        <span class="info-box-number">10</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far bi bi-gender-female"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Perempuan</span>
                        <span class="info-box-number">10</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
