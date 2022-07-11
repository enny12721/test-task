@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Поиск по характеристике ГОСТ</div>
                    <form method="GET" action="{{ route("category.index") }}">
                        <div class="container p-3">
                            <div class="row">
                                <div class="col-9">
                                    <input type="text" class="form-control" id="gost_id" name="gost_id" value="{{ request()->gost_id }}">
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary w-100">Применить</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-header">Категории</div>
                        <div class="card-body">
                            <div class="user-menu-sort-categories">
                                @isset($categories)
                                    @include('category.categories')
                                @endisset
                            </div>    
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <style> 
        div.user-menu-sort-category { padding-left: 15px; } 
    </style>
@endsection