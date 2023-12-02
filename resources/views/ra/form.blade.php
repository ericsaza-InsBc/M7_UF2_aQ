<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $ra->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Uf') }}
            <select name="uf_id" id="uf_id" class="form-control">
                @foreach (\App\Models\Uf::all() as $uf)
                    <option value="{{ $uf->id }}" {{ $uf->id == $ra->uf_id ? 'selected' : ''}}>{{ $uf->name }}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>