<?php

/**
 * Simple JSON-RPC interface.
 */

/*
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://mainnet.infura.io/');
curl_setopt($ch, CURLOPT_PORT, 443);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"jsonrpc":"2.0", "method":"eth_call", "params":[{"to":"0xB01e955b4F08e3B2abb21bFa86aA932c7F756912", "data": "0xdf998f59022567990000000000000000000000009740Cd40296744a0aE2aFD115933a791Da4c2AD8"}, "latest"], "id":1}');
0000000000000000000000007D55bEFF247dE632Ea51F24e59643c2c

$ret = curl_exec($ch);
dump($ret); */

namespace  APP;
use Exception;

class JSON_RPC
{
	protected $host, $port, $version;
	protected $id = 0;
	
	function __construct()
	{
		$this->host = env('EHT_HOST', 'https://mainnet.infura.io/');
		$this->port = env('ETH_PORT', 443);
		$this->version = "2.0";
	}
	
	function request($method, $params=array(), $block = '')
	{

        $params = empty($block) ? '['. json_encode($params) .  ']' : '['. json_encode($params) .',"'.$block.'"]';
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $this->host);
		curl_setopt($ch, CURLOPT_PORT, $this->port);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
		curl_setopt($ch, CURLOPT_POST, TRUE);
		//curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
		curl_setopt($ch, CURLOPT_POSTFIELDS, '{"jsonrpc":"'.$this->version.'", "method":"'.$method.'", "params":'.$params.', "id":'.$this->id++.'}');

		$ret = curl_exec($ch);
		if($ret !== FALSE)
		{
			$formatted = $this->format_response($ret);
			
			if(isset($formatted->error))
			{
				throw new RPCException($formatted->error->message, $formatted->error->code);
			}
			else
			{
				return $formatted;
			}
		}
		else
		{
			throw new RPCException("Server did not respond");
		}
	}
	
	function format_response($response)
	{
		return @json_decode($response);
	}
}

class RPCException extends Exception
{
    public function __construct($message, $code = 0, Exception $previous = null) 
    {
        parent::__construct($message, $code, $previous);
    }
    
    public function __toString() 
    {
        return __CLASS__ . ": ".(($this->code > 0)?"[{$this->code}]:":"")." {$this->message}\n";
    }
}