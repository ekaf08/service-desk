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
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/insiden/">Insiden</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Buat Tiket</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <form method="post" action="/insiden/postTicket" enctype="multipart/form-data">
            @csrf
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Indentitas</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="namaOperator">Nama Operator</label>
                                    <input type="text" class="form-control" id="namaOperator" name="namaOperator"
                                        value="my User" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="namaPelapor">Nama Pelapor <span class="required">*</span> </label>
                                    <input type="text" class="form-control" id="namaPelapor" name="namaPelapor" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nipOperator">NIP Pelapor</label>
                                    <input type="text" class="form-control" id="nipOperator" name="nipOperator">
                                </div>

                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="namaOpd">Asal OPD</label>
                                    <select class="form-select" id="namaOpd" name="namaOpd" required>
                                        <option value="" selected disabled hidden>Pilih Asal OPD</option>
                                        @foreach ($opds as $opd)
                                            <option value="{{ $opd->id }}">{{ Str::upper($opd->nama_opd) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="noHp">No. Handphone <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="noHP" name="noHP" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="telepon">Telepon</label>
                                    <input type="text" class="form-control" id="telepon" name="telepon">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="channel">Channel <span class="required">*</span> </label>
                                    <select class="form-select" id="channel" name="channel" required>
                                        <option value="" selected disabled hidden>Pilih Channel</option>
                                        @foreach ($channels as $channel)
                                            <option value="{{ $channel->id }}">{{ $channel->channel }}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Detail Insiden</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="tanggalpengajuan">Tanggal Pengajuan</label>
                                    <input type="text" class="form-control" id="tanggalPengajuan" disabled
                                        value="{{ $date }}" name="tanggalPengajuan">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="waktupengajuan">Waktu Pengajuan</label>
                                    <input type="text" class="form-control" id="waktuPengajuan" disabled
                                        value="{{ $time }}" name="waktuPengajuan">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="keluhanTextArea" class="form-label">Deskripsi Keluhan <span
                                            class="required">*</span> </label>
                                    <textarea class="form-control" id="keluhanTextArea" rows="3" name="deskripsiKeluhan" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="imageAttachment" class="form-label">File Pendukung</label>
                                    <input type="file" id="imageAttachment" name="imageAttachment"
                                        class="image-preview-filepond" multiple data-allow-reorder="true"
                                        data-max-file-size="3MB" data-max-files="3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="   col-12 d-flex justify-content-start">
                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                </div>
            </section>
        </form>
    </div>
@endsection

@section('custom-script')
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

    <script src="/assets/js/dselect.js"></script>

    <script>
        FilePond.registerPlugin(
            FilePondPluginFileValidateSize,
            FilePondPluginFileValidateType,
            FilePondPluginImagePreview,
        );
        FilePond.create(document.querySelector('.image-preview-filepond'), {
            allowImagePreview: true,
            allowImageFilter: false,
            allowImageExifOrientation: false,
            allowImageCrop: false,
            acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
            fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                resolve(type);
            })
        });
        // FilePond.setOptions({
        //     server: {
        //         url: "",
        //         process: {
        //             headers: {
        //                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //             },
        //         }
        //     }
        // });

        dselect(document.querySelector('#namaOpd'), {
            search: true
        });
        dselect(document.querySelector('#channel'), {});
    </script>
@endsection
