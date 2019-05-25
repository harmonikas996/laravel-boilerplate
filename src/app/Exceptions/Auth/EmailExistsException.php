<?php

namespace App\Exceptions\Auth;

use App\Exceptions\BaseException;

class EmailExistsException extends BaseException {
    const STATUS_CODE = 401;
    const MESSAGE = 'Google API returned an error';

    public function __construct(...$context)
    {
        parent::__construct(self::STATUS_CODE, self::MESSAGE, ...$context);
    }
}
