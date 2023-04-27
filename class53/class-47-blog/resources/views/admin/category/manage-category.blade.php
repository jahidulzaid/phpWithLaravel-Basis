@extends('admin.master')
@section('content')


    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Category Form</h6>
                        <hr/>
                        <table class="table table-striped table-bordered table-hover text-center">
                            <tr>
                                <th>sl</th>
                                <th>Category Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            @php $i =1 @endphp
                            @foreach( $categories as $category)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>
                                    <img src="{{ asset($category->image) }}" class="img-fluid" style="height: 120px;width: 120px" alt="">
                                </td>
                                <td>{{ $category -> status==1 ? 'Published':'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('category.edit',['id'=>$category->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                    @if($category->status==1)
                                    <a href="{{ route('category.status',['id'=>$category->id]) }}" class="btn btn-primary btn-sm">UnPublished</a>
                                    @else
                                    <a href="{{ route('category.status',['id'=>$category->id]) }}" class="btn btn-primary btn-sm">Published</a>
                                    @endif
                                    <form action="">
                                        <input type="hidden" name="id" value="{{ $category->id }}">
                                        <input type="hidden" name="id" class="btn btn-danger btn-sm " value="Delete">
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
