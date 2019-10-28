<div class="row justify-content-center">
    <div class="col-lg-6 mt-5 mb-5">
        <h3 class='text-center'><strong>Categories and Subcategories</strong></h3>
        <hr class='mx-5'>
        <a href='/categories/create' class="btn btn-primary w-100 mb-3">Create a Category</a>
        @foreach($categories as $category)
            <div class="card card-body shadow mb-3" style='border:none'>
                {{$category->name}}
                <small class="text-muted mb-2">{{$category->created_at}}</small>
                <div class="btn-group">
                    <form method="POST" action="/categories/delete/{{$category->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="/categories/edit/{{$category->id}}" class="btn btn-primary btn-sm">Update</a>
                </div>
                <hr>
                @include('subcategories.list')
            </div>
        @endforeach
    </div>
</div>
