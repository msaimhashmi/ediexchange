<?php

namespace App\Http\Controllers\ClientToMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleXMLElement;

class PutReceiptController extends Controller
{
    public function convertAndSendPutReceipt(Request $request)
    {
        // Read the XML file
        // $xmlFile = $request->file('xml_file');
        // $xmlString = $xmlFile->get();
        $xmlString = '<?xml version="1.0" encoding="UTF-8"?>
<Preadv>
  <PreadvHeader>
    <FileTimeZone>UTC</FileTimeZone>
    <FileDateTime>2023-07-12 10:14:51</FileDateTime>
    <MessageType>PREADV</MessageType>
    <WarehouseCode>ROH</WarehouseCode>
    <WarehouseName>Röhlig US</WarehouseName>
    <GubiCompany>Gubi Design Inc.</GubiCompany>
    <Sender>GUBI</Sender>
    <Recipient>ROH</Recipient>
    <TransferName>ROH/IN/02008</TransferName>
    <TransferID>299282</TransferID>
    <CrossDock>N</CrossDock>
    <PurchaseReference>PO98396</PurchaseReference>
    <ScheduledDate>2023-08-31 10:09:16</ScheduledDate>
    <CarrierReference></CarrierReference>
    <IsReturn>N</IsReturn>
    <DeliveryMode></DeliveryMode>
    <PriorityLevel>Normal</PriorityLevel>
    <OriginAddress>
      <AddressName>Gubi A/S</AddressName>
      <Att></Att>
      <StreetAndNumber1>Orientkaj 18-20</StreetAndNumber1>
      <StreetAndNumber2></StreetAndNumber2>
      <ZipCode>2150</ZipCode>
      <CityName>Nordhavn</CityName>
      <StateCode></StateCode>
      <StateName></StateName>
      <CountryCode>DK</CountryCode>
      <CountryName>Denmark</CountryName>
      <Phone>+45 3332 6368</Phone>
      <Email>contact@gubi.com</Email>
    </OriginAddress>
  </PreadvHeader>
  <PreadvLines>
    <PreadvLine>
      <ItemNumber>10092477</ItemNumber>
      <EanNumber>5715015483872</EanNumber>
      <Description>Violin Dining Chair - Fully Upholstered (Base: Black Matt Base, Standard Glides, Upholstery: Karakorum, Dedar (001, Standard), Back Upholstery: Karakorum, Dedar (001, Standard), Foam (Standard (CA TB 117-2013 Compliant)))</Description>
      <FscGrade></FscGrade>
      <HSCode>9401710000</HSCode>
      <QuantityOrdered>1</QuantityOrdered>
      <LocationCode>Stock</LocationCode>
      <ColliID></ColliID>
      <CountryOfOriginName>Poland</CountryOfOriginName>
      <CountryOfOriginCode>PL</CountryOfOriginCode>
    </PreadvLine>
    <PreadvLine>
      <ItemNumber>10034523</ItemNumber>
      <EanNumber>5710902837240</EanNumber>
      <Description>9602 Lamp Base , US</Description>
      <FscGrade></FscGrade>
      <HSCode>9405299000</HSCode>
      <QuantityOrdered>3</QuantityOrdered>
      <LocationCode>Stock</LocationCode>
      <ColliID></ColliID>
      <CountryOfOriginName>China</CountryOfOriginName>
      <CountryOfOriginCode>CN</CountryOfOriginCode>
    </PreadvLine>
    <PreadvLine>
      <ItemNumber>10029934</ItemNumber>
      <EanNumber>5710902745620</EanNumber>
      <Description>9602 Lamp Shade  (Shade: Canvas)</Description>
      <FscGrade></FscGrade>
      <HSCode>9405299000</HSCode>
      <QuantityOrdered>3</QuantityOrdered>
      <LocationCode>Stock</LocationCode>
      <ColliID></ColliID>
      <CountryOfOriginName>China</CountryOfOriginName>
      <CountryOfOriginCode>CN</CountryOfOriginCode>
    </PreadvLine>
    <PreadvLine>
      <ItemNumber>10120233</ItemNumber>
      <EanNumber>5715015765503</EanNumber>
      <Description>Stay Lounge Chair - Fully Upholstered, Small, Returning Swivel (Upholstery: Sunday, Dedar (031, Standard), Back Upholstery: Sunday, Dedar (031, Standard), Foam (Standard (CA TB 117-2013 Compliant)))</Description>
      <FscGrade></FscGrade>
      <HSCode>9401800000</HSCode>
      <QuantityOrdered>3</QuantityOrdered>
      <LocationCode>Stock</LocationCode>
      <ColliID></ColliID>
      <CountryOfOriginName>Lithuania</CountryOfOriginName>
      <CountryOfOriginCode>LT</CountryOfOriginCode>
    </PreadvLine>
    <PreadvLine>
      <ItemNumber>10079703</ItemNumber>
      <EanNumber>5715015355544</EanNumber>
      <Description>MR01 Initial Chair, with cushion (Base: Solid Oak (Oiled), Rope: Natural Flag)</Description>
      <FscGrade>FSC 100%</FscGrade>
      <HSCode>9401710000</HSCode>
      <QuantityOrdered>1</QuantityOrdered>
      <LocationCode>Stock</LocationCode>
      <ColliID></ColliID>
      <CountryOfOriginName>Italy</CountryOfOriginName>
      <CountryOfOriginCode>IT</CountryOfOriginCode>
    </PreadvLine>
    <PreadvLine>
      <ItemNumber>10024450</ItemNumber>
      <EanNumber>5710902837158</EanNumber>
      <Description>C-Chair Dining Chair - Un-Upholstered, All French Cane (Base: Oak Oiled)</Description>
      <FscGrade>FSC MIX 70% non-certified rattan</FscGrade>
      <HSCode>9401690000</HSCode>
      <QuantityOrdered>1</QuantityOrdered>
      <LocationCode>Stock</LocationCode>
      <ColliID></ColliID>
      <CountryOfOriginName>Latvia</CountryOfOriginName>
      <CountryOfOriginCode>LV</CountryOfOriginCode>
    </PreadvLine>
    <PreadvLine>
      <ItemNumber>10014676</ItemNumber>
      <EanNumber>5710902000842</EanNumber>
      <Description>Pedrera Coffee Table (Base: Black Semi Matt, Top: Transparent Glass)</Description>
      <FscGrade></FscGrade>
      <HSCode>7013371000</HSCode>
      <QuantityOrdered>1</QuantityOrdered>
      <LocationCode>Stock</LocationCode>
      <ColliID></ColliID>
      <CountryOfOriginName>China</CountryOfOriginName>
      <CountryOfOriginCode>CN</CountryOfOriginCode>
    </PreadvLine>
    <PreadvLine>
      <ItemNumber>10106194</ItemNumber>
      <EanNumber>5715015620710</EanNumber>
      <Description>Pacha Outdoor Lounge Chair - Fully Upholstered, Swivel (Base: Moss Gray, Upholstery: Libera, Dedar (002, Standard), Foam (Standard (CA TB 117-2013 Compliant)))</Description>
      <FscGrade></FscGrade>
      <HSCode>9401800000</HSCode>
      <QuantityOrdered>1</QuantityOrdered>
      <LocationCode>Stock</LocationCode>
      <ColliID></ColliID>
      <CountryOfOriginName>Poland</CountryOfOriginName>
      <CountryOfOriginCode>PL</CountryOfOriginCode>
    </PreadvLine>
    <PreadvLine>
      <ItemNumber>10035617</ItemNumber>
      <EanNumber>5710902934895</EanNumber>
      <Description>Epic Column - Travertine , Round, for Ø110cm table (White Travertine stone)</Description>
      <FscGrade></FscGrade>
      <HSCode>6802910090</HSCode>
      <QuantityOrdered>1</QuantityOrdered>
      <LocationCode>Stock</LocationCode>
      <ColliID></ColliID>
      <CountryOfOriginName>Italy</CountryOfOriginName>
      <CountryOfOriginCode>IT</CountryOfOriginCode>
    </PreadvLine>
    <PreadvLine>
      <ItemNumber>10035759</ItemNumber>
      <EanNumber>5710902934925</EanNumber>
      <Description>Epic Table Top - Travertine, Round, Ø110 (White Travertine stone)</Description>
      <FscGrade></FscGrade>
      <HSCode>6802910090</HSCode>
      <QuantityOrdered>1</QuantityOrdered>
      <LocationCode>Stock</LocationCode>
      <ColliID></ColliID>
      <CountryOfOriginName>Italy</CountryOfOriginName>
      <CountryOfOriginCode>IT</CountryOfOriginCode>
    </PreadvLine>
  </PreadvLines>
</Preadv>';
        $xml = new SimpleXMLElement($xmlString);

        // Create the EDIFACT structure
        $edifact = [
            'Preadv' => [
                'PreadvHeader' => [
                    'FileTimeZone' => 'UTC',
                    'FileDateTime' => date('Y-m-d H:i:s'),
                    'MessageType' => 'PREADV',
                    'WarehouseCode' => (string)$xml->PreadvHeader->WarehouseCode,
                    'WarehouseName' => (string)$xml->PreadvHeader->WarehouseName,
                    'Sender' => 'GUBI',
                    'Recipient' => (string)$xml->PreadvHeader->Recipient,
                    'TransferName' => (string)$xml->PreadvHeader->TransferName,
                    'TransferID' => (string)$xml->PreadvHeader->TransferID,
                    'CrossDock' => 'N',
                    'PurchaseReference' => (string)$xml->PreadvHeader->PurchaseReference,
                    'ScheduledDate' => (string)$xml->PreadvHeader->ScheduledDate,
                    'CarrierReference' => (string)$xml->PreadvHeader->CarrierReference,
                    'IsReturn' => (string)$xml->PreadvHeader->IsReturn,
                    'DeliveryMode' => (string)$xml->PreadvHeader->DeliveryMode,
                    'PriorityLevel' => (string)$xml->PreadvHeader->PriorityLevel,
                    'OriginAddress' => [
                        'AddressName' => (string)$xml->PreadvHeader->OriginAddress->AddressName,
                        'Att' => (string)$xml->PreadvHeader->OriginAddress->Att,
                        'StreetAndNumber1' => (string)$xml->PreadvHeader->OriginAddress->StreetAndNumber1,
                        'StreetAndNumber2' => (string)$xml->PreadvHeader->OriginAddress->StreetAndNumber2,
                        'ZipCode' => (string)$xml->PreadvHeader->OriginAddress->ZipCode,
                        'CityName' => (string)$xml->PreadvHeader->OriginAddress->CityName,
                        'StateCode' => (string)$xml->PreadvHeader->OriginAddress->StateCode,
                        'StateName' => (string)$xml->PreadvHeader->OriginAddress->StateName,
                        'CountryCode' => (string)$xml->PreadvHeader->OriginAddress->CountryCode,
                        'CountryName' => (string)$xml->PreadvHeader->OriginAddress->CountryName,
                        'Phone' => (string)$xml->PreadvHeader->OriginAddress->Phone,
                        'Email' => (string)$xml->PreadvHeader->OriginAddress->Email,
                    ],
                ],
                'PreadvLines' => [],
            ],
        ];

        // dd($edifact);

        // Map the PreadvLines
        $count = 1;
        foreach ($xml->PreadvLines->PreadvLine as $line) {
            $edifact['Preadv']['PreadvLines']['PreadvLine'][] = [
                'ItemNumber' => (string)$line->ItemNumber,
                'EanNumber' => (string)$line->EanNumber,
                'Description' => (string)$line->Description,
                'FscGrade' => (string)$line->FscGrade,
                'HSCode' => (string)$line->HSCode,
                'QuantityOrdered' => (int)$line->QuantityOrdered,
                'LocationCode' => (string)$line->LocationCode,
                'ColliID' => (string)$line->ColliID,
                'CountryOfOriginName' => (string)$line->CountryOfOriginName,
                'CountryOfOriginCode' => (string)$line->CountryOfOriginCode,
            ];
            $count++;
        }

        // Convert the EDIFACT data to a string
        $edifactString = $this->edifactToString($edifact);
        // dd($edifactString);

        // Save the EDIFACT string to a file
        Storage::disk('local')->put('public/edifact.edi', $edifactString);

        // Return a response or redirect to indicate success
        return response()->json(['message' => 'XML to EDIFACT conversion successful']);
    }

