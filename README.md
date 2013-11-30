# BrazilJS Foundation

A non-profit foundation with a mission to move and unify JavaScript community in Brazil.

## Dependencies

1. Install [Git](http://git-scm.com/download/), if you don't have it yet.
2. Install [NodeJS](http://nodejs.org/download/), if you don't have it yet.

## Setup

Once you have all [dependencies](#dependencies) installed, you just need to:

1. Open your terminal and clone the project.

	```sh
	$ git clone git@github.com:braziljs/foundation.git
	```

2. Then go to the project's folder.

	```sh
	$ cd foundation
	```

3. And install local dependencies.

	```sh
	$ npm install
	```

## Usage

Generate the website into `out` directory:

```sh
$ npm run-script generate
```

Generate and watch for any changes in `http://localhost:9778`:

```sh
$ npm run-script watch
```

Generate and deploy to [gh-pages branch](https://github.com/braziljs/foundation/tree/gh-pages):

```sh
$ npm run-script deploy
```

## License

[MIT License](http://braziljs.mit-license.org/) © BrazilJS Foundation