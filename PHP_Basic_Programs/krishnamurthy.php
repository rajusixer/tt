<?php
// Function to calculate factorial of a number
function factorial($num) {
    if ($num == 0 || $num == 1) {
        return 1;
    }
    $result = 1;
    for ($i = 2; $i <= $num; $i++) {
        $result *= $i;
    }
    return $result;
}

// Function to check if a number is Krishnamurthy number
function isKrishnamurthy($num) {
    $originalNum = $num;
    $sum = 0;
    
    // Extract each digit and add factorial of each digit
    while ($num > 0) {
        $digit = $num % 10;
        $sum += factorial($digit);
        $num = intval($num / 10);
    }
    
    // Check if sum equals original number
    return $sum == $originalNum;
}

// Function to find all Krishnamurthy numbers up to a given limit
function findKrishnamurthyNumbers($limit) {
    $krishnamurthyNumbers = array();
    for ($i = 1; $i <= $limit; $i++) {
        if (isKrishnamurthy($i)) {
            $krishnamurthyNumbers[] = $i;
        }
    }
    return $krishnamurthyNumbers;
}

// Function to show step-by-step calculation
function showKrishnamurthyCalculation($num) {
    $originalNum = $num;
    $sum = 0;
    $steps = array();
    
    echo "<h4>Step-by-step calculation for $originalNum:</h4>";
    
    while ($num > 0) {
        $digit = $num % 10;
        $factorialValue = factorial($digit);
        $steps[] = "$digit! = $factorialValue";
        $sum += $factorialValue;
        $num = intval($num / 10);
    }
    
    // Display steps in correct order (reverse array since we extracted digits backwards)
    $steps = array_reverse($steps);
    echo "Digits and their factorials: " . implode(", ", $steps) . "<br>";
    echo "Sum = " . implode(" + ", array_map(function($step) {
        return explode(" = ", $step)[1];
    }, $steps)) . " = $sum<br>";
    
    if ($sum == $originalNum) {
        echo "<strong style='color: green;'>$originalNum is a Krishnamurthy number!</strong><br><br>";
    } else {
        echo "<strong style='color: red;'>$originalNum is not a Krishnamurthy number.</strong><br><br>";
    }
}

// HTML output starts here
echo "<h1>Krishnamurthy Number Checker</h1>";
echo "<p><strong>Definition:</strong> A Krishnamurthy number is a number whose sum of the factorial of its digits equals the number itself.</p>";

// Example: Check some known numbers
echo "<h2>Examples of Krishnamurthy Numbers:</h2>";
$examples = [1, 2, 145, 40585];

foreach ($examples as $example) {
    showKrishnamurthyCalculation($example);
}

// Check some non-Krishnamurthy numbers
echo "<h2>Examples of Non-Krishnamurthy Numbers:</h2>";
$nonExamples = [12, 123, 456];

foreach ($nonExamples as $example) {
    showKrishnamurthyCalculation($example);
}

// Find all Krishnamurthy numbers up to 10000
echo "<h2>All Krishnamurthy Numbers up to 10,000:</h2>";
$allKrishnamurthy = findKrishnamurthyNumbers(10000);
echo "Krishnamurthy numbers: ";
foreach ($allKrishnamurthy as $num) {
    echo "<strong>$num</strong> ";
}
echo "<br><br>";
echo "<p>Total Krishnamurthy numbers found: <strong>" . count($allKrishnamurthy) . "</strong></p>";

// Interactive form for user input
echo "<h2>Check Your Own Number:</h2>";
echo '<form method="post" action="">
        <label for="number">Enter a number to check: </label>
        <input type="number" id="number" name="number" min="1" required>
        <input type="submit" value="Check Krishnamurthy">
      </form>';

// Process form submission
if (isset($_POST['number']) && $_POST['number'] != '') {
    $userNumber = (int)$_POST['number'];
    echo "<h3>Result for your number:</h3>";
    showKrishnamurthyCalculation($userNumber);
}

// Additional information
echo "<h2>Interesting Facts:</h2>";
echo "<ul>";
echo "<li>There are only 4 Krishnamurthy numbers in existence: 1, 2, 145, and 40585</li>";
echo "<li>Krishnamurthy numbers are also known as Strong numbers</li>";
echo "<li>The largest Krishnamurthy number is 40585</li>";
echo "<li>For numbers with more than 7 digits, the sum of factorials of digits will always be less than the number itself</li>";
echo "</ul>";

// Mathematical explanation
echo "<h2>Why Only 4 Krishnamurthy Numbers Exist:</h2>";
echo "<p>For any n-digit number:</p>";
echo "<ul>";
echo "<li>Minimum value: 10^(n-1)</li>";
echo "<li>Maximum sum of factorials: n × 9! = n × 362880</li>";
echo "<li>For n ≥ 8: 10^7 = 10,000,000 > 8 × 362880 = 2,903,040</li>";
echo "<li>Therefore, no Krishnamurthy numbers can exist with 8 or more digits</li>";
echo "</ul>";

// Performance note
echo "<h2>Algorithm Complexity:</h2>";
echo "<p><strong>Time Complexity:</strong> O(d) where d is the number of digits in the number</p>";
echo "<p><strong>Space Complexity:</strong> O(1) - constant space</p>";

?>
