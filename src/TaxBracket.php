<?php

namespace TaxBracket;

function calculateTaxes($brackets, $salary)
{
    $tax = 0;

    // error out of $brackets or $salary is not set

    foreach ($brackets as [$salaryBracket, $taxBracket]) {
        if (is_null($salaryBracket)  || $salary === 0 || $salary <= $salaryBracket) {
            $tax += $salary * $taxBracket; // 0 + $5,000*0.1
            break;
        } else {
            $salary -= $salaryBracket;
            $tax += $salaryBracket * $taxBracket;
        }
    }

    return $tax;
}
