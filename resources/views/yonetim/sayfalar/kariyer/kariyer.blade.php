@extends('yonetim.layout')
@section('content')
    <div class="row">
        <div class="col-12 p-4">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Kariyer Banner</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form">
                        <div class="row d-flex justify-content-center ">
                            <div class="col-6  p-1">
                                <!-- text input -->
                                <div class="form-group border p-1">
                                    <label>Kariyer Başlık</label>
                                    <input type="text" class="form-control" value="">
                                    <label>Kariyer Banner</label>
                                    <input type="text" class="form-control" value="">
                                </div>

                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-12 p-4">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Kariyer Metin</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form">
                        <div class="row d-flex justify-content-center ">
                            <div class="col-6  p-1">
                                <!-- text input -->
                                <div class="form-group border p-1">
                                    <div class="form-group">
                                        <label for="">Kariyer Açıklama Metni</label>
                                        <textarea class="form-control" name="" id="" rows="3"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-12 p-4">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Açık Pozisyonlar</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form">
                        <div class="row d-flex justify-content-center ">
                            <div class="col-6  p-1">
                                <!-- text input -->
                                <div class="form-group border p-1">
                                    <div class="form-group">
                                        <label for="">Kariyer Açık Pozisyonlar(!)</label>
                                        <textarea class="form-control" name="" id="" rows="3"></textarea>
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
