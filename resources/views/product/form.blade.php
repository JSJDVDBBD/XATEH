<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $product->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido_Paterno') }}
            {{ Form::text('Apellido_Paterno', $product->Apellido_Paterno, ['class' => 'form-control' . ($errors->has('Apellido_Paterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) }}
            {!! $errors->first('Apellido_Paterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido_Materno') }}
            {{ Form::text('Apellido_Materno', $product->Apellido_Materno, ['class' => 'form-control' . ($errors->has('Apellido_Materno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Materno']) }}
            {!! $errors->first('Apellido_Materno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::text('Correo', $product->Correo, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Rol') }}
            {{ Form::text('Rol', $product->Rol, ['class' => 'form-control' . ($errors->has('Rol') ? ' is-invalid' : ''), 'placeholder' => 'Rol']) }}
            {!! $errors->first('Rol', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>