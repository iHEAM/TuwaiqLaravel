@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-bordered text-center">
            <thead>
            <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->description }}</td>
                        <td><img src="{{$row->image}}" alt="" style="width: 100px;"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection