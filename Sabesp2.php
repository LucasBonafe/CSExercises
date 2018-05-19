<?php
function multiexplode($delimiters,$string){$ready = str_replace($delimiters, $delimiters[0], $string);$launch = explode($delimiters[0], $ready);return  $launch;}

function Get_Tabela($mes,$ano){//Gerará a variável $tabela
    $url = 'http://www2.sabesp.com.br/mananciais/dadoscantareira/DadosRepresa.aspx';
    $data = array('__VIEWSTATE' => 'ThanvcIVQ1VIyInRrpdDh+qVMTdNGeWgyGZyW/8M3XDmSOF4duOpZwwgVhQbwo8uH8S3MxZ039Ob2s7OYAS2FYIcFsgcNKLCRbGyFS1ShM2q0DQ84gvAhD1NKVXip9HpTK8tBF3+GcS6xtwpVWZrd+oWW7pIh6E0JeFHiJcyov/BFl8grJ1rqBw/8cvhzb0WPwjTPDnFfW5PFovvJVp+Zm28Q8yvr1Xk6LjAZBt7vFWVH7aifg8N5MQ+aZiDd29+3GLiXdAoUYrJ3QRS1prk0wwskwQBs33F5KX+jVq1YwsCHh4SPkWgPY7Txqzt237BFyAL4btf6qFYYfJ4Su0/koyX5i9MTKcOQjj0vyUxQx855BuqsV+gKvKWW5Wx+1YZ5kpvDEpogsbIU/MzjDY98qh4gYGoNfmTdMrOJPOAStHM3fwoFjFw714WXPX0tSAyBik72amUZP90UCrAaMe0LLC+Hcv2j7D+m/HywAOm/P8cfEC2LXkIPjUfW4QeBoAJ/q/Nq+ePleoaxCaj3Zg6Sqy//DeHH/K71gsj8tUrlLoMRTfaIlQi8UhcFYlSj7/hOAnct9JLEwDnf5WJJ3k4/71xaeSMxyk7zS8CqSt9a2yUO/xBVcQm4HJUiWV5PsrXsW4gtYQjeBgtWiRpkqlDHQjo9mA=', '__VIEWSTATEENCRYPTED' => '', 'ctl00$cntTitulo$cmbMes' => "$mes", 'ctl00$cntTitulo$cmbAno' => "$ano", 'ctl00$cntTitulo$btnVizualiza' => 'Visualizar');
    
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $html = file_get_contents($url, false, $context);
    $html_tabela = multiexplode(array('<tbody>','</tbody>'), $html);
    $result = str_replace(array("\r\n", "\r", "\n"), "</tupla>", $html_tabela[1]); 
    return $result;
}

function Get_Dados($tabela){//Gerará a variável $dados
    $tuplas= explode('</tr><tr></tupla>', $tabela);
    //print_r($tuplas);
    $arr = [];
    foreach ($tuplas as $tupla){
        @$dados= multiexplode(array('<td>','</td><td>','</td></tupla>'), $tupla);
        array_shift($dados);//Retira o primeiro elemento de um array
        unset($dados[21]);//Remove o array 21
        //print_r($dados);
        $result[] = array($dados);
    }
    return $result;
}

function CSV($nome, $cabecalho, $dados){//Gera o arquivo CSV para Download
    header('Content-Type: text/csv; charset=utf-8');
    header("Content-Disposition: attachment; filename=$nome.csv");
    header('Pragma: no-cache');
    $saida = fopen('php://output', 'w') or die("Não foi possível abrir php://output");
    foreach ($dados as $linha){
        fputcsv($saida, $linha, ';');
    }
    fclose($saida);
}

function Baixar_Tabelas($anoInicial, $anoFinal){//Gera CSV's em massa EXPERIMENTAL
    ini_set('max_execution_time', 300); //300 segundos = 5 minutos e 0=Sem limite
    $anos= range($anoInicial,$anoFinal); //$anos= array(2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018);
    $meses= range(1,12); //$meses= array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
    foreach ($anos as $ano){
        foreach ($meses as $mes){
            $tabela= Get_Tabela($mes, $ano);
            $dados= array_map(function($item){return $item[0];}, Get_Dados($tabela));
            $data_tabela= explode('01/', $dados[0][0]);
            $data= implode("",$data_tabela);
            $cabecalho= array('Data','NA (m)','Pluv (mm)','Qjus (m3/s)','NA (m)','Pluv (mm)','Qjus (m3/s)','NA (m)','Pluv (mm)','Qjus (m3/s)','NA (m)','Pluv (mm)','Qjus (m3/s)','NA (m)','Pluv (mm)','Qjus (m3/s)','F-25Bt (m3/s)','Q T7 (m3/s)','Q T6 (m3/s)','Q T5 (m3/s)', 'Q ESI (m3/s)');
            CSV($data, $cabecalho, $dados);
        }
    }
}

$cabecalho= array('Data','NA (m)','Pluv (mm)','Qjus (m3/s)','NA (m)','Pluv (mm)','Qjus (m3/s)','NA (m)','Pluv (mm)','Qjus (m3/s)','NA (m)','Pluv (mm)','Qjus (m3/s)','NA (m)','Pluv (mm)','Qjus (m3/s)','F-25Bt (m3/s)','Q T7 (m3/s)','Q T6 (m3/s)','Q T5 (m3/s)', 'Q ESI (m3/s)');
$tabela= Get_Tabela(3,2017);
//print_r($tabela);
$dados= array_map(function($item){return $item[0];}, Get_Dados($tabela));
//print_r($dados);
$data_tabela= explode('01/', $dados[0][0]);
$data= implode("",$data_tabela);
//print_r($data);
CSV($data, $cabecalho, $dados);
//Baixar_Tabelas(2004,2018);
