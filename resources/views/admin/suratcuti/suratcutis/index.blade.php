@extends('admin/layouts/default')

@section('title')
Suratcutis
@parent

Modals
    @parent
@stop

{{-- Page content --}}
@section('content')
@include('common.errors')
<section class="content-header">
    <h1>Surat Cuti</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Surat Cuti</li>
        <li class="active">Suratcutis List</li>
    </ol>
</section>

<section class="content pr-3 pl-3">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="rocket" data-loop="true" data-color="#fff"
                               data-hovercolor="white" data-size="16"></i> Modals
                        </span>
                        <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                           <div class="col-3">

                    
                               <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Create Surat Cuti</button>

      


                               <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header bg-warning text-white">
                                               <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                                               <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                               </button>
                                           </div>
                                           <div class="modal-body">
                                               <form>
                                                    <div class="card-body">
                                                        {!! Form::open(['route' => 'admin.suratcuti.suratcutis.store']) !!}

                                                   
                                                            

                                                        {!! Form::close() !!}
                                                    </div>
                                                 
                                               </form>
                                           </div>
                                  
                                       </div>
                                   </div>
                               </div>
                           </div>
                           
                          
                        </div>
                    </div>
                </div>
            </div>
            </div>

            </section>

            <section class="content pr-3 pl-3">
    
    <div class="row">
        <div class="col-md-12">
     @include('flash::message')
        <div class="card border-primary ">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title float-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Daftar Surat Cuti
                </h4>
                <div class="float-right">
                    <a href="{{ route('admin.suratcuti.suratcutis.create') }}" class="btn btn-sm btn-secondary"><span class="fa fa-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />


       

                     

            <div class="card-body table-responsive">
                 @include('admin.suratcuti.suratcutis.table')
                 
            </div>
        </div>
      
 </div>
 </div>
</section>
@stop


{{-- page level scripts --}}
@section('footer_scripts')
    <script>
        $("#stack2,#stack3").on('hidden.bs.modal', function (e) {
            $('body').addClass('modal-open');
        });
    </script>

<script type="text/javascript">
        $(document).ready(function() {
            $("form").submit(function() {
                $('input[type=submit]').attr('disabled', 'disabled');
                return true;
            });
        });
    </script>
@stop
