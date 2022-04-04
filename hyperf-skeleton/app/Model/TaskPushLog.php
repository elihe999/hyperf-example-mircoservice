<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $task_id 
 * @property string $file 
 * @property string $dt 
 * @property int $size 
 * @property \Carbon\Carbon $created_at 
 */
class TaskPushLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TaskPushLog';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'task_id' => 'integer', 'size' => 'integer', 'created_at' => 'datetime'];
}