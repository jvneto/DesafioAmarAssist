<h1 align="center">Bem-vindo ao Desafio Amar Assist 👋</h1>
<p>
  <img alt="Version" src="https://img.shields.io/badge/version-1.0-blue.svg?cacheSeconds=2592000" />
  <a href="https://github.com/jvneto/DesafioClarkeEnergia/blob/main/README" target="_blank">
    <img alt="Documentation" src="https://img.shields.io/badge/documentation-yes-brightgreen.svg" />
  </a>
  <a href="#" target="_blank">
    <img alt="License: GPL--3.0 License" src="https://img.shields.io/badge/License-GPL--3.0 License-yellow.svg" />
  </a>
</p>

> Esse projeto consiste em ser uma conclusão do Desafio Amar Assist, o desafio consiste em: &#34;Desenvolvimento de um CRUD em Laravel com o tema Agenda de Contatos&#34;

## Pré-requisito

- **[PHP - 7.4](https://www.php.net/releases/7_4_0.php)**
- **[COMPOSER - 7.4](https://getcomposer.org/)**
- **[MYSQL - 5.7.22](https://www.mysql.com/)** Com Banco de Dados Configurado.

## Instalação e Configurações

Para fazer a instalação do projeto é necessário clonar esse repositório do Gitbub, para sua maquina local, para isso é necessário executar o seguinte comando no terminal:

```sh
git clone https://github.com/jvneto/DesafioAmarAssist.git
```

Após clonar o repositório do projeto, é necessário acessar a pasta do projeto clonado, para isso é necessário executar o seguinte comando no terminal:
```sh
cd DesafioAmarAssist
```

Feito isso vamos agora copiar o .env.example para .env, para isso é necessário executar o seguinte comando no terminal:
```sh
cp .env.example .env
```

Após criar o .env, agora vamos instalar as dependencias do projeto, para isso é necessário executar o seguinte comando no terminal:
```sh
composer install
```
Depois de todas as dependencias instaladas, precisamos agora criar a chave do projeto, para ter acesso ao painel de administração, precisamos criar um usuário super-admin, para isso é necessário executar o seguinte comando no terminal:
```sh
php artisan key:generate
```

Após gerar a chave do projeto, precisamos configurar as credenciais de acesso para o banco de dados, para isso precisaremos abrir o arquivo .env em algum editor de texto ou IDE de programação.

Feito isso vamos configurar o Banco de Dados:
```sh
DB_HOST=ENDEREÇO_DO_BANCO_DE_DADOS
DB_PORT=PORTA_DO_BANCO_DE_DADOS
DB_DATABASE=NOME_DO_BANCO_DE_DADOS
DB_USERNAME=NOME_DE_USUARIO_DO_BANCO_DE_DADOS
DB_PASSWORD=SENHA_DO_USUARIO_DO_BANCO_DE_DADOS
```

Apos ter configurado as credenciais de acesso para o Banco de Dados, temos que migrar todas as tabelas para o banco de dados, para isso precisamos executar o seguinte comando no terminal:
```sh
php artisan migrate
```

Apos ter configurado e migrado todas as tabelas para o Banco de Dados, podemos agora iniciar o projeto, para isso precisamos executar o seguinte comando no terminal:
```sh
php artisan server
```

Apos executar todos esses comandos. Parabéns agora você, já tem acesso à aplicação.

## Entendo o Fluxo

Ao acessar a aplicação pela primeira vez, é necessário criar uma conta, com essa conta criada, uma página irá aparecer e nela observa-se uma faixa vermelha escrito "Nenhum Contato Encontrado!", isso significa que ainda não temos nenhum contato cadastrado em nossa agenda, para cadastrar um novo contato, é necessario clicar no botão "Criar Contato", nele algumas informações será necessarias como nome, e-mail e telefone, o CEP, é um parameter que não tem necessidade ser preenchido, mas quando preenchido o sistema retornar as demais informações com base no CEP, depois de tudo ser preenchido é necessario clicar em "Criar". Pronto agora, já temos um contato na nossa agenda de contatos, esse processo pode ser repetido inúmeras vezes.

## Código Fonte

O código-fonte desse projeto foi projetado a seguir como principio a escalabilidade para novas funções, o Don't Repeat Yourself, e a facilidade em compreender os trechos.

## Composição do Código Fonte

- Back-end: **[Laravel](https://laravel.com/)**
- Front-end: **[Bootstrap](https://getbootstrap.com/)**
- Banco de Dados: **[Mysql](https://www.mysql.com/)**
- Armazenamento de Dados em Memória: **[Redis](https://redis.io/)**
- ### Gerenciador de Pacotes
    - Back-end: **[Composer](https://getcomposer.org/)**

---

## Autor

👤 **Julio Cesar**

- Github: [@jvneto](https://github.com/jvneto)
- LinkedIn: [@julio-c-neto](https://linkedin.com/in/julio-c-neto)

## 🤝 Contribuições

Contribuições, problemas e solicitações de recursos são bem-vindos! Fique a vontade para verificar a [ página de problemas](https://github.com/jvneto/DesafioClarkeEnergia/issues).
