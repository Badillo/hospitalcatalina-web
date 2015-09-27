@extends('admin.master')

@section('menu')
    <div class="tab-pane animation-fadeInQuick" id="tab-add">
        <!-- Basic Form Elements Title -->
        <div class="block-title">
            <h2><strong>Registro de Especialidades</strong></h2>
        </div>
        <!-- END Form Elements Title -->
        <!-- Basic Form Elements Content -->
        <form action="javascript:void(0);" class="form-horizontal form-bordered">
            <div class="form-group">
                {{ Form::label('speciality', 'Especialidad:', array('class' => 'col-md-3 control-label') )  }}
                <div class="col-md-6">
                    {{ Form::text('speciality', '', array('class'  => 'form-control', 'required') ) }}
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-md-6 col-md-offset-3">
                    {{ Form::button('<i class="fa fa-angle-right"></i> Registrar especialidad', array( 'type' => 'submit', 'class' => 'btn btn-sm btn-primary', 'id' => 'btn-add-speciality' ) ) }}
                    {{ Form::button('<i class="fa fa-repeat"></i> Limpiar', array( 'type' => 'reset', 'class' => 'btn btn-sm btn-warning' ) ) }}
                </div>
            </div>
        </form>
        <!-- END Basic Form Elements Content -->
    </div>

    <div class="tab-pane animation-fadeInQuick" id="tab-edit">
        <!-- Article Content -->
        <div class="block-title">
            <h2><strong>Edición de Especialidades</strong></h2>
        </div>
            <!-- Article Block -->
            <div class="block block-alt-noborder">
                <form action="javascript:void(0);" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="select-name-speciality">Especialidad: </label>
                        <div class="col-md-6">
                        <select id="select-name-speciality" name="select-name-speciality" class="form-control" size="1">
                            <option value="0">Seleccione una especialidad</option>
                            @foreach($specialities as $speciality)
                                <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col-md-4">
                            {{ Form::button('Eliminar especialidad', array('class' => 'btn btn-sm btn-primary', 'id' => 'btn-delete-speciality', 'disabled' => 'disabled' ) ) }}
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Article Block -->
        <!-- END Article Content -->
    </div>
@stop
