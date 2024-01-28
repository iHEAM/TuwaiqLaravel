@extends('layouts.dashboard')
@section('content')

<div class="container">
<div class="row d-flex justify-content-center">
        <div class="col ">
<h3 class="alert alert-dark text-center small">Adding Groups of Items</h3>

<form action="{{route('save')}}" method="post">
            @csrf
<div class="card">
    <div class="card-body">
<label for="itemgrname" class="d-flex justify-content-center small">Name of the group</label>
<div class="row mt-2"> <div class="col">
<input type="text" class="form-control form-control-sm" name="itemgroupname" id="itemgrname">
</div></div>

<div class="row mt-2">
    <div class="col d-flex justify-content-center">
    <button class="btn btn-primary bg-dark" type="submit">Save</button> </div></div>
</form>


<div class="card mt-3">
        <div class="card-body">
            <table class="table table-bordered text-center small">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Name of the group </th>
                        <th colspan="2"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->itemgroupname}}</td>
                        <td><a href="{{ route('edit', ['x' => $row->id]) }}"><i class="bi bi-pencil-square text-success"></i></a></td>
                        <td><a href="{{ route('del', ['x' => $row->id]) }}"><i class="bi bi-trash text-danger"></i></a></td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
