<?php


namespace SimonDavies\SlimVanilla\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Messages
 * @package SimonDavies\SlimVanilla\Models
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