@extends('layouts.app')

@section('content')
 
    <h3>Review Details</h3>
    <form action="/store" method="post" >
        {{ csrf_field() }}
        <table class="table">
                <tr>
                    <td>Name:</td>
                    <td><strong>{{$company->comp_name}}</strong></td>
                </tr>
                <tr>
                    <td>Location:</td>
                    <td><strong>{{$company->loction}}</strong></td>
                </tr>
                <tr>
                    <td>NTN:</td>
                    <td><strong>{{$company->ntn}}</strong></td>
                </tr>
                <tr>
                    <td>GST:</td>
                    <td><strong>{{$company->gst}}</strong></td>
                </tr>
                <tr>
                    <td>Phone No:</td>
                    <td><strong>{{ $company->phone_no}}</strong></td>
                </tr>
                <tr>
                    <td>Fax:</td>
                    <td><strong>{{$company->fax}}</strong></td>
                </tr>
                <tr>
                    <td>Company Email:</td>
                    <td><strong>{{$company->comp_email}}</strong></td>
                </tr>
        </table>
            <a type="button" href="/register1" class="btn btn-warning">Back to Step 1</a>
            <a type="button" href="/register2" class="btn btn-warning">Back to Step 2</a>
            <button type="submit" class="btn btn-primary">Register</button>

    </form>



 @endsection   