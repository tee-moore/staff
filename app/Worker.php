<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Worker extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

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
        'first_name',
        'last_name',
        'phone',
        'email',
        'position_id',
        'salary',
        'parent_id',
        'avatar',
        'hiring_date',
        'level',
    ];

    /**
     * Get the childs worker.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childs() {
        return $this->hasMany(Worker::class,'parent_id','id') ;
    }

    /**
     * Get the position that owns the worker.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
