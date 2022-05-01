<?php

// 0-7 leitura, execução e gravação 1(execução), 2(gravação), 3(executar e gravar), 4(leitura), 5(leitura e execução), 6(leita e gravação) 7(tudo))
// 0123 1(dono do servidor), 2(usuarios), 3(convidados)

$pasta = "arquivos";
$permição = "0775";

if(!is_dir($pasta)) mkdir($pasta, $permição);

echo "diretório criado com sucesso";

?>