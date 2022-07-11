@foreach($categories as $_category)

    <div class="user-menu-sort-category" data-id={{ $_category->id ?? ''}}>
        <p class="user-menu-sort-category__border"> {{ $_category->title ?? 'Наиманование отсутствует'}} </p>
        <div class="user-menu-sort-categories">
            @isset($_category->children)
                @include('category.categories', ['categories' => $_category->children]) 
            @endisset
        </div>
    </div>

@endforeach