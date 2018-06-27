@extends('layouts.frontend')
@section('search')
<div class="search-container">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>DAPATKAN PEKERJAAN DI SEKITARMU</h1>
                <br>
                <h2>Sederhana,cepat dan efisien </h2>
                <div class="content">
                  <form method="" action="">
                    <div class="row">
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder=" kata kunci / nama perusahaan">
                          <i class="ti-time"></i>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <input class="form-control" type="email" placeholder="kota / provinsi ">
                          <i class="ti-location-pin"></i>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="search-category-container">
                          <label class="styled-select">
                            <select class="dropdown-product selectpicker">
                              <option>Semua Kategori</option>
                              <option>Keuangan</option>
                              <option>IT & Teknik</option>
                              <option>Seni / Desain</option>
                              <option>Penjualan / Pemasaran</option>
                              <option>Kesehatan</option>
                              <option>Layanan Makanan</option>
                            </select>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-1 col-sm-6">
                        <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
@endsection
@section('content')
 <section id="blog" class="section">
      <div class="container">
        <h2 class="section-title">
          
        </h2>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                <img src="{{ asset('themes/jobboard-demo/assets/img/blog/home-items/img3.jpg')}}" alt="">
                </a>
              </div>
              <div class="blog-item-text">
                
                <a href="#">
                  <h3>
                    Daftar Sebagai Pelamar
                  </h3>
                </a>
                <p>
                Daftarkan dirimu sebagai Pelamar secara online untuk mencari Pekerjaan lebih banyak.
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                <img src="{{ asset('themes/jobboard-demo/assets/img/blog/home-items/img1.jpg')}}" alt="">
                </a>
              </div>
              <div class="blog-item-text">
                <a href="#">
                  <h3>
                   Buat Lamaran Dirimu
                  </h3>
                </a>
                <p>
                Mulai kirim lamaran mu dengan mudah sesuai pilihan pekerjaanmu.
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="#">
                <img src="{{ asset('themes/jobboard-demo/assets/img/features/img-3.jpg')}}" alt="">
                </a>
              </div>
              <div class="blog-item-text">
                <a href="#">
                  <h3>
                   Dapat Impian Pekerjaan
                  </h3>
                </a>
                <p>
                Akhirnya akan merasakan apa yang anda impikan selama ini.
                </p>
                
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
<section class="find-job section">
  <div class="container">
  <h2 class="section-title">Lowongan Terbaru</h2>
  @foreach($lowongan as $data)
  <div class="row">
    <div class="col-md-12">
      <div class="job-list">
        <div class="thumb">
          <a href="job-details.html"><img src="{{ asset('assets/img/logopers/'. $data->Perusahaan->logo )}}" height="100px" alt=""></a>
        </div>
        <div class="job-list-content">
          <h4><a href="#">{{ $data->nama_low }}</a></h4>
          <p>{!! str_limit($data->deskripsi_iklan, 290) !!}</p>
          <div class="job-tag">
            <div class="pull-left">
              <div class="meta-tag">
                <span><a href="#"><i class="ti-brush"></i>{{ $data->Kategori->nama_kategori }}</a></span>
                <span><i class="ti-location-pin"></i>{{ $data->lokasi}}</span>
                <span><i class="ti-time"></i>{{ $data->tgl_mulai }}</span>
              </div>
            </div>
            <div class="pull-right">
              <div class="icon">
                <i class="ti-heart"></i>
              </div>
              <a href="{{ url('detail_lowongan',$data->id) }}" class="btn btn-common btn-rm">Terapkan Pekerjaan</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="col-md-12">
        <div class="showing pull-left">
          <a href="#">Lihat <span>6-10</span>  24 Pekerjaan</a>
        </div>
        <ul class="pagination pull-right">
          <li class="active"><a href="#" class="btn btn-common"><i class="ti-angle-left"></i> sebelumnya</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li class="active"><a href="#" class="btn btn-common">Selanjutnya <i class="ti-angle-right"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
    
    
    
   
    
    <section class="clients section">
      <div class="container">
        <h2 class="section-title">
          Klien & Mitra
        </h2>
        <div class="row">
          <div id="clients-scroller">
            @foreach( $perusahaan as $data)
            <div class="items">
              <img src="{{ asset('assets/img/logopers/'.$data->logo)}}" style="max-height: 200px; max-width: 200px; margin-top: 7px" alt="">
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    
    <section class="infobox section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="info-text">
              <h2>Tidak Ingin Merindukan Sesuatu?</h2>
              <p>Pergi saja ke sana <a href="#">Google Play</a> untuk mengunduh LokeRed Mini</p>
            </div>
            <a href="#" class="btn btn-border">Google Play</a>
          </div>
        </div>
      </div>
    </section>
     <footer>
     
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info text-center">
                <p>All Rights reserved &copy; 2018 - Designed & Developed by <a rel="nofollow" href="http://graygrids.com">Mexu$</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
   @endsection