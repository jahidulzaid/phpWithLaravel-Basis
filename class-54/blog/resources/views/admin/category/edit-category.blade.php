@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Edit Category</h6>
                        <hr/>
                        <form class="row g-3" method="post" action="{{route('update-category')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$category->id}}">
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="category_name" value="{{$category->category_name}}">
                            </div>
                            <div class="col-12 my-5">
                                <input type="file" name="image" class="form-control">
                                <label class="form-label">Image</label>
                                <img src="{{asset($category->image)}}" alt="" height="50px" width="50px">
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="javascript:;">Forgot Password?</a>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
