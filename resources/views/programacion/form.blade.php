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
            <div class="form-group">
                {{ Form::label('Mòdul') }}
                <select name="modul_id" id="modul_id" class="form-control">
                    @foreach (\App\Models\Modul::all() as $modul)
                        <option value="{{ $modul->id }}" {{ $modul->id == $programacion->modul_id ? 'selected' : ''}}>{{ $modul->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                {{ Form::label('Usuari') }}
                <select name="user_id" id="user_id" class="form-control">
                    @foreach (\App\Models\User::all() as $user)
                        <option value="{{ $user->id }}" {{ $user->id == $programacion->user_id ? 'selected' : ''}}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>