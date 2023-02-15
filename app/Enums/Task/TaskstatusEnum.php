<?php

namespace App\Enums\Task;

enum TaskstatusEnum: string
{
    case BACKLOG = 'Backlog';
    case TODO = 'Todo';
    case INPROGRESS = 'In progress';
    case TEST = 'Test';
    case CLOSE = 'Closed';
}
