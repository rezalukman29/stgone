@extends('admin/layouts/default')

@section('title')
Employee
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

<link href="{{ asset('vendors/summernote/css/summernote-bs4.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
<link href="{{ asset('css/pages/blog.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}">


<link rel="stylesheet" type="text/css" href="{{ asset('vendors/iCheck/css/all.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/iCheck/css/line/line.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-switch/css/bootstrap-switch.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/switchery/css/switchery.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/formelements.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/awesome-bootstrap-checkbox.css') }}"/>
@stop


@section('content')
@include('common.errors')
<section class="content-header">
    <!--section starts-->
    <h1>@lang('blog/title.add-blog')</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="14" data-c="#000"
                    data-loop="true"></i>
                @lang('general.home')
            </a>
        </li>
        <li>
            <a href="#">@lang('blog/title.blog')</a>
        </li>
        <li class="active">@lang('blog/title.add-blog')</li>
    </ol>
</section>
<!--section ends-->
<section class="content pr-3 pl-3">
    <!--main content-->
    <div class="row">
        <div class="col-12">
            <div class="the-box no-border">
                <!-- errors -->
                {!! Form::open(['route' => 'admin.employee.employees.store']) !!}
                <div class="card-header bg-primary text-white">
                <h4 class="card-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Create New  Employee
                </h4></div>
                <br>

                <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <!-- NIK Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::label('nik', 'Nik:') !!}
                            {!! Form::text('nik', null, ['class' => 'form-control']) !!}
                        </div>
                        
                                    <!-- Name Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>

                           <!-- Shift Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('shift', 'Shift:') !!}
                {!! Form::text('shift', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Gender Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('gender', 'Gender:') !!}
                {!! Form::text('gender', null, ['class' => 'form-control']) !!}
            </div>
                    </div>
                    <!-- /.col-sm-8 -->
                    <div class="col-sm-4">
                    <div class="form-group {{ $errors->first('department_id', 'has-error') }}">
                            <label for="department" class="">Departemen</label>
                            {!! Form::label('', trans('')) !!}
                            {!! Form::select('department_id',$department ,null, ['class' => 'form-control
                            select2', 'title'=>'department' ,'placeholder'=>trans('-- Pilih Departemen --')]) !!}
                            <span class="help-block">{{ $errors->first('department_id', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->first('position', 'has-error') }}">
                            <label for="position" class="">Jabatan</label>
                            {!! Form::label('', trans('')) !!}
                            {!! Form::select('position',$position ,null, ['class' => 'form-control
                            select2', 'title'=>'position' ,'placeholder'=>trans('-- Pilih position --')]) !!}
                            <span class="help-block">{{ $errors->first('position', ':message') }}</span>
                        </div>
                        <!-- <div class="form-group {{ $errors->first('company', 'has-error') }}">
                        {!! Form::label('company', 'Company:') !!}
                        {!! Form::text('company', null, ['class' => 'form-control']) !!}
                        </div> -->


                        <div class="form-group {{ $errors->first('company', 'has-error') }}">
                                <p class="mt-3"><b>Perusahaan </b></p>
                        <div class="form-check abc-radio abc-radio-info form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio1" value="STG" name="radioInline" checked>
                            <label class="form-check-label" for="inlineRadio1"> STG </label>
                        </div>
                        <div class="form-check abc-radio form-check-inline abc-radio-info">
                            <input class="form-check-input" type="radio" id="inlineRadio2" value="STG" name="radioInline">
                            <label class="form-check-label" for="inlineRadio2"> MTK </label>
                        </div>
                        </div>

                        <label>@lang('employee/form.lb-featured-img')</label>
                        <div class="form-group {{ $errors->first('image', 'has-error') }}">


                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                    <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                        class="img-responsive" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"
                                    style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                    <span class="btn btn-primary btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image" id="pic" accept="image/*" />
                                    </span>
                                    <span class="btn btn-primary fileinput-exists"
                                        data-dismiss="fileinput">Remove</span>
                                </div>
                                <span class="help-block">{{ $errors->first('image', ':message') }}</span>

                            </div>

                        </div>
                                    <!-- Submit Field -->
                        <div class="form-group col-sm-12 text-center">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('admin.employee.employees.index') !!}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!--main content ends-->
</section>
 @stop
@section('footer_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("form").submit(function() {
                $('input[type=submit]').attr('disabled', 'disabled');
                return true;
            });
        });
    </script>

    <!-- begining of page level js -->
<!--edit blog-->
<script src="{{ asset('vendors/summernote/js/summernote-bs4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/select2/js/select2.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
<script src="{{ asset('js/pages/add_newblog.js') }}" type="text/javascript"></script>

<script language="javascript" type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/switchery/js/switchery.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/card/js/jquery.card.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('js/pages/radio_checkbox.js') }}"></script>

<script>
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
</script>
@stop
