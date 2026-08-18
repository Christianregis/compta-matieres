<?php

namespace App\Enum\User;

enum UserRole: string
{
    case USER = 'user';
    case ADMIN = 'admin';
}
