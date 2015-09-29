@extends('admin.master')

@section('menu')
    <div class="tab-pane animation-fadeInQuick" id="tab-add">
        <!-- Basic Form Elements Title -->
        <div class="block-title">
            <h2><strong>Agregar Imagenes</strong></h2>
        </div>
        <!-- END Form Elements Title -->
        <!-- Basic Form Elements Content -->
        <form id="uploadForm" method="post" action="javascript:void(0);" class="form-horizontal form-bordered" enctype="multipart/form-data">
            <div class="dropzone" id="dropzone"></div>
        </form>
        <!-- END Basic Form Elements Content -->
    </div>

    <div class="tab-pane animation-fadeInQuick" id="tab-edit">
        <!-- Article Content -->
        <div class="block-title">
            <h2><strong>Edición de Imagenes</strong></h2>
        </div>
            <!-- Article Block -->
                <form action="javascript:void(0);" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <div class="col-md-12">
                            <!-- Lightbox Gallery with Options Block -->
                            <div class="block">
                                <!-- Lightbox Gallery with Options Title -->
                                <div class="block-title">
                                    <h2><strong>Imagenes del visor</h2>
                                </div>
                                <!-- END Lightbox Gallery with Options Title -->
                                <!-- Lightbox Gallery with Options Content -->
                                <div class="gallery" data-toggle="lightbox-gallery">
                                    <div class="row">
                                        @foreach( $sliders as $slider)
                                            <div class="col-sm-4 gallery-image">
                                                {{ Form::image($slider->link, $slider->description, array( 'class' => 'img-responsive' )) }}
                                                <div class="gallery-image-options text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Eliminar"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- END Lightbox Gallery with Options Content -->
                            </div>
                            <!-- END Lightbox Gallery with Options Block -->
                        </div>
                </form>
            </div>
            <!-- END Article Block -->
        <!-- END Article Content -->
    </div>
@stop

@section('scripts')
    {{ HTML::style('js/dropzone/dropzone.css') }}
    {{ HTML::script('js/dropzone/dropzone.js') }}
    {{ HTML::script('js/dropzone/upload.js') }}
@stop