<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $activitat->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('programacion_id') }}
            {{ Form::text('programacion_id', $activitat->programacion_id, ['class' => 'form-control' . ($errors->has('programacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Programacion Id']) }}
            {!! $errors->first('programacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uf_id') }}
            {{ Form::text('uf_id', $activitat->uf_id, ['class' => 'form-control' . ($errors->has('uf_id') ? ' is-invalid' : ''), 'placeholder' => 'Uf Id']) }}
            {!! $errors->first('uf_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ra_ids') }}
            {{ Form::text('ra_ids', $activitat->ra_ids, ['class' => 'form-control' . ($errors->has('ra_ids') ? ' is-invalid' : ''), 'placeholder' => 'Ra Ids']) }}
            {!! $errors->first('ra_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('criteris_ids') }}
            {{ Form::text('criteris_ids', $activitat->criteris_ids, ['class' => 'form-control' . ($errors->has('criteris_ids') ? ' is-invalid' : ''), 'placeholder' => 'Criteris Ids']) }}
            {!! $errors->first('criteris_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contingut_ids') }}
            {{ Form::text('contingut_ids', $activitat->contingut_ids, ['class' => 'form-control' . ($errors->has('contingut_ids') ? ' is-invalid' : ''), 'placeholder' => 'Contingut Ids']) }}
            {!! $errors->first('contingut_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>