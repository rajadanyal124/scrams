extends('layouts.app')

@section('content')
<h1>Registeration</h1>
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
     <input type="text" name="comp)name" class="form-controll" placeholder="Enter Company name" value="{{ session()->get('companies.phone_no') }}"><br>
     <input type="text" name="comp)name" class="form-controll" placeholder="Enter Company name" value="{{ session()->get('companies.fax') }}"><br>
     <input type="text" name="comp)name" class="form-controll" placeholder="Enter Company name" value="{{ session()->get('companies.comp_mail') }}"><br>
         <button type="submit" class="btn btn-primary">Continue</button>
     </form>
@endsection