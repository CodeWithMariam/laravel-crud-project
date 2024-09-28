@extends('layout')

@section('title', 'Students List')

@section('content')
<section class="p-3" style="min-height:calc(100vh - 112px)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title m-0 float-left">Students List</h3>
                        <a href="students/create" class="btn btn-info float-right">Add New</a>
                    </div>
                    <div class="card-body">
                    @if(Session::has('status'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('status') }}</p>
                    @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->student_name}}</td>
                                    <td>{{$row->class_name}}</td>
                                    <td>{{$row->student_age}}</td>
                                    <td>
                                        @if($row->student_gender == 'm')
                                            {{ 'Male' }}
                                        @else
                                            {{ 'Female' }}
                                        @endif
                                    </td>
                                    <td><a href="{{url('students/'.$row->id.'/edit')}}" class="btn btn-primary">Edit</a></td>
                                    <td>
                                    <form action="/students/{{$row->id}}" method="POST">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" value="Delete">
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $students->links('pagination::bootstrap-4'); }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection