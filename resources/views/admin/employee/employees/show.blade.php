@extends('admin/layouts/default')

@section('title')
Employee
@parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/colReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/rowReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/scroller.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-slider/css/bootstrap-slider.min.css') }}" />
    <link href="{{ asset('vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/tables.css') }}" />
    <style>
        .tooltip.tooltip-main {
            margin-top: -40px;
        }
        .slider-handle:hover .tooltip{
            opacity: 1;
        }
        .slider-horizontal .slider-handle:hover .slider-horizontal .tooltip.show{
            opacity:1;
        }
        .opacity-0{
            opacity: 0;
        }
        label.btn{
            padding-left: 0;
            padding-right: 14px;
        }

    </style>
@stop

@section('content')
<section class="content-header">
    <h1>Employee View</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Employees</li>
        <li class="active">Employee View</li>
    </ol>
</section>

<section class="content">
<div class="container">
    <div class="row">
      <div class="col-12">
       <div class="card border-primary">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Employee details
                    </h4>
                </div>
                    <div class="card-body">

                   
                        @include('admin.employee.employees.show_fields')
                    </div>
                </div>

    <div class="form-group">
           <a href="{!! route('admin.employee.employees.index') !!}" class="btn btn-warning mt-2">Back</a>
    </div>
     </div>
     </div>
  </div>
</section>

<section class="content pr-3 pl-3">
                <div class="form-group">

                    </div>
                    <div class="row my-3">
                      <div class="col-lg-12">
                        <div class="card filterable">
                            <div class="card-header bg-primary text-white  clearfix">
                                <div class=" float-left">
                                    <div class="caption">
                                        <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        History Pengajuan Cuti
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                            <div class="col-md-4 my-2">
                                <label class="control-label"></label>
                                <input type="hidden" name="ceknik" id="ceknik" value="{{ $employee->nik }}" class="form-control" >
                            </div>
                            
                            </div>
                            <div class="card-body">
                                <div class="table-responsive-lg table-responsive-md table-responsive-sm">
                                <table class="table table-bordered width100" id="table3" >
                                    <thead>
                                    <tr class="filters">
                                   
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Keperluan</th>
                                        <th>Awal</th>
                                        <th>Akhir</th>
                           
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-lg-12">
                        <div class="card filterable">
                            <div class="card-header bg-primary text-white  clearfix">
                                <div class=" float-left">
                                    <div class="caption">
                                        <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        Absen harian
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                            <div class="col-md-4 my-2">
                                <label class="control-label"></label>
                 
                            </div>
                            
                            </div>
                            <div class="card-body">
                                <div class="table-responsive-lg table-responsive-md table-responsive-sm">
                                <table class="table table-bordered width100" id="table_absent" >
                                    <thead>
                                    <tr class="filters">
                                   
                                        <th>NIK</th>
                                        <th>Tanggal</th>
                                        <th>Absen In</th>
                                        <th>Absen Out</th>
                                        <th>Kode Absen</th>
                                        <th>Shift</th>
                                        <th>Detail</th>
                           
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


</section>

@stop
{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/jeditable/js/jquery.jeditable.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.bootstrap4.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.scroller.js') }}" ></script>
    <script src="{{ asset('vendors/bootstrap-slider/js/bootstrap-slider.js') }}" ></script>
    {{--<script src="http://seiyria.com/bootstrap-slider/dependencies/js/highlight.min.js"></script>--}}
    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script>

        $('input[type="radio"].custom-radio').iCheck({
            radioClass: 'iradio_flat-blue',
            increaseArea: '20%'
        });
        $('input[type="radio"].custom-radio2').iCheck({
            radioClass: 'iradio_flat-blue',
            increaseArea: '20%'
        });
        $(function() {
            var jobButton,ageRadio,idSlider,professionSelect;
            var jobButton2,ageRadio2,idSlider2,professionSelect2;
            var table = $('#table1').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! URL::to('admin/custom_datatables/sliderData') !!}',
                    data: function (d) {
                        d.idSlider = idSlider;
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'firstname', name: 'firstname' },
                    { data: 'lastname', name: 'lastname' },
                    { data: 'email', name: 'email' },
                    { data: 'job', name: 'job' },
                    { data: 'age', name: 'age' }
                ]
            });
            table.on( 'draw', function () {
                $('.livicon').each(function(){
                    $(this).updateLivicon();
                });
            } );
