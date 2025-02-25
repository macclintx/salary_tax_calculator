<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Tax Calculator</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            text-align: center;
            background-color: #f8f9fa;
        }

        h2 {
            color: #333;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
        }

        label {
            font-size: 16px;
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background: #218838;
        }

        /* Result Section */
        .result {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
            text-align: left;
        }

        .result h3 {
            margin: 10px 0;
            color: #333;
        }

        /* Mobile-first approach */
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }

            form, .result {
                max-width: 100%;
                padding: 15px;
            }

            h2 {
                font-size: 20px;
            }

            input[type="number"], input[type="submit"] {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>

    <h2>Welcome to Salary Tax Calculator</h2>

    <form action="index.php" method="post">
        <label for="gross_salary">Gross Salary:</label>
        <input type="number" name="gross_salary" id="gross_salary" placeholder="Enter Gross Salary" required>
        <input type="submit" value="Calculate Tax">
    </form>

    <?php if(isset($gross_salary)): ?> 
    <div class="result">
        <h3>Gross Salary: Ksh <?= $gross_salary ?></h3>
        <h3>Tax Deduction: Ksh <?= $tax_deduction ?> 
            (<?= $gross_salary > 0 ? round(($tax_deduction / $gross_salary) * 100) : 0; ?>%)
        </h3>

        <?php if($bonus_allowance > 0): ?>
            <h3>
                <?= ($bonus_allowance == 2000) ? "Transport Allowance: Ksh $bonus_allowance" : "Performance Allowance: Ksh $bonus_allowance"; ?>
            </h3>
        <?php endif; ?>

        <h3>Net Salary: Ksh <?= $net_salary ?></h3>
    </div>

    <?php else: ?>
        <h3>Please Enter Salary</h3>
    <?php endif; ?>

</body>
</html>
