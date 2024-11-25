### PHP Practice Task: "Personalized Calculator and Greeting App"

**Objective**: Build a small PHP program that:

1. Greets a user based on their name and the time of day.
2. Performs simple calculations based on two numbers and an operator.
3. Utilizes PHP constants, data types, and basic math operations.

#### Task Overview

Create a PHP script, `calculator_greeting.php`, that will ask for a user's name, provide a greeting, and then allow the user to perform basic calculations with numbers they input.

#### Instructions

1. **Create PHP Variables and Constants**

    - Create a variable `$name` and set it to a sample name, e.g., `"Alice"`.
    - Define a constant `PI` with the value `3.14159`.

2. **Greeting the User**

    - Use `if-else` statements to create a custom greeting based on the current hour of the day.
        - If the hour is **before 12 PM**, greet the user with "Good Morning."
        - If the hour is **between 12 PM and 5 PM**, greet the user with "Good Afternoon."
        - If the hour is **after 5 PM**, greet the user with "Good Evening."
    - Display the greeting along with the user’s name using `echo`, like this: "Good Morning, Alice!"

3. **Math Operations Calculator**

    - Define two variables, `$num1` and `$num2`, and assign them numerical values of your choice.
    - Define a variable `$operator` and set it to one of the following: `"+"`, `"-"`, `"*"`, or `"/"`.
    - Use `if-else` statements to perform the corresponding math operation based on `$operator`:
        - If `$operator` is `"+"`, add `$num1` and `$num2`.
        - If `$operator` is `"-"`, subtract `$num2` from `$num1`.
        - If `$operator` is `"*"`, multiply `$num1` and `$num2`.
        - If `$operator` is `"/"`, divide `$num1` by `$num2` (be sure to handle division by zero).
    - Output the result of the operation using `echo`, showing the full expression, e.g., `"10 + 5 = 15"`.

4. **Using Constants and Magic Constants**
    - Display the value of `PI` by echoing it with a message like "The value of PI is: 3.14159."
    - Display the file name using the magic constant `__FILE__`.

#### Extra Challenge (Optional)

1. **User Input**:
    - You can try modifying the code to accept `$name`, `$num1`, `$num2`, and `$operator` from user input (using HTML forms or `$_GET`/`$_POST`).
2. **Experiment with Data Types and Casting**:
    - Try casting `$num1` and `$num2` to integers or floats and observe any differences in the output.

#### Tips

-   Use comments in the code to clarify each step.
-   Test your code with different values and operators to ensure the logic is correct.
