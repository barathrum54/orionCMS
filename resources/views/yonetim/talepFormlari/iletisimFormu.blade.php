@extends('yonetim.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">İletişim Formları</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>İsim</th>
                                        <th>Email</th>
                                        <th>Telefon</th>
                                        <th>Firma</th>
                                        <th>Konu</th>
                                        <th>Mesaj</th>
                                        <th>Tarih</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Other browsers</td>
                                        <td>All others</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>U</td>
                                        <td>U</td>
                                        <td>U</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                searching: false,
                bInfo: false,
                bFilter: false,
                "bLengthChange": false,

            });
        });

    </script>
@endsection
