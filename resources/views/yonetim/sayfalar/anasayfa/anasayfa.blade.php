@extends('yonetim.layout')

@section('content')
    <form role="form" action="/admin/sayfalar/anasayfaKaydet/" method="post">
        @csrf
        <div class="row">
            <div class="col-12 px-4 pt-1 pb-0 ">
                <button type="submit" class="w-25 btn btn-primary float-right">Kaydet</button>
            </div>
            <div class="col-12  p-4">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <div class="card-title">
                                        Ana Sayfa Slider
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>

                                        <div class="mb-2">
                                            <a class="btn btn-success" data-toggle="modal" data-target="#sliderEkleModal">
                                                Yeni
                                                Ekle
                                            </a>

                                        </div>
                                    </div>
                                    <div>
                                        <div class="filter-container p-0 row">

                                            @foreach ($sliderArray as $item)
                                                <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                    <a href="/admin/sayfalar/sliderDuzenle/{{ $item->id }}"
                                                        data-toggle="lightbox" data-title="sample 1 - white">
                                                        <img src="/uploads/{{ $item->slider_gorsel }}"
                                                            class="img-fluid mb-2" />
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </div>

        </div>
        <div class="row">
            <div class="col-12 p-4">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">İkinci Bölüm</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex justify-content-center text-center">
                            <div class="col-sm-6 d-flex flex-column">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Başlık</label>
                                    <input type="text" class="form-control" name="ib_baslik" id="ib_baslik"
                                        value="{{ $data->ib_baslik }}">
                                </div>
                                <div class="form-group">
                                    <label>Alt Başlık</label>
                                    <input type="text" class="form-control" name="ib_alt_baslik" id="ib_alt_baslik"
                                        value="{{ $data->ib_alt_baslik }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Metin</label>
                                    <textarea class="form-control" rows="3" name="ib_metin" id="ib_metin"
                                        placeholder="Açıklama Metni">{{ $data->ib_metin }}</textarea>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>


    </form>

    <!-- Modal -->
    @include('components.sliderEkle')

@endsection
