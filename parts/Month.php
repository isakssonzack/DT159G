<?php
require 'vendor/autoload.php';

// Excel - Månad 2020
$Month = 'Excel/AllaBrottMonth.xls';
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($Month);
  
// Jan
$Jan_1 = $spreadsheet->getActiveSheet() -> getCell('B9') -> getValue();
$Jan_2 = $spreadsheet->getActiveSheet()->getCell('B12')->getValue();
$Jan_3 = $spreadsheet->getActiveSheet()->getCell('B14')->getValue();
$Jan_4 = $spreadsheet->getActiveSheet()->getCell('B17')->getValue();
$Jan_5 = $spreadsheet->getActiveSheet()->getCell('B20')->getValue();
$Jan_6 = $spreadsheet->getActiveSheet()->getCell('B23')->getValue();
$Jan_7 = $spreadsheet->getActiveSheet()->getCell('B26')->getValue();

// Feb
$Feb_1 = $spreadsheet->getActiveSheet()->getCell('C9')->getValue();
$Feb_2 = $spreadsheet->getActiveSheet()->getCell('C12')->getValue();
$Feb_3 = $spreadsheet->getActiveSheet()->getCell('C14')->getValue();
$Feb_4 = $spreadsheet->getActiveSheet()->getCell('C17')->getValue();
$Feb_5 = $spreadsheet->getActiveSheet()->getCell('C20')->getValue();
$Feb_6 = $spreadsheet->getActiveSheet()->getCell('C23')->getValue();
$Feb_7 = $spreadsheet->getActiveSheet()->getCell('C26')->getValue();

// Mar
$Mar_1 = $spreadsheet->getActiveSheet()->getCell('D9')->getValue();
$Mar_2 = $spreadsheet->getActiveSheet()->getCell('D12')->getValue();
$Mar_3 = $spreadsheet->getActiveSheet()->getCell('D14')->getValue();
$Mar_4 = $spreadsheet->getActiveSheet()->getCell('D17')->getValue();
$Mar_5 = $spreadsheet->getActiveSheet()->getCell('D20')->getValue();
$Mar_6 = $spreadsheet->getActiveSheet()->getCell('D23')->getValue();
$Mar_7 = $spreadsheet->getActiveSheet()->getCell('D26')->getValue();

// Apr
$Apr_1 = $spreadsheet->getActiveSheet()->getCell('E9')->getValue();
$Apr_2 = $spreadsheet->getActiveSheet()->getCell('E12')->getValue();
$Apr_3 = $spreadsheet->getActiveSheet()->getCell('E14')->getValue();
$Apr_4 = $spreadsheet->getActiveSheet()->getCell('E17')->getValue();
$Apr_5 = $spreadsheet->getActiveSheet()->getCell('E20')->getValue();
$Apr_6 = $spreadsheet->getActiveSheet()->getCell('E23')->getValue();
$Apr_7 = $spreadsheet->getActiveSheet()->getCell('E26')->getValue();

// Maj
$Maj_1 = $spreadsheet->getActiveSheet()->getCell('F9')->getValue();
$Maj_2 = $spreadsheet->getActiveSheet()->getCell('F12')->getValue();
$Maj_3 = $spreadsheet->getActiveSheet()->getCell('F14')->getValue();
$Maj_4 = $spreadsheet->getActiveSheet()->getCell('F17')->getValue();
$Maj_5 = $spreadsheet->getActiveSheet()->getCell('F20')->getValue();
$Maj_6 = $spreadsheet->getActiveSheet()->getCell('F23')->getValue();
$Maj_7 = $spreadsheet->getActiveSheet()->getCell('F26')->getValue();

// Jun
$Jun_1 = $spreadsheet->getActiveSheet()->getCell('G9')->getValue();
$Jun_2 = $spreadsheet->getActiveSheet()->getCell('G12')->getValue();
$Jun_3 = $spreadsheet->getActiveSheet()->getCell('G14')->getValue();
$Jun_4 = $spreadsheet->getActiveSheet()->getCell('G17')->getValue();
$Jun_5 = $spreadsheet->getActiveSheet()->getCell('G20')->getValue();
$Jun_6 = $spreadsheet->getActiveSheet()->getCell('G23')->getValue();
$Jun_7 = $spreadsheet->getActiveSheet()->getCell('G26')->getValue();

// Jul
$Jul_1 = $spreadsheet->getActiveSheet()->getCell('H9')->getValue();
$Jul_2 = $spreadsheet->getActiveSheet()->getCell('H12')->getValue();
$Jul_3 = $spreadsheet->getActiveSheet()->getCell('H14')->getValue();
$Jul_4 = $spreadsheet->getActiveSheet()->getCell('H17')->getValue();
$Jul_5 = $spreadsheet->getActiveSheet()->getCell('H20')->getValue();
$Jul_6 = $spreadsheet->getActiveSheet()->getCell('H23')->getValue();
$Jul_7 = $spreadsheet->getActiveSheet()->getCell('H26')->getValue();

// Aug
$Aug_1 = $spreadsheet->getActiveSheet()->getCell('I9')->getValue();
$Aug_2 = $spreadsheet->getActiveSheet()->getCell('I12')->getValue();
$Aug_3 = $spreadsheet->getActiveSheet()->getCell('I14')->getValue();
$Aug_4 = $spreadsheet->getActiveSheet()->getCell('I17')->getValue();
$Aug_5 = $spreadsheet->getActiveSheet()->getCell('I20')->getValue();
$Aug_6 = $spreadsheet->getActiveSheet()->getCell('I23')->getValue();
$Aug_7 = $spreadsheet->getActiveSheet()->getCell('I26')->getValue();

