@extends('layouts.app')

@section('content')
<h1>Personal Info</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/register2" method="POST">
        @csrf
     <input type="text" name="comp)name" class="form-controll" placeholder="Enter Company name" value="{{ session()->get('companies.loction') }}"><br>
     <input type="text" name="comp)name" class="form-controll" placeholder="Enter Company name" value="{{ session()->get('companies.ntn') }}"><br>
     <input type="text" name="comp)name" class="form-controll" placeholder="Enter Company name" value="{{ session()->get('companies.gst') }}"><br>
         <button type="submit" class="btn btn-primary">Continue</button>
     </form>
@endsection