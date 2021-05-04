![](https://heatbadger.now.sh/github/readme/contributte/cli-http/?deprecated=1)

<p align=center>
    <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
    <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
    <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
    Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

## Disclaimer

| :warning: | This project is no longer being maintained. Please use [contributte/http](https://github.com/contributte/http).
|---|---|

| Composer | [`contributte/http`](https://packagist.org/packages/contributte/http) |
|---| --- |
| Version | ![](https://badgen.net/packagist/v/contributte/http) |
| PHP | ![](https://badgen.net/packagist/php/contributte/http) |
| License | ![](https://badgen.net/github/license/contributte/http) |

CLI HTTP Extension for Nette. Provide URL in your CLI mode only, it does not override your `http.request` in other modes.

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

## Development

See [how to contribute](https://contributte.org/contributing.html) to this package.

This package is currently maintaining by these authors.

<a href="https://github.com/f3l1x">
  <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team.
Also thank you for using this package.
