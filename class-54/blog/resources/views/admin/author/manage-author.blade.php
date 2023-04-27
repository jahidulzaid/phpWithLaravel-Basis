@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase text-center">Manage Authors </h6>
                        <hr/>
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>SL</th>
                                <th>Author Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @php $i=1 @endphp
                            @foreach($authors as $author)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$author->name}}</td>

                                    <td>
                                        <img src="{{asset($author->image) }}" alt="" height="50px" width="50px">
                                    </td>
                                    <td>{{$author->status}}</td>
                                    <td class="btn-group">
                                        <a href="{{route('edit-author', ['id'=> $author->id]) }}" class="btn btn-outline-primary btn-sm mx-1">Edit</a>
                                        @if($author['status'] == 1)
                                            <a href="{{route('status-author', ['id'=> $author->id]) }}" class="btn btn-outline-warning btn-sm mx-1">Unpublished</a>
                                        @else
                                            <a href="{{route('status-author', ['id'=> $author->id])}}" class="btn btn-outline-primary btn-sm mx-1">Published</a>
                                        @endif
                                        <form action="{{route('delete-author', ['id'=> $author->id])}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$author->id}}">
                                            <input type="submit" class="btn btn-outline-danger btn-sm" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
