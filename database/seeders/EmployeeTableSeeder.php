<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('employee')->insert([
			'employee_id' => 'YZ00000001',
			'family_name' => 'やまだ',
			'first_name' => 'たろう',
			'section_id' => 1,
			'mail' => 'test@yaz.co.jp',
			'gender_id' => 1
		]);
	}
}
