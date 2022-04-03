<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $private_key_bits 
 * @property string $private_key 
 * @property string $public_key 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property int $is_del 
 * @property string $services_id 
 */
class Rsa extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rsa';
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
    protected $casts = ['id' => 'integer', 'private_key_bits' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'is_del' => 'integer'];
}