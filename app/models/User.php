<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use RemindableTrait;

    public $timestamps = true;

    protected $fillable = ['username', 'firstname', 'emailaddress', 'password'];

    public static $rules = [
        'username' => 'required|alphanum|unique:users',
        'emailaddress' => 'required|email|unique:users',
        'password' => 'required|min:6'
    ];

    public $messages;

    use UserTrait, RemindableTrait;

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

    public function getReminderEmail() {
        return $this->email;
    }

    public function isValid() {
        $validation = Validator::make($this->attributes, static::$rules);

        if($validation->passes()) {
            return true;
        }
        $this->messages = $validation->messages();
        return false;
    }

}
