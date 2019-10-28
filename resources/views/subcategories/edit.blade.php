@extends('layouts.app')
    @section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4 mt-5 mb-5">
            <h3 class='text-center'><strong>Edit Sub-Category</strong></h3>
            <hr>
            <div class="card card-body shadow" style='border:none'>
                <form action="/subcategories/update/{{$subcategory->id}}" method='POST' class="form">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="">Sub-Category Name</label>
                        <input required type="text" value='{{$subcategory->name}}' name='name' class="form-control">
                    </div>
                    <button class="btn btn-primary w-100">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection