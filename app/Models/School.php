<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class School
 * @package App\Models
 * @version September 6, 2021, 11:10 am UTC
 *
 * @property string $school_name
 * @property string $school_adress
 * @property string $school_contacts
 * @property string $contact_person
 */
class School extends Model
{
    use SoftDeletes;

    public $table = 'schools';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'school_name',
        'school_adress',
        'school_contacts',
        'contact_person'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'school_name' => 'string',
        'contact_person' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'school_name' => 'required',
        'school_adress' => 'required'
    ];

    
}
