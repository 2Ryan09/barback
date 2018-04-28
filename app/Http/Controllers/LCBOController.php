<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LCBOController extends Controller
{
	public function __construct()
	{
        $this->client = new Client([
            'base_uri' => 'http://lcboapi.com/products/',
        ]);
  
        $this->headers = array('Authorization' => 'Token MDowZWI0NTNmNC00NGJjLTExZTgtYjY4OS04ZmZmYjQyODM5NmU6M2tKTGFEOU1YR05mbkN5QXd2Z3FQQVo3anVsaHNPamtvbXhQ',
                               'Accept' => 'application/json');
    }
    
    public function getProductInfo($productID)
    {
        $response = $this->client->request('GET', $productID, ['headers' => $this->headers]);
     }
}
