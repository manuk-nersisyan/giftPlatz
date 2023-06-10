<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordRule implements Rule
{
    /**
     * @param string $attribute
     * @param mixed $value
     * @return bool|int
     */
    public function passes($attribute, $value)
    {
        return preg_match("/^(?=.*[0-9]).{10,30}+$/", $value);
    }

    /**
     * @return string
     */
    public function message(): string
    {
        return 'Password Should Contain 10 Symbols And 1 Number.';
    }
}