//            $("#ex8").slider().on('slideStop', function(ev){
//                idSlider = $(this).slider('getValue');
//                table.draw();
//            });

            $('#ex8').bootstrapSlider()
                    .on('slideStop', function(ev) {
                        idSlider = $(this).bootstrapSlider('getValue');
                        table.draw();
            });

            var table2 = $('#table2').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! URL::to('admin/custom_datatables/radioData') !!}',
                    data: function (d) {
                        d.ageRadio=ageRadio;
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'firstname', name: 'firstname' },
                    { data: 'lastname', name: 'lastname' },
                    { data: 'email', name: 'email' },
                    { data: 'job', name: 'job' },
                    { data: 'age', name: 'age' }
                ]
            });
            table2.on( 'draw', function () {
                $('.livicon').each(function(){
                    $(this).updateLivicon();
                });
            } );
            $("input[type='radio'].custom-radio").on('ifChanged', function (event) {
                ageRadio =  $(this).val();
                table2.draw();
            });

            var nameValue = document.getElementById("ceknik").value;

            var table3 = $('#table3').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! URL::to('admin/custom_datatables/selectData') !!}',
                    data: function (d) {
                        d.professionSelect = nameValue;
                    }
                },
                columns: [
      
                    { data: 'nik', name: 'nik' },
                    { data: 'name', name: 'name' },
                    { data: 'date', name: 'date' },
                    { data: 'detail', name: 'detail' },
                    { data: 'stockstart', name: 'stockstart' },
                    { data: 'stockend', name: 'stockend' },
                
                ]
            });
            table3.on( 'draw', function () {
                $('.livicon').each(function(){
                    $(this).updateLivicon();
                });
            } );
            $('#professions').click(function () {
                professionSelect = $(this).val();
                table3.draw();

            });
            
            var table_absent= $('#table_absent').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! URL::to('admin/custom_datatables/selectData_absent') !!}',
                    data: function (d) {
                        d.professionSelect = nameValue;
                    }
                },
                columns: [
      
                    { data: 'nik', name: 'nik' },
                    { data: 'date', name: 'date' },
                    { data: 'absent_in', name: 'absent_in' },
                    { data: 'absent_out', name: 'absent_out' },
                    { data: 'absent_code', name: 'absent_code' },
                    { data: 'shift', name: 'shift' },
                    { data: 'detail', name: 'detail' },
                
                ]
            });
            table_absent.on( 'draw', function () {
                $('.livicon').each(function(){
                    $(this).updateLivicon();
                });
            } );
            $('#professions').click(function () {
                professionSelect = $(this).val();
                table_absent.draw();

            });


            var table4 = $('#table4').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! URL::to('admin/custom_datatables/buttonData') !!}',
                    data: function (d) {
                        d.jobButton=jobButton
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'firstname', name: 'firstname' },
                    { data: 'lastname', name: 'lastname' },
                    { data: 'email', name: 'email' },
                    { data: 'job', name: 'job' },
                    { data: 'age', name: 'age' },
                    { data: 'gender', name: 'gender' }
                ]
            });
            table4.on( 'draw', function () {
                $('.livicon').each(function(){
                    $(this).updateLivicon();
                });
            } );
            $('#buttonMale').click(function () {
                jobButton='male';
                table4.draw();
            });
            $('#buttonFemale').click(function () {
                jobButton='female';
                table4.draw();
            });
            $('#buttonAll').click(function () {
                jobButton= null;
                table4.draw();
            });
//
            $('#id_range2').bootstrapSlider()
                    .on('slideStop', function(ev){

                        idSlider2 = $(this).bootstrapSlider('getValue');
                        table5.draw();
                    });
//            $("#id_range2").slider().on('slideStop', function(ev){
////
//                        idSlider2 = $(this).slider('getValue');
//                        table5.draw();
//                    });
            $('.custom-radio2').on('ifChanged', function(event){
                ageRadio2 =  $(this).val();
                table5.draw();
            });
            $('#professions2').click(function () {
                professionSelect2 = $(this).val();
                table5.draw();
            });
            $('#buttonMale2').click(function () {
                jobButton2='male';
                table5.draw();
            });
            $('#buttonFemale2').click(function () {
                jobButton2='female';
                table5.draw();
            });
            $('#buttonAll2').click(function () {
                jobButton2= null;
                table5.draw();
            });

            var table5 = $('#table5').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! URL::to('admin/custom_datatables/totalData') !!}',
                    data: function (d) {
                        d.ageRadio2=ageRadio2;
                        d.idSlider2=idSlider2;
                        d.professionSelect2 = professionSelect2;
                        d.jobButton2=jobButton2;
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'firstname', name: 'firstname' },
                    { data: 'lastname', name: 'lastname' },
                    { data: 'email', name: 'email' },
                    { data: 'job', name: 'job' },
                    { data: 'age', name: 'age' },
                    { data: 'gender', name: 'gender' }
                ]
            });


// Without JQuery
//            var slider = new Slider("#ex8", {
//
//            });
        });
        $(document).ready(function() {
            $(".tooltip").addClass('tooltip-top').removeClass('top');
            $(".slider").on("mouseenter mouseleave", function() {
                $(this).find(".tooltip.tooltip-main").toggleClass("show").removeClass("in");
            });
//        $(".slider-track + .tooltip").toggleClass('show').toggleClass('in');
//

        });

    </script>


@stop
