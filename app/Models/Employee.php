<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

	// 明示的にモデルと関連づけるテーブルを定義しなければ、クラスの複数形のスネークケースをテーブル名として使用する
	protected $table = 'employee';

	// public function getData() {
	// 	return '名前:'.$this -> family_name.'---メール:'.$this -> mail;
	// }
	// public function getData() {
	// 	return $this;
	// }

	public function getFullName() {
		return $this->family_name . ' ' . $this->first_name;
	}

	public function getSection() {
		switch ($this->section_id) {
			case 1:
				return 'シス開';
				break;
			case 2:
				return 'グロカル';
				break;
			case 3:
				return 'ビジソル';
				break;
			default:
				return '所属なし';
		}
	}

	public function getGender() {
		if ($this->gender_id === 1) {
			return '男性';
		} else {
			return '女性';
		}
	}
}
