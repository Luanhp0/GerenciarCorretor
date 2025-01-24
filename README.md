# Cadastro de Corretores

Este projeto é uma aplicação simples desenvolvida com o framework Laravel, que permite o cadastro e gerenciamento de corretores de imóveis. A aplicação inclui a criação, listagem, edição e exclusão de corretores. 

## Funcionalidades

- **Cadastro de Corretores**: Permite o cadastro de corretores com CPF, CRECI e nome.
- **Listagem de Corretores**: Exibe os corretores cadastrados em uma tabela.
- **Edição de Corretores**: Possibilita a edição dos dados de um corretor.
- **Exclusão de Corretores**: Permite a exclusão de corretores do banco de dados.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP utilizado para desenvolver a aplicação.
- **MySQL**: Banco de dados para armazenar as informações dos corretores.

## Instruções de Instalação

1. **Clone o repositório**:

    ```bash
    git clone https://github.com/SEU_USUARIO/cadastro-corretores.git
    ```

2. **Instale as dependências do projeto**:

    Navegue até a pasta do projeto e execute o seguinte comando para instalar as dependências do Laravel:

    ```bash
    composer install
    ```

3. **Configuração do ambiente**:

    Copie o arquivo `.env.example` para um novo arquivo chamado `.env` e configure suas credenciais de banco de dados:

    ```bash
    cp .env.example .env
    ```

    Edite o arquivo `.env` e configure as informações do banco de dados:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome_do_banco
    DB_USERNAME=usuario_do_banco
    DB_PASSWORD=senha_do_banco
    ```

4. **Gere a chave da aplicação**:

    ```bash
    php artisan key:generate
    ```

5. **Execute as migrações para criar as tabelas no banco de dados**:

    ```bash
    php artisan migrate
    ```

6. **Inicie o servidor local**:

    ```bash
    php artisan serve
    ```

    A aplicação estará disponível em [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Como Usar

- **Cadastro de Corretores**: Acesse a página inicial para cadastrar novos corretores, informando o CPF, CRECI e nome.
- **Listagem de Corretores**: Na página inicial, você verá uma tabela com todos os corretores cadastrados.
- **Edição e Exclusão**: A tabela de corretores oferece opções para editar ou excluir os registros.

## Contribuições

Sinta-se à vontade para contribuir com este projeto. Caso queira adicionar novas funcionalidades, corrigir bugs ou melhorar a documentação, siga os passos abaixo:

1. Fork este repositório.
2. Crie uma nova branch (`git checkout -b minha-nova-funcionalidade`).
3. Faça suas alterações e commit (`git commit -am 'Adiciona nova funcionalidade'`).
4. Envie para o repositório remoto (`git push origin minha-nova-funcionalidade`).
5. Crie um Pull Request explicando suas alterações.

## Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para mais detalhes.

