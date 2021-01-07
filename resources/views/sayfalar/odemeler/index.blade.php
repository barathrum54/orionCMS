@extends('layouts.app')

@section('content')
    <br><br><br>
    <div class="container py-5 my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <h2>Satın almakta olduğunuz hizmetler için</h2>
                <h2>Toplam Tutar: <strong>{{ $fiyat }} TL</strong></h2>
                <br>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-8">

                <form role="form" action="/odemeyap" method="get">
                    @csrf
                    <div class="form-group">
                        <label for="">KART NO</label>
                        <input type="number" name="kartno" id="kartno" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Kart Numarası</small>
                    </div>
                    <div class="form-group">
                        <label for="">AD SOYAD</label>
                        <input type="text" name="adsoyad" id="adsoyad" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Kart Üzerinde Yer Alan Ad Soyad</small>
                    </div>
                    <div class="form-group">
                        <h4>SON KULLANMA TARİHİ</h4>
                        <small id="helpId" class="text-muted">Kartın Son Kullanma Tarihi</small>

                        <div class="d-flex">
                            <div class="d-flex flex-column mr-5">

                                <label for="">AY</label>
                                <input type="text" name="skt" id="skt" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="d-flex flex-column">

                                <label for="">YIL</label>
                                <input type="text" name="skt" id="skt" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>

                        </div>

                    </div>
                    <div class="form-group">
                        <label for="">Güvenlik Kodu</label>
                        <input type="text" name="cvv" id="cvv" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Kartın Arkasında Yer Alan 3 Haneli Güvenlik Kodu</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Ödeme Yap</button>
                </form>
            </div>
        </div>
    </div>
@endsection
