<img src="{{asset('storage/baner.jpg')}}" alt="Baner">
<div class="bg-info text-center text-light" style="height:100px">
      <h2>NHƯ STUDIO</h2>
      <p>ẢNH ĐẸP ĐẾN MỌI NGƯỜI</p>
</div>
    <ul class="nav">
      <li class="nav-item">
        <a 
        class="{{request()->is('/')? 'active': ''}} nav-link"
        href="/">Trang chủ</a>
      </li>
      <li class="nav-item">
        <a class="{{request()->is('/about')? 'active': ''}} nav-link"
           href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="{{request()->is('/')? 'active': ''}} nav-link"
           href="#">Sản phẩm</a>
      </li>
    </ul>