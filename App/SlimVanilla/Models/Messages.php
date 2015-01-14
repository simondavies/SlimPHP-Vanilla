<?php


namespace SlimVanilla\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Messages
 * @package SlimVanilla\Models
 */
class Messages extends Model {

    /**
     * @var string
     */
    public $table = 'messages';
    /**
     * @var array
     */
    protected $fillable = ['message'];

}