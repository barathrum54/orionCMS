@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row my-5 d-flex flex-wrap">
            @foreach ($data as $item)
                @foreach ($item as $i)
                    <div class="col-2 m-5">
                        <img src="{{ $i }}" alt="" style="object-fit: cover;height:150px;width:150px">
                    </div>
                @endforeach
            @endforeach
            {{-- {!! $data !!} --}}
        </div>
    </div>

@endsection
