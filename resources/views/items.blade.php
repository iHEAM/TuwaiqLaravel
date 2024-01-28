@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <form action="{{ route('sav') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label for="itemname" class="form-label">Enter name of the Item:</label>
                        <input type="text" class="form-control" name="itemname">
                    </div>
                    <div class="col">
                        <label for="price" class="form-label">Price:</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="qty" class="form-label">Quantity:</label>
                        <input type="text" class="form-control" name="qty">
                    </div>
                    <div class="col">
                        <label for="color" class="form-label">Color:</label>
                        <input type="text" class="form-control" name="color">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="itemgroupno" class="form-label">No. of the group Item:</label>
                        <input type="text" class="form-control" name="itemgroupno">
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary mt-2 bg-dark" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
 
    <div class="card mt-3">
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name of Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Color</th>
                        <th>No. of the group Item</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($d as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->itemname }}</td>
                        <td>{{ $row->price }}</td>
                        <td>{{ $row->qty }}</td>
                        <td>{{ $row->color }}</td>
                        <td>{{ $row->itemgroupno }}</td>
                        <td><a href="{{ route('editt', ['y' => $row->id]) }}"><i class="bi bi-pencil-square text-success"></i></a></td>
                        <td><a href="{{ route('dell', ['y' => $row->id]) }}"><i class="bi bi-trash text-danger"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection