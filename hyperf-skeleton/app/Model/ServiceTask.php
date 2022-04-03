<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property int $source_id 
 * @property string $channel 
 * @property string $expire_time 
 * @property int $is_single 
 * @property int $is_dispatch 
 * @property string $cycle_rule 
 * @property string $cycle_text 
 * @property string $identity_conf 
 * @property string $field_bind 
 * @property string $target_mysql_struct 
 * @property int $run_status 
 * @property int $is_del 
 * @property string $inc_dt 
 * @property int $task_process 
 * @property string $last_run_time 
 * @property int $created_by 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property int $ftp_format 
 * @property int $encrypt_type 
 * @property int $rsa_id 
 * @property string $ftp_path 
 * @property int $priority 
 * @property string $api_url_conf 
 * @property string $remark 
 * @property string $field_filter 
 */
class ServiceTask extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Service_task';
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
    protected $casts = ['id' => 'integer', 'source_id' => 'integer', 'is_single' => 'integer', 'is_dispatch' => 'integer', 'run_status' => 'integer', 'is_del' => 'integer', 'task_process' => 'integer', 'created_by' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'ftp_format' => 'integer', 'encrypt_type' => 'integer', 'rsa_id' => 'integer', 'priority' => 'integer'];
}