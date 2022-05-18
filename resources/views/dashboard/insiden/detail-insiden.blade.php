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
                <div class="row">
                    <div class="col-lg-10">
                        <form>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="no_insiden"> No Insiden </label>
                                <div class="col-lg-4">
                                    <input type="text" id="no_insiden" value="{{ $incident->no_insiden }}"
                                        name="no_insiden" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="nama_pelapor"> Nama Pelapor </label>
                                <div class="col-lg-8">
                                    <input type="text" id="nama_pelapor" value="{{ $incident->nama_pelapor }}"
                                        name="nama_pelapor" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="asal_opd"> Asal </label>
                                <div class="col-lg-8">
                                    <input type="text" id="asal_opd" value="{{ Str::upper($incident->opd->nama_opd) }}"
                                        name="asal_opd" class="form-control" readonly>
                                </div>
                            </div>
                            @isset($incident->telepon)
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="telepon"> Telepon </label>
                                    <div class="col-lg-8">
                                        <input type="text" id="telepon" value="{{ $incident->telepon }}" name="telepon"
                                            class="form-control" readonly>
                                    </div>
                                </div>
                            @endisset
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="no_hp"> Nomor HP </label>
                                <div class="col-lg-8">
                                    <input type="text" id="no_hp" value="{{ $incident->no_hp }}" name="asal_opd"
                                        class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="asal_opd"> Deskripsi </label>
                                <div class="col-lg-8">
                                    <textarea class="form-control" id="keluhanTextArea" rows="3" name="deskripsiKeluhan"
                                        readonly>{{ $incident->deskripsi }}</textarea>
                                </div>
                            </div>
                            @isset($incident->keyword)
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="kategori"> Kategori </label>
                                    <div class="col-lg-8">
                                        <input type="text" id="kategori" value="" name="kategori" class="form-control"
                                            readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="subkategori"> Subkategori </label>
                                    <div class="col-lg-8">
                                        <input type="text" id="subkategori" value="" name="subkategori" class="form-control"
                                            readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="keyword"> Keyword </label>
                                    <div class="col-lg-8">
                                        <input type="text" id="keyword" value="" name="keyword" class="form-control" readonly>
                                    </div>
                                </div>
                            @endisset
                            @isset($incident->koordinator_id)
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="asal_opd"> Koordinator </label>
                                    <div class="col-lg-8">
                                        <input type="text" id="asal_opd" value="" name="asal_opd" class="form-control"
                                            readonly>
                                    </div>
                                </div>
                                @isset($incident->teknisi_pj_id)
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="asal_opd"> Teknisi PJ </label>
                                        <div class="col-lg-8">
                                            <input type="text" id="asal_opd" value="" name="asal_opd" class="form-control"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-end">
                                        <label class="col-lg-4 col-form-label" for="asal_opd"> Teknisi Lainnya </label>
                                        <div class="col-lg-8">
                                            <input type="text" id="asal_opd" value="" name="asal_opd" class="form-control"
                                                readonly>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" id="asal_opd" value="" name="asal_opd" class="form-control"
                                                readonly>
                                        </div>
                                    </div>
                                @endisset
                            @endisset

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-start">
            <button type="button" class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#lampiranModal">
                Lihat Lampiran Berkas
            </button>
            <button type="button" class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#riwayatModal">
                Lihat Riwayat Insiden
            </button>
        </div>
    </section>

    <div class="modal fade" id="lampiranModal" tabindex="-1" role="dialog" aria-labelledby="lampiranModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lampiranModalTitle">Lampiran Gambar</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Image Attachment
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="riwayatModal" tabindex="-1" role="dialog" aria-labelledby="riwayatModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-xxl-down modal-dialog-centered modal-dialog-scrollable"
            role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="riwayatModalTitle">Riwayat Penanganan Insiden</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="table-responsive">
                        <table class="table table-hover" id="table-closed">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Penanganan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Waktu Mulai</th>
                                    <th>Penanganan</th>
                                    <th>Hasil Akhir</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Waktu Selesai</th>
                                    <th>Durasi &#40;Dalam Jam Kerja&#41;</th>
                                    <th>Status</th>
                                    <th>User</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($logs as $key => $log)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>LOG-{{ $log->id }}</td>
                                        @if ($key != 0)
                                            <td>{{ parseDate($logs[$key - 1]->created_at) }}</td>
                                            <td>{{ parseTime($logs[$key - 1]->created_at) }}</td>
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif
                                        @if (isset($log->penanganan))
                                            <td>{{ $log->penanganan }}</td>
                                        @else
                                            <td>-</td>
                                        @endif
                                        @if (isset($log->hasil_akhir))
                                            <td>{{ $log->hasil_akhir }}</td>
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>{{ parseDate($log->created_at) }}</td>
                                        <td>{{ parseTime($log->created_at) }}</td>
                                        <td>-</td>
                                        <td>{{ $log->status->status }}</td>
                                        <td>{{ $log->user->nama }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
@endsection
