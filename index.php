<?php

    $gross_salary = readline(("Enter you salary: "));
    $tax_deduction = 0;
    $bonus_allowance;
    $net_salary = 0;
    $tax_bracket = 0;

    define('TAX_BRACKET_10000',0);    
    define('TAX_BRACKET_10001_25000',10);
    define('TAX_BRACKET_25001_50000',20);
    define('TAX_BRACKET_50000',30);

    

    //tax bracket logic
    
    if( $gross_salary <= 10000):
        
        $tax_deduction = $gross_salary * (TAX_BRACKET_10000/100);
        $net_salary = $gross_salary - $tax_deduction;
        
    elseif($gross_salary > 10000 && $gross_salary <= 25000):
        
        $tax_deduction = $gross_salary * (TAX_BRACKET_10001_25000/100);
        $net_salary = $gross_salary - $tax_deduction;

    elseif($gross_salary > 25000 && $gross_salary <= 50000):

        $tax_deduction = $gross_salary * (TAX_BRACKET_25001_50000/100);
        $net_salary = $gross_salary - $tax_deduction;
    
    elseif($gross_salary > 50000):

        $tax_deduction = $gross_salary * (TAX_BRACKET_50000/100);
        $net_salary = $gross_salary - $tax_deduction;

    endif;


    echo "\nGross Salary: Ksh $gross_salary\n";
    echo "Tax Deductions: Ksh $tax_deduction (".(( $tax_deduction/$gross_salary ) * 100)."%)\n";
    echo "Net Salary: Ksh $net_salary";