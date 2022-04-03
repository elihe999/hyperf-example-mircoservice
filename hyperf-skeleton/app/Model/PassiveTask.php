<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property int $source_id 
 * @property string $task_type 
 * @property string $expire_time 
 * @property string $identity_conf 
 * @property int $source_type 
 * @property string $ip_list 
 * @property int $status 
 * @property int $created_by 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property int $is_del 
 * @property string $remark 
 * @property int $encrypt_type 
 * @property string $app_id 
 */
class PassiveTask extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Passive_task';
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
    protected $casts = ['id' => 'integer', 'source_id' => 'integer', 'source_type' => 'integer', 'status' => 'integer', 'created_by' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'is_del' => 'integer', 'encrypt_type' => 'integer'];
}