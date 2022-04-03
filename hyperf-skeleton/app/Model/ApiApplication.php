<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property string $api_id 
 * @property int $id 
 * @property int $service_id 
 * @property string $remark 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property string $identity_conf 
 * @property int $status 
 * @property string $expire_time 
 * @property int $created_by 
 * @property int $deleted_by 
 */
class ApiApplication extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Api_application';
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
    protected $casts = ['id' => 'integer', 'service_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'status' => 'integer', 'created_by' => 'integer', 'deleted_by' => 'integer'];
}