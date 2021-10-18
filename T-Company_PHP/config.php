<?php

require_once 'payu/lib/PayU.php';
require_once 'payu/lib/PayU/api/Environment.php';

PayU::$apiKey = "4Vj8eK4rloUd272L48hsrarnUA"; // Enter your API key here
PayU::$apiLogin = "pRRXKOl8ikMmt9u"; // Enter your API Login here
PayU::$merchantId = "508029"; // Enter your Merchant Id here
PayU::$language = SupportedLanguages::ES; // Enter the language here
PayU::$isTest = true; // assign true if you are in test mode

// Payments URL
Environment::setPaymentsCustomUrl("https://sandbox.api.payulatam.com/payments-api/4.0/service.cgi");
// Reports URL
Environment::setReportsCustomUrl("https://sandbox.api.payulatam.com/reports-api/4.0/service.cgi");