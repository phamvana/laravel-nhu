@extends('layouts.app')
@section('content')
    <h1>Đây là trang Index --> Save images to Storage folder</h1>
    <img src="{{asset('storage/Bai 8.png')}}"
        width="100%"
        height="100%"
        alt="Ảnh minh hoạ Sam Sung">
    <div id="section1" class="container-fluid bg-success text-white" style="padding:100px 20px;">
        <h1>Section 1</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      </div>
      
      <div id="section2" class="container-fluid bg-warning" style="padding:100px 20px;">
        <h1>Section 2</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      </div>
      
      <div id="section3" class="container-fluid bg-secondary text-white" style="padding:100px 20px;">
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>
@endsection
