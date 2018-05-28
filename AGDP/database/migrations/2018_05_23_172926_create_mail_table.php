<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mailE', function(Blueprint $table)
		{
			$table->integer('idMail', true);
			$table->char('idMail2', 3);
			$table->char('codEnterprise', 2);
			$table->boolean('typeMail');
			$table->integer('folder_id');
			$table->string('affair', 200);
			$table->integer('dependency_id');
			$table->date('creationDate');
			$table->date('internalEstablishmentDate');
			$table->date('receivedDate');
			$table->integer('storagew_id');  
			$table->string('observations', 125);
			$table->boolean('deliveredToArchive');
			$table->string('shippingWay', 30);
			$table->string('nameMessenger', 50);
			$table->rememberToken();
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
		Schema::dropIfExists('mail');
	}

}
