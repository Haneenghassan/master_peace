
@extends('layouts.admin')
@section('preschoolCreate')
<h1 style="color: black">Preschools</h1>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4" style="background-color: #fff !important; ">
                    <h5 class="mb-4">Add New Preschool</h5>
                    <form action="{{ route('admin.preschools.store') }}" method="post" enctype="multipart/form-data" files=true>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name"> Name</label>
                            <input type="text" name="name" class="form-control" style="
                            display: inline-block;
                        ">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Manger Name</label>
                            <input type="text" name="manegerName" class="form-control" style="
                            display: inline-block;
                        ">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" style="
                            display: inline-block;
                        ">
                            
                           
                        </div>
                        <button type="submit" class="btn btn-primary">Add Preschool</button>
                        <a href="{{route('admin.preschools.index')}}" class="option-btn" style="border: none; color:#000040 !important"><button style="background-color: yellow !important; color:#000040 !important" class="btn btn-primary">Back To Dashboard</button></a>
                    </form>
                </div>
            </div>
            @endsection