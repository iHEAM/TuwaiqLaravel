@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <h1 class="alert alert-success">Editing The Name of Item Groups</h1>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <label for="x1">Name of the group</label>
                        <input type="text" class="form-control form-control-sm" name="namegroup" id="x1" value="{{$item->itemgroupname}}">

                        <div class="text-center">
                        <button class="btn btn-primary mt-2 bg-dark" type="submit">Save</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection