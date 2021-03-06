<?php


 function autoload_cddd675d0226a265d02f96e886718e93($class)
{
    $classes = array(
        'TKT_ElectronicDocumentService' => __DIR__ .'/TKT_ElectronicDocumentService.php',
        'AddressDetailed' => __DIR__ .'/AddressDetailed.php',
        'AddressSimple' => __DIR__ .'/AddressSimple.php',
        'Amount' => __DIR__ .'/Amount.php',
        'ApplicationResults' => __DIR__ .'/ApplicationResults.php',
        'Building' => __DIR__ .'/Building.php',
        'ContactSummary' => __DIR__ .'/ContactSummary.php',
        'Currency' => __DIR__ .'/Currency.php',
        'DiagnosticResults' => __DIR__ .'/DiagnosticResults.php',
        'ErrorMessage' => __DIR__ .'/ErrorMessage.php',
        'HostCommand' => __DIR__ .'/HostCommand.php',
        'IdentifierSystem' => __DIR__ .'/IdentifierSystem.php',
        'LocationPOS' => __DIR__ .'/LocationPOS.php',
        'MessageCondition' => __DIR__ .'/MessageCondition.php',
        'MessagingRecords' => __DIR__ .'/MessagingRecords.php',
        'MessagingSystemRecord' => __DIR__ .'/MessagingSystemRecord.php',
        'Parameters' => __DIR__ .'/Parameters.php',
        'POS' => __DIR__ .'/POS.php',
        'ProblemInformation' => __DIR__ .'/ProblemInformation.php',
        'ProblemInformationFromLLS' => __DIR__ .'/ProblemInformationFromLLS.php',
        'ResultRecord' => __DIR__ .'/ResultRecord.php',
        'Results' => __DIR__ .'/Results.php',
        'STL_HeaderBase' => __DIR__ .'/STL_HeaderBase.php',
        'STL_HeaderAck' => __DIR__ .'/STL_HeaderAck.php',
        'STL_HeaderNotif' => __DIR__ .'/STL_HeaderNotif.php',
        'STL_HeaderRQ' => __DIR__ .'/STL_HeaderRQ.php',
        'STL_HeaderRS' => __DIR__ .'/STL_HeaderRS.php',
        'SecurityTokenCG' => __DIR__ .'/SecurityTokenCG.php',
        'Street' => __DIR__ .'/Street.php',
        'Success' => __DIR__ .'/Success.php',
        'SystemSpecificResults' => __DIR__ .'/SystemSpecificResults.php',
        'SystemSpecificResultsFromLLS' => __DIR__ .'/SystemSpecificResultsFromLLS.php',
        'Telephone' => __DIR__ .'/Telephone.php',
        'TrackingID' => __DIR__ .'/TrackingID.php',
        'TransactionInfo' => __DIR__ .'/TransactionInfo.php',
        'UsernameToken' => __DIR__ .'/UsernameToken.php',
        'CompletionCodes' => __DIR__ .'/CompletionCodes.php',
        'CurrencyCodeList' => __DIR__ .'/CurrencyCodeList.php',
        'DiagnosticLevels' => __DIR__ .'/DiagnosticLevels.php',
        'DutyCodeList' => __DIR__ .'/DutyCodeList.php',
        'ErrorType' => __DIR__ .'/ErrorType.php',
        'TravelSectorType' => __DIR__ .'/TravelSectorType.php',
        '_flightNumberLiterals' => __DIR__ .'/_flightNumberLiterals.php',
        'AffinityFrequentFlyerED' => __DIR__ .'/AffinityFrequentFlyerED.php',
        'AmountBasic' => __DIR__ .'/AmountBasic.php',
        'AmountCommission' => __DIR__ .'/AmountCommission.php',
        'AmountCommissionAgency' => __DIR__ .'/AmountCommissionAgency.php',
        'AmountCommissionCategory35' => __DIR__ .'/AmountCommissionCategory35.php',
        'AmountCommissionED' => __DIR__ .'/AmountCommissionED.php',
        'AmountDetails' => __DIR__ .'/AmountDetails.php',
        'AmountDetailsCurrencyConversion' => __DIR__ .'/AmountDetailsCurrencyConversion.php',
        'AmountDetailsED' => __DIR__ .'/AmountDetailsED.php',
        'AmountDetailsRateofExchange' => __DIR__ .'/AmountDetailsRateofExchange.php',
        'AmountRate' => __DIR__ .'/AmountRate.php',
        'AmountsCommission' => __DIR__ .'/AmountsCommission.php',
        'AmountsNew' => __DIR__ .'/AmountsNew.php',
        'AmountsNewED' => __DIR__ .'/AmountsNewED.php',
        'AmountsRelatedDocument' => __DIR__ .'/AmountsRelatedDocument.php',
        'ClassOfServiceDetails' => __DIR__ .'/ClassOfServiceDetails.php',
        'CodeApproval' => __DIR__ .'/CodeApproval.php',
        'CurrencyConversionDetails' => __DIR__ .'/CurrencyConversionDetails.php',
        'CodeBaggageAllowance' => __DIR__ .'/CodeBaggageAllowance.php',
        'CustomerTravelerDetailsED' => __DIR__ .'/CustomerTravelerDetailsED.php',
        'DateRange' => __DIR__ .'/DateRange.php',
        'Diagnostic' => __DIR__ .'/Diagnostic.php',
        'DataXML' => __DIR__ .'/DataXML.php',
        'DynamicCurrencyConversion' => __DIR__ .'/DynamicCurrencyConversion.php',
        'ElectronicDocumentSearchParameters' => __DIR__ .'/ElectronicDocumentSearchParameters.php',
        'FareCalculationDetails' => __DIR__ .'/FareCalculationDetails.php',
        'GetElectronicDocumentRQ' => __DIR__ .'/GetElectronicDocumentRQ.php',
        'GetElectronicDocumentRS' => __DIR__ .'/GetElectronicDocumentRS.php',
        'IdentifierPaymentAccount' => __DIR__ .'/IdentifierPaymentAccount.php',
        'IdentifierProvider' => __DIR__ .'/IdentifierProvider.php',
        'IdentifierReservation' => __DIR__ .'/IdentifierReservation.php',
        'MiscellaneousIndicators' => __DIR__ .'/MiscellaneousIndicators.php',
        'NumberAssociatedDocument' => __DIR__ .'/NumberAssociatedDocument.php',
        'OptionalService' => __DIR__ .'/OptionalService.php',
        'PaymentBankCardED' => __DIR__ .'/PaymentBankCardED.php',
        'PaymentBankCheck' => __DIR__ .'/PaymentBankCheck.php',
        'PaymentCash' => __DIR__ .'/PaymentCash.php',
        'PaymentCertficate' => __DIR__ .'/PaymentCertficate.php',
        'PaymentGovernmentTravel' => __DIR__ .'/PaymentGovernmentTravel.php',
        'PaymentInvoice' => __DIR__ .'/PaymentInvoice.php',
        'PaymentMiscellaneous' => __DIR__ .'/PaymentMiscellaneous.php',
        'PaymentOther' => __DIR__ .'/PaymentOther.php',
        'PaymentPrepaidTicketAdvise' => __DIR__ .'/PaymentPrepaidTicketAdvise.php',
        'PaymentRevenueAccounting' => __DIR__ .'/PaymentRevenueAccounting.php',
        'PaymentTravelDocument' => __DIR__ .'/PaymentTravelDocument.php',
        'PaymentVoucher' => __DIR__ .'/PaymentVoucher.php',
        'PaymentAmount' => __DIR__ .'/PaymentAmount.php',
        'PaymentAmountBasic' => __DIR__ .'/PaymentAmountBasic.php',
        'RelatedDocumentAbbreviated' => __DIR__ .'/RelatedDocumentAbbreviated.php',
        'RelatedDocumentBasic' => __DIR__ .'/RelatedDocumentBasic.php',
        'RelatedDocumentDetails' => __DIR__ .'/RelatedDocumentDetails.php',
        'RelatedDocumentDetailsED' => __DIR__ .'/RelatedDocumentDetailsED.php',
        'RelatedDocumentDetailsOriginalTKT' => __DIR__ .'/RelatedDocumentDetailsOriginalTKT.php',
        'RelatedDocumentDetailsOriginalTKTED' => __DIR__ .'/RelatedDocumentDetailsOriginalTKTED.php',
        'RemarkDetails' => __DIR__ .'/RemarkDetails.php',
        'RemarkDetailsWithHeader' => __DIR__ .'/RemarkDetailsWithHeader.php',
        'RemarkDetailsWithType' => __DIR__ .'/RemarkDetailsWithType.php',
        'ReservationDetailsED' => __DIR__ .'/ReservationDetailsED.php',
        'ServiceCouponInvoluntaryReroute' => __DIR__ .'/ServiceCouponInvoluntaryReroute.php',
        'TaxDetails' => __DIR__ .'/TaxDetails.php',
        'TaxDetailsAirport' => __DIR__ .'/TaxDetailsAirport.php',
        'TaxDetailsDomestic' => __DIR__ .'/TaxDetailsDomestic.php',
        'TaxDetailsED' => __DIR__ .'/TaxDetailsED.php',
        'TaxMisc' => __DIR__ .'/TaxMisc.php',
        'TaxAmount' => __DIR__ .'/TaxAmount.php',
        'TaxAmountCoupon' => __DIR__ .'/TaxAmountCoupon.php',
        'TaxesNewTax' => __DIR__ .'/TaxesNewTax.php',
        'TicketingAgentED' => __DIR__ .'/TicketingAgentED.php',
        'TicketingDocumentEMDED' => __DIR__ .'/TicketingDocumentEMDED.php',
        'TicketingDocumentTicketED' => __DIR__ .'/TicketingDocumentTicketED.php',
        'FareCalculation' => __DIR__ .'/FareCalculation.php',
        'TicketingTransactionInfoED' => __DIR__ .'/TicketingTransactionInfoED.php',
        'TicketingDocumentAffinityED' => __DIR__ .'/TicketingDocumentAffinityED.php',
        'TicketingDocumentAmountsEMD' => __DIR__ .'/TicketingDocumentAmountsEMD.php',
        'TicketingDocumentAmountsTicketED' => __DIR__ .'/TicketingDocumentAmountsTicketED.php',
        'AmountsOtherED' => __DIR__ .'/AmountsOtherED.php',
        'TicketingDocumentCurrencyConversion' => __DIR__ .'/TicketingDocumentCurrencyConversion.php',
        'TicketingDocumentCustomerED' => __DIR__ .'/TicketingDocumentCustomerED.php',
        'TicketingDocumentDetailsEMDED' => __DIR__ .'/TicketingDocumentDetailsEMDED.php',
        'TicketingDocumentDetailsTicketED' => __DIR__ .'/TicketingDocumentDetailsTicketED.php',
        'TicketingDocumentHistoryED' => __DIR__ .'/TicketingDocumentHistoryED.php',
        'TicketingDocumentIndicatorsEMD' => __DIR__ .'/TicketingDocumentIndicatorsEMD.php',
        'TicketingDocumentMiscellaneousED' => __DIR__ .'/TicketingDocumentMiscellaneousED.php',
        'FeeDetails' => __DIR__ .'/FeeDetails.php',
        'AmountBasicBankerSellingRate' => __DIR__ .'/AmountBasicBankerSellingRate.php',
        'TicketingDocumentPayment' => __DIR__ .'/TicketingDocumentPayment.php',
        'TicketingDocumentPaymentED' => __DIR__ .'/TicketingDocumentPaymentED.php',
        'TicketingDocumentRelated' => __DIR__ .'/TicketingDocumentRelated.php',
        'TicketingDocumentRelatedTicketED' => __DIR__ .'/TicketingDocumentRelatedTicketED.php',
        'TicketingDocumentRemarkED' => __DIR__ .'/TicketingDocumentRemarkED.php',
        'TicketingDocumentRemarkEMD' => __DIR__ .'/TicketingDocumentRemarkEMD.php',
        'TicketingDocumentServiceCouponEMDED' => __DIR__ .'/TicketingDocumentServiceCouponEMDED.php',
        'StartLocation' => __DIR__ .'/StartLocation.php',
        'EndLocation' => __DIR__ .'/EndLocation.php',
        'BookingStatus' => __DIR__ .'/BookingStatus.php',
        'TicketingDocumentServiceCouponTicketED' => __DIR__ .'/TicketingDocumentServiceCouponTicketED.php',
        'TicketingDocumentTaxesEMD' => __DIR__ .'/TicketingDocumentTaxesEMD.php',
        'TicketingDocumentTaxesNewED' => __DIR__ .'/TicketingDocumentTaxesNewED.php',
        'TicketingDocumentTaxesTicketED' => __DIR__ .'/TicketingDocumentTaxesTicketED.php',
        'TicketingDocumentValueCalculation' => __DIR__ .'/TicketingDocumentValueCalculation.php',
        'DocumentDetailsDisplay' => __DIR__ .'/DocumentDetailsDisplay.php',
        'DocumentHistoryDisplay' => __DIR__ .'/DocumentHistoryDisplay.php',
        'SignatureType' => __DIR__ .'/SignatureType.php',
        'SignatureValueType' => __DIR__ .'/SignatureValueType.php',
        'SignedInfoType' => __DIR__ .'/SignedInfoType.php',
        'CanonicalizationMethodType' => __DIR__ .'/CanonicalizationMethodType.php',
        'SignatureMethodType' => __DIR__ .'/SignatureMethodType.php',
        'ReferenceType' => __DIR__ .'/ReferenceType.php',
        'TransformsType' => __DIR__ .'/TransformsType.php',
        'TransformType' => __DIR__ .'/TransformType.php',
        'DigestMethodType' => __DIR__ .'/DigestMethodType.php',
        'KeyInfoType' => __DIR__ .'/KeyInfoType.php',
        'KeyValueType' => __DIR__ .'/KeyValueType.php',
        'RetrievalMethodType' => __DIR__ .'/RetrievalMethodType.php',
        'X509DataType' => __DIR__ .'/X509DataType.php',
        'X509IssuerSerialType' => __DIR__ .'/X509IssuerSerialType.php',
        'PGPDataType' => __DIR__ .'/PGPDataType.php',
        'SPKIDataType' => __DIR__ .'/SPKIDataType.php',
        'ObjectType' => __DIR__ .'/ObjectType.php',
        'ManifestType' => __DIR__ .'/ManifestType.php',
        'SignaturePropertiesType' => __DIR__ .'/SignaturePropertiesType.php',
        'SignaturePropertyType' => __DIR__ .'/SignaturePropertyType.php',
        'DSAKeyValueType' => __DIR__ .'/DSAKeyValueType.php',
        'RSAKeyValueType' => __DIR__ .'/RSAKeyValueType.php',
        'Envelope' => __DIR__ .'/Envelope.php',
        'Header' => __DIR__ .'/Header.php',
        'Body' => __DIR__ .'/Body.php',
        'Fault' => __DIR__ .'/Fault.php',
        'detail' => __DIR__ .'/detail.php',
        'Manifest' => __DIR__ .'/Manifest.php',
        'Reference' => __DIR__ .'/Reference.php',
        'SchemaCustom' => __DIR__ .'/SchemaCustom.php',
        'MessageHeader' => __DIR__ .'/MessageHeader.php',
        'Service' => __DIR__ .'/Service.php',
        'MessageData' => __DIR__ .'/MessageData.php',
        'SyncReply' => __DIR__ .'/SyncReply.php',
        'MessageOrder' => __DIR__ .'/MessageOrder.php',
        'AckRequested' => __DIR__ .'/AckRequested.php',
        'Acknowledgment' => __DIR__ .'/Acknowledgment.php',
        'ErrorList' => __DIR__ .'/ErrorList.php',
        'ErrorCustom' => __DIR__ .'/ErrorCustom.php',
        'StatusResponse' => __DIR__ .'/StatusResponse.php',
        'StatusRequest' => __DIR__ .'/StatusRequest.php',
        'sequenceNumbertype' => __DIR__ .'/sequenceNumbertype.php',
        'statustype' => __DIR__ .'/statustype.php',
        'messageStatustype' => __DIR__ .'/messageStatustype.php',
        'severitytype' => __DIR__ .'/severitytype.php',
        'PartyId' => __DIR__ .'/PartyId.php',
        'To' => __DIR__ .'/To.php',
        'From' => __DIR__ .'/From.php',
        'Description' => __DIR__ .'/Description.php',
        'Security' => __DIR__ .'/Security.php',
        'BinarySecurityToken' => __DIR__ .'/BinarySecurityToken.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_cddd675d0226a265d02f96e886718e93');

// Do nothing. The rest is just leftovers from the code generation.
{
}
