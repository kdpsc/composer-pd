composer-pd
===========

Um ambiente docker simples com Nginx, Node.js e MySQL.

> ## Dependências
> * docker
> * docker-compose

Branch master
-------------

O branch master deste projeto possui somente o arquivo docker-compose.yaml, que executa o pull das imagens buildadas diretamente do Docker Hub.

### Build

Para buildar o projeto execute os passos a seguir:

1. git clone https://github.com/kdpsc/composer-pd.git
2. cd composer-pd && docker-compose up -d
3. firefox http://localhost &

Branch develop
--------------

### Build

Para buildar o projeto execute os passos a seguir:

1. git clone https://github.com/kdpsc/composer-pd.git
2. cd composer-pd
3. git-checkout develop && docker-compose up -d --build
4. firefox http://localhost &

Desativar ambiente
------------------

Para desligar o ambiente, execute:
* docker-compose down
