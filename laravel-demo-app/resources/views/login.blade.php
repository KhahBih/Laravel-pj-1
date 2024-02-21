@extends('layouts.master');

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4">Login</h1>
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{route('login.submit')}}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="" class="form-label">Username</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


