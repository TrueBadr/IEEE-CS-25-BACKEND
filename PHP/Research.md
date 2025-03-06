# *What is PHP*
- PHP is a server-side scripting language designed specifically for web development.
- PHP was introduced by *Rasmus Lerdorf* in *1994*.
- and PHP Stands for Personal Home Page
- Its version
    1. **PHP 3 (1998):** The first version considered suitable for widespread use.
    2. **PHP 4 (2000):** Improved performance and the introduction of the Zend Engine.
    3.  **PHP 5 (2004):** Added object-oriented programming features.
    4. **PHP 7 (2015):** Significant performance improvements and reduced memory usage.
    5. **PHP 8 (2020):** Introduction of Just-In-Time (JIT) compilation, further enhancing performance.
- - - - - -  
# *Types of Errors in PHP*
1. **Parse error or syntax error**
	- t is the type of error done by the programmer in the source code of the program. The syntax error is caught by the compiler.
2. **Fetal error**
	- It is the type of error where PHP compiler understand the PHP code but it recognizes an undeclared function. This means that function is called without the definition of function.
3. **Warning Errors**
    - The main reason of warning errors are including a missing file. This means that the PHP function call the missing file.
4. **Notice Error**
    - It is similar to warning error. It means that the program contains something wrong but it allows the execution of script.
- - - - - - -  
# *Echo VS Print*

| **Echo**                                                                                  | **Print**                                      |
| ----------------------------------------------------------------------------------------- | ---------------------------------------------- |
| echo accepts a list of arguments (multiple arguments can be passed), separated by commas. | The print accepts only one argument at a time. |
| It does not return any value.                                                             | it returns the value 1.                        |
| It displays the outputs of one or more strings separated by commas.                       | The print outputs only the strings.            |
| It is comparatively faster than the print statement.                                      | It is slower than an echo statement.           |
- - - - - - - 
# *Sensitivity in PHP*
- PHP is **partially case-sensitive**. PHP constructs, function names, class names are case-insensitive, whereas variables are case-sensitive. A statement ends with a semicolon (;). Whitespace and line breaks don't matter in PHP.
- - - - - - 
# *Assign By Value And By Reference*
- in *PHP* the variables are by default assigned by the value i give value to a variable , then assign another variable with the first value , so the two variables has the same values and when i change one of them the other do not relate to the change .
- another way to assign variables is assigning by reference where when i assign the second variable with the first with sign '&' now the connected with address so when i change one of them the other change also to the new value assigned.
- - - - - 
# *Static and Dynamic Typing: What Are the Main Differences*
- when in a language define a variable there are two types of typing . In static languages i need to choose and write the specific type of data i need to assign like in C++ , Java , Rust ``` int X = 5 ```.
- In Dynamic typing language you do not need to write the type of data you insert in IDE or text editor , the compiler itself will recognize the type of variable.
- -- - - - 
# *What’s the difference between Scripting and Programming Languages?*
- a scripting language is  a language that uses a naive method to bring codes to a runtime environment like (Ruby , JavaScript , Python).
- a programming language is a  language which is used by humans to navigate their communication with computers. (C++ , Java , PHP).
- - - - - - 
# *What is the difference between for and Foreach loop in PHP ?*
- The __for__ loop works at the end of the given condition. It is used for the implementation of variables and works in a single way. The __for__ loop does not work in the case of associative arrays and Consist of three portions or parts (initialized Variable , Condition , increment/decrement)
- The *foreach* loop works at the end of the array count. This loop can work with variables as well as. Therefore, this loop can be implemented in more than one way.

| **For**                                                                                                                                | **Foreach**                                                                                         |
| -------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| The iteration is clearly visible. The block of code is repeated as long as the condition is met or the counter meets a specific value. | The iteration is hidden. The block of code is repeated until iterating over the array is completed. |
| Good performance.                                                                                                                      | Better performance.                                                                                 |
| The stop condition is specified easily.                                                                                                | The stop condition has to be explicitly specified.                                                  |
- - - - - 
# *What are the difference between session and cookies in PHP ?*
- A **session** is a way to store information (in variables) to be used across multiple pages. When a user visits a website and starts a new session, the server creates a unique session ID and stores it in a cookie on the user’s computer
- A **cookie** is a small piece of data that is stored in a user’s web browser. It can be used to store information such as user preferences or login information. When a user visits a website, the server can send a cookie to the user’s browser
- - - - 
# *Error handling in PHP*
- PHP is used for web development. Error handling in PHP is almost similar to error handling in all programming languages. The default error handling in PHP will give file name line number and error type.
- **Ways to handle PHP Errors:**  
	- Using die() method
	- Custom Error Handling
- - - - - 
# *How PHP Executes*
- For the execution of PHP files, we have an interpreter called “PHP Interpreter”. It is based on the Zend engine. Zend engine compiled the PHP Script into Zend Opcodes.
- Opcodes are short for Operation codes. It is low-level binary instructions.
- These Opcodes are executed and HTML is sent to the client i.e. browser.
- We need HTTP Protocol to accept the request and send the response to the browser.
- - - - - 
# `Refrences`
[What is PHP](https://www.geeksforgeeks.org/php-introduction/)<br>
[what r the three main error types in PHP](https://www.geeksforgeeks.org/php-types-of-errors/)<br>
[Echo Vs Print](https://www.geeksforgeeks.org/php-echo-print/)<br>
[🌟sensitivity in PHP](https://www.phptutorial.net/php-tutorial/php-syntax/)<br>
[Assign By Value And By Reference](https://elzero.org/php-2022-assign-by-value-and-by-reference/)<br>
[Static and Dynamic Typing: What Are the Main Differences](https://www.linkedin.com/pulse/static-dynamic-typing-what-main-differences-parallelstaff-sgore/)<br>
[What’s the difference between Scripting and Programming Languages ? ](https://www.geeksforgeeks.org/whats-the-difference-between-scripting-and-programming-languages/)<br>
[What is the difference between for and Foreach loop in PHP ?](https://www.geeksforgeeks.org/what-is-the-difference-between-for-and-foreach-loop-in-php/)<br>
[What are the difference between session and cookies in PHP](https://www.geeksforgeeks.org/what-are-the-difference-between-session-and-cookies-in-php/)<br>
[Error Handling in PHP](https://www.geeksforgeeks.org/error-handling-in-php/)<br>
[PHP Code Execution](https://webkul.com/blog/php-code-execution-flow/)<br>
