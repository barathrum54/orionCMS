@extends('yonetim.layout')
@section('content')
    <form role="form" action="/admin/sayfalar/hakkimizdaKaydet" method="post">
        @csrf
        <div class="row">
            <div class="col-12 px-4 pt-1 pb-0 ">
                <button type="submit" class="w-25 btn btn-primary float-right">Kaydet</button>
            </div>
            <div class="col-12 p-4">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Hakkımızda Bölümü</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex justify-content-center text-center">
                            <div class="col-sm-6 d-flex flex-column">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Başlık</label>
                                    <input type="text" class="form-control" name="hakkimizda_baslik_1"
                                        id="hakkimizda_baslik_1" value="{{ $data->hakkimizda_baslik_1 }}">
                                </div>
                                <div class="form-group">
                                    <label>Alt Başlık</label>
                                    <input type="text" class="form-control" name="hakkimizda_alt_baslik_1"
                                        id="hakkimizda_alt_baslik_1" value="{{ $data->hakkimizda_alt_baslik_1 }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Metin</label>
                                    <textarea class="form-control" rows="3" name="hakkimizda_metin_1"
                                        id="hakkimizda_metin_1"
                                        placeholder="Açıklama Metni">{{ $data->hakkimizda_metin_1 }}</textarea>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row d-flex justify-content-center text-center">

                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Metin2</label>
                                    <textarea class="form-control" rows="3" name="hakkimizda_metin_2"
                                        id="hakkimizda_metin_2"
                                        placeholder="Açıklama Metni">{{ $data->hakkimizda_metin_2 }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex flex-column">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Başlık2</label>
                                    <input type="text" class="form-control" name="hakkimizda_baslik_2"
                                        id="hakkimizda_baslik_2" value="{{ $data->hakkimizda_baslik_2 }}">
                                </div>
                                <div class="form-group">
                                    <label>Alt Başlık2</label>
                                    <input type="text" class="form-control" name="hakkimizda_alt_baslik_2"
                                        id="hakkimizda_alt_baslik_2" value="{{ $data->hakkimizda_alt_baslik_2 }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
@endsection
