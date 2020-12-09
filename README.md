<p align="center">
<img src="https://s2.glbimg.com/WEiC_rzHBH3JeQALYyLVlA_lXrM=/0x0:4000x2250/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/n/v/wOBLo5QQWOP7XduqhM3g/coronavirus-4-.jpg" width="400" height="200">
<h1 align="center">🦠 MY COVID-19 PAGE 😷</h1>
<img src="https://img.shields.io/github/license/soroushchehresa/awesome-coronavirus">
</p>

## Índice
<details open="open">
  <ol>
    <li>
      <a href="#Introdução">Introdução</a>
    </li>
    <li>
      <a href="#REST-APIs-Utilizadas">REST APIs Utilizadas</a>
    </li>
    <li>
      <a href="#Site">Site</a>
      <ul>
        <li><a href="#Landing-Page">Home Page</a></li>
        <li><a href="#Mundo">Mundo</a></li>
        <li><a href="#Portugal">Portugal</a></li>
        <li><a href="#Notícias">Notícias</a></li>
      </ul>
    </li>
    <li><a href="#Tecnologias/Linguagens/Librarias">Contributing</a></li>
    <li><a href="#Dificuldades">Dificuldades</a></li>
    <li><a href="#Trabalho-Futuro">Trabalho Futuro</a></li>
    <li><a href="#Autor">Autor</a></li>
    <li><a href="#Professor-Orientador">Professor Orientador</a></li>
    <li><a href="#License">License</a></li>
  </ol>
</details>

## Introdução

</details>
<table>
<tr>
<td>
Foi-me proposto para a disciplina de <b> Sistemas de Informação em Rede </b> desenvolver uma aplicação web capaz de integrar diversas APIs à minha escolha. Como tal decidi e para os tempos que correm decidi desenvolver uma aplicação web acerca do Covid-19 utilizando diversas fontes de dados. Esta aplicação é capaz de recolher dados a nível mundial acerca do covid-19 (novos casos, confirmados, etc) utilizando fontes seguras e confiáveis (acreditadas) e com os mesmos inserindo-os em tabelas ou gráficos. Não só há exploração a nível mundial mas também existe a nível nacional, isto é existe uma seção somente para os dados de Portugal 🇵🇹 onde se pode analisar todos os novos casos, mortes, recuperados, etc. Existe também a possibilidade de fazer consultas a nível regional assim como consultar as últimas notícias do <b>Jornal <a href="https://www.publico.pt">Público</a></b> acerca do Covid-19.
</td>
</tr>
</table>

## REST APIs Utilizadas

