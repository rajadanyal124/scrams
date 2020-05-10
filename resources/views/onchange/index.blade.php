@extends('layouts.app')

@section('title', '| Addresse')

@section('content')
    <div class="container">
            <div class="row">
                <div class="col-6">
                    <form method="POST" action="" class="from form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pakistan</option>    
                            </select> 
                        </div>
                    </form>
                </div>

            </div>
    </div>
@endsection