<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Sort extends Enum
{
    const SORT_NUMBER_ASC = 1;
    const SORT_NUMBER_DESC = 2;
    const NAME_ASC = 3;
    const NAME_DESC = 4;
    const CREATED_AT_ASC = 5;
    const CREATED_AT_DESC = 6;
    const TITLE_ASC = 7;
    const TITLE_DESC = 8;
}
