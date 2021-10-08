@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-right">
        <a href="{{ route('users.create') }}" class="btn btn-success my-3">Create New User</a>
    </div>

    <h1 class="mb-5">All Products</h1>
    <table id="myTable" class="table table-stripped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a class="btn btn-sm btn-success" href="{{ route('users.show', $item->id) }}">Show</a>
                    <a class="btn btn-sm btn-primary" href="{{ route('users.edit', $item->id) }}">Edit</a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                        data-target="#deleteConfirm{{$item->id}}"><span class="lnr lnr-trash">Delete</span></button>
                    <div class="modal fade" id="deleteConfirm{{$item->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
                                </div>
                                <div class="modal-body">
                                    Are you sure want to delete this record?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    {!! Form::open([
                                    'method' => 'DELETE',
                                    'url' => route('users.destroy', $item->id),
                                    'style' => 'display:inline'
                                    ]) !!}
                                    {!! Form::button('Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Confirm Delete'
                                    )) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('script')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
@endsection