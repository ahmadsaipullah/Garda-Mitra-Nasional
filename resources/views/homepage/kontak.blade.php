@section('title', 'Garda Mitra Nasional')
@extends('layouts.homepage.template')
@section('content')

<style>
@media only screen and (max-width: 950px){
    .kontak{
        margin-top:-50px;
        margin-bottom:-20px;
         
        margin-top:2px;
    
    }
    }
</style>
    <div class="kontak container">
        <div class="row" style="font-family: 'Poppins';
        font-style: normal;font-weight: 700; font-size: 35px;line-height: 52px; padding-top: 100px; color: #BB1D33;">
            &ensp;Hubungi Kami
        </div>
        <hr style="border: 3px solid #BB1D33;">
    </div>
    <div class="container">
        <div class="row" style="padding-top: 50px;padding-bottom: 50px;">
            <div class="col-12 col-lg-6 mb-4" align="center">
                <img src="{{ asset('assets/images/kontak.png') }}"
                    style="width: 303px;height: 449px;left: 769px;top: 305px;">
            </div>
            <div class="col-12 col-lg-6">
                <form action="{{ route('post') }}" method="POST">
                    @csrf
                    <label>Nama</label>
                    <input type="text" style="width: 380px;height: 43px;" class="form-control" name="name"
                        value="{{ old('nama') }}">
                    <label>Email/Kontak</label>
                    <input type="text" style="width: 380px;height: 43px;" class="form-control" name="email"
                        value="{{ old('email') }}">
                    <label>Subjek</label>

                    <input type="text" style="width: 380px;height: 43px;" class="form-control" name="subject"
                        value="{{ old('subject') }}">
                    <label>Pesan Yang Ingin Disampaikan</label>
                    <textarea name="isi" style="width: 380px;height: 157px;" class="form-control" cols="30"
                        rows="10">{{ old('isi') }}</textarea><br>

                    <button type="submit" class="btn-red btn-danger" style="font">Kirim</button>
            </div>
        </div>
        </form>
    </div>

    @include('sweetalert::alert')


@endsection
