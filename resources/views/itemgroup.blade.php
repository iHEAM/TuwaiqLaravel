@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4">
            <form action="{{route('save')}}" method="post">
              @csrf
              <label for="itemgroupname" class="p-2">Enter name of the group: </label>
            <input type="text" class="form-control form-control-sm" name="itemgroupname">
            <div class="text-center">
            <button class="btn btn-primary mt-2 bg-dark" type="submit" onclick="showmsg()">Save</button></div>
            </form>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <table class="table table-bordered text-center">
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

<div id="message" class="text-center"></div>

{{$issave}}
<script>
    function showmsg() {
        Swal.fire({
            position: "middle",
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500
        });
        
        var messageElement = document.getElementById("message");
        messageElement.innerHTML = "<p>Your work has been saved</p>";
    }
</script>


@endsection