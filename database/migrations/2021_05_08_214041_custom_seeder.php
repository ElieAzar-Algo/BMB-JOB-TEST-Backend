<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomSeeder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       

        // $users = array(
        //     array("name"=>"Tony","email"=>"tony@mail.com","password"=>"1234"),
        //     array("name"=>"Elie","email"=>"elie@mail.com","password"=>"1234"),
        //     array("name"=>"BMB","email"=>"bmb@mail.com","password"=>"1234"),
            
        // );

        $clients = array(
            array("name"=>"client1",'address'=>'Beirut','email'=>'client1@mail.com','phone'=>"70111111"),
            array("name"=>"client2",'address'=>'Zahle','email'=>'client2@mail.com','phone'=>"70222222"),
            array("name"=>"client3",'address'=>'Koura','email'=>'client3@mail.com','phone'=>"70333333"),
            array("name"=>"client4",'address'=>'Beqaa','email'=>'client4@mail.com','phone'=>"70444444"),
            array("name"=>"client5",'address'=>'Aley','email'=>'client5@mail.com','phone'=>"70555555"),
            array("name"=>"client6",'address'=>'Baalbeck','email'=>'client6@mail.com','phone'=>"70666666"),
            array("name"=>"client7",'address'=>'Tyre','email'=>'client7@mail.com','phone'=>"70777777"),
            
        );

        $products = array(
            array("name"=>"product1","price"=>"10",'available_quantity'=>"3"),
            array("name"=>"product2","price"=>"20",'available_quantity'=>"3"),
            array("name"=>"product3","price"=>"30",'available_quantity'=>"3"),
            array("name"=>"product4","price"=>"40",'available_quantity'=>"3"),
            array("name"=>"product5","price"=>"50",'available_quantity'=>"3"),
            array("name"=>"product6","price"=>"60",'available_quantity'=>"3"),
           
        );

        $orders = array(
            array("user_id"=>"1","client_id"=>"1",'date'=>"2021-05-09"),
            array("user_id"=>"1","client_id"=>"2",'date'=>"2021-05-09"),
            array("user_id"=>"1","client_id"=>"3",'date'=>"2021-05-07"),
            array("user_id"=>"1","client_id"=>"3",'date'=>"2021-05-07"),
            array("user_id"=>"1","client_id"=>"2",'date'=>"2021-05-06"),
            array("user_id"=>"1","client_id"=>"1",'date'=>"2021-05-02"),
            array("user_id"=>"1","client_id"=>"1",'date'=>"2021-05-05"),
            array("user_id"=>"1","client_id"=>"1",'date'=>"2021-05-04"),


            array("user_id"=>"2","client_id"=>"1",'date'=>"2021-05-09"),   
           
        );

        $order__products = array(
            array("order_id"=>"1","product_id"=>"1"),
            array("order_id"=>"1","product_id"=>"2"),
            array("order_id"=>"1","product_id"=>"3"),
            array("order_id"=>"1","product_id"=>"4"),

            array("order_id"=>"2","product_id"=>"1"),
            array("order_id"=>"2","product_id"=>"4"),

            array("order_id"=>"3","product_id"=>"5"),

            array("order_id"=>"4","product_id"=>"5"),
           
        );

      
       // DB::table('users')->insert($users);
        DB::table('clients')->insert($clients);
        DB::table('products')->insert($products);
        DB::table('orders')->insert($orders);
        DB::table('order__products')->insert($order__products);
       
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
