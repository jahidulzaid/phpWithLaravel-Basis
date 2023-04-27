@extends('master')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Student List</h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <tr>
                                    <th>Serial</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Seip</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Department</th>
                                    <th>Course Name</th>
                                    <th>Action</th>
                                </tr>
                                @php
                                $i=1;
                                @endphp

                                @foreach($students as $student)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>
                                        <img src="{{ asset($student->image) }}" class="img-fluid" alt="">
                                    </td>

                                    <td>{{$student->seid}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->address}}</td>
                                    <td>{{$student->department}}</td>
                                    <td>{{$student->course_name}}</td>
                                    <td class="btn-group">
                                        <a href="{{ route('edit.student',['id'=>$student->id]) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
{{--                                        this delete method is not secure--}}
{{--                                        <a href="{{ route('delete.student',['id'=>$student->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to  delete this?')">Delete</a>--}}

{{--                                        so will delete using form--}}
                                        <form action="{{ route('delete.student') }}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{ $student->id }}" name="id">
                                            <button type="submit" class="btn btn-primary btn-sm mx-1" onclick="return confirm('Are you sure to  delete this?')">
                                                Delete
                                            </button>
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

    </section>
@endsection
