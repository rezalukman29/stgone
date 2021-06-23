<!-- Nik Field
<div class="form-group col-sm-12">
    {!! Form::label('nik', 'Nik:') !!}
    {!! Form::number('nik', null, ['class' => 'form-control']) !!}
</div> -->



 

<!-- Datestart Field -->
<div class="form-group col-sm-12">
    {!! Form::label('datestart', 'Datestart:') !!}
    {!! Form::date('datestart', null, ['class' => 'form-control']) !!}
</div>

<!-- Dateend Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dateend', 'Dateend:') !!}
    {!! Form::date('dateend', null, ['class' => 'form-control']) !!}
</div>

<!-- Days Field -->
<!-- <div class="form-group col-sm-12">
    {!! Form::label('days', 'Days:') !!}
    {!! Form::number('days', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Detail Field -->
<div class="form-group col-sm-12">
    {!! Form::label('detail', 'Detail:') !!}
    {!! Form::text('detail', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <!-- <a href="{!! route('admin.suratcuti.suratcutis.index') !!}" class="btn btn-secondary">Cancel</a> -->
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
