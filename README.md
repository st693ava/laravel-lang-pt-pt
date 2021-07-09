# Módulo de linguagem Português (pt_PT) para Laravel >= 5.6


## Instalação

1. Instalar pacote
  ```shell
  $ composer require st693ava/languages --dev
  ```
2. Publique as traduções
  ```shell
  $ php artisan vendor:publish --tag=languages
  ```
3. Configure o Framework para utilizar 'pt_PT' como linguagem padrão
  ```
  // Alterar locale do ficheiro config/app.php para:
  'locale' => 'pt_PT',
  ```
## Versões do Laravel suportadas

* 8.x
* 7.x
* 6.x
* 5.8
* 5.7
* 5.6
