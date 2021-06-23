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

<!-- Department Field -->
<div class="form-group col-sm-12">
    {!! Form::label('department_id', 'Department:') !!}
    {!! Form::text('department_id', null, ['class' => 'form-control']) !!}
</div> 




<!-- Position Field -->
<div class="form-group col-sm-12">
    {!! Form::label('position', 'Position:') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}
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

<div class="form-group col-sm-12">
    {!! Form::label('totalsisacuti', 'SisaCuti:') !!}
    {!! Form::text('totalsisacuti', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.employee.employees.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
