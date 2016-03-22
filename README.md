Para testar as soluções desenvolvidas, deve-se copiar a pasta gustavo para a pasta html do ubuntu ou htdocs do xampp. Lembrar de dar permissão geral para a pasta:
chmod -R 777 /var/www/html/gustavo/

1 Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima
“Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos
de ambos (3 e 5), imprima “FizzBuzz”.

Programa desenvolvido na pasta 1.
Para executar o arquivo em tela do browser, acessar o seguinte caminho:
http://localhost/gustavo/1/Numbers.php

Foram escritos testes unitários para este arquivo. Com o PHPUnit instalado no servidor local, digitar o seguinte comando dentro da pasta da aplicação (ex. /var/www/html/gustavo/1/ ):
phpunit tests/NumbersTest

2 Refatore o código abaixo, fazendo as alterações que julgar necessário.

Programa desenvolvido na pasta 2.
Refatorado o código para evitar acesso direto a variável superglobal, criando uma classe para tratamento da Session e da Cookie.
Pode-se testar acessando o seguinte arquivo:
http://localhost/gustavo/2/LocationGoogle.php
Para testar a funcionalidade deve setar um valor para sessão ou cookie e depois excluir o valor utilizando a função nativa unset do php, conforme comentários no código.

3 Refatore o código abaixo, fazendo as alterações que julgar necessário.

Programa desenvolvido na pasta 3.
Desenvolvimento foi baseado no princípio da responsabilidade única (S de SOLID).
Dentro da pasta foram criados dois arquivos:
bd.php  – iniciará a conexão com o banco de dados MySql;
sql.php – classe que contem as consultas sql que serão executadas;
Na pasta raiz da aplicação contem dois programas:
MyUserClass – Classe responsável pela execução da consulta e ordenamento do vetor de nomes;
ShowNames  – Programa que acessará a classe anterior para mostrar os nomes buscados na base 		 de dados em tela;
O resultado do código pode ser verificado acessando o seguinte endereço:
http://localhost/gustavo/3/ShowNames.php

Para gerar a tabela na base de dados utilizar o seguinte script:
CREATE TABLE `test`.`user` ( `id` SERIAL NOT NULL , `name` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
