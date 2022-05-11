@extends('layouts.dashboard')
@section('main-content')
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">

                <div class="col-6 col-lg-3 col-md-6">
                    <a href="etiket">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Etiket</h6>
                                        <h6 class="font-extrabold mb-0">2</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-lg-3 col-md-6">
                    <a href="open">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Open</h6>
                                    <h6 class="font-extrabold mb-0">12</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-6 col-lg-3 col-md-6">
                    <a href="eskalasi">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Eskalasi 2</h6>
                                    <h6 class="font-extrabold mb-0">63</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-6 col-lg-3 col-md-6">
                    <a href="solved">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Solved</h6>
                                    <h6 class="font-extrabold mb-0">1023</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-6 col-lg-3 col-md-6">
                    <a href="closed">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Closed</h6>
                                    <h6 class="font-extrabold mb-0">183</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-6 col-lg-3 col-md-6">
                    <a href="insiden">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-bold">Lihat Semua</h3>
                                        <h6 class="font-extrabold mb-0">9624</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection
