@extends('index')

@section('content')
    @foreach ($categories as $category)
        <ol class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">{{ $category->name }}</div>
                    {{ implode(',', $category->getParentChain()) }}
                </div>
                <a class="badge bg-primary rounded-pill" href="{{ url('categories/add?category_id='.$category->id) }}" >Add</a>
            </li>
        </ol>
    @endforeach
@endsection
