<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'cate_id',
    	'title',
        'thumbnail',
    	'slug',
    	'view',
    	'tags',
    	'price_id',
    	'datetime_start',
    	'datetime_end',
        'content',
        'name_contact',
        'phone_contact',
        'address_contact',
        'company_name',
        'website',
        'facebook',
        'email',
    	'status',
        'type',
    	'province_id',
    	'district_id',
    	'ward_id',
        'soft_delete',
    ];
}
