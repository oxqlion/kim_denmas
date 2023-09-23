@extends('components.parent')


@section('content')
<div class="container">
    <div class="row">
        <div class="col m-5">
            <div class="list-group">
                @foreach ($datas as $data)
                <a href="#" class="list-group-item list-group-item-action {{ ($data == "dummy1")? "active":"" }}">{{ $data }}</a>
                @endforeach
                
              </div>
        </div>

        <div class="col">

        </div>
    </div>
</div>
@endsection