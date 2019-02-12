# Exercício de prática

## Introdução

A aplicação tem como objetivo praticar algumas habilidades no PHP e responder alguns questionamentos

## Questionamentos
1. Escreva uma função que receba como parâmetros os coeficientes de uma equação de segundo grau e retorne suas raízes. 
2. Em Javascript, qual a diferença entre == e ===? 
* Resposta:
`
A diferença entre as duas expressões é que "==" tenta converter as 2 variáveis para um mesmo tipo e compara se são iguais quanto ao valor, já "===" compara as 2 variáveis sem converter os tipos, ou seja, compara se são idênticos quanto ao valor e ao tipo.
`

3. Em PHP, escreva as classes necessárias para representar um estacionamento. 

4. Qual o resultado do trecho de código a seguir: 
```php
 <?php 
class W { 
 const XX = 12 + 30; 
}
 echo W::XX; 
```
* Resposta:
`
42
`
5. Em NodeJS existem threads? 
* Resposta:
`
Sim, porém não é a melhor prática para ser utilizada, pelo fato de a linguagem ter uma alta capacidade e o foco em processar uma alta quantidade de funções de tipo assíncrono.
`
6. Em sudoku, o objetivo é preencher uma grade 9x9 subdivida em quadrantes 3x3 com números
 de 1 a 9 de tal forma que não hajam números repetidos em uma mesma coluna, linha
 ou quadrante. Escreva um procedimento que gere uma matriz 9x9 válida como resultado de sudoku considerando uma grade vazia.
7. Faça uma API RESTful capaz de pesquisar automóveis no site https://www.seminovosbh.com.br​. 
7.1. A API RESTful deverá possuir dois endpoints, sendo eles:  
-​Pesquisa de veículos​, sendo possível realizar filtros semelhantes ao do site.
  Deverá ser retornado as informações básicas dos veículos (ano, modelo, quilometragem e valor)
- ​Detalhes do veículo​, retornando detalhadamente todos os dados de um veículo (Ano, quilometragem, tipo de combustível, cor, acessórios e observações) 
 Obs.: ​Esta API deverá ser desenvolvida utilizando PHP e algum framework MVC, preferencialmente Laravel ou Lumen. 
 Obs.:​ Para o desenvolvimento desta API se faz necessário a realização de um crawler. 
 

## Instruções sobre o código

