@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Quiz
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-10">

                                </div>
                                <div class="col-md-2">
                                    <div id="countdowntimer">
                                        <span id="ms_timer" class="style colorDefinition size_lg">18:21</span>
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-danger btn-lg">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
