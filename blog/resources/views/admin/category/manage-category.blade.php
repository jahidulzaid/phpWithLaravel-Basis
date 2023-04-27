@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase text-center">Info Table</h6>
                    <hr/>
                         <table class="table table-striped table-bordered table-hover text-center">
                             <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                             </thead>
                                @php $i =1; @endphp
                                @foreach($categories as $category)
                                <tbody>
                                <tr>
                                    <th>{{ $i++ }}</th>
                                    <td>{{ $category->category_name }}</td>
                                    <td>
                                        <img src="{{ asset($category->image) }}" class="img-fluid" style="height: 100px; width: 100px" alt="">
                                    </td>
                                    <td>{{ $category->status==1 ? 'Published':'Unpublished' }}</td>
                                    <td class="btn-group">
                                        <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                        @if($category->status==1)
                                            <a href="{{route('category.status',['id'=>$category->id])}}" class="btn btn-success btn-sm mx-1">Unpublished</a>
                                        @else
                                            <a href="{{route('category.status',['id'=>$category->id])}}" class="btn btn-success btn-sm mx-1">Published</a>
                                        @endif

                                    <form action="{{route('category.delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{ $category->id }}" name="id">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this ?')">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                </div>
            </div>
        </div>
    </div>
@endsection

