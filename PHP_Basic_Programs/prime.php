<?php
// Function to check if a number is prime
function isPrime($num) {
    // Numbers less than 2 are not prime
    if ($num < 2) {
        return false;
    }
    
    // 2 is the only even prime number
    if ($num == 2) {
        return true;
    }
    
    // Even numbers greater than 2 are not prime
    if ($num % 2 == 0) {
        return false;
    }
    
    // Check odd divisors up to square root of the number
    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) {
            return false;  // Found a divisor, so not prime
        }
    }
    
    return true;  // No divisors found, so it's prime
}

// Function to generate prime numbers up to a given limit
function generatePrimes($limit) {
    $primes = array();
    for ($i = 2; $i <= $limit; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

// Function to check prime numbers in a range
function primesInRange($start, $end) {
    $primes = array();
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

// Example usage
echo "<h2>Prime Number Checker</h2>";

// Check individual numbers
$numbers = [7, 15, 23, 30, 37, 50];
echo "<h3>Checking individual numbers:</h3>";
foreach ($numbers as $num) {
    if (isPrime($num)) {
        echo "$num is a prime number<br>";
    } else {
        echo "$num is not a prime number<br>";
    }
}

// Generate first N prime numbers
echo "<h3>First 10 prime numbers:</h3>";
$firstPrimes = generatePrimes(30); // Get primes up to 30
$count = 0;
foreach ($firstPrimes as $prime) {
    if ($count < 10) {
        echo "$prime ";
        $count++;
    }
}
echo "<br><br>";

// Prime numbers in a range
echo "<h3>Prime numbers between 20 and 50:</h3>";
$rangeePrimes = primesInRange(20, 50);
foreach ($rangeePrimes as $prime) {
    echo "$prime ";
}
echo "<br><br>";

// Interactive form for user input
echo "<h3>Check if your number is prime:</h3>";
echo '<form method="post" action="">
        <label for="number">Enter a number: </label>
        <input type="number" id="number" name="number" min="1" required>
        <input type="submit" value="Check Prime">
      </form>';

// Process form submission
if ($_POST['number']) {
    $userNumber = (int)$_POST['number'];
    if (isPrime($userNumber)) {
        echo "<p style='color: green;'><strong>$userNumber is a prime number!</strong></p>";
    } else {
        echo "<p style='color: red;'><strong>$userNumber is not a prime number.</strong></p>";
    }
}

// Sieve of Eratosthenes (efficient method for finding many primes)
function sieveOfEratosthenes($limit) {
    $sieve = array_fill(0, $limit + 1, true);
    $sieve[0] = $sieve[1] = false; // 0 and 1 are not prime
    
    for ($i = 2; $i * $i <= $limit; $i++) {
        if ($sieve[$i]) {
            // Mark multiples of $i as not prime
            for ($j = $i * $i; $j <= $limit; $j += $i) {
                $sieve[$j] = false;
            }
        }
    }
    
    $primes = array();
    for ($i = 2; $i <= $limit; $i++) {
        if ($sieve[$i]) {
            $primes[] = $i;
        }
    }
    
    return $primes;
}

echo "<h3>Prime numbers up to 100 using Sieve of Eratosthenes:</h3>";
$sievePrimes = sieveOfEratosthenes(100);
foreach ($sievePrimes as $prime) {
    echo "$prime ";
}
echo "<br><br>";

echo "<p><strong>Total prime numbers up to 100: " . count($sievePrimes) . "</strong></p>";
?>