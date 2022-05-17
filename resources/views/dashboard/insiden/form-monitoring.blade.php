@extends('layouts.dashboard')
@section('custom-stylesheet')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
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
                            <li class="breadcrumb-item"><a href="/dashboard/insiden/">Insiden</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Buat Monitoring</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <form>
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
                                    <input type="text" class="form-control" id="namaOperator" value="{{ auth()->user()->nama }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="namaPelapor">Nama Pelapor</label>
                                    <input class="form-control" list="namaPelapor" id="pelaporDataList" required>
                                    <datalist id="namaPelapor">
                                        <option data-value="Opera" value="Si A">
                                        <option value="Si B">
                                        <option value="Si C">
                                            </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="namaOpd">Asal</label>
                                    <input type="text" class="form-control" id="namaOPD"
                                        value="DINAS KOMUNIKASI DAN INFORMATIKA" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="noHp">No. Handphone <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="noHP">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="telepon">Telepon</label>
                                    <input type="text" class="form-control" id="telepon">
                                </div>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggalpengajuan">Tanggal Pengajuan</label>
                                    <input type="text" class="form-control" id="tanggalPengajuan" disabled
                                        value="{{ $date }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="waktupengajuan">Waktu Pengajuan</label>
                                    <input type="text" class="form-control" id="waktuPengajuan" disabled
                                        value="{{ $time }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="keluhanTextArea" class="form-label">Deskripsi Keluhan</label>
                                    <textarea class="form-control" id="keluhanTextArea" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="imageAttachment" class="form-label">File Pendukung</label>
                                    <input type="file" id="imageAttachment" class="image-preview-filepond">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="keluhanTextArea" class="form-label">Deskripsi Keluhan</label>
                                    <textarea class="form-control" id="keluhanTextArea" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-start">
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
                // Do custom type detection here and return with promise
                resolve(type);
            })
        });
    </script>
@endsection
