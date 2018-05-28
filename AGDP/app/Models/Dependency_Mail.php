<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MailE;
use App\Models\Dependency;

class Mail_Dependency extends Model
{
    protected $table 	= 'mail_dependency';
    protected $fillable = ['mail_id', 'dependency_id'];
    protected $guarded 	= ['nMD'];
    protected $primaryKey = 'nMD';

    public function MailE()
    {
    	return $this->belongsTo(MailE::class, 'mail_id', 'idMail');
    }

    public function Dependency()
    {
    	return $this->belongsTo(Dependency::class, 'dependency_id', 'idDependency');
    }
}