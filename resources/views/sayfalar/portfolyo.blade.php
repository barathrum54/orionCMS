@extends('layouts.app')

@section('content')
    <div class="portfolio-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="row">
                {{-- <div class="col-md-12">
                    <ul class="portfolio-filter text-center">
                        <li class="filter active" data-filter="all">all</li>
                        <li class="filter" data-filter=".design">design</li>
                        <li class="filter" data-filter=".HTML5">HTML5</li>
                        <li class="filter" data-filter=".wordpress">wordpress</li>
                        <li class="filter" data-filter=".Seo">Seo</li>
                    </ul>
                </div> --}}
                <div id="Container">
                    @foreach ($portfolyoData as $item)

                        <div class="col-md-3 col-sm-4">
                            <div class="single-portfolio mb-30">
                                <div class="portfolio-big-img shadow-sm">
                                    <img src="/uploads/{{ $item->thumbnail }}" alt="" />
                                </div>
                                <span class="portfolio-big-span">{{ $item->baslik }}</span>
                                <div class="portfolio-info">
                                    <div class="portfolio-icon">
                                        <a href="/portfolyo/{{ $item->id }}"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
