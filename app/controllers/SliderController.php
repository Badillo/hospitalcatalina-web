<?php

class SliderController extends \BaseController
{

    /**
     * Display a listing of the resource.
     * GET /slider
     *
     * @return Response
     */
    public function index()
    {

        $slider = SliderImage::all();

        return View::make('slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new slider
     *
     * @return Response
     */
    public function create()
    {
        $slider = SliderImage::all();

        return View::make('admin.slider', array('sliders' => $slider));

    }

    /**
     * Store a newly created slider in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data = Input::all();

        $slider = new SliderImage();

        if (!$slider->isValid($data)) {
            return Response::json(array('status' => false, 'dataError' => $slider->getListErrors()), 500);
        }

        $slider->name = $data['slider'];

        $slider->save();

        return Response::json(array('status' => true));
    }

    /**
     * Display the specified slider.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified slider.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $slider = SliderImage::find($id);

        return View::make('slider.edit', compact('slider'));
    }

    /**
     * Update the specified slider in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update()
    {

    }

    /**
     * Remove the specified slider from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        $id     = Input::all()['id'];
        $slider = SliderImage::findOrFail($id);

        $slider->delete();

        return Response::json(array('status' => true, 'id_slider' => $id));
    }

    // Carga de archivo jpg
    public function upload()
    {
        // Archivo a cargar
        $doc_file = Input::file('file');
        // Directorio de destino
        $destinationPath = public_path() . '/img/resources/slider/';
        //Si la ruta de carpetas no existe, entonces se crean
        if (!File::isDirectory($destinationPath)) {
            $result = File::makeDirectory($destinationPath, 0775, true);
        }
        // Directorio temporal
        $tempPath = public_path() . '/img/temp/';
        // Crear carpeta
        if (!File::isDirectory($tempPath)) {
            $result = File::makeDirectory($tempPath, 0775, true);
        }
        //Extension del archivo
        $extension = $doc_file->getClientOriginalExtension();
        // Mime Type
        $mimeType = $doc_file->getMimeType();

        // Nombre original del archivo
        $OriginalFileName = $doc_file->getClientOriginalName();
        // Tamaño original del archivo
        $OriginalFileSize = $doc_file->getSize();
        // Nombre temnporal del archivo
        $HashfileName = md5($OriginalFileName . rand(11111, 99999)) . '.' . $extension;

        // Reglas de archivo
        // Validacion de extension
        $extAllowed = array('jpg');
        if (!in_array($extension, $extAllowed)) {
            return Response::json(array('status' => false, 'message' => 'Documento invalido Por Extension'));
        }

        // Validacion de mimetype
        $mimeAllowed = array('application/octet-stream', 'application/x-download', 'image/jpeg');
        if (!in_array($mimeType, $mimeAllowed)) {
            return Response::json(array('status' => false, 'message' => 'Documento invalido Por Mimetype'));
        }

        // Validacion de tamaño de archivo
        $maxFileSize = (1024 * 1024 * 20); // 5MB
        if ($OriginalFileSize > $maxFileSize) {
            return Response::json(array('status' => false, 'message' => 'El documento es demasiado grande'));
        }

        try {
            // Carga de documentos al servidor
            $uploadSuccess = $doc_file->move($tempPath, $HashfileName);

            if ($uploadSuccess) {

                //$tempExt = File::extension($tempPath . $HashfileName);
                //if($tempExt == 'jpg' || $tempExt == 'png')
                //{
                //File::copy($tempPath . $HashfileName, $destinationPath . 'Timeline'.date('Y-m-d').'.'.$tempExt);
                //$OriginalFileName = 'Timeline'.date('Y-m-d').'.'.$tempExt;
                //}
                //else
                //{
                File::copy($tempPath . $HashfileName, $destinationPath . $OriginalFileName);
                //}

                return Response::json(array('status' => true, 'message' => 'Archivo cargado exitosamente', 'original' => $OriginalFileName, 'original_size' => $OriginalFileSize, 'uploaded' => $HashfileName, 'path' => $destinationPath . $OriginalFileName), 200);

            } else {
                return Response::json(array('status' => false, 'message' => 'Error al cargar el documento al servidor'), 200);
            }

        } catch (Exception $e) {
            return Response::json(array('status' => false, 'message' => 'Error al cargar el documento al servidor [' . $e->getMessage() . ']'), 200);
        }

    }

    public function deleteFile()
    {
        $filePath = Input::get('ruta');
        $fileSize = Input::get('tamano');

        File::delete($filePath);

        return Response::json(array('status' => true, 'message' => 'Se ha borrado el archivo', 'size' => $fileSize), 200);
    }

    public function getFileNames($cliente, $reporte)
    {
        $filesPath = public_path() . '/files/docs/' . $cliente . '/' . $reporte . '/' . date('Y-m-d');

        $files    = File::files($filesPath);
        $archivos = array();

        foreach ($files as $key => $value) {
            $name       = explode('/', $value);
            $archivos[] = $name[count($name) - 1];
        }

        return View::make('emails.form_email', array('cliente' => $cliente, 'reporte' => $reporte, 'files' => $archivos));
    }

    // Dscarga de archivo
    public function download($t, $file)
    {
        try {

            $_doc_path = public_path() . '/files/docs/';

            if (1 == $t || 2 == $t) {
                if (File::exists($_doc_path . $file)) {
                    return Response::download($_doc_path . $file);
                }
            }
        } catch (Exception $e) {
            return Redirect::to('/')->with('message_error', $e->getMessage());
        }
    }

    // Format size
    private function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . 'GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . 'MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . 'KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . 'bytes';
        } elseif (1 == $bytes) {
            $bytes = $bytes . 'byte';
        } else {
            $bytes = '0bytes';
        }
        return $bytes;
    }

}
