<!-- Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Nik Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nik', 'Nik:') !!}
    {!! Form::text('nik', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Field -->
<div class="form-group col-sm-12">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::number('code', null, ['class' => 'form-control']) !!}
</div>

<!-- Hour Field -->
<div class="form-group col-sm-12">
    {!! Form::label('hour', 'Hour:') !!}
    {!! Form::text('hour', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.absentdump.absentdumps.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
