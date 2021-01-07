@extends('yonetim.layout')
@section('content')
    <div class="row">
        <div class="col-12 p-4">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Bannerlar</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form">
                        <div class="row d-flex ">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Header Banner</label>
                                    <input type="text" class="form-control"
                                        value="https://www.youtube.com/watch?v=IUfX5XMqnTc&list=RDfdg2OG8zFiM&index=14">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Sağ Banner</label>
                                    <input type="text" class="form-control"
                                        value="https://www.youtube.com/watch?v=IUfX5XMqnTc&list=RDfdg2OG8zFiM&index=14">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Sol Banner</label>
                                    <input type="text" class="form-control"
                                        value="https://www.youtube.com/watch?v=IUfX5XMqnTc&list=RDfdg2OG8zFiM&index=14">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Footer Banner</label>
                                    <input type="text" class="form-control"
                                        value="https://www.youtube.com/watch?v=IUfX5XMqnTc&list=RDfdg2OG8zFiM&index=14">
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
