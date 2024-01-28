@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col pt-3">
<h3 class="alert alert-dark small text-center">Informations About Items</h3>

<div class="card">
    <div class="cars-body">
        <table class="table text-center small">
            <thead>
                <tr>
                    <th>No. of Item</th>
                    <th>Name of Item</th>
                    <th>Name of group</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Color</th>
                </tr>
            </thead>
            <tbody>
            @if($data!=null)
            @foreach($data as $row)
            <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->itemname }}</td>
                        <td>{{$row->itemgroupname}}</td>
                        <td>{{ $row->price }}</td>
                        <td>{{ $row->qty }}</td>
                        <td>{{ $row->color }}</td>
            </tr>
            @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div> 

        </div>
    </div>
</div>

@endsection
