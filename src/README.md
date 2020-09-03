## Operações Matemáticas via terminal

Para utilizar, primeiro inicie a imagem docker (que está na pasta raiz) com:
``` 
docker-compose up -d
```
<br>Agora você precisará acessar o terminal do container docker, no qual utilizaremos o PHP e o Composer. <br>
Para isso execute:
```
docker container exec -it trab-calc-php bash
```
Ok! Agora você está no terminal do container.
<br>
Para utilizar a calculadora, vamos agora instalar as dependências do nosso arquivo:
```
composer install
```
Perfeito, agora é só utilizar a calculadora.
Para isso execute: 
``` 
php index.php
```
A resposta deverá vir assim:
> [1] Raiz Quadrada <br>
> [2] Fatorial <br>
> [3] Ao Quadrado <br>
> Escolha uma das opções acima:
</blockquote>
<br>
<h2> Prontinho! Só usar :)