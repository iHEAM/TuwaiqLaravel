@extends('layouts.app')
@section('content')


<div class="container">

@foreach($data as $row)

<div class="card">
    <div class="card-body">
        <div class="row mt-4">
            <div class="col-sm-3">
    <img src="/image/{{$row->image}}" alt="Item Image" style="width: 100px;">  

           </div>
        <div class="col-sm-9 text-start">
            
    <h3 class="">{{$row->itemname}}</h3>
    <h5 class="">Price: {{$row->price}}</h5>

    <div class="row">
        <div class="col">
            <a href="{{ route('addtocart', ['id' => $row->id]) }}">
                <button class="btn btn-dark">Add to cart</button>
            </a>
        </div>
    </div>
    
        </div>

    </div>
</div>

@endforeach

</div>

@endsection