<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Onboard
 *
 * @property $id
 * @property $title
 * @property $image
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Onboard extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'image', 'description'];



}
