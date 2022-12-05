<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Slip Gaji</title>
</head>

<body>

     <div class="section">
        <div class="section-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-header text-uppercase" style="border: 1px black solid;">
                                    <img src="assets/images/logo/gmn.png" width="35" height="40" alt=""
                                        style="margin-right: 30%;">SLIP GAJI PERIODE
                                        {{ $bulan }}
                                </div>

                                <div class="card-body" style="border: 1px black solid; font-size: 14px">
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">NAMA :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->user->name ? $gaji->user->name : Auth::user()->name }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">NIP :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->nip ? $gaji->nip : Auth::user()->nip }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">JABATAN :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->user->jabatan ? $gaji->user->jabatan : Auth::user()->jabatan }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">ATASAN LANGSUNG :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->user->atasan ? $gaji->user->atasan : Auth::user()->atasan }}</p>
                                                </div>
                                            </div>



                                            <p class="card-text mb-4"
                                                style="margin-left: 10%; padding-top: 3%; font-weight: bold">PENDAPATAN
                                            </p>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">GAJI POKOK :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->gaji }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">T.MAKAN & TRANSPORT :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->t_makan }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">T.OPERASIONAL :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->t_operasional }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">T.JABATAN :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->t_jabatan }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">LEMBUR NASIONAL :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->lembur_nas }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">LEMBUR BIASA :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->lembur_b }}</p>
                                                </div>
                                            </div>
                                            
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">KOREKSI PLUS (+) :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->koreksi_plus }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">BONUS :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->bonus }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">BACK UP :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->backup }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">WEEKEND BANKING :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->weekend_banking }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">INSENTIF :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->insentif }}</p>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-6" style="margin-left: 55%; margin-top: -94%; ">

                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">NO.NPWP :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->user->npwp ? $gaji->user->npwp : Auth::user()->npwp }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">NO.REKENING :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->user->rekening ? $gaji->user->rekening : Auth::user()->rekening }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">INSTALASI :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->user->instalasi ? $gaji->user->instalasi : Auth::user()->instalasi }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">NAMA BANK :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->user->bank ? $gaji->user->bank : Auth::user()->bank }}</p>
                                                </div>
                                            </div>



                                            <p class="card-text mb-4"
                                                style="margin-left: 5%; padding-top: 3%; font-weight: bold">POTONGAN/
                                                IURAN</p>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">UANG JAMINAN :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->jaminan }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">KOREKSI (-) :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->koreksi_min }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">DIKSAR :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->diksar }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">KTA :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->kta }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">PPH 21 :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->pph21 }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">PINJAMAN :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->pinjaman }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">BPJS KES (KARYAWAN) :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->bpjs_kes_kar }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">BPJS TK (KARYAWAN) :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->bpjs_tk_kar }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">DANSOS (KARYAWAN) :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->dansos }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">ADMIN (KARYAWAN) :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->admin }}</p>
                                                </div>
                                            </div>

                                        </div>


                                        <div
                                            style="border-top: 1px solid black; border-bottom: 1px solid black; margin-bottom:10px; margin-top:100px;">
                                            <h6 class="text-center">IN-OUT</h6>
                                        </div>
                                        <div class="col-12">

                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">BPJS KES (PERUSAHAAN) :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->bpjs_kes_perusahaan }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">BPJS TK (PERUSAHAAN) :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px;">
                                                        {{ $gaji->bpjs_tk_perusahaan }}</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-6" style="margin-left: 55%; margin-top: -15%">
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">BPJS KES (PERUSAHAAN) :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->bpjs_kes }}</p>
                                                </div>
                                            </div>
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2">BPJS TK (PERUSAHAAN) :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%;">
                                                        {{ $gaji->bpjs_tk }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        {{--  --}}
                                        <div style="border-top: 1px solid black; margin-top:10px; margin-bottom:5px;">
                                        </div>
                                        <div class="col-12 pt-2">
                                            <div class="row col-6">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2" style="font-weight: bold;">TOTAL
                                                        PENDAPATAN :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; font-weight: bold;">
                                                        {{ $gaji->total_plus }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6" style="margin-left: 55%; margin-top: -15%">

                                            <div class="row col-6 pt-2">
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4 mt-2" style="font-weight: bold;">TOTAL
                                                        PENGURANGAN :</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text mb-4"
                                                        style="text-align: right; margin-top:-23px; margin-right: 17%; font-weight: bold;">
                                                        {{ $gaji->potongan }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="border-bottom: 1px solid black; margin-bottom:5px;">

                                        </div>


                                        <div class="col-12">

                                            <div class="row col-12">
                                                <div class="col-md-6">
                                                    <p class="card-text mt-3" style="font-weight: bold;">TOTAL GAJI :
                                                    </p>
                                                </div>
                                                <div class="col-md-6 mt-4">
                                                    <p class="card-text"
                                                        style="text-align: right; margin-top:-23px; margin-right: 24px; font-weight: bold;">
                                                        {{ $gaji->total }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
