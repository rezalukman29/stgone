@extends('admin/layouts/default')

@section('title')
Employees
@parent
@stop
@section('content')
  @include('common.errors')
    <section class="content-header">
     <h1>Master Karyawan</h1>
     <ol class="breadcrumb">
         <li>
             <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                 Dashboard
             </a>
         </li>
         <li>Data Karyawan</li>
         <li class="active">Edit Karyawan </li>
     </ol>
    </section>
    <section class="content">
    <div class="container">
      <div class="row">
             <div class="col-12">
              <div class="card border-primary">
                    <div class="card-header bg-primary text-white">
                        <h4 class="card-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Edit Data Karyawan
                        </h4></div>
                    <br />
                <div class="card-body">
                {!! Form::model($employee, ['route' => ['admin.employee.employees.update', collect($employee)->first() ], 'method' => 'patch']) !!}

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

                              <!-- Name Field -->
                              <div class="form-group col-sm-12">


                                <div class="form-group {{ $errors->first('department_id', 'has-error') }}">
                                                <label for="blog_category" class="">Department</label>
                                                {!! Form::select('department_id',$department ,null, ['class' => 'form-control select2','title'=>'department', 'placeholder'=>trans(' -- Pilih Departemen --')])!!}
                                                <span class="help-block">{{ $errors->first('department_id', ':message') }}</span>
                                            </div>
                                    

                                    
                                </div>  


                                  <div class="form-group col-sm-12">     
                                <div class="form-group {{ $errors->first('position', 'has-error') }}">
                                                <label for="blog_category" class="">Position</label>
                                                {!! Form::select('position',$position ,null, ['class' => 'form-control select2','title'=>'position', 'placeholder'=>trans(' -- Pilih Jabatan --')])!!}
                                                <span class="help-block">{{ $errors->first('position', ':message') }}</span>
                                            </div>
                                    

                                    
                                </div>



         

            <!-- Shift Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('shift', 'Shift:') !!}
                {!! Form::text('shift', null, ['class' => 'form-control']) !!}
            </div>


      <!-- Gender Field -->
      <div class="form-group col-sm-12">
                {!! Form::label('company', 'Company:') !!}
                {!! Form::text('company', null, ['class' => 'form-control']) !!}
            </div>


            <!-- Gender Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('gender', 'Gender:') !!}
                {!! Form::text('gender', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Submit Field -->
            <div class="form-group col-sm-12 text-center">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{!! route('admin.employee.employees.index') !!}" class="btn btn-secondary">Cancel</a>
            </div>


                {!! Form::close() !!}
                </div>
              </div>
           </div>
        </div>
    </div>
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
@stop
