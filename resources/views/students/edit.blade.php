@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Student
                    <strong style="font-size: 2em;"> @ {{ $student->name }}</strong>
                    <a class="btn btn-secondary btn-sm float-right nav-link" href="{{ route('viewStudents', $student->id) }}/">View</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('updateStudent', $student->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Full Name" name="full_name" value="{{ $student->name }}">
                        </div>
                        <div class="form-group">
                            <label for="roll">Student Roll No</label>
                            <input type="number" class="form-control" id="roll" placeholder="Roll Number" name="roll_num" value="{{ $student->roll }}">
                        </div>
                        <div class="form-group">
                            <label for="reg">Student Registration No</label>
                            <input type="number" class="form-control" id="reg" placeholder="Registration Number" name="reg_num" value="{{ $student->registration }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ $student->email }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Mobile No</label>
                            <input type="text" class="form-control" id="phone" placeholder="Mobile Number" name="mobile" value="{{ $student->phone }}">

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
