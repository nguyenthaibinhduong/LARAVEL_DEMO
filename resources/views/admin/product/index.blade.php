@extends('layouts.admin-layout')
@section('content')
<a class="btn btn-dark" href="{{ route('product.create') }}">Thêm sản phẩm</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($dssp as $product)
      <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $product->name }}</td>
      <td><a href="{{ route('product.delete',['id'=>$product->id]) }}" class="btn btn-danger">Delete</a></td>
      </tr>  
    @endforeach
    
  </tbody>
</table>
@endsection