<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    protected $table="user_order";
    protected $fillable=['user_id','shipping_method','AWB_NO','transaction_id','status','grand_total','shipping_charges','coupon_id','billing_address','billing_city','billing_state','billing_country','billing_pincode','shipping_address','shipping_city','shipping_state','shipping_country','shipping_pincode'
];
}
