<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('financial_organization_id')->unsigned();
            $table->bigInteger('store_id')->unsigned()->nullable();
            $table->string('account_name');
            $table->string('account_no');
            $table->string('branch',20);
            $table->tinyInteger('account_type')->comment('1=Saving account,2=current account,3=join account');
            $table->string('swift_code',100);
            $table->string('route_no',100);
            $table->softDeletes();
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
        Schema::dropIfExists('bank_accounts');
    }
}
