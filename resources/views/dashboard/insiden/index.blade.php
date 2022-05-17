@extends('layouts.dashboard')
@section('custom-stylesheet')
    <link rel="stylesheet" href="/assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
@endsection
@section('main-content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last"></div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-md-end float-lg-end">
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
                            <a class="nav-item nav-link" id="nav-eskalasi-tab" data-toggle="tab" href="#nav-eskalasi"
                                role="tab" aria-controls="nav-eskalasi" aria-selected="false">Eskalasi</a>
                            <a class="nav-item nav-link" id="nav-solved-tab" data-toggle="tab" href="#nav-solved" role="tab"
                                aria-controls="nav-solved" aria-selected="false">Solved</a>
                            <a class="nav-item nav-link" id="nav-closed-tab" data-toggle="tab" href="#nav-closed" role="tab"
                                aria-controls="nav-closed" aria-selected="false">Closed</a>
                            <a class="nav-item nav-link" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab"
                                aria-controls="nav-all" aria-selected="false">Semua</a>
                        </div>
                    </nav>
                    <div class="row mt-4">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-tiket" role="tabpanel"
                                aria-labelledby="nav-tiket-tab">
                                @include('dashboard.insiden.tiket.etiket')
                            </div>
                            <div class="tab-pane fade" id="nav-open" role="tabpanel" aria-labelledby="nav-open-tab">
                                @include('dashboard.insiden.tiket.open')
                            </div>
                            <div class="tab-pane fade" id="nav-eskalasi" role="tabpanel"
                                aria-labelledby="nav-eskalasi-tab">
                                @include('dashboard.insiden.tiket.eskalasi')
                            </div>
                            <div class="tab-pane fade" id="nav-solved" role="tabpanel" aria-labelledby="nav-solved-tab">
                                @include('dashboard.insiden.tiket.solved')
                            </div>
                            <div class="tab-pane fade" id="nav-closed" role="tabpanel" aria-labelledby="nav-closed-tab">
                                @include('dashboard.insiden.tiket.closed')
                            </div>
                            <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                                @include('dashboard.insiden.tiket.semua')
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
        let datatable_tiket = $("#table-tiket").DataTable({
            order: [
                [0, 'desc']
            ],
        })
        let datatable_open = $("#table-open").DataTable({
            order: [
                [0, 'desc']
            ],
        })
        let datatable_eskalasi = $("#table-eskalasi").DataTable({
            order: [
                [0, 'desc']
            ],
        })
        let datatable_solved = $("#table-solved").DataTable({
            order: [
                [0, 'desc']
            ],
        })
        let datatable_closed = $("#table-closed").DataTable({
            order: [
                [0, 'desc']
            ],
        })
        let datatable_all = $("#table-all").DataTable({
            order: [
                [0, 'desc']
            ],
        })
    </script>
@endsection
