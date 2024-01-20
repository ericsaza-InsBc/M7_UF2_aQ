<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Description') }}
            {{ Form::text('description', $activitat->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hours') }}
            {{ Form::text('hours', $activitat->hours, ['class' => 'form-control' . ($errors->has('hours') ? ' is-invalid' : ''), 'placeholder' => 'Hours']) }}
            {!! $errors->first('hours', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Programació') }}
            <select name="programacion_id" id="programacion_id" class="form-control">
                <option value="Selecciona una opcion" selected disabled="true">Selecciona una opción</option>
                @foreach (\App\Models\Programacion::all() as $programacion)
                    <option value="{{ $programacion->id }}"
                        {{ $programacion->id == $activitat->programacion_id ? 'selected' : '' }}>
                        {{ $programacion->description }}</option>
                @endforeach
            </select>
            {!! $errors->first('programacio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Uf') }}
            <select name="uf_id" id="uf_id" class="form-control">
                <option value="Selecciona una opcion" selected disabled="true">Selecciona una opción</option>
                @foreach (\App\Models\Uf::all() as $uf)
                    <option value="{{ $uf->id }}" {{ $uf->id == $activitat->uf_id ? 'selected' : '' }}>
                        {{ $uf->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('uf_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('RA') }}
            <select name="ra_ids" id="ra_ids" class="form-control">
                <option value="Selecciona una opcion" selected disabled="true">Selecciona una opción</option>
                @foreach (\App\Models\Ra::all() as $ra)
                    <option value="{{ $ra->id }}" class="ra-option" data-uf-id="{{ $ra->uf_id }}"
                        {{ $ra->id == $activitat->ra_id ? 'selected' : '' }}>
                        {{ $ra->name }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('ra_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Criteri') }}
            <select name="criteris_ids" id="criteris_ids" class="form-control">
                <option value="Selecciona una opcion" selected disabled="true">Selecciona una opción</option>
                @foreach (\App\Models\Criteri::all() as $criteri)
                    <option value="{{ $criteri->id }}" class="criteri-option" data-ra-id="{{ $criteri->ra_id }}"
                        {{ $criteri->id == $activitat->criteri_id ? 'selected' : '' }}>
                        {{ $criteri->criteris }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('criteri_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Continguts') }}
            <select name="contingut_ids" id="contingut_ids" class="form-control">
                <option value="Selecciona una opcion" selected disabled="true">Selecciona una opción</option>
                @foreach (\App\Models\Contingut::all() as $contingut)
                    <option value="{{ $contingut->id }}" class="contingut-option" data-ra-id="{{ $contingut->ra_id }}"
                        {{ $contingut->id == $activitat->contingut_id ? 'selected' : '' }}>
                        {{ $contingut->continguts }}</option>
                @endforeach
            </select>
            {!! $errors->first('contingut_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <script>
            // Fem que si l'usuario no selecciona una Programacion, els altres selects estiguin disabled fins que seleccioni una UF
            document.getElementById('uf_id').disabled = true;
            document.getElementById('ra_ids').disabled = true;
            document.getElementById('criteris_ids').disabled = true;
            document.getElementById('contingut_ids').disabled = true;

            document.getElementById('programacion_id').addEventListener('change', function() {
                if (this.value != "") {
                    document.getElementById('uf_id').disabled = false;
                }
            });
            document.getElementById('uf_id').addEventListener('change', function() {
                if (this.value != "") {
                    document.getElementById('ra_ids').disabled = false;
                }
            });document.getElementById('ra_ids').addEventListener('change', function() {
                if (this.value != "") {
                    document.getElementById('criteris_ids').disabled = false;
                    document.getElementById('contingut_ids').disabled = false;
                }
            });


            // Controlador d'opcions
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('uf_id').addEventListener('change', function() {
                    var selectedUfId = this.value;
                    var raOptions = document.getElementsByClassName('ra-option');
                    for (var i = 0; i < raOptions.length; i++) {
                        var option = raOptions[i];
                        var optionUfId = option.getAttribute('data-uf-id');

                        if (selectedUfId === optionUfId || selectedUfId === "") {
                            option.style.display = 'block';
                        } else {
                            option.style.display = 'none';
                        }
                    }
                });

                document.getElementById('ra_ids').addEventListener('change', function() {
                    var selectedRaId = this.value;
                    var criteriOptions = document.getElementsByClassName('criteri-option');
                    for (var i = 0; i < criteriOptions.length; i++) {
                        var option = criteriOptions[i];
                        var optionRaId = option.getAttribute('data-ra-id');

                        if (selectedRaId === optionRaId || selectedRaId === "") {
                            option.style.display = 'block';
                        } else {
                            option.style.display = 'none';
                        }
                    }
                });

                document.getElementById('ra_ids').addEventListener('change', function() {
                    var selectedRaId = this.value;
                    var contingutOptions = document.getElementsByClassName('contingut-option');
                    for (var i = 0; i < contingutOptions.length; i++) {
                        var option = contingutOptions[i];
                        var optionRaId = option.getAttribute('data-ra-id');

                        if (selectedRaId === optionRaId || selectedRaId === "") {
                            option.style.display = 'block';
                        } else {
                            option.style.display = 'none';
                        }
                    }
                });

            });
        </script>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
