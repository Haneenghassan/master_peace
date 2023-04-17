

@extends('layouts.admin')
<style>
    body{
        overflow-x: hidden
    }
</style>
@section('preschool')
<h1 class="text-wrap">Babysitters Table</h1>

<div class="container table-responsive py-5" > 
    {{-- <button type="button" class="btn btn-warning  me-md-2"><a href="{{route('admin.preschools.create')}}"> Preschools</a></button> --}}
    <table class="table table-bordered table-hover" style="background-image:url(/photos/swash_blue_full.jpg);">
        
            
      
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Photo</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col" >Description</th>
        <th scope="col">Status</th>
        <th scope="col">Edit Status</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php $i = 1; ?>
        @foreach ($Babysitters as $Babysitter)
        <th scope="row">{{$i++}}</th>
        <td><img width="100px" height="100px" src="{{URL::asset("storage/image/".$Babysitter->img)}}"></td>
        <td>{{$Babysitter->first_name}}</td>
        <td>{{$Babysitter->last_name}}</td>
        <td>{{$Babysitter->description}}</td>
        @if ($Babysitter->status=='pending')
        <td ><span class="badge rounded-pill bg-warning text-dark">{{$Babysitter->status}}</span> </td>
        @elseif($Babysitter->status=='accepted')
        <td ><span class="badge rounded-pill bg-success text-dark">{{$Babysitter->status}}</span> </td>  
        @else
        <td ><span class="badge rounded-pill bg-danger text-dark">{{$Babysitter->status}}</span> </td>     
        @endif
        <td><a class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit" href="{{Route('admin.babysitters.edit',$Babysitter->id)}}"><i class="fa fa-edit"></i></a></td>

        <td>
          <form action="{{Route('admin.babysitters.destroy',$Babysitter->id)}}" method="POST" >
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