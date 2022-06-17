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

                <!-- Basic Radio Button start -->
                <section class="basic-radio">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Radio Buttons</h4>
                                </div>
                                <div class="card-body">
                                    <form action="/choice/submit" method="POST">
                                        @csrf
                                        @foreach ($questions as $question)
                                            
                                        
                                        <p>{{$question->question}}</p>
                                        <br>
                                        <div class="demo-inline-spacing">

                                            
                                            <div class="form-check form-check-inline">
                                                <input type="text" name="question" value="{{$question->question}}" hidden>
                                                <input type="text" name="student_id" value={{Auth::user()->id_number}} hidden>
                                                <input type="text" name="subject_id" value="{{$question->subject_id}}" hidden>
                                                <input class="form-check-input" type="radio" name="choice"
                                                    id="inlineRadio2" value="{{$question->option_a}}" />
                                                <label class="form-check-label" for="inlineRadio2">{{$question->option_a}}</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="choice"
                                                    id="inlineRadio2" value="{{$question->option_b}}" />
                                                <label class="form-check-label" for="inlineRadio2">{{$question->option_b}}</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="choice"
                                                    id="inlineRadio2" value="{{$question->option_c}}" />
                                                <label class="form-check-label" for="inlineRadio2">{{$question->option_c}}</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="choice"
                                                    id="inlineRadio2" value="{{$question->option_d}}" />
                                                <label class="form-check-label" for="inlineRadio2">{{$question->option_d}}</label>
                                            </div>
                                            <button class="btn btn-success" type="submit">save</button>
                                            

                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        @endforeach
                                        {{$questions->links()}}
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Radio Button end -->




            </div>
        </div>
    </div>
    
@endsection
