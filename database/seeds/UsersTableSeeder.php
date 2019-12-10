<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Administrador
    	$document = App\Document::first();
    	$person = App\Person::create([
            'firstname'     =>  'Jhonny',
            'firstnameii'	=>	'Jose',
            'lastname'      =>  'Pérez',
            'lastnameii'    =>  'Martinez',
            'gender'	    =>	'm',
            'document_id'	=>	$document->id,
            'nro_document'	=>	'26039408',
            'birthday'		=>	'1998-02-27',
            'direction'		=>	'villa de cura, las mercedes',
            'local_phone'	=>	'02443864361',
            'movil_phone'	=>	'04161428973',
            'mail_contact'	=>	'jhonnyjose1998@gmail.com'
        ]);
        $user = App\User::create([
            'username'		=> 'admin', 
            'email'         => 'admin@admin.com', 
            'password'      => bcrypt('admin'),
            'type'			=>	'root',
            'person_id'		=> $person->id
        ]);
        // Fin Administrador
    }
}
