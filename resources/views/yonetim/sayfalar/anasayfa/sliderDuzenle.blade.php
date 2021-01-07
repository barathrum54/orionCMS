@extends('yonetim.layout')

@section('content')
    <form role="form" action="/admin/sayfalar/sliderDuzenleKaydet/{{ $slider->id }}" method="post">
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
                                            <a class="btn btn-danger" href="/admin/sayfalar/sliderSil/{{ $slider->id }}">
                                                Sil
                                            </a>

                                        </div>
                                    </div>
                                    <div>
                                        <div class="filter-container p-0 row">

                                            <div class="col-sm-12" data-category="1" data-sort="white sample">
                                                <img src="/uploads/{{ $slider->slider_gorsel }}" class="img-fluid mb-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="filter-container p-0 row">

                                            <div class="col-sm-12" data-category="1" data-sort="white sample">
                                                <div class="form-group">
                                                    <label for="">URL</label>
                                                    <input type="text" class="form-control" name="url" id="url"
                                                        aria-describedby="helpId" placeholder="" value="{{ $slider->url }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-12" data-category="1" data-sort="white sample">
                                                <div class="form-group">
                                                    <label for="">Başlık</label>
                                                    <input type="text" class="form-control" name="slider_baslik"
                                                        id="slider_baslik" aria-describedby="helpId" placeholder=""
                                                        value="{{ $slider->slider_baslik }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-12" data-category="1" data-sort="white sample">
                                                <div class="form-group">
                                                    <label for="">Açıklama</label>
                                                    <input type="text" class="form-control" name="slider_aciklama"
                                                        id="slider_aciklama" aria-describedby="helpId" placeholder=""
                                                        value="{{ $slider->slider_aciklama }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </div>

        </div>

    </form>

    <!-- Modal -->
    @include('components.sliderEkle')

@endsection
