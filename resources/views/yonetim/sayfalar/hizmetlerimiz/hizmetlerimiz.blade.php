@extends('yonetim.layout')
@section('content')
    <form role="form" action="/admin/sayfalar/hizmetlerimizKaydet" method="post">
        @csrf
        <div class="row">
            <div class="col-12 px-4 pt-1 pb-0 ">
                <button type="submit" class="w-25 btn btn-primary float-right">Kaydet</button>
            </div>
        </div>
        <div class="row">

            <div class="col-12 p-4">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Hizmetlerimiz Kolonları</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form">
                            <div class="row d-flex ">
                                <div class="col-sm-6  p-1">
                                    <!-- text input -->
                                    <div class="form-group border p-1">
                                        <label>1. Kolon Başlık</label>
                                        <input type="text" class="form-control" name="hizmetlerimiz_col1_baslik"
                                            id="hizmetlerimiz_col1_baslik" value="{{ $data->hizmetlerimiz_col1_baslik }}">
                                        <label>1. Kolon Metin</label>
                                        <textarea type="text" class="form-control" name="hizmetlerimiz_col1_metin"
                                            id="hizmetlerimiz_col1_metin">{{ $data->hizmetlerimiz_col1_metin }}</textarea>
                                    </div>

                                </div>
                                <div class="col-sm-6  p-1">
                                    <!-- text input -->
                                    <div class="form-group  border p-1">
                                        <label>2. Kolon Başlık</label>
                                        <input type="text" class="form-control" name="hizmetlerimiz_col2_baslik"
                                            id="hizmetlerimiz_col2_baslik" value="{{ $data->hizmetlerimiz_col2_baslik }}">
                                        <label>2. Kolon Metin</label>
                                        <textarea type="text" class="form-control" name="hizmetlerimiz_col2_metin"
                                            id="hizmetlerimiz_col2_metin">{{ $data->hizmetlerimiz_col2_metin }}</textarea>

                                    </div>

                                </div>
                                <div class="col-sm-6  p-1">
                                    <!-- text input -->
                                    <div class="form-group border p-1">
                                        <label>3. Kolon Başlık</label>
                                        <input type="text" class="form-control"
                                            value="{{ $data->hizmetlerimiz_col3_baslik }}" name="hizmetlerimiz_col3_baslik"
                                            id="hizmetlerimiz_col3_baslik">
                                        <label>3. Kolon Metin</label>
                                        <textarea type="text" class="form-control" name="hizmetlerimiz_col3_metin"
                                            id="hizmetlerimiz_col3_metin">{{ $data->hizmetlerimiz_col3_metin }}</textarea>

                                    </div>

                                </div>
                                <div class="col-sm-6  p-1">
                                    <!-- text input -->
                                    <div class="form-group border p-1">
                                        <label>4. Kolon Başlık</label>
                                        <input type="text" class="form-control"
                                            value="{{ $data->hizmetlerimiz_col4_baslik }}" name="hizmetlerimiz_col4_baslik"
                                            id="hizmetlerimiz_col4_baslik">
                                        <label>4. Kolon Metin</label>
                                        <textarea type="text" class="form-control" name="hizmetlerimiz_col4_metin"
                                            id="hizmetlerimiz_col4_metin">{{ $data->hizmetlerimiz_col4_metin }}</textarea>

                                    </div>

                                </div>
                                <div class="col-sm-6  p-1">
                                    <!-- text input -->
                                    <div class="form-group border p-1">
                                        <label>5. Kolon Başlık</label>
                                        <input type="text" class="form-control"
                                            value="{{ $data->hizmetlerimiz_col5_baslik }}" name="hizmetlerimiz_col5_baslik"
                                            id="hizmetlerimiz_col5_baslik">
                                        <label>5. Kolon Metin</label>
                                        <textarea type="text" class="form-control" name="hizmetlerimiz_col5_metin"
                                            id="hizmetlerimiz_col5_metin">{{ $data->hizmetlerimiz_col5_metin }}</textarea>

                                    </div>

                                </div>
                                <div class="col-sm-6  p-1">
                                    <!-- text input -->
                                    <div class="form-group border p-1">
                                        <label>6. Kolon Başlık</label>
                                        <input type="text" class="form-control"
                                            value="{{ $data->hizmetlerimiz_col6_baslik }}" name="hizmetlerimiz_col6_baslik"
                                            id="hizmetlerimiz_col6_baslik">
                                        <label>6. Kolon Metin</label>
                                        <textarea type="text" class="form-control" name="hizmetlerimiz_col6_metin"
                                            id="hizmetlerimiz_col6_metin">{{ $data->hizmetlerimiz_col6_metin }}</textarea>

                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 p-4">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Hizmetlerimiz Kolonları</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex ">
                            <div class="col-sm-12  p-1">
                                <!-- text input -->
                                <div class="form-group border p-1">
                                    <label>Sık Sorulan Sorular Başlık</label>
                                    <input type="text" class="form-control" name="sss_baslik" id="sss_baslik"
                                        value="{{ $data->sss_baslik }}">
                                </div>

                            </div>
                            <div class="col-sm-12  p-1">
                                <!-- text input -->
                                <div class="form-group border p-1">
                                    <label>SSS 1. Satır Başlık</label>
                                    <input type="text" class="form-control" name="sss_1_baslik" id="sss_1_baslik"
                                        value="{{ $data->sss_1_baslik }}">
                                    <label>SSS 1. Satır Metin</label>
                                    <textarea type="text" class="form-control" name="sss_1_metin"
                                        id="sss_1_metin">{{ $data->sss_1_metin }}</textarea>
                                </div>

                            </div>

                            <div class="col-sm-12  p-1">
                                <!-- text input -->
                                <div class="form-group border p-1">
                                    <label>SSS 2. Satır Başlık</label>
                                    <input type="text" class="form-control" name="sss_2_baslik" id="sss_2_baslik"
                                        value="{{ $data->sss_2_baslik }}">
                                    <label>SSS 2. Satır Metin</label>
                                    <textarea type="text" class="form-control" name="sss_2_metin"
                                        id="sss_2_metin">{{ $data->sss_2_metin }}</textarea>
                                </div>

                            </div>
                            <div class="col-sm-12  p-1">
                                <!-- text input -->
                                <div class="form-group border p-1">
                                    <label>SSS 3. Satır Başlık</label>
                                    <input type="text" class="form-control" name="sss_3_baslik" id="sss_3_baslik"
                                        value="{{ $data->sss_3_baslik }}">
                                    <label>SSS 3. Satır Metin</label>
                                    <textarea type="text" class="form-control" name="sss_3_metin"
                                        id="sss_3_metin">{{ $data->sss_3_metin }}</textarea>
                                </div>

                            </div>
                            <div class="col-sm-12  p-1">
                                <!-- text input -->
                                <div class="form-group border p-1">
                                    <label>SSS 4. Satır Başlık</label>
                                    <input type="text" class="form-control" name="sss_4_baslik" id="sss_4_baslik"
                                        value="{{ $data->sss_4_baslik }}">
                                    <label>SSS 4. Satır Metin</label>
                                    <textarea type="text" class="form-control" name="sss_4_metin"
                                        id="sss_4_metin">{{ $data->sss_4_metin }}</textarea>
                                </div>

                            </div>
                            <div class="col-sm-12  p-1">
                                <!-- text input -->
                                <div class="form-group border p-1">
                                    <label>SSS 5. Satır Başlık</label>
                                    <input type="text" class="form-control" name="sss_5_baslik" id="sss_5_baslik"
                                        value="{{ $data->sss_5_baslik }}">
                                    <label>SSS 5. Satır Metin</label>
                                    <textarea type="text" class="form-control" name="sss_5_metin"
                                        id="sss_5_metin">{{ $data->sss_5_metin }}</textarea>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </form>
@endsection
