<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Role_User;
use App\Models\Permission_Role;
use App\Models\Permission;

class Role extends Model
{
    protected $table    = 'role';
    protected $fillable = ['nameRole', 'description'];
    protected $guarded  = ['idRole'];
    protected $primaryKey = 'idRole';

    public function Role_User()
    {
        return $this->hasMany(Role_User::class, 'role_id', 'idRole');
    } 

    public function permission()
    {
       return $this->belongsToMany(Permission::class, 'Permission_Role', 'idPermission', 'idRole');
    }
}
