<?php
//Single Responsibility Principle (S.R.P)
// this class level violate sRP principle
// Class PaymentProcessor {
//     public function charge($amount){
// //         //initialize bank data
// //         //send request to the bank
//     }
//     public function createReport(){
//         //format a report
//         // return $this->Empty;
//     }
//     public function PrintReport(){
//         //send a printing command
//     }
//     public function SavePayment(){
//       //saving to DB

//     }
// }
/*********************************/
// this function level violate sRP principle
// function customerSalesReport($customerId) {
//     // Get Customer Data
//     $customer = getCustomerData($customerId);
//     // Get Customer Sales
//     $sales = getSalesByCustomerId($customerId);
//     // Create report data
//     $reportTitle = "Sales Report For " . $customer['Name'];
//     $reportData = "Report Time: " . date('Y-m-d H:i:s') . "\n";
//     $reportData .= "Total Sales: " . array_sum($sales) . "\n";
//     $reportData .= "Credit Balance: " . (array_sum(array_column($sales, 'Total')) - array_sum(array_column($sales, 'Payment')));
    
//     return $reportData;
// }
/******************************* */
//violate S.R.P principle
// class EmployeeService {
//     public function employeeRegistration($employee) {//1reason
//         $this->employees[] = $employee;
//         $this->sendEmail($employee->email, "Registration", "Congratulations!");//2reason
//     }

//     private function sendEmail($email, $subject, $message) {
//         $emailMessage = new \Swift_Message();
//         $emailMessage->setFrom(["madam@sample.com" => "Mark Adam"]);
//         $emailMessage->setTo($email);
//         $emailMessage->setSubject($subject);
//         $emailMessage->setBody($message);

//         $transport = new \Swift_SmtpTransport("smtp.relay.uri", 25);
//         $mailer = new \Swift_Mailer($transport);
//         $mailer->send($emailMessage);
//     }
// }
/********************************* */
//violate S.R.P principle
// class Notification
// {
//     private $message;

//     public function __construct($message)
//     {
//         $this->message = $message;
//     }

//     public function message()
//     {
//         return $this->message;
//     }

//     public function sendToEmail($email)
//     {
//         // Code Here
//     }

//     public function sendToSMS($mobileNumber)
//     {
//         // Code Here
//     }
// }