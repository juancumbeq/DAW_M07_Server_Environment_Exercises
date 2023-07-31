# Server Side Environment - Exercises
Here you can find some exercises I made during my Certificate of Higher Education (HNC). We started from scratch, learning the PHP fundamentals and how to integrate it with other technologies like HTML5 to create forms and SQL to request data from a database.

If you want to try these examples, check the last header, called: **INSTALLATION**. 
<br><br>



## [Example 1: Links_Inside_PHP](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
HTML5 allows us to insert PHP tags inside a web page's body. These tags contain executable PHP code. In this case, we are using the `echo()` function to print a `<a href="#">` tag inside the HTML body, creating a reference to another `.php` file.

#### _Seen methods:_
- `echo()`
  <br><br>



## [Example 2: Variables](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_2_Variables.php)
In PHP, like many other languages such as JavaScript, it is not necessary to specify the data type when allocating a variable. A remarkable difference is that every variable is prefixed with the symbol `$`. To define and initialize a constant, we use the function `define("MY_CONSTANT", value)`. This allows us to create a constant with a fixed value that cannot be changed throughout the script's execution.

#### _Seen methods:_
- `define()`
- `(int)($variable)`
- `round()`
  <br><br>



## [Example 3: Insert PHP code in a HTML block](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_3_Insert_PHP_Inside_HTML)
This is another example about how HTML5 allows us to insert PHP code by using the `<?php>` tag. In this case, a reference to another file is created through the concatenation of two PHP variables inside a `<a href="#">` tag.

#### _Seen methods:_
- `echo()`
  <br><br>



## [Example 4: Insert Date](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_4_Insert_Date.php)
`time()` and `date()` are two PHP methods that we can implement in our code to show the date in many different ways. The `time()` method returns a numeric value representing the actual time in seconds since January 1st, 1970.

On the other hand, the `date()` method requires the value from `time()` to format a date based on the string provided as the first parameter. The `date()` method works in this way: `date(string $format, int $timestamp = time()): string`. It returns a string with the indicated `$format` value. To see more about the syntax, check the [MANUAL](https://www.php.net/manual/es/function.date.php).

A very simple way to handle dates is provided by the `getdate()` method. It returns an associative array based on the provided timestamp: `getdate(int $timestamp = time()): array`. This is how the last `echo` works, where we access an array by using the key words.

#### _Seen methods:_
- `time()`
- `date()`
- `getdate()`
- `echo()`
  <br><br>



## [Example 5: Login Form](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
First contact with form data handling. Every form tag in HTML5 contains `action` and `method` attributes. The first one indicates the PHP file where the data will be sent, in this case: `Ex_2_Variables.php`. The second attribute indicates how the data will be sent. There are two alternatives: `GET` and `POST`. The `GET` method is used when we do not worry about privacy, so the form input data is sent through the URL after the `?` symbol. On the other hand, the `POST` method encrypts the data in the URL, so no one can read it.

#### _Seen methods:_
- `<form action="file.php">`
- `<input type="submit">`
  <br><br>



## [Example 6: Adding & Multiplying](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)


#### _Seen methods:_
- `for()`
  <br><br>



## [Example 7: Sessions - Hold Information](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
### [Example 7.2: Cookies](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)


#### _Seen methods:_
- `session_start()`
- `session_destroy()`
- `time()`
- `!isset()`
- `$_SESSION[]`
- `var_dump()`
- `array()`
- `setcookie()`
  <br><br>



## [Example 8: Control Session](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)

#### _Seen methods:_
- `session_start()`
- `!isset()`
- `$_SESSION[]`
- `switch(){}`
  <br><br>



## [Example 9: Cookies Use](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)

#### _Seen methods:_

- `setcookie()`
- `!isset()`
- `$_COOKIE[]`
- `for(){}`
- `var_dump()`
  <br><br>



## [Example 10: Cookies Programs Use](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)

#### [Example 10.2 - Cookies Programs Use](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)

#### _Seen methods:_

- `time()`
- `setcookie()`
- `isset()`
- `$_COOKIE[]`
  <br><br>



## [Example 11: PHP Functions](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
#### [Example 11.2: PHP Functions](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)

#### _Seen methods:_

- `!isset()`
- `rand()`
- `setcookie()`
- `implode()`
- `time()`
  <br><br>



## [Example 12: MVC Controller](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
#### [Example 12.2: MVC View](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
#### [Example 12.3: MVC Model](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)

#### _Seen methods:_
- `function()`
- `foreach()`
- `include()`
- `array()`
  <br><br>



## [Example 13:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_13_Forms.php)
#### [Example 13.2:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_13.2_Show_Data)

#### _Seen methods:_
- `$_GET[<value>]`
  <br><br>



## [Example 14:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_14_Form_Submit.php)
#### [Example 14.2:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_14.2_Show_Data.php)

#### _Seen methods:_
- `$_POST[<value>]`
- `var_dump()`
- `echo()`
- `!isset()`
- `$_COOKIE[<value>]`
- `setcookie()`
- `time()`
- `unset($_COOKIE[<value>])`
  <br><br>



## [Example 15:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_15_Form.php)
#### [Example 15.2:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_15.2_Show_Data.php)
#### [Example 15.3:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_15.3_Show_Data_Functions.php)


#### _Seen methods:_
- `include()`
- `echo()`
- `function()`
- `switch()`
  <br><br>



## [Example 16:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_16_GET_Method_Form.php)
#### [Example 16.2:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_16.2_Show_Data.php)
#### [Example 16.3:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_16.3_Show_Data_Functions.php)

#### _Seen methods:_
- `include()`
- `isset()`
- `strlen()`
- `return`
- `$_GET[<value>]`
  <br><br>



## [Example 17:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
#### [Example 17.2:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
#### [Example 17.3:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
#### [Example 17.4:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)

#### _Seen methods:_
- `include()`
- `function()`
- `is_string()`
- `echo()`
- `while()`
- `mysqli_query()`
- `mysqli_fetch_assoc()`
- `mysqli_num_rows()`
- `mysqli_connect()`
- `mysqli_connect_error()`
- `mysqli_close()`
- `die()`
  <br><br>



## [Example 17B:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
#### [Example 17B.2:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
#### [Example 17B.3:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
#### [Example 17B.4:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)

#### _Seen methods:_
- `mysqli_fetch_asssoc()`
- `is_string()`
- `while()`
- `include()`
- `!isset()`
- `$_GET[<value>]`
  <br><br>



## [Example 18:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
#### [Example 18.2:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
#### [Example 18.3:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
#### [Example 18.4:](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)

#### _Seen methods:_
- `include()`
- `function()`
- `while()`
- `return`
- `mysqli_fetch_assoc()`
- `mysqli_query()`
- `mysqli_num_rows()`
- `mysqli_connect_error()`
- `die()`
- `mysqli_close()`
  <br><br>



## [Extra 1: Spanish Date](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)
#### [Extra 1.2: Spanish Date](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)

#### _Seen methods:_

- `time()`
- `date()`
- `setlocale()`
- ~~`strftime()`~~ _- deprecated_
- `echo()`
  <br><br>



## [Extra 2: Insert Date](https://github.com/juancumbeq/DAW_M07_Server_Environment_Exercises/blob/main/Ex_1_Links_Inside_PHP.php)

#### _Seen methods:_

- `time()`
- `date()`
- `getdate()`
- `echo()`
  <br><br>


# INSTALLATION
