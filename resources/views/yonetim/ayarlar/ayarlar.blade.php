@extends('yonetim.layout')
@section('content')
    <form role="form" action="/admin/ayarlarKaydet" method="post" enctype="multipart/form-data">

        @csrf
        <div class="row">
            <div class="col-12 px-4 pt-1 pb-0 ">
                <button type="submit" class="w-25 btn btn-primary float-right">Kaydet</button>
            </div>
            <div class="col-12 p-4">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Firma Ayarları</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex ">

                            <div class="col-sm-6">
                                <!-- text input -->

                                <div class="form-group">
                                    <label>Firma Adı</label>
                                    <input type="text" class="form-control" id="firma_adi" name="firma_adi"
                                        value="{{ $data->firma_adi }}">
                                </div>
                                <div class="form-group d-flex flex-column">
                                    @if ($data->firma_logo != null)
                                        <img src="/uploads/{{ $data->firma_logo }}" alt="">
                                    @endif
                                    <label for="">Logo </label>
                                    <input type="file" name="firma_logo" id="firma_logo">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 p-4">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Sosyal Medya</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex ">

                            <div class="col-sm-6">
                                <!-- text input -->

                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control" id="facebook_link" name="facebook_link"
                                        value="{{ $data->facebook_link }}">
                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" class="form-control" id="twitter_link" name="twitter_link"
                                        value="{{ $data->twitter_link }}">
                                </div>
                                <div class="form-group">
                                    <label>Google Plus</label>
                                    <input type="text" class="form-control" id="googleplus_link" name="googleplus_link"
                                        value="{{ $data->googleplus_link }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->


                                <div class="form-group">
                                    <label>Linked In</label>
                                    <input type="text" class="form-control" id="linkedin_link" name="linkedin_link"
                                        value="{{ $data->linkedin_link }}">
                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text" class="form-control" id="youtube_link" name="youtube_link"
                                        value="{{ $data->youtube_link }}">
                                </div>
                                <div class=" form-group">
                                    <label>Behance</label>
                                    <input type="text" class="form-control" id="behance_link" name="behance_link"
                                        value="{{ $data->behance_link }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->

                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" class="form-control" id="instagram_link" name="instagram_link"
                                        value="{{ $data->instagram_link }}">
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 p-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">İletişim Adresleri</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex ">
                            <div class="col-sm-6">
                                <!-- text input -->

                                <div class="form-group">
                                    <label>Telefon 1</label>
                                    <input type="text" class="form-control" id="telefon1" name="telefon1"
                                        value="{{ $data->telefon1 }}">
                                </div>
                                <div class="form-group">
                                    <label>Telefon 2</label>
                                    <input type="text" class="form-control" id="telefon2" name="telefon2"
                                        value="{{ $data->telefon2 }}">
                                </div>
                                <div class="form-group">
                                    <label>İK Mail</label>
                                    <input type="text" class="form-control" id="ik_mail" name="ik_mail"
                                        value="{{ $data->ik_mail }}">
                                </div>


                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->

                                <div class="form-group">
                                    <label>Teklif Mail</label>
                                    <input type="text" class="form-control" name="iletisim_mail"
                                        value="{{ $data->iletisim_mail }}" id="iletisim_mail">
                                </div>
                                <div class="form-group">
                                    <label>İletişim Mail</label>
                                    <input type="text" class="form-control" name="teklif_mail"
                                        value="{{ $data->teklif_mail }}" id="teklif_mail">
                                </div>
                                <div class="form-group">
                                    <label>Fiziksel Adres</label>
                                    <input type="text" class="form-control" name="fiziksel_adres" id="fiziksel_adres"
                                        value="{{ $data->fiziksel_adres }}">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="col-12 p-4">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">CTA Butonları</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex ">
                            <div class="col-sm-6">
                                <!-- text input -->

                                <div class="form-group">
                                    <label>Buton 1 Başlık</label>
                                    <input type="text" class="form-control" id="cta_buton1_baslik" name="cta_buton1_baslik"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <label>Buton 1 Link</label>
                                    <input type="text" class="form-control" id="cta_buton1_link" name="cta_buton1_link"
                                        value="">
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->

                                <div class="form-group">
                                    <label>Buton 2 Başlık</label>
                                    <input type="text" class="form-control" id="cta_buton2_baslik" name="cta_buton2_baslik"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <label>Buton 2 Link</label>
                                    <input type="text" class="form-control" id="cta_buton2_link" name="cta_buton2_link"
                                        value="">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}
            <div class="col-12 p-4">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Kategoriler</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a name="" id="" class="btn btn-primary" href="/admin/ayarlar/kategoriEkle" role="button">Yeni
                            Ekle</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Başlık</th>
                                    <th>Eylemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategoriler as $item)
                                    <tr>
                                        <td scope="row">{{ $item->id }}</td>
                                        <td>{{ $item->baslik }}</td>
                                        <td><a href="/admin/ayarlar/kategoriDuzenle/{{ $item->id }}">Düzenle</a> &nbsp;
                                            <a class="text-danger" href="/admin/ayarlar/kategoriSil/{{ $item->id }}">Sil</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 p-4">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Referanslar</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a name="" id="" class="btn btn-primary" href="/admin/ayarlar/referansEkle" role="button">Yeni
                            Ekle</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Başlık</th>
                                    <th>Grafik</th>
                                    <th>Eylemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($referanslar as $r)

                                    <tr>
                                        <td scope="row">{{ $r->id }}</td>
                                        <td>{{ $r->baslik }}</td>
                                        <td>{{ $r->grafik }}</td>
                                        <td><a href="/admin/ayarlar/referansDuzenle/{{ $r->id }}">Düzenle</a> &nbsp; <a
                                                class="text-danger" href="/admin/ayarlar/referansSil/{{ $r->id }}">Sil</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 p-4">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Müşteri Yorumları</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a name="" id="" class="btn btn-primary" href="/admin/ayarlar/musteriYorumuEkle" role="button">Yeni
                            Ekle</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>İsim</th>
                                    <th>Metin</th>
                                    <th>Eylemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($musteriyorumlari as $my)

                                    <tr>
                                        <td scope="row">{{ $r->id }}</td>
                                        <td>{{ $my->isim }}</td>
                                        <td>{{ $my->metin }}</td>
                                        <td><a href="/admin/ayarlar/musteriYorumuDuzenle/{{ $my->id }}">Düzenle</a>
                                            &nbsp; <a class="text-danger"
                                                href="/admin/ayarlar/musteriYorumuSil/{{ $my->id }}">Sil</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-12 p-4">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Arama Girişleri</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a name="" id="" class="btn btn-primary" href="/admin/ayarlar/aramaGirisiEkle" role="button">Yeni
                            Ekle</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kategori</th>
                                    <th>Başlık</th>
                                    <th>Eylemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($aramalar as $a)

                                    <tr>
                                        <td scope="row">{{ $a->id }}</td>
                                        <td>{{ $a->kategori }}</td>
                                        <td>{{ $a->baslik }}</td>
                                        <td><a href="/admin/ayarlar/aramaGirisiDuzenle/{{ $a->id }}">Düzenle</a>
                                            &nbsp; <a class="text-danger"
                                                href="/admin/ayarlar/aramaGirisiSil/{{ $a->id }}">Sil</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
        </div>
    </form>

@endsection
