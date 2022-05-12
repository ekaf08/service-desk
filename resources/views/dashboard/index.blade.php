@extends('layouts.dashboard')
@section('main-content')
    <section class="row right_col">
        <div class="col-12 col-lg-12">
            <div class="row">

                @foreach ($statuses as $status)
                    <div class="col-6 col-lg-3 col-md-6">
                        <a href="#">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="text-muted font-semibold"> {{ $status['status'] }}</h5>
                                            <h1 class="font-extrabold mb-0">{{ $status['counter'] }}</h6>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="stats-icon {{ $status['color'] }}">
                                                <i class="iconly-boldShow"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <h6 class="font-light">{{ $status['deskripsi'] }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

@section('custom-script')
    <script>
        function resize() {
            $('.right_col').css('min-height', $(window).height() - $('.right_col').offset().top - 40);
        }
        // $('window').on('load', resize()); 
        $('window').on('resize', resize());
    </script>
@endsection
