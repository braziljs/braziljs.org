# BrazilJS.org

![Cover](http://braziljs.org/img/projects/braziljsorg.jpg)

A non-profit foundation with a mission to move and unify JavaScript community in Brazil.

> **Maintainer:** [Diogo Moretti](https://github.com/diogomoretti)

## Contributing

There are tons of ways to contribute to this project.

###### Submit an event to [braziljs.org/eventos](http://braziljs.org/eventos/)

This is a list of all brazilian front-end conferences that happened or will
happen this year.

1. Edit the JSON file in [src/files/services/events](https://github.com/braziljs/foundation/tree/master/src/files/services/events).
2. Provide a thumbnail (227x200) in [src/files/services/events/media](https://github.com/braziljs/foundation/tree/master/src/files/services/events/media).

###### Submit a project to [braziljs.org/projetos](http://braziljs.org/projetos/)

*TODO - Write instructions.*

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

3. Initialize the submodules.

  ```sh
  $ git submodule update --init
  ```

4. And install local dependencies.

  ```sh
  $ npm install
  ```

## Usage

Execute the command below to generate the website into `out` directory:

```sh
$ npm run generate
```

Generate and watch for any changes in `http://localhost:9778`:

```sh
$ npm run watch
```

Generate and deploy to [gh-pages branch](https://github.com/braziljs/foundation/tree/gh-pages):

```sh
$ npm run deploy
```

## License

[MIT License](http://braziljs.mit-license.org/) © BrazilJS Foundation
