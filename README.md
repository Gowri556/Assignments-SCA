.....................Week 1 ...................
.
.
.
.
.

Difference between Const() and Define() in PHP


Both define() and const is used to declare a constant in PHP script.

The basic difference between these two is that const defines constants at compile-time, whereas define() defines them at run time.
We can't use the const keyword to declare constant in conditional blocks, while with define() we can achieve that.
const accepts a static scalar(number, string, or other constants like true, false, null, __FILE__), whereas define() takes any expression.
const can also be utilized within a class or interface to declare a class constant or interface constant, while define() can't be utilized for this reason


As of PHP 5.3, there are two ways to define constants: Either using the const keyword or using the define() function:

const animal= DOG;
define(‘animal’, 'DOG');

The fundamental difference between those two ways is that const defines constants at compile-time, whereas define defines them at run time. 

Disadvantages of const are:

const cannot be used to conditionally define constants. To define a global constant, it has to be used in the outermost scope:
if (...) {
    const animal= 'DOG';    // Invalid
}
// but
if (...) {
    define('animal', 'DOG'); // Valid
}

.
.
.


.......................Week 2....................
.
.
.
.



Difference berween include and require in PHP

The require() function is identical to include(), except that it handles errors differently. If an error occurs, the include() function generates a warning, but the script will continue execution. The require() generates a fatal error, and the script will stop.
