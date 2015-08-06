<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait;
    use SoftDeletingTrait;

    private $errors;

    public function isValid($data)
    {
        $rules = array(
            'name'     => 'required|string',
            'username' => 'required|alpha_num|unique:users|min:5',
            'password' => 'required|confirmed|min:6',
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

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');
}
