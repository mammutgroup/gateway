<?php

namespace Larabookir\Gateway\Pasargad;


class PasargadResult
{
	public static function errorMessage($state) {
		$state = strtolower((string)$state);
		switch ($state) {
			case "canceled by user" :
				$message = _t("@canceledByUser");
				break;
			case "invalid amount" :
				$message = _t("@invalidAmount");
				break;
			case "invalid transaction" :
				$message = _t("@invalidTransaction");
				break;
			case "invalid card number" :
				$message = _t("@invalidCardNumber");
				break;
			case "no such issuer" :
				$message = _t("@noSuchIssuer");
				break;
			case "expired card pick up" :
				$message = _t("@expiredCardPickUp");
				break;
			case "allowable pin tries exceeded pick up" :
				$message = _t('@allowablePINTriesExceededPickUp');
				break;
			case "incorrect pin" :
				$message = _t("@incorrectPIN");
				break;
			case "exceeds withdrawal amount limit" :
				$message = _t("@exceedsWithdrawalAmountLimit");
				break;
			case "transaction cannot be completed" :
				$message = _t("@transactionCannotBeCompleted");
				break;
			case "response received too late" :
				$message = _t("@responseReceivedTooLate");
				break;
			case "suspected fraud pick up" :
				$message = _t("@suspectedFraudPickUp");
				break;
			case "no sufficient funds" :
				$message = _t("@noSufficientFunds");
				break;
			case "issuer down slm" :
				$message = _t("@issuerDownSlm");
				break;
			case "tme error" :
				$message = _t("@tMEError");
				break;
			// errorNumber
			case "-1" :
				$message = _t("@internalError");
				break;
			case "-3" :
				$message = _t("@tMEError");
				break;
			case "-4" :
				$message = _t("@merchantAuthenticationFailed");
				break;
			case "-6" :
				$message = _t("@transactionRefunded");
				break;
			case "-7" :
				$message = _t("@transactionIdEmpty");
				break;
			case "-8" :
				$message = _t("@parameterIsTooLong");
				break;
			case "-9" :
				$message = _t("@amountValueIsInvalid");
				break;
			case "-10" :
				$message = _t("@transactionIdNotBase64");
				break;
			case "-11" :
				$message = _t("@parameterIsTooShort");
				break;
			case "-12" :
				$message = _t("@amountValueIsInvalid");
				break;
			case "-13" :
				$message = _t("@refundAmountValueIsInvalid");
				break;
			case "-14" :
				$message = _t("@transactionIdInvalid");
				break;
			case "-15" :
				$message = _t("@refundAmountValueIsFloat");
				break;
			case "-16" :
				$message = _t("@internalError");
				break;
			case "-17" :
				$message = _t("@refundAmountIsNotSaman");
				break;
			case "-18" :
				$message = _t("@merchantIPInvalid");
				break;

			case "refunded amount" :
				$message = _t("@refundedAmount");
				break;

			default :
				$message = _t("@unknownError");
				break;
		}

		return $message;
	}
}
