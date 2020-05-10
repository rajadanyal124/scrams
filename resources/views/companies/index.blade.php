@extends('layouts.app')

@section('title', '| Users')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i> Company Information <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Location</th>
                    <th>NTN</th>
                    <th>GST</th>
                    <th>Phone No</th>
                    <th>Fax</th>
                    <th>company_email</th>
                    <th>Status</th>
                    <th>Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($companies as $company)
                <tr>

                    <td>{{ $company->comp_name }}</td>
                    <td>{{ $company->loction}}</td>
                    <td>{{ $company->ntn}}</td>                
                    <td>{{ $company->gst}}</td>
                    <td>{{ $company->phone_no}}</td>
                    <td>{{ $company->fax}}</td>
                    <td>{{ $company->comp_email}}</td>
                    <td>{{$company->enable}}</td>
                    <td>  
                    <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['companies.destroy', $company->id] ]) !!}
                    {!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<a href="#" class="btn btn-success">Add Company</a>
</div>

@endsection