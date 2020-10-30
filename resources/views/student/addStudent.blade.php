@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top:20px">
        <div class="row">
            <h1 class="col">Masukkan Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('student.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Nim:</label>
                        <input class="form-control" name="nim" required></input>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Email:</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>  
    </div>
@endsection