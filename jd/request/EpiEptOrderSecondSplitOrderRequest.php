<?php
 namespace Purnamasari\Jos\JD\Request;

class EpiEptOrderSecondSplitOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.epi.ept.order.secondSplitOrder";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $secondSplitOrderReq;

    public function setSecondSplitOrderReq($secondSplitOrderReq){
        $this->apiParas['secondSplitOrderReq'] = $secondSplitOrderReq;
    }
    public function getSecondSplitOrderReq(){
        return $this->apiParas['secondSplitOrderReq'];
    }
}

?>