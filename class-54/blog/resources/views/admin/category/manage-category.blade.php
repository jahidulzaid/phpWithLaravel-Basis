@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase text-center">Category </h6>
                        <hr/>
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>SL</th>
                                <th>Category Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @php $i=1 @endphp
                            @foreach($category as $cat)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$cat->category_name}}</td>

                                <td>
                                    <img src="{{asset($cat->image) }}" alt="" height="50px" width="50px">
                                </td>
                                <td>{{ $cat->status == 1 ? 'Published': 'Unpublished'}}</td>
                                <td class="btn-group">
                                    <a href="{{route('edit-category', ['id'=> $cat->id]) }}" class="btn btn-outline-primary btn-sm mx-1">Edit</a>
                                    @if($cat['status'] == 1)
                                    <a href="{{route('status-author', ['id'=> $cat->id]) }}" class="btn btn-outline-warning btn-sm mx-1">Unpublished</a>
                                    @else
                                    <a href="{{route('status-author', ['id'=> $cat->id])}}" class="btn btn-outline-primary btn-sm mx-1">Published</a>
                                    @endif
                                    <form action="{{route('delete-category', ['id'=> $cat->id])}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$cat->id}}">
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
