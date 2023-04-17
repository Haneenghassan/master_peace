

@extends('layouts.admin')
<style>
    body{
        overflow-x: hidden
    }
</style>
@section('preschool')
<h1 class="text-wrap">Preschools Table</h1>

<div class="container table-responsive py-5" > 
    {{-- <button type="button" class="btn btn-warning  me-md-2"><a href="{{route('admin.preschools.create')}}"> Preschools</a></button> --}}
    <table class="table table-bordered table-hover" style="background-image:url(/photos/swash_blue_full.jpg);">
        
            
      
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Manger Name</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Approve</th>
        <th scope="col">Cancel</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php $i = 1; ?>
        @foreach ($preschools as $preschool)
        <th scope="row">{{$i++}}</th>
        <td>{{$preschool->name}}</td>
        <td>{{$preschool->manegerName}}</td>
        <td>{{$preschool->description}}</td>
        @if ($preschool->status=='pending')
        <td ><span class="badge rounded-pill bg-warning text-dark">{{$preschool->status}}</span> </td>
        @elseif($preschool->status=='accepted')
        <td ><span class="badge rounded-pill bg-success text-dark">{{$preschool->status}}</span> </td>  
        @else
        <td ><span class="badge rounded-pill bg-danger text-dark">{{$preschool->status}}</span> </td>     
        @endif
        <td><a class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit" href="{{Route('admin.preschools.edit',$preschool->id)}}"><i class="fa fa-edit"></i></a></td>

        <td>
          <form action="{{Route('admin.preschools.destroy',$preschool->id)}}" method="POST" >
          @method('DELETE')
          @csrf
          <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
        </td>
        
      </tr>
    </tbody>
</table>
@endforeach
</div>
@endsection