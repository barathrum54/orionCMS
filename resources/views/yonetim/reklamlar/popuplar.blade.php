@extends('yonetim.layout')
@section('content')
    <div class="row">
        <div class="col-12 p-4">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Popuplar</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form">
                        <div class="row d-flex ">
                            <div class="col-sm-6 border">
                                <div class="form-group">
                                    <label>Açılış Popup</label> <br>
                                    <br>
                                    <label>Grafik</label>

                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Dosya Seç</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Yükle</span>
                                        </div>
                                    </div>
                                    <br>
                                    <label>Süre</label>
                                    <input type="text" class="form-control"
                                        value="https://www.youtube.com/watch?v=IUfX5XMqnTc&list=RDfdg2OG8zFiM&index=14">
                                    <br>
                                    <label>Aktif</label>
                                    <input class="ml-2" style="height:15px;width:15px" type="checkbox" name="" id=""
                                        autocomplete="off">

                                </div>
                            </div>

                        </div>

                </div>

                </form>
            </div>
        </div>
    </div>

    </div>

@endsection
