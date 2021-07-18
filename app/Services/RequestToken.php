<?php

namespace App\Services;
use Illuminate\Database\Eloquent\Model;

class RequestToken
{
    public function RequestToken(){
        $sabreSoapServer = 'https://webservices.havail.sabre.com'; // url
        $pcc = '1QWH'; // sabre pcc
        $username = '615928'; // sabre username
        $password = 'gf5k3eg'; // sabre password

        $xmlStr = '<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">
    <SOAP-ENV:Header>
        <MessageHeader xmlns="http://www.ebxml.org/namespaces/messageHeader">
            <From>
                <PartyId>Agency</PartyId>
            </From>
            <To>
                <PartyId>Sabre_API</PartyId>
            </To>
            <ConversationId>2021.01.DevStudio</ConversationId>
            <Action>SessionCreateRQ</Action>
        </MessageHeader>
        <Security xmlns="http://schemas.xmlsoap.org/ws/2002/12/secext">
            <UsernameToken>
                <Username>' . $username .  '</Username>
                <Password>' . $password .  '</Password>
                <Organization>' . $pcc .  '</Organization>
                <Domain>DEFAULT</Domain>
            </UsernameToken>
        </Security>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <SessionCreateRQ returnContextID="true" Version="1.0.0" xmlns="http://www.opentravel.org/OTA/2002/11"/>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>';

        $client = new \SoapClient(null, array(
            'location' => $sabreSoapServer,
            'uri' => $sabreSoapServer,
            'trace' => 1,
            'exceptions' => true,
            'use' => 'wse'
        ));

        $response = $client->__doRequest($xmlStr, $sabreSoapServer, $sabreSoapServer,1);

        $val = simplexml_load_string($response);
        $actual = $val->children('soap-env',true)->Header->children('wsse',true)->Security->BinarySecurityToken;
        $tk = new Token;
        $tk-> token = $actual;
        $tk->save();
        echo 'TOKEN CREATED! : ';
       return $tk->token;
    }

}
