# Cfm Soap Symfony Bundle

## Installation

    $ composer require cm2tech/cfm-soap-symfony-bundle

## Available Routes

- https://ws.cfm.org.br:8080/WebServiceConsultaMedicos/ServicoConsultaMedicos?wsdl

## Usage

    use Cfm\SoapSymfonyBundle\Service\SoapService as CfmSoapService;
    use Cfm\SoapSymfonyBundle\Request\DoctorData as DoctorDataRequest;

    $clientRequest = new CfmSoapService($wsdl);

    $response = $clientRequest::DoctorDataRequest($queryParams);

    // var_dump($response->getStatusCode());
    // var_dump($response->getContent(false));
