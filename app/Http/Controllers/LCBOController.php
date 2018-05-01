<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class LCBOController extends Controller
{
    public function __construct()
    {
        $this->base_url = 'https://lcboapi.com/products'; 
        $this->headers = ['Content-Type' => 'application/json', 
                       'Accept' =>  'application/json', 
                       'Authorization' => 'Token MDowZWI0NTNmNC00NGJjLTExZTgtYjY4OS04ZmZmYjQyODM5NmU6M2tKTGFEOU1YR05mbkN5QXd2Z3FQQVo3anVsaHNPamtvbXhQ'
        ];

        $this->client = new Client([
                                'base_uri' => $this->base_url,
                                'headers'  => $this->headers
                            ]);
    }
    
    public function getQueried(Request $request)
    {
        $search = str_replace(" ", "+", $request->input('query'));

        $response = $this->client->request('GET', $this->base_url . "?q=" . $search);

        return \View::make("pages.bws")->with(array('items'=>json_decode($response->getBody())->result));
    }

    public function addItem(Request $request)
    {
        $item = $request->input('item');

        dd($item);
    }
}