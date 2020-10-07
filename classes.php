<?php
// classes e variaveis
class ordem_de_servicos{
    public $OS, $data, $Situacao, $solicitante, $area;  
}
class dados_dos_clientes{
    public $nome, $telefone, $endereco, $bairro, $cidade, $UF, $CEP;
}
class equipamento {
    public $local_equipamentos, $justificativa, $defeito_problema_manutencao, $obs;
}
class servicos {
    public $hora_inicio, $hora_termino, $atividade, $tecnico, $tempo_tot;
}

?>