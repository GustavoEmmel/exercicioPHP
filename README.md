Para testar as soluções desenvolvidas, deve-se copiar a pasta gustavo para a pasta html do ubuntu ou htdocs do xampp. Lembrar de dar permissão geral para a pasta:
chmod -R 777 /var/www/html/gustavo/

1 Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima
“Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos
de ambos (3 e 5), imprima “FizzBuzz”.

Programa desenvolvido na pasta 1.
Para executar o arquivo em tela do browser, acessar o seguinte caminho:
http://localhost/gustavo/1/Numbers.php

Foram escritos testes unitários para este arquivo. Com o PHPUnit instalado no servidor local, digitar o seguinte comando dentro da pasta da aplicação (ex. /var/www/html/gustavo/1/ ):
http://localhost/gustavo/1/Numbers.php

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

4 Desenvolva uma API Rest para um sistema gerenciador de tarefas (inclusão/alteração/exclusão). As tarefas consistem em título e descrição, ordenadas por prioridade.
Esta aplicação pode ser acessada através dos links abaixo:
http://localhost/gustavo/4/frontend/index.php?class=DatagridBootstrapView

http://localhost/gustavo/4/frontend/index.php?class=FormBootstrapView

O primeiro link dará acesso a uma datagrid que mostrará as atividades cadastradas, já o segundo link contém um formulário para adicionar nova atividade.
Ambas telas foram desenvolvidas em PHP, utilizando o Adianti Framework (http://www.adianti.com.br/), utilizam a biblioteca bootstrap e são responsivas para utilização tanto no browser quanto no dispositivo móvel.
Toda a Framework com suas telas está na pasta /gustavo/4/frontend/

Os arquivos webservices estão na pasta /Gustavo/4/servisse/
O código segue a mesma estrutura do exercício anterior. Contendo nesta pasta os arquivos responsáveis pela conexão com o banco e geração de scripts de consulta, bem como dois arquivos para ler os dados do banco e enviar para datagrid e o cliente soup que receberá os dados do formulário front end e gravará na base de dados.

Para gerar a tabela na base de dados utilizar o seguinte script:
CREATE TABLE `test`.`ticket` ( `id` SERIAL NOT NULL , `titulo` TEXT NOT NULL , `descricao` TEXT NOT NULL , `prioridade` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

