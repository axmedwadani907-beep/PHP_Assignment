# PHP Programming Coursework

**Student:** Ahmed Mohamed Abdulle
**University:** Jamhuriya University
**Course:** PHP Programming
**Student ID:** _(C1231160)_


This repository contains my PHP lab exercises and assignment solutions. They cover conditional logic, loops, number algorithms, arrays, and dynamic HTML tables.

---

## Project Structure

```text
├── assigement1/
│   ├── question1.php    # Greatest and smallest of three numbers
│   ├── question2.php    # Divisibility check (3, 5, both, neither)
│   ├── question3.php    # Odd numbers (2-20) and even numbers (35 down to 7)
│   ├── question4.php    # Numbers 50 to 2 divisible by both 5 and 2
│   ├── question5.php    # Reverse a number using a while loop
│   ├── question6.php    # LCM of two numbers
│   ├── question7.php    # HCF of two numbers
│   ├── question8.php    # Multiplication table (1 to 12)
│   ├── question9.php    # Prime number check
│   └── question10.php   # Prime / non-prime numbers from 10 to 50
├── assigement2/
│   ├── question1.php    # Array traversal and statistics
│   ├── question2.php    # Colors 2D array in an HTML table
│   └── question3.php    # Student records 2D array in an HTML table
└── week2/
    ├── for.php          # for loops, break, continue, nested loops
    ├── foreach.php      # foreach over indexed and 2D arrays
    ├── while.php        # while loop countdown
    └── dowhile.php      # do-while loop
```

---

## Assignment 1: Conditions, Loops and Number Logic

| File | Task | Technique | Result with the values used |
|---|---|---|---|
| `question1.php` | Find the greatest and smallest of 3 numbers | `if / elseif / else` with `&&` | Greatest: 34, Smallest: 19 |
| `question2.php` | Check whether a number is divisible by 3, 5, both, or neither | `%` operator, `if / elseif / else` | 7 → "none either can divide" |
| `question3.php` | Print odd numbers from 2 to 20, then even numbers from 35 down to 7 | `for` loops (increment and decrement), `%` | Two lists of numbers |
| `question4.php` | Print numbers from 50 down to 2 divisible by both 5 and 2 | `for` loop, `&&` | 50, 40, 30, 20, 10 |
| `question5.php` | Reverse a number | `while` loop, `%` and `floor()` | 12345 → 54321 |
| `question6.php` | Find the LCM of two numbers | `while(true)` with `break` | LCM of 8 and 24 = 24 |
| `question7.php` | Find the HCF of two numbers | `while(true)` counting down, `break` | HCF of 24 and 18 = 6 |
| `question8.php` | Print the multiplication table from 1 to 12 | Nested `for` loops | 12 rows of products |
| `question9.php` | Check whether a number is prime | `for` loop, boolean flag, `break` | 17 → prime |
| `question10.php` | Print prime numbers between 10 and 50 | Nested `for` loops, boolean flag | 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47 |

---

## Assignment 2: Arrays and HTML Tables

### `question1.php` — Array traversal and statistics
- Loops through a numbers array with `foreach ($numbers as $index => $number)`.
- Prints the array values, then the statistics: total, count of even numbers, count of odd numbers, minimum, maximum, and the positions of the minimum and maximum (joined with `implode()`).

### `question2.php` — Colors table
- A 2D associative array stores the shades `Light`, `Normal`, and `Dark`, each with `Red`, `Green`, and `Blue` values.
- An outer `foreach` builds each table row (`<tr>`) and an inner `foreach` builds the cells (`<td>`).

### `question3.php` — Student records table
- A 2D associative array stores student records keyed by ID (`CA226`, `CA223`, `CA221`), each with `Name`, `Phone`, and `Address`.
- The same nested `foreach` pattern generates the HTML table with `<th>` headers.

---

## Week 2: Loops

| File | Concept | Output |
|---|---|---|
| `for.php` | Even numbers with `%`, `break` at 6, `continue` at 5, and a nested loop | Even numbers 2 to 20; `1 2 3 4 5`; `1 2 3 4 6 7 8 9 10`; a 3x3 grid of `*` |
| `foreach.php` | Looping over a 2D student array and an indexed fruits array | 3 student lines (Name - Age - Grade), then 5 fruits |
| `while.php` | Pre-tested loop with a decrement | `10 9 8 7 6 5 4 3 2 1` |
| `dowhile.php` | Post-tested loop that runs at least once | `1 2 3 4 5` |

---

## Concepts Covered

- Variables, arithmetic and logical operators
- Conditional statements: `if`, `elseif`, `else`
- Loops: `for`, `foreach`, `while`, `do-while`, plus `break` and `continue`
- Nested loops
- Indexed and multidimensional associative arrays
- Built-in functions: `floor()`, `implode()`
- Mixing PHP with HTML tables

---

## How to Run

1. Copy the project folder into your local server directory (`htdocs` for XAMPP, `www` for WAMP).
2. Start the Apache server.
3. Open any file in the browser, for example:

```text
http://localhost/assigement1/question1.php
http://localhost/assigement2/question2.php
http://localhost/week2/for.php
```


