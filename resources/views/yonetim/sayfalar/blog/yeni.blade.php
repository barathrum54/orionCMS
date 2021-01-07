@extends('yonetim.layout')
@section('content')
    <form role="form" action="/admin/sayfalar/yeniBlogKaydet" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-12 px-4 pt-1 pb-0 ">
                <button type="submit" class="w-25 btn btn-primary float-right">Kaydet</button>
            </div>
            <div class="col-12 p-4">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Yeni Blog</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex justify-content-center text-center">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Başlık</label>
                                    <input type="text" class="form-control" name="baslik" id="baslik" value="">
                                </div>
                            </div>




                        </div>
                        <div class="row d-flex justify-content-center text-center">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{-- @if ($referans->grafik == null)
                                        <input type="file" name="grafik" id="grafik">
                                        @else
                                        <img style="object-fit: contain;height:300px"
                                            src="/uploads/{{ $referans->grafik }}" />
                                        <a href="/admin/ayarlar/referansGrafikSil/{{ $referans->id }}"
                                            class="text-danger">Sil</a>
                                    @endif --}}
                                    <label for="">Öne Çıkan Grafik</label><br>
                                    <input type="file" name="thumbnail" id="thumbnail">
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-12 p-4">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Blog İçeriği
                                </h3>
                                <!-- tools box -->

                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="mb-3 h-100">
                                <textarea class="textarea h-100" placeholder="Place some text here" id="icerik"
                                    name="icerik"
                                    style="width: 100%; height: 500px !important; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 p-4">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Etiketler</label>
                            <input type="text" class="form-control" name="etiketler" id="etiketler" value="">
                        </div>
                    </div>



                </div>
            </div>
        </div>
        </div>

    </form>
@endsection
