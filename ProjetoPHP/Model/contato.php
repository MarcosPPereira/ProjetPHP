<?php

if (isset($_GET["txtnome"])) {
    $nome   = $_GET["txtnome"];
    $server = "localhost";
    $user   = "root";
    $senha  = "123456";
    $base   = "cursos";
    $conexao = mysql_connect($server, $user, $senha) or die("Erro na conexão!");
    mysql_select_db($base);

    if (empty($nome)) {
        $sql = "SELECT * FROM apostila";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM apostila WHERE apostila like '$nome'";
    }

    $result = mysql_query($sql);
    $cont = mysql_affected_rows($conexao);

    if ($cont > 0) {
        $tabela = "<table border='1'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>APOSTILA</th>
                            <th>SYSNOPSIS</th>
                            <th>PREÇO</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";

        while ($linha = mysql_fetch_array($result)) {
            $return.= "<td>" . utf8_encode($linha["idApostila"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["apostila"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["synopsis"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["price"]) . "</td>";
            $return.= "</tr>";
        }

        echo $return.="</tbody></table>";

    } else {

        echo "Não foram encontrados registros!";

    }
}
?>
