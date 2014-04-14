<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donation', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id')->unsigned();
	        $table->string('first_name');
	        $table->string('middle_name');
	        $table->string('last_name');
	        $table->string('organization');
	        $table->string('email_address');
	        $table->string('contact_number', 20);
	        $table->string('mailing_address');
	        $table->string('city');
	        $table->string('zip_code', 6);
	        $table->string('country', 45);
	        $table->string('donator_type', 6);
	        $table->string('donator_desc');
	        $table->string('project');
	        $table->string('ip_address', 15);
	        $table->double('amount', 15, 2);
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
		Schema::drop('donation');
	}

}
