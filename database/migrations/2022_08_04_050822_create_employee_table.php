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
		Schema::create('employee', function (Blueprint $table) {
			// https://readouble.com/laravel/8.x/ja/migrations.html#column-method-id
			$table->increments('id')->nullable(false);					// ID 数値型 NOTNULL,PK,AUTOINCREMENT
			$table->char('employee_id', 10)->unique()->nullable(false);	// 社員ID 文字列型 NOTNULL,UNIQUE, 10 固定
			$table->string('family_name', 20)->nullable(false);			// 社員名(姓) 文字列型 NOTNULL 20 可変
			$table->string('first_name', 20)->nullable(false);			// 社員名(名) 文字列型 NOTNULL 20 可変
			$table->smallInteger('section_id')->nullable(false);		// 所属セクション 数値型 NOTNULL 1 固定
			$table->string('mail', 256)->nullable(false);				// メアド 文字列型 NOTNULL 256 可変
			$table->smallInteger('gender_id')->nullable(false);			// 性別 数値型 NOTNULL 1 固定
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('employee');
	}
};
