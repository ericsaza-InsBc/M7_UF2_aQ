<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Description') }}
            {{ Form::text('description', $activitat->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
<<<<<<< HEAD
            {{ Form::label('Hours') }}
            {{ Form::text('hours', $activitat->hours, ['class' => 'form-control' . ($errors->has('hours') ? ' is-invalid' : ''), 'placeholder' => 'Hours']) }}
            {!! $errors->first('hours', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Programació') }}
            <select name="programacion_id" id="programacion_id" class="form-control">
                @foreach (\App\Models\Programacion::all() as $programacion)
                    <option value="{{ $programacion->id }}" {{ $programacion->id == $activitat->programacion_id ? 'selected' : ''}}>{{ $programacion->description }}</option>
                @endforeach
            </select>
            {!! $errors->first('programacio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Uf') }}
            <select name="uf_id" id="uf_id" class="form-control">
                @foreach (\App\Models\Uf::all() as $uf)
                    <option value="{{ $uf->id }}" {{ $uf->id == $activitat->uf_id ? 'selected' : ''}}>{{ $uf->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('uf_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RA') }}
            <select name="ra_ids" id="ra_ids" class="form-control">
                @foreach (\App\Models\Ra::all() as $ra)
                    <option value="{{ $ra->id }}" {{ $ra->id == $activitat->ra_id ? 'selected' : ''}}>{{ $ra->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('ra_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Criteri') }}
            <select name="criteris_ids" id="criteris_ids" class="form-control">
                @foreach (\App\Models\Criteri::all() as $criteri)
                    <option value="{{ $criteri->id }}" {{ $criteri->id == $activitat->criteri_id ? 'selected' : ''}}>{{ $criteri->criteris }}</option>
                @endforeach
            </select>
            {!! $errors->first('criteri_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Continguts') }}
            <select name="contingut_ids" id="contingut_ids" class="form-control">
                @foreach (\App\Models\Contingut::all() as $contingut)
                    <option value="{{ $contingut->id }}" {{ $contingut->id == $activitat->contingut_id ? 'selected' : ''}}>{{ $contingut->continguts }}</option>
                @endforeach
            </select>
            {!! $errors->first('contingut_ids', '<div class="invalid-feedback">:message</div>') !!}
=======
            {{ Form::label('Programació') }}
            <select name="programacion_id" id="programacion_id" class="form-control">
                @foreach (\App\Models\Programacion::all() as $programacion)
                    <option value="{{ $programacion->id }}" {{ $programacion->id == $activitat->programacion_id ? 'selected' : ''}}>{{ $programacion->description }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('RA') }}
            <select name="ra_id" id="ra_id" class="form-control">
                @foreach (\App\Models\Ra::all() as $ra)
                    <option value="{{ $ra->id }}" {{ $ra->id == $activitat->ra_id ? 'selected' : ''}}>{{ $ra->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('Criteris') }}
            <select name="criteri_id" id="criteri_id" class="form-control">
                @foreach (\App\Models\Criteri::all() as $criteri)
                    <option value="{{ $criteri->id }}" {{ $criteri->id == $activitat->criteri_id ? 'selected' : ''}}>{{ $criteri->criteris }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('Continguts') }}
            <select name="contingut_id" id="contingut_id" class="form-control">
                @foreach (\App\Models\Contingut::all() as $contingut)
                    <option value="{{ $contingut->id }}" {{ $contingut->id == $activitat->ra_id ? 'selected' : ''}}>{{ $contingut->continguts }}</option>
                @endforeach
            </select>
>>>>>>> 84a744dfb450146dd3571c6b346e13da7789f44c
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
