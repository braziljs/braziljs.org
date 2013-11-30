# [Highlight.js](https://github.com/isagalaev/highlight.js) Plugin for [DocPad](http://docpad.org)

[![Build Status](https://secure.travis-ci.org/docpad/docpad-plugin-highlightjs.png?branch=master)](http://travis-ci.org/docpad/docpad-plugin-highlightjs "Check this project's build status on TravisCI")
[![NPM version](https://badge.fury.io/js/docpad-plugin-highlightjs.png)](https://npmjs.org/package/docpad-plugin-highlightjs "View this project on NPM")
[![Gittip donate button](http://badgr.co/gittip/docpad.png)](https://www.gittip.com/docpad/ "Donate weekly to this project using Gittip")
[![Flattr donate button](https://raw.github.com/balupton/flattr-buttons/master/badge-89x18.gif)](http://flattr.com/thing/344188/balupton-on-Flattr "Donate monthly to this project using Flattr")
[![PayPayl donate button](https://www.paypalobjects.com/en_AU/i/btn/btn_donate_SM.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QB8GQPZAH84N6 "Donate once-off to this project using Paypal")


This plugin enables [Highlight.js](https://github.com/isagalaev/highlight.js) syntax highlighting for [DocPad](https://docpad.org)


## Install

### Install the Plugin

```
docpad install highlightjs
```

### Download a Stylesheet

[Available stylesheets are here.](https://github.com/isagalaev/highlight.js/tree/master/src/styles) [You can preview some of them here.](http://softwaremaniacs.org/media/soft/highlight/test.html)


## Usage

Example inputs are [here](https://github.com/docpad/docpad-plugin-highlightjs/tree/master/test/src/documents) and their corresponding outputs are [here](https://github.com/docpad/docpad-plugin-highlightjs/tree/master/test/out-expected). For the general gist of things, the following will suffice:

### HTML

#### Input

``` html
<h3>Coffescript - Lang tag</h3>
<pre><code class="lang-coffeescript">
if true
	func = -&gt;
		alert "hello world"

	func()
</code></pre>
```

#### Output

``` html
<h3>Coffescript - Lang tag</h3>
<pre class="highlighted"><code class="coffeescript">
<span class="keyword">if</span> <span class="literal">true</span>
	<span class="function"><span class="title">func</span></span> = -&gt;
		alert <span class="string">"hello world"</span>

	func()
</code></pre>
```

### Markdown

#### Input

	### Coffeescript with fenced code

	``` coffeescript
	if true
		func = ->
			alert 'hello world'
		func()
	```

#### Output

``` html
<h3>Coffeescript with fenced code</h3>
<pre class="highlighted"><code class="coffeescript"><span class="keyword">if</span> <span class="literal">true</span>
	<span class="function"><span class="title">func</span></span> = -&gt;
		alert <span class="string">'hello world'</span>
	func()</code></pre>
```


## Configure

### Language Aliases
Sometimes one of the languages you want to highlight isn't available. In which case, you'd probably want to add an alias for it to a language that is similar. To do this, you'll want to add something like the following to your docpad configuration file.

``` coffee
plugins:
	highlightjs:
		aliases:
			missinglanguage: 'alternativelanguage'
```

[You can find a list of languages that are supported via the Highlight.js source tree.](https://github.com/isagalaev/highlight.js/tree/master/src/languages)


### Replacing Tabs
By default, we replace tabs with 4 spaces. This can be changed by changing the `replaceTab` configuration option:

``` coffee
plugins:
	highlightjs:
		replaceTab: null  # keep tabs
```


### Transforms

You can apply transformations to code blocks before they are highlighted by using the `transforms` configuration option. It accepts an array of functions or arrays.

``` coffee
plugins:
	highlightjs:
		transforms: [
			# Remove extra indentation from the code block
			# Requires: http://balupton.com/project/bal-util
			(source, language) ->
				require('bal-util').removeIndentation(source)  if language in ['bash','coffeescript']

			# Replace "(C)" with "&copy;"
			(source) -> source.replace /\(C\)/gm, '&copy;'
		]
```


## History
[You can discover the history inside the `History.md` file](https://github.com/bevry/docpad-plugin-highlightjs/blob/master/History.md#files)


## Contributing
[You can discover the contributing instructions inside the `Contributing.md` file](https://github.com/bevry/docpad-plugin-highlightjs/blob/master/Contributing.md#files)


## License
Licensed under the incredibly [permissive](http://en.wikipedia.org/wiki/Permissive_free_software_licence) [MIT License](http://creativecommons.org/licenses/MIT/)
<br/>Copyright &copy; 2012+ [Chase Colman](http://thedev.infinityatlas.com) <chase@infinityatlas.com>


## Special Thanks to
- Benjamin Lupton for [DocPad](https://docpad.org) and the [Pygments plugin](https://github.com/bevry/docpad-extras/tree/master/plugins/pygments), after which the code for this plugin was modeled
- Ivan Sagalaev and contributors for [Highlight.js](https://github.com/isagalaev/highlight.js), which this plugin relies on for syntax highlighting

