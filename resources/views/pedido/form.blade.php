<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('destinatario') }}
            {{ Form::text('destinatario', $pedido->destinatario, ['class' => 'form-control' . ($errors->has('destinatario') ? ' is-invalid' : ''), 'placeholder' => 'Destinatario']) }}
            {!! $errors->first('destinatario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $pedido->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso') }}
            {{ Form::text('peso', $pedido->peso, ['class' => 'form-control' . ($errors->has('peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $pedido->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto') }}
            {{ Form::text('contacto', $pedido->contacto, ['class' => 'form-control' . ($errors->has('contacto') ? ' is-invalid' : ''), 'placeholder' => 'Contacto']) }}
            {!! $errors->first('contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_servicio') }}
            {{ Form::text('id_servicio', $pedido->id_servicio, ['class' => 'form-control' . ($errors->has('id_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Id Servicio']) }}
            {!! $errors->first('id_servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_vehiculo') }}
            {{ Form::text('id_vehiculo', $pedido->id_vehiculo, ['class' => 'form-control' . ($errors->has('id_vehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Id Vehiculo']) }}
            {!! $errors->first('id_vehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_precio') }}
            {{ Form::text('id_precio', $pedido->id_precio, ['class' => 'form-control' . ($errors->has('id_precio') ? ' is-invalid' : ''), 'placeholder' => 'Id Precio']) }}
            {!! $errors->first('id_precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_cliente') }}
            {{ Form::text('id_cliente', $pedido->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>