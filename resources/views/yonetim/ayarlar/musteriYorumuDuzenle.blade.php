@extends('yonetim.layout')
@section('content')
    <form role="form" action="/admin/ayarlar/musteriYorumuDuzenleKaydet/{{ $my->id }}" method="post"
        enctype="multipart/form-data">

        @csrf
        <div class="row">
            <div class="col-12 px-4 pt-1 pb-0 ">
                <button type="submit" class="w-25 btn btn-primary float-right">Kaydet</button>
            </div>

            <div class="col-12 p-4">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Yeni Müşteri Yorumu Ekle</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex ">

                            <div class="col-sm-6">
                                <!-- text input -->

                                <div class="form-group">
                                    <label>İsim</label>
                                    <input type="text" class="form-control" id="isim" name="isim" value="{{ $my->isim }}">
                                    <br>
                                    <label>Metin</label><br>
                                    <input type="text" class="form-control" id="metin" name="metin"
                                        value="{{ $my->metin }}">

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
