<?php
namespace App\Enums;

enum Role: int
{
	case ADMIN = 1;
	case IPPAN = 2;

	public function label(): string
	{
	  return match ($this) {
		Role::ADMIN => '管理者',
		Role::IPPAN => '一般',
	  };
	}

}