@extends('layouts/default')

{{-- Page title --}}
@section('title')
Custom Data Tables
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

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">


            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="d-none d-sm-block">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Blank Page</a>
                </li>
            </ol>
            <div class="float-right mt-1">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Blank Page
            </div>
        </div>
     </div>
        </div>
    </div>
    @stop





    {{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container my-3">
        <!--Content Section Start -->

        <div class=" col-12 text-center my-3 marbtm10">
    <h3 class="border-danger"><span class="heading_border bg-danger">Profile</span></h3>
        </div>

        <div class="row details">
        <!-- bar Section Start -->
        <div class="col-md-12  col-lg-6 col-12 wow bounceInLeft" data-wow-duration="1.5s">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                    
                    <div class="item"><img src="{{ $user->pic }}" alt="slider-image" class="img-fluid">
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- //Slider Section End -->
        <!-- Project Description Section Start -->
        <div class="col-md-12 col-lg-6 col-12 wow bounceInRight" data-wow-duration="1.5s">
            <h3>{{ $user->full_name }}</h3>
            <p class="text-justify">
                Wouldn't you like to get away? Sometimes you want to go where everybody knows your name. And they're
                always glad you came. Why do we always come here? I guess well never know. Its like a kind of torture to
                have to watch the show. Movin' on up to the east side. We finally got a piece of the pie. That this
                group would somehow form a family that's the way we all became the Brady Bunch. In a freak mishap Ranger
                3 and its pilot Captain William
            </p>
            <h3>Detail Karyawan</h3>
            <ul style="padding: 0 0 0 10px;">
                <li><b>NIK:</b>&nbsp;{{ $user->nik }}</li>
                <br />
                <li><b>Departemen:</b>&nbsp;{{ $user->department }}</li>
                <br />
                <li><b>Jabatan:</b>&nbsp;{{ $user->position }}</li>
                <br />
                <li><b> Link:</b><a href="#">&nbsp;www.domain.com</a></li>
                <br />
                <li><a class=" btn btn-primary" href="#"><span class="text-white"><i class="livicon"
                                data-name="hand-right" data-size="24" data-loop="true" data-c="#fff"
                                data-hc="white"></i></span></a></li>
                        </ul>
                 </div>
                 <input type="hidden" name="ceknik" id="ceknik" value="{{ $user->nik }}" class="form-control" >
                
        <!-- //Project Description Section End -->
    </div>
  
       <!--Content Section Start -->
       <div class="text-center col-12 wow flash my-3" data-wow-duration="3s">
            <h3 class="border-success"><span class="heading_border bg-success">Attendance</span></h3>

            </div>





            <!--section ends-->
            <section class="content pr-3 pl-3">
                <div class="form-group">

                </div>
               
                <div class="row my-3">
                        <div class="col-lg-12">
                            <div class="card filterable">
                                <div class="card-header bg-primary text-white  clearfix" >
                                    <div class="float-left">
                                        <div class="caption my-2">
                                            <i class="livicon" data-name="camera" data-size="16" data-loop="true"
                                               data-c="#fff" data-hc="white"></i>
                                            Absensi Harian
                                        </div>
                                    </div>
                    

                                </div>
                                <div class="row paddng my-2">
                                <input type="hidden" name="cekcountry" id="cekcountry" value="99997" class="form-control" >


                                    <div class="col-md-4">
                                        <label class="control-label">Periode :</label>
                                        {!! Form::select('professions', $professions, null,['class' => 'form-control', 'id' => 'professions2', 'placeholder' => 'Please Select One...']) !!}
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-lg table-responsive-md table-responsive-sm">
                                    <table class="table table-striped width100" id="table5" >
                                        <thead>
                                        <tr class="filters">
                                        <th>id</th>
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
                <!-- row-->
            </section>
            <!-- content -->
            </div>
    @stop

{{-- page level scripts --}}
@section('footer_scripts')

<script src="{{ asset('js/pages/table-responsive.js') }}"></script>


<script type="text/javascript" src="{{ asset('js/frontend/jquery.circliful.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/wow/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/index.js') }}"></script>
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
            var table3 = $('#table3').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! URL::to('admin/custom_datatables/selectData') !!}',
                    data: function (d) {
                        d.professionSelect = professionSelect;
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
            table3.on( 'draw', function () {
                $('.livicon').each(function(){
                    $(this).updateLivicon();
                });
            } );
            $('#professions').click(function () {
                professionSelect = $(this).val();
                table3.draw();

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
    
//            $("#id_range2").slider().on('slideStop', function(ev){
////
//                        idSlider2 = $(this).slider('getValue');
//                        table5.draw();
//                    });

            $('#professions2').click(function () {
                professionSelect2 = $(this).val();
                table5.draw();
            });


            var countryValue = document.getElementById("ceknik").value;
            var table5 = $('#table5').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! URL::to('daily_absensi/totalData') !!}',
                    data: function (d) {
                    
                        d.professionSelect2 = professionSelect2;
                        d.countrySelect = countryValue;
                 
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'nik', name: 'nik' },
                    { data: 'date', name: 'date' },
                    { data: 'absent_in', name: 'absent_in' },
                    { data: 'absent_out', name: 'absent_out' },
                    { data: 'absent_code', name: 'absent_code' },
                    { data: 'shift', name: 'shift' },
                    { data: 'detail', name: 'detail' },
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
