@extends('yonetim.layout')
@section('content')
    <form role="form" action="/admin/ayarlar/referansDuzenleKaydet/{{ $referans->id }}" method="post"
        enctype="multipart/form-data">

        @csrf
        <div class="row">
            <div class="col-12 px-4 pt-1 pb-0 ">
                <button type="submit" class="w-25 btn btn-primary float-right">Kaydet</button>
            </div>

            <div class="col-12 p-4">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Referans Düzenle</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex ">

                            <div class="col-sm-6">
                                <!-- text input -->

                                <div class="form-group">
                                    <label>Başlık</label>
                                    <input type="text" class="form-control" id="baslik" name="baslik"
                                        value="{{ $referans->baslik }}">
                                </div>
                                <div class="form-group d-flex flex-column">
                                    <label>Grafik</label>

                                    @if ($referans->grafik == null)
                                        <input type="file" name="grafik" id="grafik">
                                    @else
                                        <img style="object-fit: contain;height:300px"
                                            src="/uploads/{{ $referans->grafik }}" />
                                        <a href="/admin/ayarlar/referansGrafikSil/{{ $referans->id }}"
                                            class="text-danger">Sil</a>
                                    @endif
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>

        </div>
    </form>

@endsection
