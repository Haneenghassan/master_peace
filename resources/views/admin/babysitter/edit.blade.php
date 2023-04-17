
@extends('layouts.admin')
@section('babysitteredit')
<h1 style="color: black">Preschools</h1>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4" style="background-color: #fff !important; ">
                    <h5 class="mb-4">Edite Preschool</h5>
                    <form action="{{ route('admin.babysitters.update',$data[0]->id) }}" method="post" enctype="multipart/form-data" files=true>
                        @method('PUT')
                        @csrf

                      
                     
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="select">
                                <option value="pending">pending</option>
                                <option value="accepted">accepted</option>
                                <option value="rejected">rejected</option>
                            </select>
                           
                            
                           
                        </div>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <a href="{{route('admin.babysitters.index')}}" class="option-btn" style="border: none; color:#000040 !important"><button style="background-color: yellow !important; color:#000040 !important" class="btn btn-primary">Back To Dashboard</button></a>
                    </form>
                </div>
            </div>
            @endsection