| Link  | Descrição  |
|:------|:-------------|
| [COVID-19 REST API Portugal](https://covid19-api.vost.pt) | Repo for deploying a REST API to get updates regarding Portuguese DGS COVID-19. It is a combined effort between DSSG Portugal and VOST Portugal.
| [Direcção Geral de Saúde](https://www.dgs.pt/) | Ministério da Saúde Português, através do _dashboard_ do COVID-19 ([aqui](https://covid19.min-saude.pt/ponto-de-situacao-atual-em-portugal/)) e da base de dados da ESRI Portugal [aqui](https://esriportugal.maps.arcgis.com/home/item.html?id=803d4c90bbb04c03999e65e5ce411cf8#data).
| [COVID-19 Data Repository by the Center for Systems Science and Engineering (CSSE) at Johns Hopkins University](https://github.com/CSSEGISandData/COVID-19) | This is the data repository for the 2019 Novel Coronavirus Visual Dashboard operated by the Johns Hopkins University Center for Systems Science and Engineering (JHU CSSE). Also, Supported by ESRI Living Atlas Team and the Johns Hopkins University Applied Physics Lab (JHU APL).
| [Portuguese News Exctrator API](https://github.com/spamz23/PT-NEWS_EXTRACTOR) | An open-source REST API that extracts news, from portuguese jornals, to JSON.

## Site
### Landing Page 
![](https://github.com/helderpgoncalves/my-covid19-page/blob/main/img/landingpage.png)

### Mundo 
![](https://github.com/helderpgoncalves/my-covid19-page/blob/main/img/mundopage.png)
![](https://github.com/helderpgoncalves/my-covid19-page/blob/main/img/mundopage2.png)

### Portugal  
![](https://github.com/helderpgoncalves/my-covid19-page/blob/main/img/portugalpage.png)
![](https://github.com/helderpgoncalves/my-covid19-page/blob/main/img/portugalpage2.png)

### Notícias 
![](https://github.com/helderpgoncalves/my-covid19-page/blob/main/img/noticiaspage.png)


## Tecnologias/Linguagens/Librarias 

- [HTML](https://www.w3schools.com/html/) - HTML (abreviação para a expressão inglesa HyperText Markup Language, que significa Linguagem de Marcação de Hipertexto) é uma linguagem de marcação utilizada na construção de páginas na Web. Documentos HTML podem ser interpretados por navegadores. A tecnologia é fruto da junção entre os padrões HyTime e SGML.
- [CSS](https://www.w3schools.com/css/) - Cascading Style Sheets (CSS) é um mecanismo para adicionar estilo (cores, fontes, espaçamento, etc.) a um documento web.
- [JavaScript]() - JavaScript é uma linguagem de programação client-side. Ela é utilizada para controlar o HTML e o CSS para manipular comportamentos na página.
- [PHP](https://www.php.net) - Linguagem de script open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.
- [jQuery](https://www.w3schools.com/jquery/) - jQuery é uma biblioteca de funções JavaScript que interage com o HTML, desenvolvida para simplificar os scripts interpretados no navegador do cliente (client-side).
- [AJAX](https://www.w3schools.com/xml/ajax_intro.asp) - Asynchronous JavaScript and XML, ou JavaScript e XML Assíncronos, em português. É um conjunto de técnicas de desenvolvimento voltado para a web que permite que aplicações trabalhem de modo assíncrono, processando qualquer requisição ao servidor em segundo plano.
- [Bootstrap](http://getbootstrap.com/) - Framework web com código-fonte aberto para desenvolvimento de componentes de interface e front-end para sites e aplicações web usando HTML, CSS e JavaScript, baseado em modelos de design para a tipografia, melhorando a experiência do usuário em um site amigável e responsivo.
- [XAMPP](https://www.apachefriends.org/index.html) - XAMPP é um pacote com os principais servidores de código aberto do mercado, incluindo FTP, banco de dados MySQL e Apache com suporte as linguagens PHP e Perl.
- [Postman](https://www.postman.com) - Aplicativo com a função de testar e desenvolver APIs em uma interface bastante simples e intuitiva. Esta nos permite simular requisições HTTP de forma rápida, armazenando-as para que possamos usá-las posteriormente.

## Dificuldades
<p>A primeira dificuldade enfrentada no desenvolvimento deste trabalho foi encontrar o tema certo, o que para os dias que vivemos acabou por não se tornar difícil devido a este vírus que todos estamos sujeitos e enfrentamos. 
Sempre tive uma paixão por análise de dados e aplicá-los em gráficos e tabelas e análise para posteriormente poder analisá-los sendo então este o meu ponto crucial na decisão do tema.
Uma grande dificuldade foi escolher as APIs a utilizar pois dentro deste ramo existem diversas e com diferentes dados que podemos acessar. Para testar as mesmas usei o <b>Postman</b>, uma ferramenta excelente para testar as requisições e consultar os resultados em formato JSON que recebíamos. 
A maior dificuldade deste projeto passou pela integração das mesmas, isto é aplicar os diferentes dados recebidos na tela de forma responsiva e criativa para dar ao utilizador além de dados concretos, diários e continuamente atualizados também uma experiência única.<p>
  
## Trabalho Futuro
<p>Como foco principal e trabalho futuro será hospedar o meu pequeno site no AWS (Amazon Web Services) pois tenho algum conhecimento sobre o mesmo e à partida não seria um trabalho extenso nem trabalhoso. Antes de partir para esta hospedagem pretendo tornar o website totalmente responsivo a mobile assim como criar um design mais amigável. Um trabalho futuro passa por rever código e aplicar as regras de <b>Clean Code</b> que tanto aprecio, pois nos dias que correm qualquer um se torna programador contudo em simultâneo existem muitos poucos àquilo que podemos chamar bons programadores.<p>
  
## Autor

<p align="center">
  <a href="https://github.com/helderpgoncalves">
    <h4><b>Hélder Gonçalves</b></h4>
    <img src="https://avatars2.githubusercontent.com/u/59267214?s=460&u=3a6111e055dfda341a602937a587c2b84418c28a&v=4)](https://github.com/helderpgoncalves" alt="Logo" width="120" height="120">
  </a>
</p>

### Professor Orientador

<p align="center">
<a href="https://github.com/hugo8barbosa">
  <h4>Professor Hugo Barbosa</h4>
    <img src="https://avatars3.githubusercontent.com/u/40212595?s=400&u=c84ff7b08321f1cd42827485eb2fe62951ce2682&v=4" alt="Logo" width="80" height="80">
  </a>
  </p>

## [License](https://github.com/helderpgoncalves/RemoteSports/blob/master/LICENSE.md)

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

```
MIT License

Copyright (c) 2020 Hélder Gonçalves

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
```

