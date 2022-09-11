@extends('layouts.app')

@section('content')
    <div class="bg-slate-200">
        <div class="container">
            <div class="py-4 px-5 rounded mt-3 text-center">
                <h1>Welcome to Talent Hiring Portal</h1>              
               <div class="py-3">
                 <a class="btn btn-lg btn-primary pr-3" href="{{  route('user.profile') }}" role="button">View Profile</a>
                 <a class="btn btn-lg btn-warning" href="{{ route('quiz.guide') }}" role="button">Take the quiz</a>
               </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">

    </div>
@endsection
