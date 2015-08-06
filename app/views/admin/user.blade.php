@extends('admin.master')

@section('menu')
    <div class="tab-pane animation-fadeInQuick" id="tab-add">
        <!-- Basic Form Elements Title -->
        <div class="block-title">
            <h2><strong>Registro de Usuarios</strong></h2>
        </div>
        <!-- END Form Elements Title -->
        <!-- Basic Form Elements Content -->
        @if($errors->any())
            <div class="alert alert-danger alert-dismissable">
                <h4><i class="fa fa-times-circle"></i> Los datos introducidos no son validos!</h4>
                <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
                </ul>
            </div>
        @endif
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
            <!-- Article Block -->
            <div class="block block-alt-noborder">

            </div>
            <!-- END Article Block -->
        <!-- END Article Content -->
    </div>

    <div class="tab-pane animation-fadeInQuick" id="tab-delete">
        <!-- Article Content -->
            <!-- Article Block -->
            <div class="block block-alt-noborder">

            </div>
            <!-- END Article Block -->
        <!-- END Article Content -->
    </div>
@stop
