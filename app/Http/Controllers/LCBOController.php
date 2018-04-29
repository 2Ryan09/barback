<?php

namespace App\Http\Controllers;

require 'vendor/autoload.php';

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class LCBOController extends Controller
{
    public function __construct()
    {
        $baseServiceURL = 'https://lcboapi.com/products'; 
        $theHeaders = ['Content-Type' => 'application/json', 
                       'Accept' =>  'application/json', 
                       'Authorization' => 'Token MDowZWI0NTNmNC00NGJjLTExZTgtYjY4OS04ZmZmYjQyODM5NmU6M2tKTGFEOU1YR05mbkN5QXd2Z3FQQVo3anVsaHNPamtvbXhQ'
        ];


        $this->base_url = "https://lcboapi.com/products"
  
        $this->headers = array('Authorization' => 'Token MDowZWI0NTNmNC00NGJjLTExZTgtYjY4OS04ZmZmYjQyODM5NmU6M2tKTGFEOU1YR05mbkN5QXd2Z3FQQVo3anVsaHNPamtvbXhQ',
                               'Accept' => 'application/json');
    }
    
    public function getProductInfo($productID)
    {
    }

    public function getQueried()
    {
    }
}
