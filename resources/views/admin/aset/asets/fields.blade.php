<!-- Kode Field -->
<div class="form-group col-sm-12">
    {!! Form::label('kode', 'Kode:') !!}
    {!! Form::text('kode', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-12">
    {!! Form::label('alias', 'Alias:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>


<!-- Kategory Field -->
<div class="form-group col-sm-12">
    {!! Form::label('kategory', 'Kategory:') !!}
    {!! Form::text('kategory', null, ['class' => 'form-control']) !!}
</div>

<!-- Dept Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dept', 'Dept:') !!}
    {!! Form::text('dept', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.aset.asets.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
