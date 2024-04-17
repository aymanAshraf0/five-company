<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationInfoToVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            // يمكنك إضافة المزيد من الأعمدة حسب الحاجة
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visits', function (Blueprint $table) {
            $table->dropColumn(['city', 'region', 'country']);
            // تعديل حسب الأعمدة التي قمت بإضافتها
        });
    }
}

