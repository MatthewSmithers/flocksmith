<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    //The individual will have an id, name, legband, wingband, and hatchdate.
    //The individual will have a poultry type.
    //The individual will have a sex of male, female, or unknown.
    /**
    *   The individual will have only one gender role (age determined ie., pullet/hen).
    */
    public function lifeStage()
    {
         return $this->hasOne(GenderRole::class);
    }
    //The individual will have an age based on the hatch date.
    //The individual will belong to a breed.
    //The individual's egg record(if female) will be a separate table recording id and egg count.
    //The individual will have a Sire, Dame, Sibling, Progeny, and Mating record.

    //many to many: breeds_varieties (pivot table)
    // breed_id ... variety_id
}
