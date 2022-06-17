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
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Class</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded">
                                        <div class="avatar-content">
                                            <img src="../../../app-assets/images/icons/toolbox.svg" alt="Toolbar svg" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-weight-bolder">{{$teacher->name}}</div>
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
                                    <span>{{$teacher->surname}}</span>
                                </div>
                            </td>
                            <td class="text-nowrap">
                                <div class="d-flex flex-column">
                                    <span class="font-weight-bolder mb-25">{{$teacher->class}}</span>
                                
                                </div>
                            </td>
                            <td>$891.2</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="font-weight-bolder mr-1"><a class="btn btn-success" href="/details">details</a></span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="font-weight-bolder mr-1"><a class="btn btn-danger" href="/admin/student/delete/{{$teacher->id_number}}">delete</a></span>
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

<form method="POST" action="/admin/teachers-per-class">
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


        </div>
    </div>
</div>
@endsection