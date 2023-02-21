<?php
  
namespace Onex\Responsestructure\Responsestructure;
  
class ResponseStructureClass 
{   
            
    /**
     * constructResponse
     *
     * @param  array $dataBag
     * @param  string $responseMessage
     * @param  string $bodyMessageTitle
     * @param  string $bodyMessage
     * @param  string $messageType
     * @param  string $responseStatus
     * @param  string $responseType
     * @param  string $httpCode
     * @return array
     */
    public static function constructResponse($dataBag = [], $responseMessage = '', $bodyMessageTitle = '', $bodyMessage = '', $messageType = 'success', $responseStatus = 200, $responseType = 'success', $httpCode = 200)
    {
        $responseArray = [];
        $responseArray['response_status'] = $responseStatus;
        $responseArray['response_type'] = $responseType;
        $responseArray['response_message'] = $responseMessage;
        $responseArray['body']['message_title'] = $bodyMessageTitle;
        $responseArray['body']['message_body'] = $bodyMessage;
        $responseArray['body']['type'] = $messageType;
        $responseArray['body']['content'] = $dataBag;
        return $responseArray;
    }

    /**
     * constructResponseJson
     *
     * @param  array $dataBag
     * @param  string $responseMessage
     * @param  string $bodyMessageTitle
     * @param  string $bodyMessage
     * @param  string $messageType
     * @param  string $responseStatus
     * @param  string $responseType
     * @param  string $httpCode
     * @return json
     * 
     * @for extract in array use - json_decode($getResponse, true);
     * @for extract in object of arrays use - (object) json_decode($getResponse, true);
     */
    public static function constructResponseJson($dataBag = [], $responseMessage = '', $bodyMessageTitle = '', $bodyMessage = '', $messageType = 'success', $responseStatus = 200, $responseType = 'success', $httpCode = 200)
    {
        $responseArray = [];
        $responseArray['response_status'] = $responseStatus;
        $responseArray['response_type'] = $responseType;
        $responseArray['response_message'] = $responseMessage;
        $responseArray['body']['message_title'] = $bodyMessageTitle;
        $responseArray['body']['message_body'] = $bodyMessage;
        $responseArray['body']['type'] = $messageType;
        $responseArray['body']['content'] = $dataBag;
        return json_encode($responseArray);
    }

    /**
     * constructResponseJsonObject
     *
     * @param  array $dataBag
     * @param  string $responseMessage
     * @param  string $bodyMessageTitle
     * @param  string $bodyMessage
     * @param  string $messageType
     * @param  string $responseStatus
     * @param  string $responseType
     * @param  string $httpCode
     * @return jsonObject
     * 
     * @for extract value from json object - $getResponse->getData();
     * @for fetching values in depth - $getResponse->getData()->objVal1->objVal2 .....;
     * @for convert into array of objects - (array) $getResponse->getData();
     */
    public static function constructResponseJsonObject($dataBag = [], $responseMessage = '', $bodyMessageTitle = '', $bodyMessage = '', $messageType = 'success', $responseStatus = 200, $responseType = 'success', $httpCode = 200)
    {
        $responseArray = [];
        $responseArray['response_status'] = $responseStatus;
        $responseArray['response_type'] = $responseType;
        $responseArray['response_message'] = $responseMessage;
        $responseArray['body']['message_title'] = $bodyMessageTitle;
        $responseArray['body']['message_body'] = $bodyMessage;
        $responseArray['body']['type'] = $messageType;
        $responseArray['body']['content'] = $dataBag;
        return response()->json($responseArray, $httpCode);
    }
}