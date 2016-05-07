# credit-card-validation

Validates credit card numbers by checking if they are associated with a real credit card vendor like MasterCard or Visa. <b>Note:</b> this program
does not (and cannot) verify if the given credit-card actually exists.

Simple interface requires only a credit card number to check if it belongs to a real credit card vendor. This program was written in PHP 
and I used Bootstrap for the design work. 

<h3>Test it yourself!</h3>
<p>Enter in sample credit card numbers from <a href="https://www.paypalobjects.com/en_US/vhelp/paypalmanager_help/credit_card_numbers.htm" target="_blank">here</a>, or enter fake numbers</p>

<h1>How it works*: </h1>
<h3>1. Enter credit card number into the form.</h3><Br>
![alt tag](https://github.com/harmankang/credit-card-validation/blob/master/1.png)
<h3>2. Press validate.</h3><Br>
![alt tag](https://github.com/harmankang/credit-card-validation/blob/master/2.png)

<h6 style="color: gray;">*You must be able to run PHP scripts in your browser.</h6>

<hr>

<h4>Details</h4>
<p>My function, findVendor(), currently detects most MasterCard, Visa, and Amex numbers. Feel free to add other vendors like Discover and Diners Club.</p>

<p> Thanks for reading!</p>
