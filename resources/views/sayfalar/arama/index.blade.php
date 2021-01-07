@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container my-4 py-4">
        <div class="row py-4 my-4">
            <h2><strong>{{ $aramaQuery }} </strong> için sonuçlar gösteriliyor.</h2>
        </div>
        @foreach ($sonuclar as $item)

            <div class="row border mb-4 py-4">
                <div class="col">
                    @if ($item->tip == 'blog')
                        <a href="/blog/{{ $item->id }}" class="d-flex justify-content-between">
                            <div>
                                <h2>{{ $item->baslik }}</h2>
                                <h4>{{ $item->etiketler }}</h4>
                            </div>
                            <img src="/uploads/{{ $item->thumbnail }}" class="search-img" alt="">
                        </a>

                    @endif
                    @if ($item->tip == 'sayfa' || $item->tip == 'hizmet')
                        <a href="{{ $item->link }}">
                            <h2>{{ $item->baslik }}</h2>
                            <h4>{{ $item->aciklama }}</h4>
                        </a>

                    @endif
                    @if ($item->tip == 'portfolyo')
                        <a href="/portfolyo/{{ $item->id }}" class="d-flex justify-content-between">
                            <div>
                                <h2>{{ $item->baslik }}</h2>
                                <h4>{{ $item->etiketler }}</h4>
                            </div>
                            <img src="/uploads/{{ $item->thumbnail }}" class="search-img" alt="">

                        </a>

                    @endif
                </div>
            </div>

        @endforeach
        @empty($sonuclar)
            <h4>
                Hiç Sonuç Bulunamadı.
            </h4>
        @endempty
    </div>
@endsection
