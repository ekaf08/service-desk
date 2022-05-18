@extends('layouts.dashboard')
@section('custom-stylesheet')
    <link rel="stylesheet" href="assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
@endsection

@section('main-content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last"></div>
                <div class="col-12 col-md-6 order-md-1 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Knowledge Base</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tabs" role="tablist">
                        <a href="#" class="nav-item nav-link active" id="nav-hal1-tab" data-toggle="tab" role="tab" aria-controls="nav-hal1" aria-selected="true">Hal. 1</a>
                        <a href="#" class="nav-item nav-link" id="nav-hal2-tab" data-toggle="tab" role="tab" aria-controls="nav-hal2" aria-selected="true">Hal. 2</a>
                        <a href="#" class="nav-item nav-link" id="nav-hal3-tab" data-toggle="tab" role="tab" aria-controls="nav-3" aria-selected="true">Hal. 3</a>
                        <a href="#" class="nav-item nav-link" id="nav-hal4-tab" data-toggle="tab" role="tab" aria-controls="nav-hal4" aria-selected="true">Hal. 4</a>
                        <a href="#" class="nav-item nav-link" id="nav-hal5-tab" data-toggle="tab" role="tab" aria-controls="nav-hal5" aria-selected="true">Hal. 5 </a>
                        
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
                                        <th>No Solusi</th>
                                        <th>Kategori</th>
                                        <th>Sub Kategori</th>
                                        <th>Keyword</th>
                                        <th>Judul Solusi</th>
                                        <th>Deskripsi Solusi</th>
                                        <th>Tipe Solusi</th>
                                        <th>Status Solusi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->kategori }}</td>
                                        <td>{{ $post->sub_kategori}}</td>
                                        <td>{{ $post->keyword}}</td>
                                        <td>{{ $post->judul}}</td>
                                        <td>{{ $post->deskripsi }} </td>
                                        <td>{{ $post->tipe }} </td>
                                        <td>{{ $post->status }} </td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    @endforeach

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