    /**
     * Convert the EDIFACT data to a string representation.
     *
     * @param array $edifact
     * @return string
     */
    /**
 * Convert the EDIFACT data to a string representation.
 *
 * @param array $edifact
 * @return string
 */
private function edifactToString(array $edifact): string
{
    $segmentSeparator = "'";
    $elementSeparator = '+';
    $subElementSeparator = ':';

    $edifactString = '';
    foreach ($edifact as $segmentName => $segmentData) {
        $segmentString = $segmentName;

        if (is_array($segmentData)) {
            $segmentString .= $elementSeparator . $this->parseElement($segmentData, $subElementSeparator, $elementSeparator);
        } else {
            $segmentString .= $elementSeparator . $segmentData;
        }

        $edifactString .= $segmentString . $segmentSeparator . PHP_EOL;
    }

    return $edifactString;
}

/**
 * Parse an element in the EDIFACT structure.
 *
 * @param array $element
 * @param string $subElementSeparator
 * @return string
 */
private function parseElement(array $element, string $subElementSeparator, string $elementSeparator): string
{
    $elementString = '';
    foreach ($element as $key => $value) {
        if (is_array($value)) {
            if (isset($value[0])) {
                foreach ($value as $subElement) {
                    $elementString .= $this->parseElement($subElement, $subElementSeparator, $elementSeparator) . $elementSeparator;
                }
            } else {
                $elementString .= $key . $subElementSeparator . $this->parseElement($value, $subElementSeparator, $elementSeparator);
            }
        } else {
            $elementString .= $key . $elementSeparator . $value;
        }
    }

    return $elementString;
}

}

                        // dd($segmentString);