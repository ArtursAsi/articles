@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($items as $item)

            <div class="col-4">

                    <div class="card m-2">
                        <div class="card-header">
                            <img src="https://f.pmo.ee/logos/4133/1525e66d587afb7dce086f3290beb487.svg" alt="">
                            <h5>{{ $item->title }}</h5>
                           <h6>{{$item->date}}</h6>
                        </div>

                        <div class="card-body">
                            <a href="{{$item->link}}"> <img src="{{$item->enclosure}}" class="mb-2" alt="" style="width: 100%"></a>

                            <p>{{$item->description}}</p>

                        </div>
                        <div class="card-footer">
                            <img src="https://f8.pmo.ee/-P7fMmj7fxEh93uJjmNJMWEWPlM=/70x70/smart/nginx/o/2018/08/24/11310799t1h4f39.jpg" style="width: 10%" alt="">{{$item->author}}

                        </div>

                    </div>

            </div>
            @endforeach

        </div>
    </div>
@endsection
