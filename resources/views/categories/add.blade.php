@extends('index')

@section('content')
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="{{ url('categories/add') }}">
            @csrf
            <input type="hidden" name="category_id" value="{{ $category_id }}" />
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Category name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" rows="3"></textarea>
            </div>
            <div class="form-control">
                <button type="submit" class="btn btn-primary">Add Category</button>
            </div>

        </form>
    </div>
</div>
@endsection


