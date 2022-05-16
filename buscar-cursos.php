#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' =>'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client,$crawler);
$cursos = $buscador->buscar('/cursos-online-tecnologia#programacao');

foreach ($cursos as $curso){
    exibeMensagem($curso);
}
