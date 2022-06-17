@extends('layout.teacher_layout')
    @section('content')
 <!-- BEGIN: Content-->
 <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
<div class="col-lg-8 col-12">
    <div class="card card-company-table">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Class</th>
                            <th>Question</th>
                            <th>Option A</th>
                            <th>Option B</th>
                            <th>Option C</th>
                            <th>Option D</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $question)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded">
                                        <div class="avatar-content">
                                            <img src="../../../app-assets/images/icons/toolbox.svg" alt="Toolbar svg" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-weight-bolder">{{$question->class}}</div>
                                        <div class="font-small-2 text-muted">meguc@ruj.io</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar bg-light-primary mr-1">
                                        <div class="avatar-content">
                                            <i data-feather="monitor" class="font-medium-3"></i>
                                        </div>
                                    </div>
                                    <span>{{$question->question}}</span>
                                </div>
                            </td>
                            <td class="text-nowrap">
                                <div class="d-flex flex-column">
                                    <span class="font-weight-bolder mb-25">{{$question->option_a}}</span>
                                    <span class="font-small-2 text-muted">in 24 hours</span>
                                </div>
                            </td>
                            <td>{{$question->option_b}}</td>
                            <td>{{$question->option_c}}</td>
                            <td>{{$question->option_d}}</td>
                            <td>{{$question->answer}}</td>
                            <td><a class="btn btn-danger" href="{{url('/teacher/delete-question',[$question->unique_id])}}">Delete</a></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<form method="POST" action="/teacher/questions-per-subject">
    @csrf
<div class="col-xl-4 col-md-6 col-12 mb-1">
    <div class="form-group">
        <label for="disabledInput">Class</label>
        <select class="form-control" name="subject_id" id="basicSelect">
            @foreach ($subjects as $subject)
                <option value="{{$subject->subject_id}}">{{$subject->name}}</option>
            @endforeach
            
        </select>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</div>

</form>



        </div>
    </div>
</div>
@endsection