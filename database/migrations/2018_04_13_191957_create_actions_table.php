<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('axis_id');
			$table->string('code');
			$table->string('name', 512);
			$table->string('alias');
			$table->text('description')->nullable();
			$table->string('tags', 256)->nullable();
			$table->date('start_date_forecast');
			$table->date('end_date_forecast');
			$table->decimal('amount_forecast', 15, 2);
			$table->decimal('quantity_forecast', 15, 2);
			$table->string('quantity_unit');
			$table->date('start_date_real')->nullable();
			$table->date('end_date_real')->nullable();
			$table->decimal('amount_budgeted', 15, 2);
			$table->decimal('amount_invested', 15, 2);
			$table->decimal('quantity_real', 15, 2);
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
        Schema::dropIfExists('actions');
    }
}
