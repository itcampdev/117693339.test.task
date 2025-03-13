<?php

namespace App\Enum;

enum TodoStatusEnum: string
{
    case NEW = 'new';
    case IN_PROGRESS = 'inprogress';
    case DONE = 'done';
}