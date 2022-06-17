@extends('layout.student_layout')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">



                <!--PROFILE BEGINS-->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-developer-meetup">
                            <div class="meetup-img-wrapper rounded-top text-center">
                                <img src="{{ asset('app-assets/images/illustration/email.svg') }}" alt="Meeting Pic"
                                    height="170" />
                            </div>
                            <div class="card-body">
                                <div class="meetup-header d-flex align-items-center">
                                    <div class="meetup-day">
                                        <h6 class="mb-0">THU</h6>
                                        <h3 class="mb-0">24</h3>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="card-title mb-25">{{ Auth::user()->name }} {{ Auth::user()->surname }}
                                        </h4>
                                        <p class="card-text mb-0">{{ Auth::user()->role }}</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">{{ today()->toDateTimeString() }}</h6>
                                        <small>10:AM to 6:PM</small>
                                    </div>
                                </div>
                                <div class="media mt-2">
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">Central Park</h6>
                                        <small>Manhattan, New york City</small>
                                    </div>
                                </div>
                                <div class="avatar-group">
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                                        data-original-title="Billy Hopkins" class="avatar pull-up">
                                        <img src="{{ asset('app-assets/images/portrait/small/avatar-s-9.jpg') }}"
                                            alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                                        data-original-title="Amy Carson" class="avatar pull-up">
                                        <img src="{{ asset('app-assets/images/portrait/small/avatar-s-6.jpg') }}"
                                            alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                                        data-original-title="Brandon Miles" class="avatar pull-up">
                                        <img src="{{ asset('app-assets/images/portrait/small/avatar-s-8.jpg') }}"
                                            alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                                        data-original-title="Daisy Weber" class="avatar pull-up">
                                        <img src="{{ asset('app-assets/images/portrait/small/avatar-s-20.jpg') }}"
                                            alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                                        data-original-title="Jenny Looper" class="avatar pull-up">
                                        <img src="{{ asset('app-assets/images/portrait/small/avatar-s-20.jpg') }}"
                                            alt="Avatar" width="33" height="33" />
                                    </div>
                                    <h6 class="align-self-center cursor-pointer ml-50 mb-0">+42</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--PROFILE ENDS-->

                    <!-- Goal Overview Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Goal Overview</h4>
                                <i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
                            </div>
                            <div class="card-body p-0">
                                <div id="goal-overview-radial-bar-chart" class="my-2"></div>
                                <div class="row border-top text-center mx-0">
                                    <div class="col-6 border-right py-1">
                                        <p class="card-text text-muted mb-0">Completed</p>
                                        <h3 class="font-weight-bolder mb-0">786,617</h3>
                                    </div>
                                    <div class="col-6 py-1">
                                        <p class="card-text text-muted mb-0">In Progress</p>
                                        <h3 class="font-weight-bolder mb-0">13,561</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Goal Overview Card -->


            </div>
        </div>
    </div>
@endsection
