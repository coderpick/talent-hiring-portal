@extends('layouts.app')

@section('content')
    <div class="bg-slate-200">
        <div class="container">
            <div class="py-4 px-5 rounded mt-3 text-center">
                <h1>Profile</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Your Application is
                            @if ($user->status == 'Pending')
                                <spna class="bg-rose-200 text-rose-900 py-1 px-4 rounded">{{ $user->status }}</spna>
                            @elseif($user->status == 'Approved')
                                <spna class="bg-green-200 text-green-900 py-1 px-4 rounded">{{ $user->status }}</spna>
                            @else
                                <spna class="bg-red-200 text-red-900 py-1 px-4 rounded">{{ $user->status }}</spna>
                            @endif
                        </h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name </label>
                                <input type="text" class="form-control" id="name" readonly
                                   value="{{  $user->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" readonly
                                   value="{{  $user->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="cv_link" class="form-label">CV Link</label>
                                <input type="url" class="form-control" id="cv_link" value="{{  $user->cv_link }}" readonly>
                            </div>

                            {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="card-title">Quiz Score</h4>
                    </div>
                    <div class="card-body">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
