@extends('admin/layouts/default')

@section('title')
AsetTakings
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Aset Taking</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Aset Taking</li>
        <li class="active">Aset Taking List</li>
    </ol>
</section>

<section class="content">
<div class="container">
    <div class="row">
     <div class="col-12">
     @include('flash::message')
        <div class="card border-primary ">
        <div class="card border-primary ">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title float-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Asets List
                </h4>
                <div class="float-right">
                  
            </div>
            <br />
            <div class="card-body table-responsive">
                 @include('admin.asettaking.asettakings.table')
                 
            </div>
        </div>
        </div>
 </div>
 </div>
</section>
@stop
