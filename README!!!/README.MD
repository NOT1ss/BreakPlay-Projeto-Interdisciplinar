# OBS:

Contém muitos arquivos .php em uma única pasta, por conta de um bug que o css não está sendo reconhecido se um arquivo.php estiver em outra pasta.

## Sistema de Login

O projeto em questão, trata-se de um Sistema desenvolvido com PHP Orientado a Objetos com o intuito de práticar todas as tecnologias aprendidas, como PHP, POO, PDO, MySQL e HTML e CSS. 

### O que o Sistemas faz?

Um sistema cadastra usuários no Banco de Dados, e faz as devidas validações quanto as regras pré-estabelecidas. Como por exemplo, se já existe e-mail cadastrado no Banco de Dados. Logo depois, o usuário tendo seu e-mail e senha cadastrados. Ele já poderá Logar no Sistema, respeitanddo a senha e e-mail inseridos no BD. E, por conseguinte, poderá entrar na Área Restrita (Área de Filmes/Séries), que não é acessível a todos. 

#### Como usar o Sistema??

1. Clone este repositório;
2. Vai até o localhost > phpmyadmin;
3. Crie um Banco de Dados chamado breakplay;
4. Insira sql o seguinte código: 

~~~~
create database breakplay;

use breakplay;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
~~~~

5. Salve o BD;
6. Ou utilize o banco pronto que nós disponibilizamos na pasta Banco de Dados dentro dos arquivos.

##### Obrigado por ler! ;)