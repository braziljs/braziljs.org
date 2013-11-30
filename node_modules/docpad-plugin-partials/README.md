# Partials Plugin for [DocPad](http://docpad.org)

<!-- BADGES/ -->

[![Build Status](http://img.shields.io/travis-ci/bevry/docpad-plugin-partials.png?branch=master)](http://travis-ci.org/bevry/docpad-plugin-partials "Check this project's build status on TravisCI")
[![NPM version](http://badge.fury.io/js/docpad-plugin-partials.png)](https://npmjs.org/package/docpad-plugin-partials "View this project on NPM")
[![Gittip donate button](http://img.shields.io/gittip/docpad.png)](https://www.gittip.com/docpad/ "Donate weekly to this project using Gittip")
[![Flattr donate button](http://img.shields.io/flattr/donate.png?color=yellow)](http://flattr.com/thing/344188/balupton-on-Flattr "Donate monthly to this project using Flattr")
[![PayPayl donate button](http://img.shields.io/paypal/donate.png?color=yellow)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QB8GQPZAH84N6 "Donate once-off to this project using Paypal")

<!-- /BADGES -->


This plugin provides [DocPad](https://docpad.org) with Partials. Partials are documents which can be inserted into other documents, and are also passed by the docpad rendering engine.


## Install

```
docpad install partials
```


## Usage

Create the `src/partials` directory, and place any partials you want to use in there.

Then call the new `partial(filename, objs...)` template helper to include the partial. The object arguments are optional, and can be used to send custom data to the partial's template data. Setting the first object argument to `false` will not send over the template data by default.


### Examples

Lets say we have the partial `src/partials/hello.html.eco` that includes:

``` html
Hello <%=@name or 'World'%>
Welcome to <%= @site?.name or 'My Site' %>
```

And a [docpad configuration file](http://docpad.org) file that includes:

``` coffee
templateData:
	site:
		name: "Ben's Awesome Site"
```

We could then render via a `src/documents/index.html.eco` document in these different ways:

``` html
<!-- Include the rendered contents of `src/partials/my-partial` file -->
<!-- and send over the template data -->
<%- @partial('hello') %>
<!-- gives us:
Hello World
Welcome to Ben's Awesome Site
-->

<!-- Include the rendered contents of `src/partials/my-partial` file -->
<!-- and send over the template data -->
<!-- and send over our own custom template data -->
<%- @partial('hello', {name:'Ben'}) %>
<!-- gives us:
Hello Ben
Welcome to Ben's Awesome Site
-->

<!-- Include the rendered contents of `src/partials/my-partial` file -->
<!-- and DO NOT send over the template data -->
<%- @partial('hello', false}) %>
<!-- gives us:
Hello World
Welcome to My Site
-->

<!-- Include the rendered contents of `src/partials/my-partial` file -->
<!-- and DO NOT send over the template data -->
<!-- and send over ONLY our own custom template data -->
<%- @partial('hello', false, {name:'Ben'}) %>
<!-- gives us:
Hello Ben
Welcome to My Site
-->

<!-- Include the rendered contents of `src/partials/my-partial` file -->
<!-- and DO NOT send over the template data -->
<!-- and send over our own custom template data with the template data site property -->
<%- @partial('hello', false, {site:{name:@site.name}}, {name:'Ben'}) %>
<!-- gives us:
Hello Ben
Welcome to Ben's Awesome Site
-->
```


### Notes

To increase performance it is recommended you only include the exact template data variables that you need - this is because sending over all the template data can be a costly process as we much destroy all references (do a deep clone) to avoid reference conflicts and over-writes between each render - so sending over as little / as specific data as possible means less reference destroying which means faster processing.

If your partial only needs to be rendered once per (re)generation then you can specify `cacheable: true` in the partial's meta data, doing so greatly improves performance.

Partials actually render asynchronously, when you call `<%- @partial('hello') %>` you'll actually get back something a temporary placeholder like `[partial:0.1290219301293]` while your template is rendering, then once your template has rendered, and once all the partials have rendered, we will then go through and replace these placeholder values with the correct content. We must do this as template rendering is a synchronous process whereas document rendering is an asynchronous process. [More info here.](https://github.com/docpad/docpad-plugin-partials/issues/12)


### Compatibility

- Versions 2.8.0 and above DO send the template data by default. You can turn this off by using `false` as the first object argument or by setting `performanceFirst: true` in your plugin's configuration options.

- Versions below 2.8.0 DO NOT send the template data by default. You must add it by using `@` or `this` as the first object argument like so: `<%- @partial('my-partial', @) %>`


<!-- HISTORY/ -->

## History
[Discover the change history by heading on over to the `History.md` file.](https://github.com/bevry/docpad-plugin-partials/blob/master/History.md#files)

<!-- /HISTORY -->


<!-- CONTRIBUTE/ -->

## Contribute

[Discover how you can contribute by heading on over to the `Contributing.md` file.](https://github.com/bevry/docpad-plugin-partials/blob/master/Contributing.md#files)

<!-- /CONTRIBUTE -->


<!-- BACKERS/ -->

## Backers

### Maintainers

These amazing people are maintaining this project:

- Benjamin Lupton <b@lupton.cc> (https://github.com/balupton)

### Sponsors

No sponsors yet! Will you be the first?

[![Gittip donate button](http://img.shields.io/gittip/docpad.png)](https://www.gittip.com/docpad/ "Donate weekly to this project using Gittip")
[![Flattr donate button](http://img.shields.io/flattr/donate.png?color=yellow)](http://flattr.com/thing/344188/balupton-on-Flattr "Donate monthly to this project using Flattr")
[![PayPayl donate button](http://img.shields.io/paypal/donate.png?color=yellow)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QB8GQPZAH84N6 "Donate once-off to this project using Paypal")

### Contributors

No contributors yet! Will you be the first?
[Discover how you can contribute by heading on over to the `Contributing.md` file.](https://github.com/bevry/docpad-plugin-partials/blob/master/Contributing.md#files)

<!-- /BACKERS -->


<!-- LICENSE/ -->

## License

Licensed under the incredibly [permissive](http://en.wikipedia.org/wiki/Permissive_free_software_licence) [MIT license](http://creativecommons.org/licenses/MIT/)

Copyright &copy; 2012+ Bevry Pty Ltd <us@bevry.me> (http://bevry.me)

<!-- /LICENSE -->


