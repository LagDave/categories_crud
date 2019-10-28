<p><a href="/subcategories/create/{{$category->id}}" class='btn btn-primary btn-sm'>+</a><strong> Subcategories</strong></p>
<ul>
@foreach($category->subCategories as $subCategory)
    <li class='mb-2' style='display:flex'>
        &#8594; <form method="POST" action="/subcategories/delete/{{$subCategory->id}}" class="mr-1 ml-2 form-inline">@csrf @method('DELETE')<button class='btn btn-sm btn-danger'>DEL</button></form>
        <a href="/subcategories/edit/{{$subCategory->id}}" class="mr-2 btn btn-sm btn-primary">ALT</a>
            
        {{$subCategory->name}}
        
    </li>
@endforeach
</ul>