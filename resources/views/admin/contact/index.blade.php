@extends('layouts.admin')
@section('contact')
<style>
    body{
        overflow-x: hidden
    }
    .card {
    margin-bottom: 24px;
    box-shadow: 0 2px 3px #e4e8f0;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #eff0f2;
    border-radius: 1rem;
}
.avatar-md {
    height: 4rem;
    width: 4rem;
}
.rounded-circle {
    border-radius: 50%!important;
}
.img-thumbnail {
    padding: 0.25rem;
    background-color: #f1f3f7;
    border: 1px solid #eff0f2;
    border-radius: 0.75rem;
}
.avatar-title {
    align-items: center;
    background-color: #3b76e1;
    color: #fff;
    display: flex;
    font-weight: 500;
    height: 100%;
    justify-content: center;
    width: 100%;
}
.bg-soft-primary {
    background-color: rgba(59,118,225,.25)!important;
}
a {
    text-decoration: none!important;
}
.badge-soft-danger {
    color: #f56e6e !important;
    background-color: rgba(245,110,110,.1);
}
.badge-soft-success {
    color: #63ad6f !important;
    background-color: rgba(99,173,111,.1);
}

.badge {
    display: inline-block;
    padding: 0.25em 0.6em;
    font-size: 75%;
    font-weight: 500;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.75rem;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
 

<div style="display: flex;">
<h1 class="text-wrap text-center"><span style="color: #F48257">M</span> <span style="color:#0D9BA0;margin-left:-3%">e</span> <span style="color:#004AAD;margin-left:-3%">s</span> <span style="color: #E8C7A3;margin-left:-4%">s</span> <span style="color: #00BFEB;margin-left:-4%">a</span><span style="color: #00BFEB;">g</span><span style="color:#0D9BA0;">e</span><span style="color: #00BFEB;">s</span>
</div>



<div class="container">
   


    <div class="row">
        @foreach ($contacts as $contact)
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-muted dropdown-toggle font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <form action="{{route('admin.contacts.destroy',$contact->id)}}" method="POST" >
                                @method('DELETE')
                                @csrf
                            <button type="submit" class="dropdown-item" >Remove</button>
                        </form>
                        </div>
                           
                    </div>
                    <div class="d-flex align-items-center">
                        <div><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                        <div class="flex-1 ms-3">
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark"> {{$contact->name}}</a></h5>
                            @if(isset($contact->user->babysitter))
                            <span class="badge badge-soft-success mb-0">Babysitter: {{$contact->user->babysitter->first_name }}</span>
                            @elseif(isset($contact->user->preschool))
                            <span class="badge badge-soft-success mb-0">Preschool: {{$contact->user->preschool->first_name }}</span>
                            @elseif(isset($contact->user))
                            <span class="badge badge-soft-success mb-0">User: {{$contact->user->name }}</span>
                @endif
                        </div>
                    </div>
                    <div class="mt-3 pt-1">
                        <p class=" font-size-30 mb-0">Subject:<span class="text-muted font-size-15  pe-2 text-primary"> {{$contact->subject}}</span>  </p>
                        <p class="font-size-30 mb-0 mt-2"> Message:<span class="text-muted font-size-15  pe-2 text-primary">  {{$contact->massege}}</span></p>
                        <p class="text-muted  mb-0 mt-2 "><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> {{$contact->email}}</p>
                    </div>
                    {{-- <div class="d-flex gap-2 pt-4  justify-content-center">
                        <button type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-primary btn-sm w-50 text-center"><i class="bx bx-user me-1"></i> Profile</button>
                    </div> --}}
                </div>
            </div>
        </div>
        
        
        
        @endforeach
    </div>
   
</div>

@endsection