# CRUD - Sistema de ordens de serviço

Projeto feito feito em PHP com o framework Codeigniter 4 e MySQL.

# Como rodar o projeto

- Instalar o PHP 8
  > [link](https://windows.php.net/download#php-8.1)
- Instalar o composer
  > [link](https://getcomposer.org/download/)
- Instalar o MySQL
  > [link](https://dev.mysql.com/downloads/installer/)
- Criar o banco de dados e a tabela no MySQL:
  - comando para criar o banco de dados:
    > CREATE DATABASE service_orders;
  - comando para criar a tabela:
  <pre>
    create table orders(
      id	INT NOT NULL AUTO_INCREMENT,
      data_abertura DATE NOT NULL,
      cliente_nome VARCHAR(255) NOT NULL,
      cliente_endereco VARCHAR(255) NOT NULL,
      cliente_telefone VARCHAR(255),
      cliente_email VARCHAR(255),
      desc_servico LONGTEXT NOT NULL,
      valor_servico FLOAT NOT NULL,
      created_at DATE NOT NULL,
      updated_at DATE NOT NULL,
      deleted_at DATE NOT NULL,
      PRIMARY KEY (id));
</pre>

- Para criar e conectar ao banco de dados você pode usar o SGBD da sua escolha, como o mysql workbench ou o dbeaver.

- Clonar ou baixar o zip do projeto:
  - Para clonar é necessário ter o GIT instalado
  > [link](https://git-scm.com/download/win)
  - No terminal executar o comando:
  > git clone https://github.com/guidani/service-orders-crud.git
- Criar um arquivo .env na raiz do projeto e adicionar as seguintes linhas:
  > CI_ENVIRONMENT = development
  <pre>
  database.default.hostname = localhost
  database.default.database = service_orders
  database.default.username = root
  database.default.password = 
  database.default.DBDriver = MySQLi
  database.default.DBPrefix =
  database.default.port = 3306
  </pre>
  - **database**: nome do banco de dados do projeto;
  - **username**: nome do usuário do mysql, root é o padrão, mas altere para o seu nome de usuario caso você tenha alterado o mesmo na instalação do mysql;
  - **password**: senha do usuário do mysql, o padrão é vazio, mas altere para a sua senha caso você tenha alterado a mesma na instalação do mysql;
- Abra a pasta do projeto no terminal e execute o comando a seguir e aguarde a instalação da dependencias:
  > composer install
- Após a instalação execute o comando a seguir no terminal para executar o projeto:
  > php spark serve
- O projeto deve iniciar no endereço *http://localhost:8080*

## Considerações sobre o projeto
No momento a funcionalidade de pesquisa apenas realiza a busca pelo nome do cliente e há um bug na funcionalidade, onde ao clicar no botão de pesquisar o usuário é redirecionado para o link *http://localhost:8080/index.php/search* o que resulta em uma página vazia. Mas se o termo index.php/ for apagado e for adicionado o termo de pesquisa, a pesquisa é feita normalmente como no exemplo:
  > *http://localhost:8080/search?q=termo*

</br>
</br>

*"Faça o teu melhor, na condição que você tem, enquanto você não tem condições melhores, para fazer melhor ainda!" - Mario Sergio Cortella*