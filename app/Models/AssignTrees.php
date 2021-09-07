<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class AssignTrees
 * @package App\Models
 * @version September 6, 2021, 12:42 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $trees
 * @property string $Tree_category
 * @property string $schoo_to_be_assigned_to
 * @property integer $number_to_assign
 * @property string $comment
 */
class AssignTrees extends Model
{
    use SoftDeletes;

    public $table = 'assigntreess';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Tree_category',
        'schoo_to_be_assigned_to',
        'number_to_assign',
        'comment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Tree_category' => 'string',
        'schoo_to_be_assigned_to' => 'string',
        'number_to_assign' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    // public function trees()
    // {
    //     return $this->hasMany(\App\Models\tree::class, 'id', 'id');
    // }
}
