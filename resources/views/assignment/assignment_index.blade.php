@extends('dashboard.haeder')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Assignment Marking</h5>
                    <p class="card-text"></p>
                   <table class="table table-light">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Student Name</th>
                            <th>Course Name</th>
                            <th>Batch Name</th>
                            <th>Assignment Title </th>
                            <th>Full Marks</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($submissions as $key=>$answer )
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$answer->rel_to_student->name}}</td>
                            <td>{{$answer->rel_to_student->course_name->name}}</td>
                            <td>{{$answer->rel_to_student->batch_name->batch_name}}</td>
                            <td>{{$answer->rel_to_assignment->title}}</td>
                            <td>{{$answer->rel_to_assignment->full_marks}}</td>
                            <td><a href="{{route('assignment.marking',$answer->id)}}" class="btn btn-outline-primary btn-rounded">Examine</a></td>

                        </tr>

                        @empty
                        <tr>
                            <td class="m-auto">No Submissions Yet</td>
                        </tr>
                        @endforelse

                    </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
