<?php

namespace soufianelasmar\quicknote\Enums;

enum DeletionType: string
{
    case SOFT = 'soft';
    case FORCE = 'force';
}