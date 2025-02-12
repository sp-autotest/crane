<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://tua-stage.crane.aero/craneota/CraneOTAService?xsd=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:impl=\"http://impl.soap.ws.crane.hititcs.com/\">\n    <soapenv:Header/>\n    <soapenv:Body>\n        <impl:GetAirAvailability>\n            <AirAvailabilityRequest>\n                <clientInformation>\n                    <clientIP>129.0.0.1</clientIP>\n                    <member>false</member>\n                    <password>Test123</password>\n                    <userName>CHISTA</userName>\n                    <preferredCurrency>TMT</preferredCurrency>\n                </clientInformation>\n                <originDestinationInformationList>\n                    <dateOffset>2</dateOffset>\n                    <departureDateTime>2019-03-21</departureDateTime>\n                    <destinationLocation>\n                        <locationCode>ALA</locationCode>\n                    </destinationLocation>\n                    <directFlightsOnly/>\n                    <flexibleFaresOnly>false</flexibleFaresOnly>\n                    <includeInterlineFlights>false</includeInterlineFlights>\n                    <openFlight>false</openFlight>\n                    <originLocation>\n                        <locationCode>ASB</locationCode>\n                    </originLocation>\n                </originDestinationInformationList>\n                <originDestinationInformationList>\n                    <dateOffset>0</dateOffset>\n                    <departureDateTime>2019-03-25</departureDateTime>\n                    <destinationLocation>\n                        <locationCode>ASB</locationCode>\n                    </destinationLocation>\n                    <directFlightsOnly/>\n                    <flexibleFaresOnly>false</flexibleFaresOnly>\n                    <includeInterlineFlights>false</includeInterlineFlights>\n                    <openFlight>false</openFlight>\n                    <originLocation>\n                        <locationCode>ALA</locationCode>\n                    </originLocation>\n                </originDestinationInformationList>\n                <travelerInformation>\n                    <passengerTypeQuantityList>\n                        <hasStrecher/>\n                        <passengerType>\n                            <code>ADLT</code>\n                        </passengerType>\n                        <quantity>1</quantity>\n                    </passengerTypeQuantityList>\n                </travelerInformation>\n                <tripType>ROUND_TRIP</tripType>\n            </AirAvailabilityRequest>\n        </impl:GetAirAvailability>\n    </soapenv:Body>\n</soapenv:Envelope>",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: text/xml",
    "Postman-Token: a9cbb14a-f0d9-4bf0-acfd-efb8f8953dc7",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}