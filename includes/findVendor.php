<?php
/* 
Written by Harman Kang
May 7th, 2016

Finds credit-card vendor with credit-card number prefix

Will detect Mastercard, Visa, and AMEX.

MasterCard..........51-55
Visa................4
AMEX................34 or 37


(See the following Wikipedia Link for common IIN (issuer identification numbers) Ranges: 
https://en.wikipedia.org/wiki/Bank_card_number#Issuer_identification_number_.28IIN.29)
*/


function findVendor($number) {

// Get first 5 digits from the number

$mastercard = substr($number, 0, 2);
$visa = substr($number, 0, 1);
$amex = substr($number, 0, 2);

if ($mastercard == 51 || $mastercard == 55) {
echo '<img src="assets/mc.jpg" alt="MasterCard logo" width="120px" height="75px">';
} else if ($visa == 4) {
echo '<img src="assets/visa.png" alt="VISA logo" width="120px" height="90px">';
} else if ($amex == 34 || $amex == 37) {
echo '<img src="assets/amex.png" alt="AMEX logo" width="" height="">';
} else {
echo 'Could not find vendor.';
}




}


?>
