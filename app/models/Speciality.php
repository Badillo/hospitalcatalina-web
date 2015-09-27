<?php

class Speciality extends \Eloquent
{
    protected $fillable = [];
    protected $table    = 'specialities';
    private $errors;

    public function promo()
    {
        return $this->hasMany('Promo');
    }

    public function doctor()
    {
        return $this->belongsToMany('Doctor');
    }

    public function isValid($data)
    {
        $rules = array(
            'speciality' => 'required|string|unique:specialities,name',
        );

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            $this->errors = $validator->errors();
            return false;
        }

        return true;
    }

    public function getListErrors()
    {
        $listErrors = '<ul>';
        $error      = json_decode($this->errors);
        foreach ($error as $key => $value) {
            foreach ($value as $index => $valor) {
                $listErrors .= "<li>" . $valor . "</li>";
            }

        }
        $listErrors .= '</ul>';

        return $listErrors;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
