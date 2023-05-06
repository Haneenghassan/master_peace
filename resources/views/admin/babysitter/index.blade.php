

@extends('layouts.admin')

@section('babsyitter')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
 
<section>
<div style="display: flex;">
<h1 class="text-wrap text-center"><span style="color: #F48257">B</span> <span style="color:#0D9BA0;margin-left:-3%">a</span> <span style="color:#004AAD;margin-left:-3%">b</span> <span style="color: #E8C7A3;margin-left:-4%">y</span> <span style="color: #00BFEB;margin-left:-4%">s</span><span style="color: #00BFEB;">i</span><span style="color:#0D9BA0;">t</span><span style="color: #00BFEB;">t</span><span style="color:#0D9BA0;margin-left:-3%">e</span><span style="color: #F48257">r</span>
</div>



<div class="container">
   <div class="row">
      @foreach($Babysitters as $Babysitter)
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                  <div class="dropdown float-end">
                    <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$Babysitter->id}}" href="{{Route('admin.babysitters.edit',$Babysitter->id)}}">Edit</a>
                      <form action="{{route('admin.babysitters.destroy',$Babysitter->id)}}" method="POST" >
                        @method('DELETE')
                        @csrf
                    <button type="submit" class="dropdown-item" >Remove</button>
                </form>
                    </div>
                       {{-- modal --}}
             <div class="modal fade" id="exampleModal{{$Babysitter->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ route('admin.babysitters.update',$Babysitter->id) }}" method="post"  files=true>
                      @method('PUT')
                      @csrf
                      <div class="mb-3">
                          <label class="form-label">Status :</label>
                          <select name="select" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Select One</option>
                            <option value="pending">pending</option>
                            <option value="accepted">accepted</option>
                            <option value="rejected">rejected</option>
                          </select>
                         
                          
                         
                      </div>
                      <button type="submit" class="btn btn-primary">Confirm</button>
                  </form>
                      
                </div>
      
      </div>
      </div>
      </div>
      {{-- end model --}}
                </div>

                    <div class="d-flex align-items-center">
                        <div><img src="{{URL::asset("storage/image/".$Babysitter->img)}}" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark"> {{$Babysitter->first_name}} {{$Babysitter->last_name}}</a></h5>
                            @if ($Babysitter->status=='pending')
                            <span class="badge rounded-pill bg-warning text-dark">{{$Babysitter->status}}</span> 
                            @elseif($Babysitter->status=='accepted')
                            <span class="badge rounded-pill bg-success text-dark">{{$Babysitter->status}}</span>
                            @else
                            <span class="badge rounded-pill bg-danger text-dark">{{$Babysitter->status}}</span>              
                              @endif
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        {{-- <p class=" font-size-30 mb-0">Subject:<span class="text-muted font-size-15  pe-2 text-primary"> {{$contact->subject}}</span>  </p> --}}
                        <p class="font-size-30 mb-0 mt-2"> Description:<span class="text-muted font-size-15  pe-2 text-primary">{{$Babysitter->description}}</span></p>
                        <p class="text-muted  mb-0 mt-2 "><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> {{$Babysitter->user->email}}</p>
                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i>{{$Babysitter->mobile}}</p>
                    </div>
                 
                </div>
            </div> 
      </div>
          
      @endforeach
      </div>
    </div>
   
</section>

@endsection