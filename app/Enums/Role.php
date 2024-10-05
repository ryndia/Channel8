<?php

namespace App\Enums;

enum Role: string
{
    case ADMINISTRATOR = 'administrator';
    case WRITER = 'writer';
    case REPORTER = 'reporter';
    case READER = 'reader';
}
