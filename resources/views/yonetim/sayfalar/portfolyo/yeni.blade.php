@extends('yonetim.layout')
@section('content')
    <form role="form" action="/admin/portfolyoKaydet" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 px-4 pt-1 pb-0 ">
                <button type="submit" class="w-25 btn btn-primary float-right">Kaydet</button>
            </div>
            <div class="col-12 p-4">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Yeni Portfolyo</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex ">
                            <div class="col-sm-6 border">
                                <div class="form-group">
                                    <label>Başlık</label>
                                    <input type="text" class="form-control" id="baslik" name="baslik" value="">
                                </div>
                            </div>
                            <div class="col-sm-6 border">
                                <div class="form-group">
                                    <label for="">Kategori</label>
                                    <select class="form-control" id="kategori" name="kategori">
                                        @foreach ($kategoriler as $item)
                                            <option value="{{ $item->id }}">{{ $item->baslik }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 border">
                                <div class="form-group d-flex flex-column justify-content-center">
                                    <label for="exampleInputFile">Öne Çıkan
                                        Grafik</label>
                                    <input type="file" name="thumbnail_file" class="w-100" id="thumbnail_file">

                                </div>
                            </div>
                            <div class="col-sm-6 border">
                                <div class="form-group">
                                    <label>Etiketler</label>
                                    <input type="text" class="form-control" id="etikler" name="etiketler" value="">
                                </div>
                            </div>
                            <div class="col-sm-12 pt-2 border">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <textarea class="textarea" id="content" name="content"
                                            placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 pt-2 border">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <div>

                                            <label>Galeri</label>
                                            <input type="file" name="galeri_files[]" id="galeri_files"
                                                class="multi with-preview" />
                                            <style>
                                                .MultiFile-remove {
                                                    color: red;
                                                    margin-left: 25px;
                                                    font-size: 20px;
                                                    padding: 5px;
                                                }

                                                .MultiFile-preview {
                                                    object-fit: contain;
                                                    max-height: 300px !important;
                                                    max-width: 300px !important;
                                                    margin: 10px
                                                }

                                                .MultiFile-label {
                                                    display: flex;
                                                    flex-flow: column;
                                                    padding: 15px;
                                                }

                                                .MultiFile-title {
                                                    margin-left: 20px;
                                                }

                                                .MultiFile-list {
                                                    display: flex;
                                                    flex-wrap: wrap
                                                }

                                                .MultiFile-wrap {
                                                    background: rgba(0, 0, 0, 0.1);
                                                    padding-bottom: 50px
                                                }

                                                .MultiFile-applied {
                                                    margin-top: 20px;
                                                    margin-left: 20px;
                                                    font-size: 15pt;
                                                }

                                            </style>
                                        </div>
                                    </div>

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
