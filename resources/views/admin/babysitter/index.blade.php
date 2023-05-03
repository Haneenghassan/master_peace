

@extends('layouts.admin')
<style>
    body{
        overflow-x: hidden
    }
</style>
@section('preschool')
{{-- <h1 class="text-wrap">Babysitters Table</h1>

<div class="container table-responsive py-5" > 
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
</div> --}}



<section id="explorecourses">
  <div class="title">
      <h2><span style="color: #F48257;">My </span>Reservation</h2>
  </div>
          <div class="container">
              <div class="card">
                  <h5 class="card-header">Babysitters Table</h5>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Photo</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col" >Description</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th> 
                        </tr>
                      </thead>
                      
                      <tbody class="table-border-bottom-0">

                        <?php $i = 1; ?>
                        @foreach ($Babysitters as $Babysitter)
                        <tr>

                            <th scope="row">{{$i++}}</th>
                            <td><img width="30" height="30" class="rounded-circle" src="{{URL::asset("storage/image/".$Babysitter->img)}}"></td>
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
                            <td><a class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit" href="{{Route('admin.babysitters.edit',$Babysitter->id)}}"><i class="fa fa-edit"></i></a>
            
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
                </div>
          </div>
      </section>

@endsection