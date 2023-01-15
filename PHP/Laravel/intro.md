- Framwork fullstack

# Comandos laravel-php
- php artisan serve ::: sobe o laravel
- php artisan make:controller SeriesController --resource
- php artisan make:component nome
- php artisan make:migration create_series_table
- php artisan migrate
- php artisan make:model serie



#### XSS (CROSS SITE SCRIPTING)
- um tipo de ataque que pode executar código malicioso em nosso site.
- É a capacidade de injetar script em um site.




- Gerenciador de dependencia de front 
  - npm
  - yarm


- ORM :: mapeamento do mundo sql para o mundo orientado a obj
  - ELOQUENT - nome do orm do laravel

-  Cross-Site Request Forgery (CSRF): Todo formulário que nós enviamos para o Laravel precisa ter uma informação extra: um token. Esse token permite que o Laravel verifique que a requisição realmente foi enviada por um formulário do site. bastando usar a diretiva @csrf do blade. :-D

- sessão: o php permite q vc armazene uma informação pequena no servidor, e depois por meio de um cookie que o servidor manda para o client, ele consegue identificar que vc é o dono daquela sessão. 


- webpack: tem um arquivo configuravel que dizemos o que o webpack deve fazer com os arquivos de front-end, como mover arquivo de um local para outro, aplicar plugins...
- laravel-mix: um pacote js q configura o webpack.  O Laravel Mix não tem nenhuma relação com PHP. É um pacote disponível inclusive para projetos que não utilizam Laravel. A ideia dele é simplificar a configuração do Webpack, que é uma ferramenta JavaScript.

```
Após o lançamento deste treinamento, ainda na versão 9 no Laravel, o Mix foi substituído por uma ferramenta chamada Vite. O propósito é muito parecido então vale a pena pesquisar sobre a migração depois, mas para continuarmos neste treinamento seguindo as etapas que foram realizadas no treinamento, vamos instalar o Mix (que continua sendo uma ferramenta válida e atual).

Para instalar o Laravel mix, execute:

->>>  npm install laravel-mix --save-de

Depois crie na raiz do projeto o arquivo webpack.mix.js com o seguinte conteúdo:

>>>>>> const mix = require('laravel-mix');

Agora nesse arquivo você pode definir todas as configurações da mesma forma que eu fizer nos vídeos.

Além disso, para executar corretamente o comando do mix, adicione ao seu package.json, em "scripts", a linha "mix": "mix". Então o arquivo ficará semelhante ao seguinte:

{
    "private": true,
    "scripts": {
        "dev": "vite",
        "build": "vite build",
        "mix": "mix"
    },
    "devDependencies": {
        // Dependências aqui
    }
}

Agora em todo momento que no curso eu digitar npm run dev, você vai executar 
>>> npm run mix. 
Isso deve ser o suficiente para você seguir usando o Mix como ferramenta para o front-end.

Repetindo, o Mix continua sendo uma ferramenta válida, mas o Laravel agora vem com o Vite instalado por padrão que funciona de uma forma relativamente semelhante. Quando você já estiver mais confortável com o framework e tudo estiver funcionando, pode tentar a migração do Mix para o Vite: Guia de migração
```

## BD
- tipos: mysql, sqlserver, postgree, sqlite
- sqlite: ñ precisa de infra, ñ precisa subir server
- seeders: criadores de dados que podemos utilizar para inserir no bd quando uma app for inicializada. 
- factories: formas de vc criar estes dados falsos. 
- migrations: é um versionamento do bd, é um ponto de alteração no bd. e toda migrations pode ser feita/desfeita de forma simples. 

- variaveis de sistema: sao valores q ficam no sistema operacional e q as aplicações conseguem ler.
