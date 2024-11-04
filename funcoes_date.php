<?php
//aula de php de funções para datas

#echo date('d/m/Y H:i')."<br>"; -> Recuperar a data atual
#echo date_default_timezone_get()."<br>"; -> Recuperar o timezone default da aplicação (recupera a localização do horario)
#echo date_default_timezone_set('America/Sao_Paulo')."<br>"; -> Atualizar o timezone default da aplicação (atualiza a localização do horario)
#strtotime($data_inicial); -> irá transformar a data em segundos
$data_inicial = '2018-04-24';
$data_final = '2018-05-15';

//timestamp
//01/01/1970 até 2018-04-24

//js -> milissegundos / php -> segundos

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

echo $data_inicial . ' - ' . $time_inicial . '<br>';
echo $data_final . ' - ' . $time_final . '<br>';

$diferenca_times = $time_final - $time_inicial;

echo "<hr>";

echo "a diferença de segundos entre a data inicial e a final é: " . $diferenca_times . "<br>";

$segundos_existem_dia = 24 * 60 * 60;

echo "Um dia possui " . $segundos_existem_dia . " segundos <br>";

$diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

echo "a diferença em dias é " . $diferenca_de_dias_entre_as_datas;