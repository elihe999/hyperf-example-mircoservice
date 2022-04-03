<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $remark 
 * @property string $ip_list 
 * @property int $rsa_id 
 * @property int $created_by 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $is_del 
 * @property string $deleted_at 
 * @property string $app_id 
 * @property string $app_secret 
 * @property int $status 
 */
class ThirdPartyService extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'third_party_services';
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
    protected $casts = ['id' => 'integer', 'rsa_id' => 'integer', 'created_by' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'is_del' => 'integer', 'status' => 'integer'];
}