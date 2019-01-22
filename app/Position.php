<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Worker;

class Position extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the workers for the position.
     */
    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}
