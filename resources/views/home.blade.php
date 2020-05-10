@extends('layouts.app')

@section('content')



<section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    <div class="apnel panel-default">

        <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        You are logged in!
        </div>
        </div>
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
@endsection