// Sep
$Sep_1 = $spreadsheet->getActiveSheet()->getCell('J9')->getValue();
$Sep_2 = $spreadsheet->getActiveSheet()->getCell('J12')->getValue();
$Sep_3 = $spreadsheet->getActiveSheet()->getCell('J14')->getValue();
$Sep_4 = $spreadsheet->getActiveSheet()->getCell('J17')->getValue();
$Sep_5 = $spreadsheet->getActiveSheet()->getCell('J20')->getValue();
$Sep_6 = $spreadsheet->getActiveSheet()->getCell('J23')->getValue();
$Sep_7 = $spreadsheet->getActiveSheet()->getCell('J26')->getValue();

// Okt
$Okt_1 = $spreadsheet->getActiveSheet()->getCell('K9')->getValue();
$Okt_2 = $spreadsheet->getActiveSheet()->getCell('K12')->getValue();
$Okt_3 = $spreadsheet->getActiveSheet()->getCell('K14')->getValue();
$Okt_4 = $spreadsheet->getActiveSheet()->getCell('K17')->getValue();
$Okt_5 = $spreadsheet->getActiveSheet()->getCell('K20')->getValue();
$Okt_6 = $spreadsheet->getActiveSheet()->getCell('K23')->getValue();
$Okt_7 = $spreadsheet->getActiveSheet()->getCell('K26')->getValue();

// Nov
$Nov_1 = $spreadsheet->getActiveSheet()->getCell('L9')->getValue();
$Nov_2 = $spreadsheet->getActiveSheet()->getCell('L12')->getValue();
$Nov_3 = $spreadsheet->getActiveSheet()->getCell('L14')->getValue();
$Nov_4 = $spreadsheet->getActiveSheet()->getCell('L17')->getValue();
$Nov_5 = $spreadsheet->getActiveSheet()->getCell('L20')->getValue();
$Nov_6 = $spreadsheet->getActiveSheet()->getCell('L23')->getValue();
$Nov_7 = $spreadsheet->getActiveSheet()->getCell('L26')->getValue();
  
// Dec
$Dec_1 = $spreadsheet->getActiveSheet()->getCell('M9')->getValue();
$Dec_2 = $spreadsheet->getActiveSheet()->getCell('M12')->getValue();
$Dec_3 = $spreadsheet->getActiveSheet()->getCell('M14')->getValue();
$Dec_4 = $spreadsheet->getActiveSheet()->getCell('M17')->getValue();
$Dec_5 = $spreadsheet->getActiveSheet()->getCell('M20')->getValue();
$Dec_6 = $spreadsheet->getActiveSheet()->getCell('M23')->getValue();
$Dec_7 = $spreadsheet->getActiveSheet()->getCell('M26')->getValue();

//Utskrivningen
echo nl2br("\n\n Jan 2020: "), $Jan_1 + $Jan_2 + $Jan_3 + $Jan_4 + $Jan_5 + $Jan_6 + $Jan_7;  
echo nl2br("\n Feb 2020: "), $Feb_1 + $Feb_2 + $Feb_3 + $Feb_4 + $Feb_5 + $Feb_6 + $Feb_7; 
echo nl2br("\n Mar 2020: "), $Mar_1 + $Mar_2 + $Mar_3 + $Mar_4 + $Mar_5 + $Mar_6 + $Mar_7; 
echo nl2br("\n Apr 2020: "), $Apr_1 + $Apr_2 + $Apr_3 + $Apr_4 + $Apr_5 + $Apr_6 + $Apr_7; 
echo nl2br("\n Maj 2020: "), $Maj_1 + $Maj_2 + $Maj_3 + $Maj_4 + $Maj_5 + $Maj_6 + $Maj_7; 
echo nl2br("\n Jun 2020: "), $Jun_1 + $Jun_2 + $Jun_3 + $Jun_4 + $Jun_5 + $Jun_6 + $Jun_7; 
echo nl2br("\n Jul 2020: "), $Jul_1 + $Jul_2 + $Jul_3 + $Jul_4 + $Jul_5 + $Jul_6 + $Jul_7; 
echo nl2br("\n Aug 2020: "), $Aug_1 + $Aug_2 + $Aug_3 + $Aug_4 + $Aug_5 + $Aug_6 + $Aug_7; 
echo nl2br("\n Sep 2020: "), $Sep_1 + $Sep_2 + $Sep_3 + $Sep_4 + $Sep_5 + $Sep_6 + $Sep_7; 
echo nl2br("\n Okt 2020: "), $Okt_1 + $Okt_2 + $Okt_3 + $Okt_4 + $Okt_5 + $Okt_6 + $Okt_7; 
echo nl2br("\n Nov 2020: "), $Nov_1 + $Nov_2 + $Nov_3 + $Nov_4 + $Nov_5 + $Nov_6 + $Nov_7; 
echo nl2br("\n Dec 2020: "), $Dec_1 + $Dec_2 + $Dec_3 + $Dec_4 + $Dec_5 + $Dec_6 + $Dec_7; 
echo nl2br("\n")
?>