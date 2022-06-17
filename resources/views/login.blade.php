 @extends('layout.auth_layout')
 @section('content')
     <!-- Basic Vertical form layout section start -->
     <section id="basic-vertical-layouts">
         <div class="row">

             <div class="card col-6">
                 <div class="card-header">
                     <h4 class="card-title">Vertical Form with Icons</h4>
                 </div>
                 <div class="card-body">
                     @if ($errors)
                         @foreach ($errors->all() as $error)
                             <span>
                                 {{ $message }} <br>
                             </span>
                         @endforeach
                     @endif
                     <form class="form form-vertical" method="POST" action="{{ route('log-in') }}">
                         @csrf
                         <div class="row">
                             <div class="col-12">
                                 <div class="form-group">
                                     <label for="first-name-icon">Id Number</label>
                                     <div class="input-group input-group-merge">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text"><i data-feather="user"></i></span>
                                         </div>
                                         <input type="text" id="first-name-icon" class="form-control" name="id_number"
                                             placeholder="id number" />
                                     </div>
                                 </div>
                             </div>
                             {{-- <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-icon">Email</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="mail"></i></span>
                                        </div>
                                        <input type="email" id="email-id-icon" class="form-control" name="email-id-icon" placeholder="Email" />
                                    </div>
                                </div>
                            </div> --}}
                             <div class="col-12">
                                 <div class="form-group">
                                     <label for="password-icon">Password</label>
                                     <div class="input-group input-group-merge">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text"><i data-feather="lock"></i></span>
                                         </div>
                                         <input type="password" id="password-icon" class="form-control" name="password"
                                             placeholder="password" />

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
