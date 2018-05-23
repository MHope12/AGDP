<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRoleUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('role_user', function(Blueprint $table)
		{
			$table->foreign('role_id', 'role_user_ibfk_1')->references('idRole')->on('role')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'role_user_ibfk_2')->references('idUser')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('role_user', function(Blueprint $table)
		{
			$table->dropForeign('role_user_ibfk_1');
			$table->dropForeign('role_user_ibfk_2');
		});
	}

}
