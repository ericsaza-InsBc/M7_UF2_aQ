<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contingut
 *
 * @property $id
 * @property $description
 * @property $ra_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Activitat[] $activitats
 * @property ActivitatContingut[] $activitatContinguts
 * @property Ra $ra
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contingut extends Model
{
    
    static $rules = [
		'description' => 'required',
		'ra_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','ra_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activitats()
    {
        return $this->hasMany('App\Models\Activitat', 'contingut_ids', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activitatContinguts()
    {
        return $this->hasMany('App\Models\ActivitatContingut', 'contingut_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ra()
    {
        return $this->hasOne('App\Models\Ra', 'id', 'ra_id');
    }
    

}
