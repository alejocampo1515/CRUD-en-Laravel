<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $categoria->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $categoria->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('creacion') }}
            {{ Form::text('creacion', $categoria->creacion, ['class' => 'form-control' . ($errors->has('creacion') ? ' is-invalid' : ''), 'placeholder' => 'Creacion']) }}
            {!! $errors->first('creacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('actualizacion') }}
            {{ Form::text('actualizacion', $categoria->actualizacion, ['class' => 'form-control' . ($errors->has('actualizacion') ? ' is-invalid' : ''), 'placeholder' => 'Actualizacion']) }}
            {!! $errors->first('actualizacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('acciones') }}
            {{ Form::text('acciones', $categoria->acciones, ['class' => 'form-control' . ($errors->has('acciones') ? ' is-invalid' : ''), 'placeholder' => 'Acciones']) }}
            {!! $errors->first('acciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>