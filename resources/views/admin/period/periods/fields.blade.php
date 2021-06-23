<!-- Period Field -->
<div class="form-group col-sm-12">
    {!! Form::label('period', 'Period:') !!}
    {!! Form::text('period', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Field -->
<div class="form-group col-sm-12">
    {!! Form::label('start', 'Start:') !!}
    {!! Form::date('start', null, ['class' => 'form-control']) !!}
</div>

<!-- End Field -->
<div class="form-group col-sm-12">
    {!! Form::label('end', 'End:') !!}
    {!! Form::date('end', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.period.periods.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
