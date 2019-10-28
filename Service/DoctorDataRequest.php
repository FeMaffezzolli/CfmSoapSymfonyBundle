<?php

namespace Cfm\SoapSymfonyBundle\Service;

use Cfm\SoapSymfonyBundle\Request\DoctorDataInterface;
use Cfm\SoapSymfonyBundle\Request\CfmSoapClient;

class DoctorDataRequest
{
    public static function Consultar($request, $key)
    {
        $client = new CfmSoapClient();
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = FALSE;

        $jsonData = [
            'uf'    => $request->get('uf'),
            'crm'   => $request->get('crm'),
            'chave' => $key
        ];

        $response = $client->getClient()->call('Consultar', $jsonData);

        return $response;
    }
}
