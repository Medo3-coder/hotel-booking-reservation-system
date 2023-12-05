<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable {
    use HasFactory, SoftDeletes;
    protected $table = 'admins';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'image',
        'is_notify',
        'is_blocked',
    ];



    protected $hidden = ['password'];

    protected $cast = [
        'is_notify'  => 'boolean',
        'is_blocked' => 'boolean',
    ];

    public function getImageAttribute() {
        if ($this->attributes['image']) {
            $image = $this->getImage($this->attributes['image'], 'admins');
        } else {
            $image = $this->defaultImage('admins');
        }
        return $image;
    }

    public function setImageAttribute($value) {
        if ($value != null && is_file($value)) {
            isset($this->attributes['image']) ? $this->deleteFile($this->attributes['image'], 'admins') : '';
            $this->attributes['image'] = $this->uploadAllTyps($value, 'admins');
        }
    }

}
