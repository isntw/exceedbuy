@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Settings</h2>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">Site Details</div>
            <div class="panel-body">
                 <div class="row ">
            <div class="col-md-12 col-sm-7">
                <form method="post" action="" name=''>
                    {{ csrf_field() }}
                    <div class="margin-b-10">
                       Phone <input type="text" class="form-control col-md-8" name="phone" value="{{$settings->phone}}">
                        <span class="text-danger" id="name"></span>
                    </div>
                    <div class="margin-b-10">
                       Email <input type="text" class="form-control" placeholder="" name="email" value="{{$settings->email}}">
                        <span class="text-danger" id="email"></span>
                    </div>
                    <div class="margin-b-10">
                        Location <input type="text" class="form-control" placeholder="" name="phone" value="{{$settings->location}}">
                        <span class="text-danger" id="phone"></span>
                    </div>
                    <div class="margin-b-20">
                       Description <textarea class="form-control" rows="5" placeholder="" name="text">{{$settings->description}}</textarea>
                        <span class="text-danger" id="text"></span>
                    </div>
                    <input type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" value="Update">

                    @if(count($errors))
                    <div class='form-group'>
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li><strong>Error!</strong> {{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

                </form>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection
