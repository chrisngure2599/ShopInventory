<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixDiscountErrorOnSalesDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales_details',function(){
            DB::statement('ALTER TABLE sales_details MODIFY COLUMN discount_percent DOUBLE(50,2) UNSIGNED NOT NULL DEFAULT "0.00"');
            DB::statement('ALTER TABLE sales_details MODIFY COLUMN discount_amount DOUBLE(50,2) UNSIGNED NOT NULL DEFAULT "0.00"');
            DB::statement('ALTER TABLE sales_details MODIFY COLUMN tax_percent DOUBLE(50,2) UNSIGNED NOT NULL DEFAULT "0.00"');

            DB::statement('ALTER TABLE sales_details MODIFY COLUMN tax_amount DOUBLE(50,2) UNSIGNED NOT NULL DEFAULT "0.00"');
            DB::statement('ALTER TABLE sales_details MODIFY COLUMN grand_total DOUBLE(50,2)');
            DB::statement('ALTER TABLE sales_details MODIFY COLUMN closing_balance DOUBLE(50,2) UNSIGNED NOT NULL DEFAULT "0.00"');
            DB::statement('ALTER TABLE sales_details MODIFY COLUMN closing_due DOUBLE(50,2) UNSIGNED NOT NULL DEFAULT "0.00"');
        });
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
