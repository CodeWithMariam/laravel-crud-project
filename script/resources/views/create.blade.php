@extends('layout')

@section('title', 'Add New Student')

@section('content')
<section class="p-3" style="min-height:calc(100vh - 112px)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title m-0 float-left">Add New Student</h3>
                        <a href="/students" class="btn btn-info float-right">All Students</a>
                    </div>
                    <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form action="/students" class="form-horizontal" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-right">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-right">Class</label>
                                <div class="col-sm-6">
                                    <select name="class" class="form-control">
                                        <option value="" selected disabled selected >Select Class</option>
                                        @foreach($classes as $class_list)
                                            <option value="{{$class_list->id}}">{{$class_list->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-right">Age</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" name="age">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-right">Gender</label>
                                <div class="col-sm-3">
                                    <input type="radio" name="gender" value="m"> Male
                                    <input type="radio" name="gender" value="f"> Female
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 text-center">
                                    <input type="submit" class="btn btn-info" value="Submit">
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