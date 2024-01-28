@extends('layouts.app')

@section('content')

<div class="container p-5">
    <div class="row d-flex justify-content-center">
        <h1 class="alert alert-success">Edit information</h1>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('updatee') }}" method="post">
                        @csrf

                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <label for="y1">Enter name of the Item</label>
                        <input type="text" class="form-control form-control-sm" name="itemna" id="y1" value="{{ $item->itemname }}">

                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <label for="y1">Price</label>
                        <input type="text" class="form-control form-control-sm" name="pric" id="y1" value="{{ $item->price }}">

                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <label for="y1">Quantity</label>
                        <input type="text" class="form-control form-control-sm" name="qt" id="y1" value="{{ $item->qty }}">

                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <label for="y1">Color</label>
                        <input type="text" class="form-control form-control-sm" name="colo" id="y1" value="{{ $item->color }}">

                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <label for="y1">No. of the group Item</label>
                        <input type="text" class="form-control form-control-sm" name="itemgroupn" id="y1" value="{{ $item->itemgroupno }}">

                        <div class="text-center">
                            <button class="btn btn-primary mt-2 bg-dark" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection