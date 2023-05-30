
@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Chào mừng <b> {{ Auth::user()->name }}</b>! đăng nhập vào hệ thống </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <!-- Nội dung trang quản trị -->
                    <!--  Chào mừng {{ Auth::user()->name }} đã đăng nhập vào hệ thống -->
                    <div class="wrapper">
                        <!-- Main Sidebar Container -->
                        @include('sidebar')
                        <div class="content-wrapper">
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-primary mt-3">
                                                <div class="card-header">
                                                    <h3 class="card-title"> {{ $title }} </h3>
                                                </div>
                                                
                                                @yield('content')
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        @include('admin.footer')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection