@extends('master')

@section('content')

    <section class="my-5">
        <div class="container">
            <div class="row">

                <div class="col-md-10 offset-1">

                    <div class="card">
                        <div class="card-header">
                            Student Form
                            {{session('message')}}
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add.student') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3"> SEIP ID</label>
                                    <div class="col-md-9">
                                        <input type="text" name="seid" class="form-control" placeholder="Seip Id">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Phone</label>
                                    <div class="col-md-9">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Address</label>
                                    <div class="col-md-9">
                                        <textarea name="address" class="form-control" placeholder="Address" id="" cols="50" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Department</label>
                                    <div class="col-md-9">
                                        <input type="text" name="department" class="form-control" placeholder="Department">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Course Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="course_name" class="form-control" placeholder="Course Name">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control" placeholder="Course Name">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <div class="col-md-12">
                                        <input type="submit" class="form-control btn btn-outline-primary" value="Save Info" placeholder="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

@endsection
