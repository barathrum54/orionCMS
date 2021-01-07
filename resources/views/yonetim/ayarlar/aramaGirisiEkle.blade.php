@extends('yonetim.layout')
@section('content')
    <form role="form" action="/admin/ayarlar/aramaGirisiKaydet" method="post" enctype="multipart/form-data">

        @csrf
        <div class="row">
            <div class="col-12 px-4 pt-1 pb-0 ">
                <button type="submit" class="w-25 btn btn-primary float-right">Kaydet</button>
            </div>

            <div class="col-12 p-4">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Yeni Arama Girişi Ekle</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex ">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Başlık</label>
                                    <input type="text" class="form-control" id="baslik" name="baslik">
                                    <label>Kategori</label>
                                    <input type="text" class="form-control" id="kategori" name="kategori">
                                    <label>Açıklama</label><br>
                                    <input type="text" class="form-control" id="aciklama" name="aciklama">
                                    <label>Link</label><br>
                                    <input type="text" class="form-control" id="link" name="link">

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
