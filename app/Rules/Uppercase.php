<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //condition to passed
        if (strtoupper($value) !== $value) {
            $fail("The $attribute must be uppercase.");
        }
    }

    // public function passes($attribute, $value)
    // {
    //     return strtoupper($value) === $value;
    // }

    // public function message(): string
    // {
    //     return 'The :attribute must be uppercase.';
    // }
}
