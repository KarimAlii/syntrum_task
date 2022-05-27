@extends('layouts.admin')
@section('content')
    <div class="container">
        <form method="post" action="{{route('categories.store')}}" >
        @csrf
            <div class="mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name">
                        @error('category_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <button type="submit" class="btn btn-primary mt-5">Submit</button>

        </form>
    </div>
@endsection
