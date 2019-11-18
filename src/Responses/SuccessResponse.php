<?php

namespace Sanmark\LaravelStandardJsonResponses\Responses;

class SuccessResponse
{
    private $data;
    private $statusCode;
    private $headers;

    public function __construct($data, $statusCode = 200, $headers = [])
    {
        $this -> data = $data;
        $this -> statusCode = $statusCode;
        $this -> headers = $headers;
    }

    public function getResponse()
    {
        $response = response()
            -> json([
                'data' => $this -> data ,
            ])
            -> setStatusCode($this -> statusCode)
        ;

        foreach($this->headers as $key => $value){
            $response->header($key,$value);
        }

        return $response;
    }
}
