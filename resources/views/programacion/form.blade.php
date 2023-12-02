<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $programacion->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('academic_year') }}
            {{ Form::text('academic_year', $programacion->academic_year, ['class' => 'form-control' . ($errors->has('academic_year') ? ' is-invalid' : ''), 'placeholder' => 'Academic Year']) }}
            {!! $errors->first('academic_year', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modul_id') }}
            {{ Form::text('modul_id', $programacion->modul_id, ['class' => 'form-control' . ($errors->has('modul_id') ? ' is-invalid' : ''), 'placeholder' => 'Modul Id']) }}
            {!! $errors->first('modul_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $programacion->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>