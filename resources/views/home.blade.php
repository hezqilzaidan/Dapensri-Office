@extends('layout.user.mainlayout2')
@section('content')

    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <html lang="en">

            <head>
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Data Identitas Diri</h3>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div style="margin-bottom: 1rem;">

                        <div class="row">
                            <div clas="col-md-4">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ strtoupper($data->name) }}</h5>
                                        <p class="card-text">
                                            {{ $data->alamat }}
                                        </p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Badge: {{ $data->badge }}</li>
                                        <li class="list-group-item">NIK: {{ $data->nik }}</li>
                                        <li class="list-group-item">No KK: {{ $data->nik }}</li>
                                        <li class="list-group-item">No HP: {{ $data->no_hp }}</li>
                                        <li class="list-group-item">TTL: {{ $data->tmpt_lahir }},
                                            {{ date('d-m-Y', strtotime($data->tgl_lahir)) }}</li>


                                </div>
                            </div>
