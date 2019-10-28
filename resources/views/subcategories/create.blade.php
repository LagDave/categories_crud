@extends('layouts.app')
    @section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4 mt-5 mb-5">
            <h5 class='text-center'>Add a Sub-Category to <strong>{{$category->name}}</strong></h5>
            <hr>
            <div class="card card-body shadow" style='border:none'>
                <form action="/subcategories/store/{{$category->id}}" method='POST' class="form">
                    @csrf
                    <div class="form-group">
                        <label for="">Sub-Category Name</label>
                        <input required type="text" name='name' class="form-control">
                    </div>
                    <button class="btn btn-primary w-100">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection