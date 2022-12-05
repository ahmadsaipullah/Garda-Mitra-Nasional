@section('title', 'Garda Mitra Nasional')

@extends('layouts.homepage.template')

@section('content')
<link rel="icon" type="image/png" sizes="16x16"  href="/favicons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<style>
    .card {
        background-color: transparent !important;
    }
    
     .second{
        margin-top:50px;
    }
    
    @media only screen and (max-width: 767px){
        
         .second{
        margin-top:0px;
    }
    
        
    }
    
@media only screen and (max-width: 950px){
    
   
    .kode{
        margin-top:-60px;
        position:absolute;
     
        
    }
    .img-fluid{
    width:250px;
      margin:auto;
      display:block;
     
    }
    
    .gal{
        margin-top:150px;
    }
    
    .ats{
        padding-top:150px;
    }
    
    .prof{
        margin-top:-25px;
        margin-bottom:-30px;
    }
    .crow{
        margin-top:20px;
        margin-bottom:-100px;
    }
    
    .col{
        margin-top:15px;
        
    }
    .loc{
        margin-top:-30px;
    }
    .mar{
        margin-top:50px;
    }
	
    }
</style>
    <div style="background: rgba(187, 29, 51, 0.08); height:100%">
        <div class="container mar">
            <div class="row">
                <div class="ats col-lg-6 col-md-6">
                    <div style="color:#BB1D33; margin-top: 230px; text-align: left; font-family: Poppins; font-weight: 700; font-size: 35px;">
                        Garda Mitra Nasional
                        <p class="prof" style="font-size:17px; font-weight: 400;padding-top: 35px;padding-bottom: 58px;color:#350106">
                            PROFESIONAL . CERDAS . LOYAL . TERPERCAYA</p>
                    </div>

                    <!-- <a href="{{ route('login') }}" class="btn1 btn-danger">Lebih Detail ► </a>&emsp;&emsp;&emsp; -->
                    <!-- <a href="" class="social-icon"> <i class="fa fa-facebook"></i></a>&emsp;&emsp; -->
                    <!-- <a href="" class="social-icon"> <i class="fa fa-twitter"></i></a>&emsp;&emsp; -->
                    <!-- <a href="" class="social-icon"> <i class="fa fa-youtube"></i></a>&emsp; -->
                    <a href="{{ route('tentang') }}" class="btn-red btn-danger">Lebih Detail &emsp;<i
                            class="fa fa-arrow-circle-right"></i> </a>&emsp;&emsp;
                    <!-- <a href="#"><i class="fa fa-twitter-square" style="font-size:40px;"></i></a> -->
                    <!-- <a href="#"><i class="fa fa-facebook-square" style="font-size:40px;"></i></a>   -->
                    <br />
                    <a href="#"><i class="fa fa-linkedin-square" style="font-size:40px;"></i></a>
                    <a href="#"><i class="fa fa-youtube-play" style="font-size:40px;"></i></a>
                    <a href="#"><i class="fa fa-instagram" style="font-size:40px;"></i></a>
                </div>

                <div class="kode col-lg-6 col-md-6">
                    <img src="{{ asset('assets/images/home-top.png') }}" style="margin-top: 100px" class="img-fluid">
                </div>
            </div>
        </div>
        

        <div class="crow container" style="padding-top : 300px; padding-bottom: 50px">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="galery">
                        <div class="wrapper">
                            <img src="{{ asset('assets/galerry/1.png') }}">
                            <img src="{{ asset('assets/galerry/2.png') }}">
                            <img src="{{ asset('assets/galerry/2.jpg') }}">
                            <img src="{{ asset('assets/galerry/2.png') }}">
                        </div>
                    </div>
                </div>
                <div class="gal col-md-6 col-lg-6"
                    style=" padding-top: 10px; text-align: left; font-family: Poppins; font-weight: 700;font-size: 35px; width: 394px">
                    Gallery Garda Mitra Nasional
                    <p style="font-size:14px;font-weight: 400;">Berikut merupakan dokumentasi dan informasi dari kegiatan kami</p>
                    <a href="{{ route('blog') }}" class="btn-red btn-danger">LIhat &emsp;<i
                            class="fa fa-arrow-circle-right"></i> </a>&emsp;&emsp;
                </div>
            </div>
        </div>
        
        <div class="container" style="padding-top : 150px;">
            <div class="row">
            <div class="col-12 col-lg-12">
                <p
                    class="text-center" style="font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 28px;line-height: 42px;color: #BB1D33;">
                    Terimakasih <br><span style="color: #350106;"> Atas Kepercayaan</span>
                <p>
            </div>
            </div>
        </div>

        <div style="background: rgba(187, 29, 51, 0.08); height:auto">
            <div class="container" style="padding-top : 50px;padding-bottom : 50px;">
                <div class="row">
                    <div class="col col-lg-3" align="center">
                        <div class="card border-0 mt-4" style="width: 229px;height: 130.39px">
                            <img src="{{ asset('assets/images/logo/bca.png') }}" class="card-img-top" alt="...">
                              <p class="card-text">PT. Bank Central Asia
                        </div>
                    </div>
                    <div class="col col-lg-3"align="center">
                        <div class="card border-0 mt-4" style="width: 229px;height: 130.39px">
                            <img src="{{ asset('assets/images/logo/cp.png') }}" class="card-img-top" alt="...">
                              <p class="card-text">PT. Citra Platindo</p>
                        </div>
                    </div>
                    <div class="col col-lg-3"align="center">
                        <div class="card border-0 mt-4" style="width: 229px;height: 130.39px;">
                            <img src="{{ asset('assets/images/logo/fieris.png') }}" class="card-img-top" alt="...">
                              <p class="card-text">Fieris Hotels & Convention</p>
                        </div>
                    </div>
                    <div class="col col-lg-3"align="center">
                        <div class="card border-0 mt-4" style="width: 229px;height: 130.39px;">
                            <img src="{{ asset('assets/images/logo/mpp.png') }}" class="card-img-top" alt="...">
                              <p class="card-text">PT. Metro Putera Prima</p>
                        </div>
                    </div>
                </div>
                <div class="row second" >
                  
                    <div class="col col-lg-3"align="center">
                        <div class="card border-0 mt-4"style="width: 229px;height: 130.39px;">
                            <img src="{{ asset('assets/images/logo/mss.png') }}" class="card-img-top" alt="...">
                              <p class="card-text">PT. Metta Sinar Sejahtera</p>
                        </div>
                    </div>
                
                    <div class="col col-lg-3" align="center">
                        <div class="card border-0 mt-4" style="width: 229px;height: 130.39px">
                            <img src="{{ asset('assets/images/logo/mcd.png') }}" class="card-img-top" alt="...">
                              <p class="card-text">Mc. Donald's 
                        </div>
                    </div>
                    <div class="col col-lg-3"align="center">
                        <div class="card border-0 mt-4" style="width: 229px;height: 130.39px">
                            <img src="{{ asset('assets/images/logo/pci.png') }}" class="card-img-top" alt="...">
                              <p class="card-text">PT. Prima Copper Industri</p>
                        </div>
                    </div>
                    <div class="col col-lg-3"align="center">
                        <div class="card border-0 mt-4" style="width: 229px;height: 130.39px;">
                            <img src="{{ asset('assets/images/logo/sbr.png') }}" class="card-img-top" alt="...">
                              <p class="card-text">Sekolah Bogor Raya</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-6 col-lg-6">
                    <!-- <div class="slider" style="width: 356px;height: 198px;left: 558px;top: -200px;">
                                            <div class="isi-slider">
                                            <img  src="{{ asset('assets/galerry/BCA.jpg') }}">
                                            <img src="{{ asset('assets/galerry/2.png') }}">
                                            <img src="{{ asset('assets/galerry/2.jpg') }}">
                                            <img src="{{ asset('assets/galerry/2.png') }}">
                                            </div> -->
                    <div class="contain1">
                        <div class="wrapper" style="width: 100%;height: 100%;">
                            <img src="{{ asset('assets/galerry/BCA.jpg') }}">
                            <img src="{{ asset('assets/galerry/citraplatindo.jpg') }}">
                            <img src="{{ asset('assets/galerry/fieris.png') }}">
                            <img src="{{ asset('assets/galerry/mpp.png') }}">
                            <img src="{{ asset('assets/galerry/mss.jpg') }}">
                            <img src="{{ asset('assets/galerry/pci.jpg') }}">
                            <img src="{{ asset('assets/galerry/sbr.jpg') }}">
                            <img src="{{ asset('assets/galerry/mcd.jpg') }}">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="container">
        <div>
        </div>
        @endsection
