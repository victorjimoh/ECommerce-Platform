@extends('layouts.app')
@section('admin-content')
<div class="az-content-breadcrumb">
    <span>Dashboard</span>
    <span>Category</span>
    <span>Edit</span>
</div>
<h2 class="az-content-title">Edit Category</h2>
<div class="row ">
    <div class="col-12 col-sm-12 col-md-5">
        <form>
            <div class="form-group">
                <label>Category Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Slug</label>
                <input type="text" class="form-control" name = "slug" onkeyup="{{test()}}">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection