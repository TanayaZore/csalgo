<!DOCTYPE html>
<html lang="en">
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>CSALGORITHMS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css"> 
</head>
<body>
	<div class="navbar">
        <a class="algo">
        <img src="./iconn.png" style="width:35px; margin-left:20px" class="rounded-circle" alt="Cinque Terre"> CS ALGORITHMS</a>
        <div class="credentials">
        <a class="login" href="help.php">HELP</a>
         <a class="login" href="profile.php">PROFILE</a>
        <a class="signup" href="logout.php">LOGOUT</a>
        </div>    
    </div>
    <div><br />
		<p><h2 style="font-family:cursive;text-align: center;">SOME BASIC ALGORITHMS </h2></p>
	</div>
    <div class="cont" ><br /><br/>
		<p><h3 style="font-family:cursive" >1.Countdown</h3></p>
        <div class="algorithm-section">
        <div class="algorithm-box left-section">A countdown algorithm is a simple algorithm that counts down from a given number to 1. It can be implemented using a loop (e.g., a for loop or a while loop) or through recursion.<br/>
            <br/>
            Input: The algorithm takes a positive integer n as input.<br/>
<br/>
            Loop: The algorithm uses a loop (for loop) to iterate from n down to 1.<br/>
<br/>
            Print the Number: In each iteration of the loop, the current value of i is printed. The loop starts with the value of n and decrements by 1 in each iteration until i becomes 1.<br/>
<br/>
            Print "Go!": After the loop completes, the algorithm prints "Go!" to signify the completion of the countdown.<br/>
        <br/>
        </div>
        <div class="algorithm-box right-section" >
            <pre style="font-family:cursive;">
            #sample of code using python<br/>
            <br/>
            def countdown(n):   <br/> 
                for i in range(n, 0, -1):<br/>        
                    print(i)  <br/>
                print("Go!")<br/>
                <br/>
            # Example usage:<br/>
                    countdown(5)<br/><br/>
                    </pre>
        </div>
        </div>

    </div>

    <div class="cont"><br /><br/>
		<p><h3 style="font-family:cursive">2.Sum of array</h3></p>
        <div class="algorithm-section">
    <div class="algorithm-box left-section">
    <br/>
    The algorithm to calculate the sum of elements in an array is quite straightforward.<br/><br/>
    Input: The algorithm takes an array (or list) of numbers as input.<br/><br/>
    Initialization: Initialize a variable total to store the sum, and set its initial value to 0.<br/><br/>
    Loop: Use a loop (for loop or while loop) to iterate through each element in the array.<br/><br/>
    Add Elements: In each iteration of the loop, add the current element to the total variable.<br/><br/>
    Repeat: Continue the loop until all elements in the array are processed.<br/><br/>
    Output: After the loop completes, the variable total will hold the sum of all elements in the array.<br/><br/></div>
    <br/>
    <div class="algorithm-box right-section">
    #sample of code using python<br/><br/>
    # Define an array<br/>
array = [2, 4, 6, 8, 10]<br/>
<br/>
# Initialize a variable to store the sum<br/>
sum_of_array = 0<br/>
<br/>
# Iterate through the array and add each element to the sum<br/>
for i in range(len(array)):<br/>
    sum_of_array = sum_of_array + array[i]<br/>
    <br/>
# Print the sum of the array<br/>
print("Sum of the array:", sum_of_array)<br/>
<br/>
    </div>
    </div>
    </div>

    <div class="cont"><br /><br/>
		<p><h3 style="font-family:cursive">3.Maximum Number</h3></p>
        <div class="algorithm-section">
    <div class="algorithm-box left-section">
    <br/>
        Initialize a variable maxNumber to store the maximum number and set it to a very small value initially.<br/><br/>
        Iterate through each number in the list or array.<br/><br/>
        For each number, compare it with the current value of maxNumber.<br/>
        a. If the current number is greater than maxNumber, update maxNumber with the current number.<br/><br/>
        After iterating through all numbers, maxNumber will contain the maximum number in the list.<br/>
    </div>
    <br/>
    <div class="algorithm-box right-section">
        def find_maximum(numbers):<br/>
        maxNumber = float('-inf')  # Initialize to negative infinity<br/>
        for num in numbers:<br/>
            if num > maxNumber:<br/>
                maxNumber = num<br/>
        return maxNumber<br/>
        <br/>
        # Example usage<br/>
        num_list = [12, 45, 6, 78, 23, 90, 56]<br/>
        max_num = find_maximum(num_list)<br/>
        print("Maximum number:", max_num)<br/>

<br/>
    </div>
    </div>
    </div>

    <div class="cont"><br /><br/>
		<p><h3 style="font-family:cursive">4.Even Numbers</h3></p>
        <div class="algorithm-section">
    <div class="algorithm-box left-section">
    <br/>
    Initialize an empty list to store even numbers.<br/><br/>
    Iterate through each number in the input list or array.<br/><br/>
    For each number, check if it's divisible by 2 (i.e., the remainder of division by 2 is 0).<br/>
    a. If the remainder is 0, the number is even, so add it to the list of even numbers.<br/><br/>
    After iterating through all numbers, the list of even numbers will contain all the even elements.<br/><br/>
    </div>
    <br/>
    <div class="algorithm-box right-section">
    def find_even_numbers(numbers):<br/>
    even_numbers = []<br/>
    for num in numbers:<br/>
        if num % 2 == 0:<br/>
            even_numbers.append(num)<br/>
    return even_numbers<br/>
    <br/>
    # Example usage<br/>
    num_list = [12, 45, 6, 78, 23, 90, 56]<br/>
    even_nums = find_even_numbers(num_list)<br/>
    print("Even numbers:", even_nums)<br/>

<br/>
    </div>
    </div>
    </div>

    <div class="cont"><br /><br/>
		<p><h3 style="font-family:cursive">5.Factorial check</h3></p>
        <div class="algorithm-section">
    <div class="algorithm-box left-section">
    <br/>
    Initialize a variable factorial with a value of 1.<br/><br/>
    Input the number for which you want to calculate the factorial.<br/><br/>
    Iterate from 1 to the input number:<br/>
    a. Multiply the current value of factorial by the current iterator value.<br/><br/>
    After the loop, the variable factorial will contain the factorial of the input number.<br/><br/>
    </div>
    <br/>
    <div class="algorithm-box right-section">
    def calculate_factorial(n):<br/>
    factorial = 1<br/>
    for i in range(1, n + 1):<br/>
        factorial *= i<br/>
    return factorial<br/>
    <br/>
    # Example usage<br/>
    number = int(input("Enter a number: "))<br/>
    result = calculate_factorial(number)<br/>
    print(f"The factorial of {number} is {result}")<br/>


<br/>

    </div>
    </div>
    </div>
       <div class="enroll-buttons">
    <button class="btn btn-primary enroll-button"><a style="color: black;" href="certificate1.php">Claim Certificate</a></button>
</div>
<div class="enroll-buttons">
    <button class="btn btn-primary enroll-button"><a style="color: black;" href="two.php">Next</a></button>
</div>
<br>


    <footer>
		<div class="footer-container">
        <p class="footer-text">Contact us: learn.algo@gmail.com</p>
        </div>
    </footer>    
</body>
</html>