@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $title }} </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <!-- Nội dung trang quản trị -->
                    <h4> Chào mừng {{ Auth::user()->name }} đã đăng nhập vào hệ thống</h4>
                    <div class="wrapper">
                        <!-- Main Sidebar Container -->
                        @include('admin.sidebar')
                        <div class="content-wrapper">
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-primary mt-3">
                                                <div class="card-header">
                                                    <h3 class="card-title"> {{ $title }} </h3>
                                                </div>
                                                Nội dung
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