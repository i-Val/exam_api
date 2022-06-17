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




<!-- Basic Inputs start -->
<section id="basic-input">
    <form action="/teacher/set-questions" method="get">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Inputs</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                       
                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                            <div class="form-group">
                                <label for="helpInputTop">Question</label>
                                <small class="text-muted">eg.<i>someone@example.com</i></small>
                                <input type="text" name="question" class="form-control" id="helpInputTop" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                            <div class="form-group">
                                <label for="disabledInput">Class</label>
                                <select class="form-control" name="class" id="basicSelect">
                                    <option value="jss1">jss1</option>
                                    <option value="jss2">jss2</option>
                                    <option value="jss3">jss3</option>
                                    <option value="ss1">ss1</option>
                                    <option value="ss2">ss2</option>
                                    <option value="ss3">ss3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="helperText">Option a</label>
                                <input type="text" name="a" id="helperText" class="form-control" placeholder="option a..." />
                                <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="helperText">Option b</label>
                                <input type="text" name="b" id="helperText" class="form-control" placeholder="option b..." />
                                <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="helperText">Option c</label>
                                <input type="text" name="c" id="helperText" class="form-control" placeholder="option c..." />
                                <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="helperText">Option d</label>
                                <input type="text" name="d" id="helperText" class="form-control" placeholder="option d..." />
                                <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="helperText">Answer</label>
                                <input type="text" name="answer" id="helperText" class="form-control" placeholder="answer..." />
                                <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="helperText">unique_id</label>
                                <input type="text" name="unique_id" id="helperText" class="form-control" placeholder="subject id..." />
                                <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="helperText">teacher_id</label>
                                <input type="text" name="teacher_id" id="helperText" class="form-control" value="{{Auth::user()->id_number}}" placeholder="teacher_id..." />
                                <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="helperText">subject_id</label>
                                <select class="form-control" name="subject_id" id="basicSelect">
                                    @foreach ($subjects as $subject)
                                        <option value="{{$subject->subject_id}}">{{$subject->name}}</option>
                                    @endforeach
                                    
                                </select>
                                <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-success" value="submit" name="submit">Submit</button>
</form>
</section>
<!-- Basic Inputs end -->



</div>
</div>
</div>
@endsection