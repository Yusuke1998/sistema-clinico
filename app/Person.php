<?php
// Persona
namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
    	'firstname','lastname','document_id','nro_document','img_document','birthday','direction','local_phone','movil_phone','mail_contact'
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
