<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToOrdersTable extends Migration
{
    public function up()
{
    if (!Schema::hasColumn('orders', 'status')) {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('status')->default('pending');
        });
    }
}

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('status'); // Xóa cột status nếu rollback migration
        });
    }
}
