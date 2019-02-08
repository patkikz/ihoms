<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    protected $fillable = [
        'tenant_id', 'last_name', 'first_name', 'middle_name', 'birth_date', 'birth_place', 'province' , 'relationship_id'
    ];

    protected $dates = ['birth_date'];
    public function relationships()
    {
        return $this->belongsTo(Relationship::class, 'relationship_id');
    }

    public function tenants()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }
}
