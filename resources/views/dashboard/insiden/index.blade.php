@extends('layouts.dashboard')
@section('custom-stylesheet')
    <link rel="stylesheet" href="assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
@endsection
@section('main-content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last"></div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lihat Tiket</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-tiket-tab" data-toggle="tab" href="#nav-tiket"
                                role="tab" aria-controls="nav-tiket" aria-selected="true">e-Tiket</a>
                            <a class="nav-item nav-link" id="nav-open-tab" data-toggle="tab" href="#nav-open" role="tab"
                                aria-controls="nav-open" aria-selected="false">Open</a>
                            <a class="nav-item nav-link" id="nav-eskalasi-tab" data-toggle="tab" href="#nav-eskalasi" role="
                                                            tab" aria-controls="nav-eskalasi"
                                aria-selected="false">Eskalasi</a>
                            <a class="nav-item nav-link" id="nav-solved-tab" data-toggle="tab" href="#nav-solved" role="tab"
                                aria-controls="nav-solved" aria-selected="false">Solved</a>
                            <a class="nav-item nav-link" id="nav-closed-tab" data-toggle="tab" href="#nav-closed" role="tab"
                                aria-controls="nav-closed" aria-selected="false">Closed</a>
                            <a class="nav-item nav-link" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab"
                                aria-controls="nav-all" aria-selected="false">All</a>
                        </div>
                    </nav>
                    <div class="row mt-4">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-tiket" role="tabpanel"
                                aria-labelledby="nav-tiket-tab">
                                <div class="table-responsive">
                                <table class="table" id="table-tiket">
                                    <thead>
                                        <tr>
                                            <th>No Insiden</th>
                                            <th>Nama Pelapor</th>
                                            <th>NIP Pelapor</th>
                                            <th>Asal OPD</th>
                                            <th>Tanggal Insiden</th>
                                            <th>Waktu Insiden</th>
                                            <th>Deskripsi Insiden</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>INS-357</td>
                                            <td>User Coba Tier1</td>
                                            <td>-</td>
                                            <td>Dinas Sosial</td>
                                            <td>12 April 2017</td>
                                            <td>06:37</td>
                                            <td>Coba Insiden Langsung Di Closed</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>INS-358</td>
                                            <td>User Coba</td>
                                            <td>SDO Doddy</td>
                                            <td>Dinas Penanaman Modal</td>
                                            <td>13 April 2017</td>
                                            <td>10:37</td>
                                            <td>Kabel putus di sekitar halaman kantor</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>INS-359</td>
                                            <td>User Coba 2</td>
                                            <td>Jonathan Suatmojo</td>
                                            <td>Dinas Lingkungan Hidup</td>
                                            <td>17 April 2022</td>
                                            <td>08:37</td>
                                            <td>Gangguan CCTV di Lokasi X</td>
                                            <td>
                                                <span class="badge bg-success">Passive</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-open" role="tabpanel" aria-labelledby="nav-open-tab">
                                <div class='table-responsive'>
                                <table class="table" id="table-open">
                                    <thead>
                                        <tr>
                                            <th>No Insiden</th>
                                            <th>Nama Operator</th>
                                            <th>Nama Pelapor</th>
                                            <th>Tanggal Insiden</th>
                                            <th>Waktu Insiden</th>
                                            <th>Deskripsi Insiden</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ABC</td>
                                            <td>vehicula</td>
                                            <td>076 4820 8838</td>
                                            <td>Senin, 17 Agustus 2012</td>
                                            <td>17.03</td>
                                            <td>Jaringan Internet Tidak Bisa diakses, Tetapi Lampu Indikator Pada perangkat Menyala</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>DEF</td>
                                            <td>fringilla</td>
                                            <td>0500 527693</td>
                                            <td>New Quay</td>
                                            <td>-</td>
                                            <td>Jaringan Internet Tidak Bisa diakses, Tetapi Lampu Indikator Pada perangkat Menyala</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Z</td>
                                            <td>mi Duis von Path</td>
                                            <td>(012165) 76278</td>
                                            <td>Grumo Appula</td>
                                            <td>-</td>
                                            <td>Jaringan Internet Tidak Bisa diakses, Tetapi Lampu Indikator Pada perangkat Menyala</td>
                                            <td>
                                                <span class="badge bg-danger">Inactive</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-eskalasi" role="tabpanel"
                                aria-labelledby="nav-eskalasi-tab">
                                <div class="table-responsive">
                                <table class="table" id="table-eskalasi">
                                    <thead>
                                        <tr>
                                            <th>No Insiden</th>
                                            <th>OPD Pelapor</th>
                                            <th>Nama Teknisi PJ</th>
                                            <th>Waktu Insiden</th>
                                            <th>Deskripsi Insiden</th>
                                            <th>Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A</td>
                                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                                            <td>076 4820 8838</td>
                                            <td>Offenburg</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>B</td>
                                            <td>fringilla.euismod.enim@quam.ca</td>
                                            <td>0500 527693</td>
                                            <td>New Quay</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>C</td>
                                            <td>mi.Duis@diam.edu</td>
                                            <td>(012165) 76278</td>
                                            <td>Grumo Appula</td>
                                            <td>
                                                <span class="badge bg-danger">Inactive</span>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-solved" role="tabpanel"
                                aria-labelledby="nav-solved-tab">
                                <div class="table-responsive">
                                <table class="table" id="table-solved">
                                    <thead>
                                        <tr>
                                            <th>No Insiden</th>
                                            <th>Nama Operator</th>
                                            <th>Nama Pelapor PJ</th>
                                            <th>Waktu Insiden</th>
                                            <th>Deskripsi Insiden</th>
                                            <th>Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A</td>
                                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                                            <td>076 4820 8838</td>
                                            <td>Offenburg</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>B</td>
                                            <td>fringilla.euismod.enim@quam.ca</td>
                                            <td>0500 527693</td>
                                            <td>New Quay</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>C</td>
                                            <td>mi.Duis@diam.edu</td>
                                            <td>(012165) 76278</td>
                                            <td>Grumo Appula</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge bg-danger">Inactive</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-closed" role="tabpanel"
                                aria-labelledby="nav-closed-tab">
                                <div class="table-responsive">
                                <table class="table" id="table-closed">
                                    <thead>
                                        <tr>
                                            <th>No Insiden</th>
                                            <th>Nama Operator</th>
                                            <th>Nama Pelapor</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Waktu Selesai</th>
                                            <th>Deskripsi Insiden</th>
                                            <th>Tanggal Insiden</th>
                                            <th>Waktu Insiden</th>
                                            <th>Durasi Penanganan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A</td>
                                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                                            <td>076 4820 8838</td>
                                            <td>Offenburg</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>B</td>
                                            <td>fringilla.euismod.enim@quam.ca</td>
                                            <td>0500 527693</td>
                                            <td>New Quay</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>C</td>
                                            <td>mi.Duis@diam.edu</td>
                                            <td>(012165) 76278</td>
                                            <td>Grumo Appula</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge bg-danger">Inactive</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-all" role="tabpanel"
                                aria-labelledby="nav-all-tab">
                                <div class="table-responsive">
                                <table class="table" id="table-all">
                                    <thead>
                                        <tr>
                                            <th>No Insiden</th>
                                            <th>OPD Pelapor</th>
                                            <th>Nama Teknisi PJ</th>
                                            <th>Waktu Insiden</th>
                                            <th>Deskripsi Insiden</th>
                                            <th>Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A</td>
                                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                                            <td>076 4820 8838</td>
                                            <td>Offenburg</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>B</td>
                                            <td>fringilla.euismod.enim@quam.ca</td>
                                            <td>0500 527693</td>
                                            <td>New Quay</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>C</td>
                                            <td>mi.Duis@diam.edu</td>
                                            <td>(012165) 76278</td>
                                            <td>Grumo Appula</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>
                                                <span class="badge bg-danger">Inactive</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('custom-script')
    <script>
        var triggerTabList = [].slice.call(document.querySelectorAll('#nav-tab a'))
        triggerTabList.forEach(function(triggerEl) {
            var tabTrigger = new bootstrap.Tab(triggerEl)

            triggerEl.addEventListener('click', function(event) {
                event.preventDefault()
                tabTrigger.show()
            })
        })
    </script>
    <script src="/assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>
    <script src="/assets/vendors/fontawesome/all.min.js"></script>
    <script>
        let datatable_tiket = $("#table-tiket").DataTable()
        let datatable_open = $("#table-open").DataTable()
        let datatable_eskalasi = $("#table-eskalasi").DataTable()
        let datatable_solved = $("#table-solved").DataTable()
        let datatable_closed = $("#table-closed").DataTable()
        let datatable_all = $("#table-all").DataTable()
    </script>
@endsection
