@extends('layouts.auth')
@section('main-content')
    <section class="ftco-section">
        <div class=" container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Log In to <br>Service Desk.</h2>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                            </div>
                            <form action="#" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                                </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
