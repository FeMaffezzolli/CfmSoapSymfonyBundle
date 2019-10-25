<?php

namespace Cfm\SoapSymfonyBundle\Service;

use Cfm\SoapSymfonyBundle\Request\DoctorDataInterface;
use Cfm\SoapSymfonyBundle\Request\CfmSoapInterface;

class DoctorDataRequest
{
    public static function Consultar(DoctorDataInterface $request)
    {
        $client = new \nusoap_client();

        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = FALSE;

        $jsonData = [
            'uf'    => $request->getUf(),
            'crm'   => $request->getCrm(),
            'chave' => $request->getChave()
        ];

        $response = $client->call('Consultar', $jsonData);

        return $response;
    }
}
