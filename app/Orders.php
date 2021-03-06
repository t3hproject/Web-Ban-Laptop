<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Orders extends Model
{
    //
    public static function getAllProductByOrderId($id){
        $list_product = DB::table('order_product')->select("*")->where('order_id','=', $id)->get();
        return $list_product;
    }

    public static function getAllCustomerByOrderId($id){
    	$list_customer = DB::table('customers')->select("*")->where('order_id','=', $id)->get();
    	return $list_customer;
    }

}
