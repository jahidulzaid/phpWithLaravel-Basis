@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase text-center">Category Table</h6>
                        <hr/>
                        <table class="table table-striped table-bordered table-hover table-danger text-center">

                            <tr>
                                <th>sl</th>
                                <th>Category Name</th>
                                <th>Image</th>
                                <th>Action</th>
                                <th>Status</th>
                            </tr>
                            @php $i=1 @endphp
                            @foreach($authors as $author)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td> {{ $author->author_name }}</td>
                                    <td>
                                        <img src="{{ asset($author->image) }}" alt="" class="img-fluid" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>{{ $author->status==1 ? 'Published': 'Unpublished'}}</td>
                                    <td class="btn-group">
                                        <a href="{{ route('author.edit', ['id'=>$author->id]) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
                                        @if($author->status==1)
                                            <a href="{{ route('author.status', ['id'=>$author->id]) }}" class="btn btn-warning btn-sm mx-1">Un Published</a>
                                        @else
                                            <a href="{{ route('author.status', ['id'=>$author->id]) }}" class="btn btn-success btn-sm">published</a>
                                        @endif
                                        <form action="{{ route('author.delete') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $author->id }}">
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
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
@endsection
