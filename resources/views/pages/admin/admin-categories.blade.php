@extends('layouts.app')
@section('admin-content')
<div class="az-content-breadcrumb">
    <span>Components</span>
    <span>Tables</span>
    <span>Basic Tables</span>
</div>
<h2 class="az-content-title">Categories Table</h2>
<div class="table-responsive">
    @if($category->count())
    <table class="table mg-b-0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Created at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->slug}}</td>
                <td>{{$item->created_at}}</td>
                <td><a href = "{{route('edit-category', ['category_slug' => $item->slug])}}"><button class = "btn-light btn" type = "button">Edit</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h3>No Categories abeg no stress me......</h3>
    @endif
</div>
@endsection