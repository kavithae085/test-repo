<?php

class Model_frammer {

    function __construct()
    {
        
    }

    public function login($params = array()) {
        $url = API_BASE_URL . "/login";
        $headers = array("ftoken: {$params['ftoken']}");
        $data = makeCURLRequest(array('url'=>$url,'headers'=>$headers));
        $data = json_decode($data['data'],1);
        return $data;
    }
}

?>
