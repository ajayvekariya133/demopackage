@extends('demoav::index')

@section('content')

    <div class="container p-t-20"> 
 
        <div class="modal-content">
            <div class="modal-header"> 
                <h4 class="modal-title">Edit User</h4>
            </div>
            <form name="edit" method="post" action="{{ route('edit-user',$data->id) }}">
                <div class="modal-body form-group">
                    <input class="form-control" type="text" name="name" placeholder="Enter name" required value="{{ $data['name'] }}">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" >Update</button> 
                    <a class="btn btn-default" href="{{ route('list-user') }}">Cancle</a>
                </div>
            </form>
        </div>

    </div>

@endsection()