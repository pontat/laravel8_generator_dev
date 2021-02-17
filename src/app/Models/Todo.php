<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Todo
 * @package App\Models
 * @version February 17, 2021, 11:01 pm JST
 *
 * @property integer $user_id
 * @property string $title
 * @property integer $status
 */
class Todo extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'todos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'title',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'title' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|max:20',
        'status' => 'required|numeric'
    ];

    
}
