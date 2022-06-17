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
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Class</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $pupil)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded">
                                        <div class="avatar-content">
                                            <img src="../../../app-assets/images/icons/toolbox.svg" alt="Toolbar svg" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-weight-bolder">{{$pupil->name}}</div>
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
                                    <span>{{$pupil->surname}}</span>
                                </div>
                            </td>
                            <td class="text-nowrap">
                                <div class="d-flex flex-column">
                                    <span class="font-weight-bolder mb-25">{{$pupil->class}}</span>
                                
                                </div>
                            </td>
                            <td>$891.2</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="font-weight-bolder mr-1"><a class="btn btn-success" href="details">details</a></span>
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


        </div>
    </div>
</div>
@endsection