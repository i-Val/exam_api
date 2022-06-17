@extends('layout.admin_layout')
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
                            <th>Subject</th>
                            <th>Teacher id</th>
                            <th>Action</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded">
                                        <div class="avatar-content">
                                            <img src="../../../app-assets/images/icons/toolbox.svg" alt="Toolbar svg" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-weight-bolder">{{$subject->name}}</div>
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
                                    <span>{{$subject->teacher_id}}</span>
                                </div>
                            </td>
                            <td class="text-nowrap">
                                <div class="d-flex flex-column">
                                    <span class="font-weight-bolder mb-25">{{$subject->class}}</span>
                                
                                </div>
                            </td>
                            <td>$891.2</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="font-weight-bolder mr-1"><a class="btn btn-success" href="/admin/subject/teacher/{{$subject->teacher_id}}">view teacher</a></span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="font-weight-bolder mr-1"><a class="btn btn-danger" href="/admin/subject/delete/{{$subject->subject_id}}">delete</a></span>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<form>
    @csrf
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
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</div>

</form>

<!-- Basic Vertical form layout section start -->
 <section id="basic-vertical-layouts">
    <div class="row">
       
            <div class="card col-6">
                <div class="card-header">
                    <h4 class="card-title">Add Subject</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{route('admin/add-subject')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-icon">Subject</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="user"></i></span>
                                        </div>
                                        <input type="text" id="first-name-icon" class="form-control" name="name" placeholder="subject name..." />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-icon">Subject Id</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="user"></i></span>
                                        </div>
                                        <input type="text" id="first-name-icon" class="form-control" name="subject_id" placeholder="subject id..." />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password-icon">teacher</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="lock"></i></span>
                                        </div>
                                        <select class="form-control" name="teacher_id" id="basicSelect">
                                            @foreach ($teachers as $teacher)
                                            <option value="{{$teacher->id_number}}">{{$teacher->name}}</option>
                                            @endforeach     
                                    </select>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic Vertical form layout section end -->



        </div>
    </div>
</div>
@endsection