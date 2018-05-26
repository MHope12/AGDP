<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $table    = 'folders';
    protected $fillable = ['nameFolder', 'client_id'];   
    protected $guarded  = ['idFolder'];
    protected $primaryKey = 'idFolder';
}
