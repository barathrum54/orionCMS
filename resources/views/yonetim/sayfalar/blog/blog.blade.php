@extends('yonetim.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Blog Postları</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a name="" id="" class="btn btn-primary" href="/admin/sayfalar/yeniBlog" role="button">Yeni
                                Ekle</a>
                            <br class="mb-4">
                            <table id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Başlık</th>
                                        <th>Etiketler</th>
                                        <th>Tarih</th>
                                        <th>Eylemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogData as $item)
                                        <tr>
                                            <td>{{ $item->baslik }}</td>
                                            <td
                                                style="max-width:100px !important;text-overflow:ellipsis;overflow:hidden;white-space:nowrap">
                                                {{ $item->etiketler }}
                                            </td>
                                            <td>{{ date_format($item->created_at, 'd.m.Y H:i') }}</td>
                                            <td><a href="/admin/sayfalar/blogSil/{{ $item->id }}"
                                                    class="text-danger">Sil</a> &nbsp;
                                                <a href="/admin/sayfalar/blogDuzenle/{{ $item->id }}"
                                                    class="text-sucess">Düzenle</a>
                                            </td>
                                        </tr>
                                    @endforeach

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
