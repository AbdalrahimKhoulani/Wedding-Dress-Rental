<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ToDateAfterFromDate implements ValidationRule
{
    private $from_date;

    public function __construct($from_date) {
        $this->from_date = $from_date;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(strtotime($value) <= strtotime($this->from_date)){
            $fail('The to date must be greater than the from date');
        }
    }
}
