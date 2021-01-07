@extends('yonetim.layout')
@section('content')
    <form role="form">

        <div class="row">
            <div class="col-12 p-4">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Harita</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex ">
                            <div class="col-6  p-1">
                                <!-- text input -->
                                <div class="form-group border p-1">
                                    <label>Harita Koordinat</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 p-4">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">İletişim Kolonları</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row d-flex ">
                            <div class="col-sm-6  p-1">
                                <!-- text input -->
                                <div class="form-group border p-1">
                                    <label>1. Kolon Başlık</label>
                                    <input type="text" class="form-control" value="">
                                    <label>1. Kolon Metin</label>
                                    <textarea type="text" class="form-control"></textarea>
                                </div>

                            </div>
                            <div class="col-sm-6  p-1">
                                <!-- text input -->
                                <div class="form-group  border p-1">
                                    <label>2. Kolon Başlık</label>
                                    <input type="text" class="form-control" value="">
                                    <label>2. Kolon Metin</label>
                                    <textarea type="text" class="form-control"></textarea>

                                </div>

                            </div>
                            <div class="col-sm-6  p-1">
                                <!-- text input -->
                                <div class="form-group border p-1">
                                    <label>3. Kolon Başlık</label>
                                    <input type="text" class="form-control" value="">
                                    <label>3. Kolon Metin</label>
                                    <textarea type="text" class="form-control"></textarea>

                                </div>

                            </div>
                            <div class="col-sm-6  p-1">
                                <!-- text input -->
                                <div class="form-group border p-1">
                                    <label>İletişim Başlık</label>
                                    <input type="text" class="form-control" value="">
                                    <label>İletişim Metin</label>
                                    <textarea type="text" class="form-control"></textarea>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>

@endsection
