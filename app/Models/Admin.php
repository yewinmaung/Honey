<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{
    protected $guarded = ['id'];    protected $hidden = [
    'password',
];    public function getAuthPassword()
{
    return $this->password;
}
    use HasFactory;
}
