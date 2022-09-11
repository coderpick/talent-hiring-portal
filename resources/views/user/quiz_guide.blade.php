@extends('layouts.app')

@section('content')
    <div class="bg-slate-200">
        <div class="container">
            <div class="py-4 px-5 rounded mt-3 text-center">
                <h1>Quiz Guide</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="bg-red-100 text-red-800 py-2 px-3 rounded mb-4">Before start this Quiz please read this guide</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li class="fs-5">Do not copy qustion to seach internet</li>
                                <li class="fs-5">Avoid keyboard</li>
                                <li class="fs-5">Quiz time show in right corner</li>
                                <li class="fs-5">Quiz auto submit if time finished</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                                <h4 class="text-blue-600">Total Question : 12</h4>
                                <h4 class="text-blue-600">Exam Time : 10 Minute</h4>
                                <a href="{{ route('quiz.create') }}" class="d-block bg-green-500 py-1 px-3 rounded text-white text-decoration-none font-weight-bolder fs-3 text-center">Start Quiz</a>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
