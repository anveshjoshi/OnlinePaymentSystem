<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sender');
            $table->string('payer_name');
            $table->string('payer_email');
            $table->string('payer_phone');
            $table->string('payment_detail');
            $table->string('due_amount');
            $table->string('order_id');
            $table->string('tin');
            $table->string('specified_merchant');
            $table->string('due_date');
            $table->string('reminder_type')->nullable();
            $table->string('reminder_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_invoices');
    }
}
