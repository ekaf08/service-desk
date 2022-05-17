@extends('layouts.dashboard')
@section('custom-stylesheet')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/dselect.css">
@endsection
@section('main-content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last"></div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-md-end float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/insiden/">Insiden</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lihat Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Detail Insiden {{ $incident->no_insiden }}</h4>
            </div>
            <div class="card-body">
                
            </div>
        </div>
    </section>
@endsection

@section('custom-script')

@endsection
