@extends('index')

@section('admin')
<div class="container" style='margin-top: 100px;'>
    <div class="row">

        @foreach($messages as $message)

        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Name: {{$message->name}}
                </div>
                <div class="panel-body">
                    <p>{{$message->text}}</p>
                </div>
                <div class="panel-footer">
                    Telefon: {{$message->phone}}, Email: {{$message->email}}
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection
