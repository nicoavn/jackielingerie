<?php

///// 3DSecure | TABLA 4 - Json Object acctInfo

//// chAccAgeInd
if (!$this->customer->isLogged()) {
	$chAccAgeInd 			= "01";
}
else {
	$this->load->model('account/customer');
	$customerInfo 			= $this->model_account_customer->getCustomer($this->customer->getId());
	$chAccAgeInd 			= "";
	
	$duringTransaction 		= intval((strtotime("now") - strtotime($customerInfo['date_added']))/60);
	$nDays 					= intval($duringTransaction/1440);
	
	if ($duringTransaction < 20) {
		$chAccAgeInd 		= "02";
	}
	elseif ($nDays < 30) {
		$chAccAgeInd 		= "03";
	}
	elseif ($nDays >= 30 && $nDays <= 60) {
		$chAccAgeInd 		= "04";
	}
	else {
		$chAccAgeInd 		= "05";
	}
}

//// chAccChange			| No se puede sacar este dato en esta versión de OpenCart
// $chAccChange 			= "";

//// chAccChangeInd 		| No se puede sacar este dato en esta versión de OpenCart
// $chAccChangeInd		 	= "";

//// chAccDate
if ($this->customer->isLogged()) {
	$chAccDate					= "";
	$dt 						= new DateTime($customerInfo['date_added']);
	$chAccDate					= $dt->format('Ymd');
}

//// chAccPwChange			| No se puede sacar este dato en esta versión de OpenCart
// $chAccPwChange 			= "";

//// chAccPwChangeInd   	| No se puede sacar este dato en esta versión de OpenCart
// $chAccPwChangeInd		= "";

//// nbPurchaseAccount
if ($this->customer->isLogged()) {
	$nbPurchaseAccount 			= 0;
	
	$fechaBase					= strtotime("-6 month");
	$dt 						= new DateTime("@$fechaBase");
	$estadoCompletado 			= 5;
	$query 						= $this->db->query("SELECT * FROM " . DB_PREFIX . "order WHERE customer_id = '" . $this->customer->getId() . "' AND date_added > '" . $dt->format('Y-m-d H:i:s') . "' AND order_status_id = " . $estadoCompletado . ";");
	$nbPurchaseAccount 			= $query->num_rows;
}

//// provisionAttemptsDay	| No se puede sacar este dato en esta versión de OpenCart
// $provisionAttemptsDay 	= "";

//// txnActivityDay
if ($this->customer->isLogged()) {
	$txnActivityDay 			= 0;

	$fechaBase 					= strtotime("-24 hour");
	$dt					 		= new DateTime("@$fechaBase");
	$estadoAbandonado 			= 0;
	$query 						= $this->db->query("SELECT * FROM " . DB_PREFIX . "order WHERE customer_id = '" . $this->customer->getId() . "' AND date_added > '" . $dt->format('Y-m-d H:i:s') . "' AND (order_status_id = " . $estadoCompletado . " OR order_status_id= " . $estadoAbandonado .");");
	$txnActivityDay				= $query->num_rows;
}


//// txnActivityYear
if ($this->customer->isLogged()) {
	$txnActivityYear			= 0;

	$fechaBase 					= strtotime("-1 year");
	$dt					 		= new DateTime("@$fechaBase");
	$query 						= $this->db->query("SELECT * FROM " . DB_PREFIX . "order WHERE customer_id = '" . $this->customer->getId() . "' AND date_added > '" . $dt->format('Y-m-d H:i:s') . "' AND (order_status_id = " . $estadoCompletado . " OR order_status_id= " . $estadoAbandonado .");");
	$txnActivityYear			= $query->num_rows;
}

//// paymentAccAge			| No se puede sacar este dato en esta versión de OpenCart
// $paymentAccAge			= "";

//// paymentAccInd 			| No se puede sacar este dato en esta versión de OpenCart
// $paymentAccInd			= "";

//// shipAddressUsage && shipAddressUsageInd
if ($this->cart->hasShipping()) {
	$shipAddressUsage 			= "";
	$shipAddressUsageInd		= "";
	
	$shipping_address_1			= $this->db->escape($order_info['shipping_address_1']);
	$shipping_address_2			= $this->db->escape($order_info['shipping_address_2']);
	$shipping_city				= $this->db->escape($order_info['shipping_city']);
	$shipping_postcode			= $this->db->escape($order_info['shipping_postcode']);
	$shipping_country			= $this->db->escape($order_info['shipping_country']);
	$query 						= $this->db->query("SELECT date_added FROM " . DB_PREFIX . "order WHERE shipping_address_1 = '$shipping_address_1' AND shipping_address_2 = '$shipping_address_2' AND shipping_city = '$shipping_city' AND shipping_postcode = '$shipping_postcode' AND shipping_country = '$shipping_country' ORDER BY date_added;");
	if ($query->num_rows != 0) {
		$dt 					= new DateTime($query->rows[0]['date_added']);
		$shipAddressUsage 	    = $dt->format('Ymd');
		
		$duringTransaction		= intval((strtotime("now") - strtotime($query->rows[0]['date_added']))/60);
		$nDays 					= intval($duringTransaction/1440);
		if ($nDays < 30) {
			$shipAddressUsageInd = "02";
		}
		elseif ($nDays >= 30 && $nDays <= 60) {
			$shipAddressUsageInd = "03";
		}
		else {
			$shipAddressUsageInd = "04";
		}
		
	}
	else {
		$fechaBase				= strtotime("now");
		$dt						= new DateTime("@$fechaBase");
		$shipAddressUsage		= $dt->format('Ymd');
		$shipAddressUsageInd 	= "01";
	}
}


//// shipNameIndicator		| No se puede sacar este dato en esta versión de OpenCart
// $shipNameIndicator		= "";

//// suspiciousAccActivity	| No se puede sacar este dato en esta versión de OpenCart
// $suspiciousAccActivity	= "";

///// 3DSecure | FIN TABLA 4


///// 3DSecure | TABLA 1 - Ds_Merchant_EMV3DS (json Object)
//// addrMatch
if ($this->cart->hasShipping()) {
	if (
		($order_info['shipping_address_1']	== $order_info['payment_address_1'])
			&&
		($order_info['shipping_address_2']	== $order_info['payment_address_2'])
			&&
		($order_info['shipping_city']		== $order_info['payment_city'])
			&&
		($order_info['shipping_postcode']	== $order_info['payment_postcode'])
			&&
		($order_info['shipping_country'] 	== $order_info['payment_country'])
	) {
		$addrMatch 			= "Y";
	}
	else {
		$addrMatch 			= "N";
	}
}
else {
	$addrMatch				= "N";
}

//// billAddrCity
$billAddrCity 				= $order_info['payment_city'];

//// billAddrCountry
$billAddrCountry 			= $order_info['payment_country_id'];

//// billAddrLine1
$billAddrLine1 				= $order_info['payment_address_1'];

//// billAddrLine2
$billAddrLine2				= $order_info['payment_address_2'];

//// billAddrLine3			| No se puede sacar este dato en esta versión de OpenCart
// $billAddrLine3			= "";

//// billAddrPostCode
$billAddrPostCode			= $order_info['payment_postcode'];

//// billAddrState			| No se puede sacar este dato en esta versión de OpenCart
//$billAddrState			= $order_info['payment_zone_code'];

//// Email
$Email						= $order_info['email'];

//// homePhone
$homePhone					= array("subscriber" => $order_info['telephone']);

//// mobilePhone
// $mobilePhone				= "";

//// cardholderName 		| No se puede sacar este dato
// $cardholderName			= "";

if ($this->cart->hasShipping()) {
	//// shipAddrCity
	$shipAddrCity 				= $order_info['shipping_city'];
	
	//// shipAddrCountry
	$shipAddrCountry 			= $order_info['shipping_country_id'];
	
	//// shipAddrLine1
	$shipAddrLine1 				= $order_info['shipping_address_1'];
	
	//// shipAddrLine2
	$shipAddrLine2				= $order_info['shipping_address_2'];
	
	//// shipAddrLine3			| No se puede sacar este dato en esta versión de OpenCart
	// $shipAddrLine3			= "";
	
	//// shipAddrPostCode
	$shipAddrPostCode			= $order_info['shipping_postcode'];
	
	//// shipAddrState			| No se puede sacar este dato en esta versión de OpenCart
	//$shipAddrState				= $order_info['shipping_zone_code'];
}


//// workPhone
// $workPhone				= $homePhone;

//// threeDSRequestorAuthenticationInfo | No lo ponemos

//// acctInfo					| información de la TABLA 4
$acctInfo 						= array(
	'chAccAgeInd'				=> $chAccAgeInd
);
if ($this->cart->hasShipping()) {
	$acctInfo['shipAddressUsage'] 		= $shipAddressUsage;
	$acctInfo['shipAddressUsageInd']	= $shipAddressUsageInd;
}
if ($this->customer->isLogged()) {
	$acctInfo['chAccDate']				= $chAccDate;
	$acctInfo['nbPurchaseAccount']		= $nbPurchaseAccount;
	$acctInfo['txnActivityYear']		= $txnActivityYear;
	$acctInfo['txnActivityDay']			= $txnActivityDay;
}

//// purchaseInstalData		| No se puede sacar este dato en esta versión de OpenCart
// $purchaseInstalData		= "";

//// recurringExpiry		| No se puede sacar este dato en esta versión de OpenCart
// $recurringExpiry			= "";

//// recurringFrequency		| No se puede sacar este dato en esta versión de OpenCart
// $recurringFrequency		= "";

//// merchantRiskIndicator	| No se puede sacar este dato en esta versión de OpenCart
// $merchantRiskIndicator   = array();

//// challengeWindowSize	| No se puede sacar este dato en esta versión de OpenCart
// $challengeWindowSize 	= "";


///// 3DSecure | FIN TABLA 1

///// 3DSecure | Insertamos el parámetro "Ds_Merchant_EMV3DS" en $miObj
$Ds_Merchant_EMV3DS 		= array(
	'addrMatch'				=> $addrMatch,
	'billAddrCity'			=> $billAddrCity,
	'billAddrCountry'		=> $billAddrCountry,
	'billAddrLine1'			=> $billAddrLine1,
	'billAddrPostCode'		=> $billAddrPostCode,
	'Email'					=> $Email,
	'acctInfo'				=> $acctInfo,
	'homePhone'				=> $homePhone
);
if ($billAddrLine2 != '') {
	$Ds_Merchant_EMV3DS['billAddrLine2']	= $billAddrLine2;
}
if ($this->cart->hasShipping()) {
	// $Ds_Merchant_EMV3DS['acctInfo']			= array(
	// 	'shipAddressUsage'					=> $shipAddressUsage,
	// 	'shipAddressUsageInd'				=> $shipAddressUsageInd
	// );
	$Ds_Merchant_EMV3DS['shipAddrCity']		= $shipAddrCity;
	$Ds_Merchant_EMV3DS['shipAddrCountry']	= $shipAddrCountry;
	$Ds_Merchant_EMV3DS['shipAddrLine1']	= $shipAddrLine1;
	$Ds_Merchant_EMV3DS['shipAddrPostCode']	= $shipAddrPostCode;
	if ($shipAddrLine2 != '') {
		$Ds_Merchant_EMV3DS['shipAddrLine2']	= $shipAddrLine2;
	}
}

$Ds_Merchant_EMV3DS 		= json_encode($Ds_Merchant_EMV3DS);

$miObj->setParameter("Ds_Merchant_EMV3DS", $Ds_Merchant_EMV3DS);
?>
