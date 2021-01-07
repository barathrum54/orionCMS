@extends('yonetim.layout')
@section('content')
    <div class="row">
        <div class="col-12  p-4">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="card-title">
                                    Portfolyo
                                </div>
                            </div>
                            <div class="card-body">
                                <div>

                                    <div class="mb-2">
                                        <a class="btn btn-success" href="/admin/sayfalar/yeniportfolyo" data-shuffle> Yeni
                                            Ekle
                                        </a>

                                    </div>
                                </div>
                                <div>
                                    <div class="filter-container p-0 row">
                                        @foreach ($portfolyoArray as $p)
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="/admin/portfolyo/{{ $p->id }}" data-toggle="lightbox"
                                                    data-title="sample 1 - white">
                                                    <img src="/uploads/{{ $p->thumbnail }}" class="img-fluid mb-2"
                                                        alt="white sample" />
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </div>

    </div>
@endsection
