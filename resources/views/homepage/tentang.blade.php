@section('title', 'Garda Mitra Nasional')
@extends('layouts.homepage.template')
@section('content')

<style>
    @media only screen and (max-width: 950px){
    
    .kode{
        margin-top:-100px;
    }
    .kode1{
        margin-top:-160px;
    }
    .jus{
        text-align:justify;
    }
  
              .tentang{
        margin-top:50px;
    }
    }
            
    @media only screen and (max-width: 767px){
        
         .bawah{
             posistion:absolute;
             margin-top:450px;
         }
         .atas{
             posistion:absolute;
             margin-top:-620px;
         }
         
        /*  .misi{*/
        /*margin-left:-250px;*/
        /*posistion:absolute;*/
        
    }
    }
    
    .misi{
        margin-left:50px;
        posistion:absolute;
        
    }
</style>

    <div class="container tentang">
        <div class="row">
            <div class="kode col-12 col-md-6 col-lg-6" style="padding-top: 150px">
                <img class="img-fluid" src="{{ asset('assets/images/tentang.png') }}"
                    style="width: 513px;height: 299px;left: 155px;top: 173px">
            </div>
            <div class="kode1 col-12 col-md-6 col-lg-6" style="color:#BB1D33; padding-top: 200px;
                                text-align: left; font-family: Poppins;font-weight: 700; font-size: 35px;">Sejarah
                <p class="jus" style="font-size:14px;font-weight: 400; color:#350106">PT. Garda Mitra Nasional adalah Badan Usaha Jasa Pengamanan (BUJP) yang mengedepankan pelayanan prima sebagai fokus utama, dibawah pengelolaan tenaga profesional yang berpengalaman di bidang pengamanan selama puluhan tahun. Kami terus berinovasi dalam strategi keamanan menyesuaikan kebutuhan klien dengan menggabungkan sistem dan strategi keamanan terbaik dengan tim yang profesional.</p>
            </div>
        </div>
    </div>
    <!-- kata pengantar -->
    <div class="container kode" style="padding-top: 150px;">
        <div class="row">
            <div class="col-2 col-lg-1" style="padding-top: 50px">
                <img src="{{ asset('assets/images/ic-struktur.png') }}"
                    style="width: 85px;height: 103px;left: 155px;top: 548px;">
            </div>
            <div class="col-10 col-lg-11" style="color:#BB1D33; padding-top: 75px;
                                text-align: left; font-family: Poppins; font-weight: 700;font-size: 28px; width: 500px">
                &ensp;&ensp;Dewan Direksi
            </div>
        </div>
    </div>
       <div class="container">
        <center>
            <div class="row" >
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('assets/galerry/triono.png') }}"
                        style="width: 299px ;height:513px;left: 155px;top: 173px">
                </div>
                <div class="col-lg-6 align-self-center pt-4">
                    <blockquote class="blockquote">
                        <p class="mb-0">Brigjen (Purn.) Triono Sulistyohadi</p>
                        
                        <p class="text-muted" style="font-size:17px;">Komisaris PT. Garda Mitra Nasional
                        </p>
                    </blockquote>
                </div>
            </div>
            <div class="row">
                <div class="bawah col-lg-6 align-self-center pt-4">
                    <blockquote class="blockquote">
                        <p class="mb-0">Kolonel Inf. (Purn.) Eko Lelono</p>
                      
                        <p class="text-muted" style="font-size:17px;" >Direktur Utama PT. Garda Mitra Nasional
                        <p>
                    </blockquote>
                </div>
                <div class="atas col-lg-6">
                    <img class="img-fluid" src="{{ asset('assets/galerry/ekooo.png') }}"
                        style="width: 299px ;height:513px;left: 155px;top: 173px">
                </div>
            </div>
    </div>
    
    <!-- /kata pengantar -->
    {{-- <div class="container">
        <center>
            <div class="row" style="padding-top: 50px;">
                <div class="col-1"></div>
                <div class="col-10">
                    <img src="{{ asset('assets/images/ic-visi.png') }}"
                        style="width: 182px;height: 138px;left: 549px;top: 1194px;">
                </div>
                <div class="col-1"></div>
            </div>
    </div> --}}

    <!-- visi misi -->
    <div class="container" style="padding-bottom: 50px;padding-top: 100px">
        <center><p style="font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 28px;line-height: 42px;color:#350106;">
            Visi & Misi<br><span style="color:  #BB1D33;"> Garda Mitra Nasional</span></center>
        <hr style="border: 3px solid #BB1D33;">
     
      

        <div class="row">

            <div align="right" class="col-3" style="padding-top: 50px">
                <img src="{{ asset('assets/images/ic-misi.png') }}"
                    style="width: 61px; height: 74px; left: 246px; top: 1399px;">
            </div>
            <div class="col-9"
                style="color:#BB1D33; padding-top: 75px;
                                text-align: left; font-family: Poppins;font-weight: 600; font-size: 28px;">
                Visi
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-3">
            </div>
            
            <div class="col-8 mar" align="justify" style="font-size: 16px font-weight: 400;">
                Menjadi perusahaan jasa pengamanan Nasional dan sebagai mitra
                    strategis yang terpercaya
            </div>


        </div>
        
        
        
        
        
        
        <div class="row">

            <div align="right" class="col-3" style="padding-top: 50px">
                <img src="{{ asset('assets/images/ic-misi.png') }}"
                    style="width: 61px; height: 74px; left: 246px; top: 1399px;">
            </div>
            <div class="col-9"
                style="color:#BB1D33; padding-top: 75px;
                                text-align: left; font-family: Poppins;font-weight: 600; font-size: 28px;">
                Misi
            </div>
        </div>

        <div class="row">
             <div class="col-2">
            </div>
            <div class="col-1" align="right" style=" margin-left:35px; posistion:absolute;">
                    <p style="color:#BB1D33;">O</p>
            </div> 
            <div class="col-7 misi" style="margin-left:-10px;">
                <p>Mewujudkan keamanan dan ketertiban di lingkungan kerja dalam
                    rangka mendukung sistem PAM SWAKARSA</p>
            </div>
            <div class="col-3">
            </div>
        </div>
        
        <div class="row">
             <div class="col-2">
            </div>
            <div class="col-1" align="right" style=" margin-left:35px; posistion:absolute;">
                    <p style="color:#BB1D33;">O</p>
            </div> 
            <div class="col-7 misi" style="margin-left:-10px;">
                <p>Memberikan rasa aman dan nyaman</p>
            </div>
            <div class="col-3">
            </div>
        </div>
        <div class="row">
             <div class="col-2">
            </div>
            <div class="col-1" align="right" style=" margin-left:35px; posistion:absolute;">
                    <p style="color:#BB1D33;">O</p>
            </div> 
            <div class="col-7 misi" style="margin-left:-10px;">
                <p>Memberikan jasa pengamanan secara profesional</p>
            </div>
            <div class="col-3">
            </div>
        </div>
        <div class="row">
             <div class="col-2">
            </div>
            <div class="col-1" align="right" style=" margin-left:35px; posistion:absolute;">
                    <p style="color:#BB1D33;">O</p>
            </div> 
            <div class="col-7 misi" style="margin-left:-10px;">
                <p>Menjamin keselamatan dan keamanan bagi personil, material, dan
                    kegiatan di lingkungan kerja</p>
            </div>
            <div class="col-3">
            </div>
        </div>
        <div class="row">
             <div class="col-2">
            </div>
            <div class="col-1" align="right" style=" margin-left:35px; posistion:absolute;">
                    <p style="color:#BB1D33;">O</p>
            </div> 
            <div class="col-7 misi" style="margin-left:-10px;">
                <p>Mencegah, meniadakan serta mengatasi masalah keamanan yang dilakukan oleh pihak eksternal maupun internal
                    yang akan mengganggu dan merugikan.</p>
            </div>
            <div class="col-3">
            </div>
        </div>
        <div class="row">
             <div class="col-2">
            </div>
            <div class="col-1" align="right" style=" margin-left:35px; posistion:absolute;">
                    <p style="color:#BB1D33;">O</p>
            </div> 
            <div class="col-7 misi" style="margin-left:-10px;">
                <p>Memberikan saran dan masukan ke pengguna jasa demi lancarnya kegiatan usaha mitra.</p>
            </div>
            <div class="col-3">
            </div>
        </div>
        
        
        
       

      
      

        <hr style="border: 3px solid #BB1D33;">
    </div>

    <!-- /visi misi -->
    <!-- 4 card pelayanan -->
    <center><p style="font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 28px;line-height: 42px;color:#350106;">
        Manfaat<span style="color:  #BB1D33;"> Kerja Sama Dengan Kami</span></center>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-3 ">
                <div class="card border-0" align="center" >
                    <img src="{{ asset('assets/images/ic-home.png') }}" class="card-img-top mx-auto" alt="..."
                        style="width: 87px;height: 107px;" align=center>
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-4">Koordinasi</h4>
                        </div>
                        <h5 class="mb-4" style="font-size: 14px;width: 215px;line-height: 21px;" align="justify">Melakukan
                            koordinasi secara rutin degan apparat managemen dan warga setempat</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-3">
                <div class="card border-0" align="center">
                    <img src="{{ asset('assets/images/ic-home.png') }}" class="card-img-top mx-auto" alt="..."
                        style="width: 87px;height: 107px;">
                    <div class="card-body">
                        <div class="card-title">
                            <h5 class="mb-4">SOP,PSO & PROTAP</h4>
                        </div>
                        <h5 class="mb-4" style="font-size: 14px;width: 215px;line-height: 21px;" align="justify">Menjalankan
                            fungsi pengamanan dan pelayanan serta melaksanakan SOP, PSO dan Protap secara Konsisten serta
                            melakuka evaluasi dan sharing knowladge</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="card border-0" align="center">
                    <img src="{{ asset('assets/images/ic-home.png') }}" class="card-img-top mx-auto" alt="..."
                        style="width: 87px;height: 107px;">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-4">Pengawasan</h4>
                        </div>
                        <h5 class="mb-4" style="font-size: 14px;width: 215px;line-height: 21px;" align="justify">Melakukan
                            Pengawasan secara berjenjang dan berkelanjutan terhadap pelaksanaan tugas personel di lokasi
                            penjagaan</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-3">
                <div class="card border-0" align="center">
                    <img src="{{ asset('assets/images/ic-home.png') }}" class="card-img-top mx-auto" alt="..."
                        style="width: 87px;height: 107px;">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-4">Pembinaan</h4>
                        </div>
                        <h5 class="mb-4" style="font-size: 14px; width: 215px; line-height: 21px;" align="justify">
                            Melakukan pemeliharaan dan peningkatan 
                            kemampuan secara berlanjut serta selalu 
                            mengikuti perkembangan sesuai kebutuhan</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /4 card pelayanan -->
    <!-- <div class="row">
                <div align="right" class="col-3" style="padding-top: 50px">
                <img src="{{ asset('assets/images/ic-misi.png') }}"style="width: 61px; height: 74px; left: 246px; top: 1399px;">
                </div>
                <div class="col-9"style="color:#BB1D33; padding-top: 75px;
                                text-align: left; font-family: Poppins;font-weight: 600; font-size: 28px;">Strategi
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-7" align="left" style="font-size: 16px">
                <ol>Memiliki personil pengamanan yang handal dan profesional</ol>
                <ol>Membangun hubungan dan komunikasi yang harmonis serta memberi solusi bagi pengguna jasa</ol>
                <ol>Mengembangkan kerja sama dan koordinasi yang baik dengan badan keamanan pemerintah dan aparat keamanan setempat (TNI/POLRI/APPEM)</ol>
                <ol>Membina hubungan baik dengan masyarakat</ol>
                </div>
                <div class="col-3"></div>

            </div>
         -->
    <!-- <div class="row">
        <p style="padding-top: 90px;font-family: Poppins;font-weight: 700; font-size: 35px; width: 500px
        align-items: center; justify-content: center; color:#BB1D33">Sasaran</p>
        <p align="left" style="font-size: 16px">Menciptakan suasana aman dengan cara menyelenggarakan sistem pengamanan dan keselamatan manusia baik pribadi
             maupun kelompok serta harta benda pemilik. Para professional yang bergabung dalam PT. Garda Mitra Nasional
             dibangun dan dibesarkan dari kompetensi dan pengalaman untuk membuat lebih baik dalam bidang jasa pengelolaan
             keamanan.<br>
        </div>
        <div class="row" align="left" style="width: 1000px; padding-bottom:15px">
            <li> Perencanaan dan pengembangan sistem keamanan yang lebih baik dan efisien
        </li><li>Struktur biaya operasional yang lebih baik dan kompetitif
        </li><li>Security sebagai benteng perusahaan dari berbagai ancaman dan tindakan pelanggaran ketertiban selalu dibekali pengetahuan dan ketrampilan yang
        mampu bertindak dengan cepat dan akurat sesuai dengan petunjuk Instansi Pembina yaitu POLRI
        </li> -->
    </div>
    </div>


@endsection
