<?php
class Tabela{
    public $data,
    $NA1, $Pluv1, $Qjus1,//Jaguari/Jacareí
    $NA2, $Pluv2, $Qjus2,//Cachoeira
    $NA3, $Pluv3, $Qjus3,//Atibainha
    $NA4, $Pluv4, $Qjus4,//Paiva Castro
    $NA5, $Pluv5, $Qjus5,//Águas Claras
    $F25Bt, $QT7, $QT6, $QT5, $QESI;

    function Get_Tabela($m,$a){
        $url = 'http://www2.sabesp.com.br/mananciais/dadoscantareira/DadosRepresa.aspx';
        $data = array('__VIEWSTATE' => 'ThanvcIVQ1VIyInRrpdDh+qVMTdNGeWgyGZyW/8M3XDmSOF4duOpZwwgVhQbwo8uH8S3MxZ039Ob2s7OYAS2FYIcFsgcNKLCRbGyFS1ShM2q0DQ84gvAhD1NKVXip9HpTK8tBF3+GcS6xtwpVWZrd+oWW7pIh6E0JeFHiJcyov/BFl8grJ1rqBw/8cvhzb0WPwjTPDnFfW5PFovvJVp+Zm28Q8yvr1Xk6LjAZBt7vFWVH7aifg8N5MQ+aZiDd29+3GLiXdAoUYrJ3QRS1prk0wwskwQBs33F5KX+jVq1YwsCHh4SPkWgPY7Txqzt237BFyAL4btf6qFYYfJ4Su0/koyX5i9MTKcOQjj0vyUxQx855BuqsV+gKvKWW5Wx+1YZ5kpvDEpogsbIU/MzjDY98qh4gYGoNfmTdMrOJPOAStHM3fwoFjFw714WXPX0tSAyBik72amUZP90UCrAaMe0LLC+Hcv2j7D+m/HywAOm/P8cfEC2LXkIPjUfW4QeBoAJ/q/Nq+ePleoaxCaj3Zg6Sqy//DeHH/K71gsj8tUrlLoMRTfaIlQi8UhcFYlSj7/hOAnct9JLEwDnf5WJJ3k4/71xaeSMxyk7zS8CqSt9a2yUO/xBVcQm4HJUiWV5PsrXsW4gtYQjeBgtWiRpkqlDHQjo9mA=', '__VIEWSTATEENCRYPTED' => '', 'ctl00$cntTitulo$cmbMes' => '$m', 'ctl00$cntTitulo$cmbAno' => '$a', 'ctl00$cntTitulo$btnVizualiza' => 'Visualizar');

        $options = array(// use key 'http' even if you send the request to https://...
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return $result;
    }
}

class Planilhas{
    public $data, $NA, $Pluv, $Qjus, $F25Bt, $QT7, $QT6, $QT5, $QESI;
    private $jaguari, $cachoeira, $atibainha, $paiva, $aguas;

    function Get_Planilha($gp){
        $doc= new DOMDocument();
        $doc->loadHTML(file_get_contents($gp));
        $finder = new DomXPath($doc);
        $tableid="tbody";
        $nodes = $finder->query("//*[contains(concat(' ', normalize-space(@id), ' '), ' $tableid ')]");
        foreach ($nodes as $node){
            $links= $node->getElementsByTagName("a");
            foreach ($links as $link){
                //echo $link->getAttribute("href")."<br>";
                $linktratado = $link->getAttribute("href")."<br>";
                parse_url($linktratado, PHP_URL_PATH);
                $keys = explode("/", $linktratado);
                echo $keys[5];
            }
        }
    }

    function Get_Data(){
        $anos= range(2004,2018); //$ano= array(2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018);
        $meses= range(1,12); //$mes= array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
        foreach ($anos as $ano){
            foreach ($meses as $mes){
                Get_Planilha($ano, $mes);
            }
        }
    }
}
?>
