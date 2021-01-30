<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank_account extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'financial_organization_id',
        'store_id',
        'account_name',
        'account_no',
        'branch',
        'account_type',
        'swift_code',
        'route_no',
    ];
    public function bank()
    {
        return $this->belongsTo(Financial_organization::class,'financial_organization_id','id');
    }
}
