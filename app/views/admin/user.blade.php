@extends('admin.master')

@section('menu')
    <div class="tab-pane animation-fadeInQuick" id="tab-add">
        <!-- Basic Form Elements Title -->
        <div class="block-title">
            <h2><strong>Registro de Usuarios</strong></h2>
        </div>
        <!-- END Form Elements Title -->
        <!-- Basic Form Elements Content -->
        <form action="javascript:void(0);" class="form-horizontal form-bordered">
            <div class="form-group">
                {{ Form::label('name', 'Nombre:', array('class' => 'col-md-3 control-label') )  }}
                <div class="col-md-6">
                    {{ Form::text('name', '', array('class'  => 'form-control', 'required') ) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('username', 'Usuario:', array('class' => 'col-md-3 control-label') )  }}
                <div class="col-md-6">
                    {{ Form::text('username', '', array('class'  => 'form-control', 'required') ) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('password', 'Contraseña:', array('class' => 'col-md-3 control-label') )  }}
                <div class="col-md-6">
                    {{ Form::password( 'password', array('class' => 'form-control', 'required' ) ) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('password_confirmation', 'Confirmar contraseña:', array('class' => 'col-md-3 control-label') )  }}
                <div class="col-md-6">
                    {{ Form::password( 'password_confirmation', array('class' => 'form-control', 'required' ) ) }}
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-md-6 col-md-offset-3">
                    {{ Form::button('<i class="fa fa-angle-right"></i> Registrar usuario', array( 'type' => 'submit', 'class' => 'btn btn-sm btn-primary', 'id' => 'btn-add-user' ) ) }}
                    {{ Form::button('<i class="fa fa-repeat"></i> Limpiar', array( 'type' => 'reset', 'class' => 'btn btn-sm btn-warning' ) ) }}
                </div>
            </div>
        </form>
        <!-- END Basic Form Elements Content -->
    </div>

    <div class="tab-pane animation-fadeInQuick" id="tab-edit">
        <!-- Article Content -->
        <div class="block-title">
            <h2><strong>Edición de Usuarios</strong></h2>
        </div>
            <!-- Article Block -->
            <div class="block block-alt-noborder">
                <form action="javascript:void(0);" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="select-name-user">Usuarios</label>
                        <div class="col-md-6">
                        <select id="select-name-user" name="select-name-user" class="form-control" size="1">
                            <option value="0">Seleccione un Usuario</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col-md-4">

                        //Pendiente actualizar datos de usuarios y cambiar color de boton de acuerdo a status del usuario
                            {{ Form::button('Desactivar Usuario', array('class' => 'btn btn-sm btn-danger', 'id' => 'btn-activate-user' ) ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('edit_name', 'Nombre:', array('class' => 'col-md-3 control-label') )  }}
                        <div class="col-md-6">
                            {{ Form::text('edit_name', '', array('class'  => 'form-control', 'required') ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('edit_username', 'Usuario:', array('class' => 'col-md-3 control-label') )  }}
                        <div class="col-md-6">
                            {{ Form::text('edit_username', '', array('class'  => 'form-control', 'required') ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('edit_password', 'Contraseña:', array('class' => 'col-md-3 control-label') )  }}
                        <div class="col-md-6">
                            {{ Form::password( 'edit_password', array('class' => 'form-control', 'required' ) ) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('edit_password_confirmation', 'Confirmar contraseña:', array('class' => 'col-md-3 control-label') )  }}
                        <div class="col-md-6">
                            {{ Form::password( 'edit_password_confirmation', array('class' => 'form-control', 'required' ) ) }}
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-6 col-md-offset-3">
                            {{ Form::button('<i class="fa fa-angle-right"></i> Registrar usuario', array( 'type' => 'submit', 'class' => 'btn btn-sm btn-primary', 'id' => 'btn-update-user' ) ) }}
                            {{ Form::button('<i class="fa fa-repeat"></i> Limpiar', array( 'type' => 'reset', 'class' => 'btn btn-sm btn-warning' ) ) }}
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Article Block -->
        <!-- END Article Content -->
    </div>
@stop
