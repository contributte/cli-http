# CLI HTTP

CLI HTTP Extension for Nette. Provide URL in your CLI mode only, it does not override your `http.request` in other modes.

-----

[![Downloads total](https://img.shields.io/packagist/dt/minetro/cli-http-extension.svg?style=flat-square)](https://packagist.org/packages/minetro/cli-http-extension)
[![Latest stable](https://img.shields.io/packagist/v/minetro/cli-http-extension.svg?style=flat-square)](https://packagist.org/packages/minetro/cli-http-extension)

## Discussion / Help

[![Join the chat at https://gitter.im/Markette/Gopay](https://img.shields.io/gitter/room/minetro/nette.svg?style=flat-square)](https://gitter.im/minetro/nette?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

## Install
```sh
$ composer require minetro/cli-http-extension:~0.1
```

## Usage

Place it in your config file (e.q. config.neon).

### Simplest
```neon
extensions:
    clihttp: Minetro\Bridges\CliHttpExtension(www.example.com)
```

### Extended

```neon
extensions:
    clihttp: Minetro\Bridges\CliHttpExtension

clihttp:
    url: www.example.com
    # other params
    query: NULL
    post: NULL
    files: NULL
    cookies: NULL
    headers: NULL
    method: NULL
    remoteAddress: NULL
    remoteHost: NULL
    rawBodyCallback: NULL
```
