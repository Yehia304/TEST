<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;


class SabreGetTicket
{
    public function getTickets($token)
    {
        $sabreSoapServer = 'https://webservices.havail.sabre.com'; // url
        $client = new \SoapClient(null, array(
            'location' => $sabreSoapServer,
            'uri' => $sabreSoapServer,
            'trace' => 1,
            'exceptions' => true,
            'use' => 'wse',
            'soap_version' => SOAP_1_2
        ));
        $xml = '<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"><SOAP-ENV:Header>
<MessageHeader xmlns="http://www.ebxml.org/namespaces/messageHeader"><From><PartyId>Agency</PartyId></From><To><PartyId>SWS</PartyId></To><ConversationId>2021.01.DevStudio</ConversationId><Action>TKT_ElectronicDocumentServicesRQ</Action></MessageHeader>
<Security xmlns="http://schemas.xmlsoap.org/ws/2002/12/secext"><BinarySecurityToken EncodingType="Base64Binary" valueType="String">' . $token . '</BinarySecurityToken></Security>
</SOAP-ENV:Header><SOAP-ENV:Body>
<GetElectronicDocumentRQ Version="1.0.0" requestType="H" xmlns="http://www.sabre.com/ns/Ticketing/EDoc" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sabre.com/ns/Ticketing/EDoc TKT_ElectronicDocumentServices_v.1.0.0.xsd">
                    <ns1:STL_Header.RQ xmlns:ns1="http://www.sabre.com/ns/Ticketing/EDocStl"/>
                    <ns2:POS xmlns:ns2="http://www.sabre.com/ns/Ticketing/EDocStl"/>
                        <SearchParameters>
                            <DocumentNumber>3903879455343</DocumentNumber>
                        </SearchParameters>
                </GetElectronicDocumentRQ>

                </SOAP-ENV:Body></SOAP-ENV:Envelope>
                ';
        $header = new \SoapHeader('http://soapinterop.org/echoheader/','Authorization','Bearer '. $token,true);
        $client->__setSoapHeaders($header);


        $response = $client->__doRequest($xml, $sabreSoapServer, $sabreSoapServer,1);

        $val = simplexml_load_string($response);

        $resp = $val->children('SOAP-ENV',true)->Body->children()->GetElectronicDocumentRS->children();
//        var_dump(count($resp));
        $resp = json_decode(json_encode($resp,true));
        dd($resp);
    }
}
