<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    protected $fillable = [
        'tenant_id', 'last_name', 'first_name', 'middle_name', 'birth_date', 'relationship_id'
    ];

    
    public function relationships()
    {
        return $this->belongsTo(Relationship::class, 'relationship_id');
    }

    public function tenants()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }
}
