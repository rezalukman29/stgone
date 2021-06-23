<!-- Nik Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nik', 'Nik:') !!}
    {!! Form::number('nik', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<!-- In Field -->
<div class="form-group col-sm-12">
    {!! Form::label('absent_in', 'In:') !!}
    {!! Form::text('absent_in', null, ['class' => 'form-control']) !!}
</div>

<!-- Out Field -->
<div class="form-group col-sm-12">
    {!! Form::label('absent_out', 'Out:') !!}
    {!! Form::text('absent_out', null, ['class' => 'form-control']) !!}
</div>

<!-- Absent Code Field -->
<div class="form-group col-sm-12">
    {!! Form::label('absent_code', 'Absent Code:') !!}
    {!! Form::text('absent_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Shift Field -->
<div class="form-group col-sm-12">
    {!! Form::label('shift', 'Shift:') !!}
    {!! Form::text('shift', null, ['class' => 'form-control']) !!}
</div>

<!-- Detail Field -->
<div class="form-group col-sm-12">
    {!! Form::label('detail', 'Detail:') !!}
    {!! Form::text('detail', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.absent.absents.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
