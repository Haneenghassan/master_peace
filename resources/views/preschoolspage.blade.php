@extends('layout.master')
@section('title','preschool')
@section('preschool')


    {{-- <div class="text-center " style="margin-top: -5%;">  
        <img src="/photos/s__1_-removebg-preview.png" class="rounded pt-n5" alt="imghappyvally">
    </div> --}}
    <div class="p-5 text-center " style="background-image: url(/photos/preee.jpg);background-size: 100% 131%;">
      <div  style="display: flex;justify-content: center;">
      <h1 style="font-size: 5rem" class="text-wrap text-center"><span style="color: #F48257">P</span> <span style="color:#0D9BA0;margin-left:-5%">r</span> <span style="color:#004AAD;margin-left:-5%">e</span> <span style="color: #E8C7A3;margin-left:-4%">s</span> <span style="color: #00BFEB;margin-left:-4%">c</span><span style="color: #00BFEB;">h</span><span style="color:#0D9BA0;">o</span><span style="color: #00BFEB;">o</span><span style="color:#0D9BA0;">l</span><span style="color: #FE3937">s</span> 
      </div>
        <form action="{{ route('preschoolpage.search') }}" method="post" >
        @csrf
        <input type="search" name="search" class="search" placeholder="Search..." >
        <button type="submit" style="background:none;border:none"><i class="fa-solid fa-magnifying-glass search-icon text-white"></i></button>
    </form>
    </div>

<div class="container d-flex " style="margin-top:2%;" > 
    <div class="row col-3 justify-content-start" >
<div class="card  ms-5" style="background-image: url(/photos/swash_blue_full.jpg);">
  <div class="card-body">
    <h5 class="card-title">Play is Learning ...</h5>
    <p class="card-text">Be mindful to support play without taking over or controlling it. listen to and support their ideas. When children make suggestions or change the direction of play, they are taking small risks (socially) with you. This is the cue to follow their great idea and build their confidence!</p>
  </div>
  <img src="../photos/Play-Fall-Leaves-web (1).jpg" class="card-img-bottom" alt="...">
</div>

<div class="card mt-3  ms-5" style="background-image: url(/photos/swash_blue_full.jpg);">
  <div class="card-body">
    <h5 class="card-title">Play is Learning ...</h5>
    <p class="card-text">Unplug! Set aside time each day when all family tablets, televisions, and phones are turned off. See what happens—more than likely, it will be PLAY.</p>
  </div>
  <img src="/photos/RSVL-9-2019-MKTG-025 (1).jpg" class="card-img-bottom" alt="...">
</div>
</div>


<div class="row offset-2">
      @foreach ($preschools as $preschool)
      <div class="cards col-6">      
          <div class="card" style="width: 18rem;">
              <img src="{{URL::asset("storage/image/".$preschool->img)}}" class="card-img-top" alt="pic1" height="260" width="250">
              <div class="card-body">
                <h5 class="card-title">{{$preschool->first_name}} {{$preschool->last_name}}</h5>
                <p class="card-text"></p>
                <div class="text-center" style="margin-top: -8%;">
                  <p  style="font-size: 24px;">
                    <a class="buttonyellow "  href="{{route('profile.showPreschool',$preschool->id)}}"  >Take A Tour</a>                  </p>
              </div>
              </div>
            </div>
      
            
            
          </div>
          @endforeach
        </div>
      </div>
    </div>
      @endsection
    <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.2-dist/js/all.min.js"></script>
</body>
</html>

