<?php

//input validation
    $gross_salary =  isset($_POST["gross_salary"]) && is_numeric($_POST["gross_salary"]) ? $_POST["gross_salary"] : 0;

    $tax_deduction = 0;
    $net_salary = 0;
    $tax_bracket = 0;
    $bonus_allowance = 0;


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


    //bonus system
    if ( $gross_salary < 15000):
        $bonus_allowance = 2000;

        $net_salary += $bonus_allowance; 

    elseif( $gross_salary > 40000):
        $bonus_allowance = 5000;

        $net_salary += $bonus_allowance;
    elseif ( $gross_salary <= 0):

        $bonus_allowance = 0 ;
        $net_salary += $bonus_allowance; 
    endif;
 


/*  

    echo "\nGross Salary: Ksh $gross_salary\n";
    echo "Tax Deductions: Ksh $tax_deduction (";
    echo $gross_salary > 0 ? round((( $tax_deduction/$gross_salary ) * 100)) : 0;
    echo "%)\n";



//only show allowance message if bonus was applied
    if( $bonus_allowance > 0):

        switch ($bonus_allowance):
            case 2000;
            //echo "Transport allowance: $bonus_allowance\n";

            break;
        
            case 5000:
            echo "Perfomance allowance: $bonus_allowance\n";
            break;
        endswitch;
    
    endif;
    
    echo "Net Salary: Ksh $net_salary";   
    
    */

    require "index.view.php";