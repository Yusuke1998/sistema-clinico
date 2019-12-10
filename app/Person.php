<?php
// Persona
namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
    	'firstname','lastname','firstnameii','lastnameii','document_id','nro_document','img_document','birthday','direction','local_phone','movil_phone','mail_contact','gender'
    ];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
