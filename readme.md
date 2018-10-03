# Automatizador 2.0

## Requisitos

### Locais

#### Composer

* Ubuntu/Mint/Debian:
```konsole
$ sudo apt-get install composer
```

* Arch Linux:
```konsole
$ yaourt -S composer
```

#### wkhtmlpdf e wkhtmltoimage

Para 32 bits:

```konsole
$ composer require h4cc/wkhtmltopdf-i386 0.12.x
$ composer require h4cc/wkhtmltoimage-i386 0.12.x
$ cp vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64 /usr/local/bin/
```

Para 64 bits:

```konsole
$ composer require h4cc/wkhtmltopdf-amd64 0.12.x
$ composer require h4cc/wkhtmltoimage-amd64 0.12.x
$ cp vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64 /usr/local/bin/
```