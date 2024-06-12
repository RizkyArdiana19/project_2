@extends('layouts.master1')

@section('title')
    Profile
@endsection

<br>
<br>
<br>
<br>
<div class="container">
    <div class="main-body">
        <div class="row gutters-sm justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">NIM</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <span>{{ auth()->user()->nim }}</span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <span>{{ auth()->user()->nama }}</span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Username</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <span>{{ auth()->user()->username }}</span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <span>{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Jurusan</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <span>{{ auth()->user()->jurusan->nama_jurusan }}</span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Prodi</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <span>{{ auth()->user()->prodi->nama_prodi }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
