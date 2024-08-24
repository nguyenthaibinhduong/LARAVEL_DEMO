@extends('layouts.admin-layout')
@section('content')
<p>Them san pham</h1>
<div class=" ps-4 row">
    <div class="col-6">
        <form action="{{ route('product.store') }}" method="post">
        @csrf
        <label for="">Ten san pham:</label>
        <input class="form-control" type="text" name="name">
        <select name="category_id" class="form-control" >
            @foreach ($dsdm as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            
        </select>
        <br>
        <input class="form-control" type="submit">
        </form>
    </div>
</div>

@endsection