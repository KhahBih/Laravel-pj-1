@extends('layouts.master');
@section('content')
<main role="main" class="container">
    <img src="{{asset('/storage/app/public/')}}" alt="">
    <form action="{{route('upload-file')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Upload</label>
            <input type="file" name="image"class="form-control">
        </div>
        <div class="form-group">
           <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</main>
@endsection
