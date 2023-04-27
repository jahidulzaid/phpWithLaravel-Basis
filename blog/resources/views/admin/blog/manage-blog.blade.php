@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase text-center">All Blog</h6>
                    <hr/>
                    <table class="table table-striped table-bordered table-hover text-center">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Blog Title</th>
                            <th>Slug</th>
                            <th>Category Name</th>
                            <th>Author Name</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @php $i = 1 @endphp
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $blog->blog_title }}</td>
                            <td>{{ $blog->slug }}</td>
                            <td>{{ $blog->category->category_name }}</td>
                            <td>{{ $blog->author->author_name }}</td>
                            <td>{{ $blog->description }}</td>
                            <td>{{ $blog->date }}</td>
                            <td>
                                <img src="{{ asset($blog->image) }}" alt="" style="height: 50px; width: 50px;">
                            </td>
                            <td class="btn-group">
                                <a href="{{ route('blog.edit',['id'=>$blog->id]) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
                                <form action="{{ route('blog.delete') }}" method="post" >
                                    @csrf
                                    <input type="hidden" value="{{ $blog->id }}" name="id">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('do you want to delete this')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

