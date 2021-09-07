<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class Tree
 * @package App\Models
 * @version September 6, 2021, 12:16 pm UTC
 *
 * @property string $tree_name
 * @property string $description
 * @property string $status
 * @property integer $available_number
 */
class Tree extends Model
{
    use SoftDeletes;

    public $table = 'trees';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'tree_name',
        'description',
        'status',
        'available_number'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tree_name' => 'string',
        'status' => 'string',
        'available_number' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tree_name' => 'required'
    ];

    
}
