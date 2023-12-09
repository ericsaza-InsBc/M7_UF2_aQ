<?php

namespace App\Models;
use App\Models\Contingut;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Activitat
 *
 * @property $id
 * @property $description
 * @property $programacion_id
 * @property $uf_id
 * @property $ra_ids
 * @property $criteris_ids
 * @property $contingut_ids
 * @property $created_at
 * @property $updated_at
 *
 * @property ActivitatContingut[] $activitatContinguts
 * @property ActivitatCriteri[] $activitatCriteris
 * @property ActivitatRa[] $activitatRas
 * @property Contingut $contingut
 * @property Criteri $criteri
 * @property Programacion $programacion
 * @property Ra $ra
 * @property Uf $uf
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Activitat extends Model
{

    static $rules = [
		'description' => 'required',
		'programacion_id' => 'required',
		'uf_id' => 'required',
		'ra_ids' => 'required',
		'criteris_ids' => 'required',
		'contingut_ids' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','programacion_id','uf_id','ra_ids','criteris_ids','contingut_ids'];



    public function continguts(): BelongsToMany
    {
       return $this->belongsToMany(Contingut::class);
    }

    public function criteris(): BelongsToMany
    {
        return $this->belongsToMany(Criteri::class);
    }

    public function ras(): BelongsToMany
    {
        return $this->belongsToMany(Ra::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contingut()
    {
        return $this->hasOne('App\Models\Contingut', 'id', 'contingut_ids');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function criteri()
    {
        return $this->hasOne('App\Models\Criteri', 'id', 'criteris_ids');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programacion()
    {
        return $this->hasOne('App\Models\Programacion', 'id', 'programacion_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ra()
    {
        return $this->hasOne('App\Models\Ra', 'id', 'ra_ids');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function uf()
    {
        return $this->hasOne('App\Models\Uf', 'id', 'uf_id');
    }


}
