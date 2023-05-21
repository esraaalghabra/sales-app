<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_panel_settings', function (Blueprint $table) {
            $table->id();
            $table->string('system_name',255);
            $table->string('photo',255);
            $table->tinyInteger('active');
            $table->string('general_alert',150);
            $table->string('address',150);
            $table->string('phone',100);
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('com_code');
            $table->integer('customer_parent_account_number');
            $table->integer('suppliers_parent_account_number');
            $table->integer('delegate_parent_account_number');
            $table->integer('employees_parent_account_number');
            $table->integer('production_lines_parent_account');

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
        Schema::dropIfExists('admin_panel_settings');
    }
};
