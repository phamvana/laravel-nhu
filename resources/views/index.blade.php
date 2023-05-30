@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
            <h2>Về chúng tôi</h2>
            <h5>Photo of me:</h5>
            <div class="fakeimg">Fake Image</div>
            <p>Studio Như với đội ngũ nhân viên chuyên nghiệp, thân thiện... Chúng tôi mang đến cho bạn những khảnh khắc đẹp nhất, đáng nhớ nhất trong cuộc sống</p>
            <h3 class="mt-4">Các liên kết</h3>
            <p>Liên kết của trang</p>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/service">Dich vụ</a>
                </li>
            </ul>
            <hr class="d-sm-none">
        </div>
        <div class="col-sm-8">
            <h2>HÌNH THẺ THÁNG 5</h2>
            <h5>Tháng 5, 2023</h5>
            <div class="fakeimg">
                <img src="{{asset('storage/p_may.jpg')}}">
            </div>
            <p>Hình thẻ được Như lưu cẩn thận cho khách, bất cứ khi nào khác có nhu cầu liên hệ với Studio Như là sẽ có ảnh mang về </p>
            <a href="https://drive.google.com/drive/folders/19At32ST-Ztjv-4z_wShRJrQK8FMzGm9c?fbclid=IwAR2DgRDwqGsrLYeSbSliW0zdCFZdNNLB5nDuDakTaMqjnAhcasf-0x5OQN0">Link hình thẻ tháng 5</a>

            <h2 class="mt-5">Album ảnh gia đình</h2>
            <h5> Tháng 2, 2023</h5>
            <div class="fakeimg">
                <img src="{{asset('storage/family.jpg')}}" style="height:800px">
            </div>
            <p>Lưu giữ những khảnh khắc yêu thương của gia đình</p>
            
        </div>
    </div>
</div>


@endsection