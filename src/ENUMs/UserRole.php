<?php

namespace Taugust\CommonLibary\ENUMs;

enum UserRole:string
{
    case ADMIN = "Admin";
    case USER = "User";
    case GUEST = "Guest";
}