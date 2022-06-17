@extends('layout.auth_layout')
@section('content')
    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Vertical Form with Icons</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" method="POST" action="{{ route('enroll') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-icon">First Name</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="user"></i></span>
                                            </div>
                                            <input type="text" id="first-name-icon" class="form-control" name="name"
                                                placeholder="First Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-icon">Last Name</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="user"></i></span>
                                            </div>
                                            <input type="text" id="first-name-icon" class="form-control" name="surname"
                                                placeholder="First Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-icon">Email</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                            </div>
                                            <input type="email" id="email-id-icon" class="form-control" name="email"
                                                placeholder="Email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-icon">Role</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                            </div>
                                            <select class="form-control" name="role" id="basicSelect">
                                                <option value="teacher">Teacher</option>
                                                <option value="student">Student</option>
                                            </select>
                                            {{-- <input type="text" id="email-id-icon" class="form-control" name="role" placeholder="role" /> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-icon">Id Number</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                            </div>
                                            <input type="text" id="email-id-icon" class="form-control" name="id_number"
                                                placeholder="Id number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-icon">Class</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                            </div>
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
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-icon">Password</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="lock"></i></span>
                                            </div>
                                            <input type="password" id="password-icon" class="form-control" name="password"
                                                placeholder="Password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-icon">Confirm Password</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="lock"></i></span>
                                            </div>
                                            <input type="password" id="password-icon" class="form-control"
                                                name="password_confirmation" placeholder="Password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4" />
                                            <label class="custom-control-label" for="customCheck4">Remember me</label>
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
@endsection
