<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth;

class Usuario extends Model implements Authenticatable
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'correo', 'telefono', 'password'];
    protected $table = 'aut_usuario';

    public function getAuthIdentifierName() {
        return 'correo';
    }

    public function getAuthIdentifier()
    {
        return $this->attributes[$this->getAuthIdentifierName()];
    }

    public function getAuthPassword()
    {
        return $this->attributes['password'];
    }

    public function setRememberToken($value)
            {
                        $this->attributes[$this->getRememberTokenName()] = $value;
                            }

        /**
            *      * Get the column name for the "remember me" token.
            *           *
            *                * @return string
            *                     */
        public function getRememberTokenName()
                {
                            return 'remember_token';
                                }

    public function getRememberToken()
            {
                        return $this->attributes[$this->getRememberTokenName()];
                            }
}
