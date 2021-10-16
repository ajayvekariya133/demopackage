@extends('demoav::index')

@section('content')

    <div class="container p-t-20">
        <table class="table table-responsive">
            <div><h3>User Data <a class="btn btn-primary" href="{{ route('list-add') }}">Add</a></h3></div>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            @foreach ($userData as $index => $data)
                <tr>                    
                    <td>{{ $index + 1}}</td>
                    <td>{{ $data['name'] }}</td>
                    <td> 
                            <form action="{{ route('list-delete',[$data->id]) }}" method="POST"> 
                                <a class="btn btn-primary" href="{{ route('list-edit',[$data->id]) }}">Edit</a> 
                                @csrf
                                @method('DELETE') 
                                <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td> 
                </tr>
            @endforeach 
        </table>  
    </div>

@endsection()