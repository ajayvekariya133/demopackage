@extends('demoav::index')

@section('content')

    <div class="container p-t-20"> 

        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title">Add User</h4>
            </div>
            <form name="add" method="post" action="{{ route('add-user') }}">
                <div class="modal-body form-group">
                    <input class="form-control" type="text" name="name" placeholder="Enter name" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" >Submit</button> 
                    <a class="btn btn-default" href="{{ route('list-user') }}">Cancle</a>
                </div>
            </form>
        </div>

    </div>

@endsection()