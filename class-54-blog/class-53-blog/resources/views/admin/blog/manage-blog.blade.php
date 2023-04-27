@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Category Form</h6>
                        <hr/>
                        <table class="table table-hover table-striped table-bordered text-center">
                            <tr>
                                <th>SL</th>
                                <th>Blog Title</th>
                                <th>Slug</th>
                                <th>Category Name</th>
                                <th>Author Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @php $i=0 @endphp
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$blog->blog_title}}</td>
                                <td>{{$blog->slug}}</td>
                                <td>{{$blog->category->category_name}}</td>
                                <td>{{$blog->author->author_name}}</td>
                                <td>{{$blog->description}}</td>
                                <td>
                                    <img src="{{asset($blog->image)}}" alt="" style="height: 50px; width: 60px" class="img-fluid">
                                </td>
                                <td>
{{--                                    <a href="{{ route('category.edit',['id'=>$category->id]) }}" class="btn btn-primary btn-sm">Edit</a>--}}
{{--                                    @if($category->status==1)--}}
{{--                                        <a href="{{ route('category.status',['id'=>$category->id]) }}" class="btn btn-primary btn-sm">UnPublished</a>--}}
{{--                                    @else--}}
{{--                                        <a href="{{ route('category.status',['id'=>$category->id]) }}" class="btn btn-primary btn-sm">Published</a>--}}
{{--                                    @endif--}}
{{--                                    <form action="">--}}
{{--                                        <input type="hidden" name="id" value="{{ $category->id }}">--}}
{{--                                        <input type="hidden" name="id" class="btn btn-danger btn-sm " value="Delete">--}}
{{--                                    </form>--}}
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
