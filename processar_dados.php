<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Formata os dados
    $dadosFormatados = "Nome: $nome\nEmail: $email\nSenha: $senha\n\n";

    // Abre o arquivo para escrita (ou cria se não existir)
    $arquivo = fopen("dados.txt", "a");

    // Escreve os dados no arquivo
    fwrite($arquivo, $dadosFormatados);

    // Fecha o arquivo
    fclose($arquivo);

    // Redireciona de volta para a página principal
    header("Location: principal.html");
    exit(); // Encerra o script
}
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Formata os dados
    $dadosFormatados = "Nome: $nome\nEmail: $email\nSenha: $senha\n\n";

    // Abre o arquivo para escrita (ou cria se não existir)
    $arquivo = fopen("dados.txt", "a");

    // Escreve os dados no arquivo
    fwrite($arquivo, $dadosFormatados);

    // Fecha o arquivo
    fclose($arquivo);

    // Redireciona de volta para a página principal
    header("Location: principal.html");
    exit(); // Encerra o script
}
?>