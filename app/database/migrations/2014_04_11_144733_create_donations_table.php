<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donations', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id')->unsigned();
	        $table->string('first_name');
	        $table->string('middle_name');
	        $table->string('last_name');
	        $table->string('organization');
	        $table->string('email_address');
	        $table->string('contact_number');
	        $table->string('mailing_address');
	        $table->string('city');
	        $table->string('zip_code');
	        $table->string('country');
	        $table->string('donator_type');
	        $table->string('donator_desc');
	        $table->string('project');
	        $table->double('amount', 15, 8);
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
		Schema::drop('donations');
	}

}
