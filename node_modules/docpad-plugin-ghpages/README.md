# [GitHub Pages](http://pages.github.com/) Deployer Plugin for [DocPad](http://docpad.org)

[![NPM version](https://badge.fury.io/js/docpad-plugin-ghpages.png)](https://npmjs.org/package/docpad-plugin-ghpages "View this project on NPM")
[![Flattr donate button](https://raw.github.com/balupton/flattr-buttons/master/badge-89x18.gif)](http://flattr.com/thing/344188/balupton-on-Flattr "Donate monthly to this project using Flattr")
[![PayPayl donate button](https://www.paypalobjects.com/en_AU/i/btn/btn_donate_SM.gif)](https://www.paypal.com/au/cgi-bin/webscr?cmd=_flow&SESSION=IHj3DG3oy_N9A9ZDIUnPksOi59v0i-EWDTunfmDrmU38Tuohg_xQTx0xcjq&dispatch=5885d80a13c0db1f8e263663d3faee8d14f86393d55a810282b64afed84968ec "Donate once-off to this project using Paypal")

Deploy to Github Pages easily via `docpad deploy-ghpages`


## Install

```
docpad install ghpages
```


## Usage
Run `docpad deploy-ghpages --env static` to deploy the contents of your out directory directly to your repo's `gh-pages` branch. No configuration or setup required.


### Profile/Organisation Pages
If you're using GitHub Pages for profile/organisation pages (which don't use the `gh-pages` branch) this plugin will not be of use to you, in which case we would recommend either:

- Create a new repo like `website`, then use this plugin for it (recommended)
	- Instead of having a GitHub URL like `http://username.github.io` you would then have a url like `http://username.github.io/website`
	- Using this method in conjuction with [GitHub Pages Custom Domains](https://help.github.com/articles/setting-up-a-custom-domain-with-pages) (e.g. `http://mywebsite.com`) works a treat
- Or open your [docpad configuration file](http://docpad.org/docs/config) and add `outPath: '.'` to it, which will tell DocPad to output to your root directory (just like Jekyll) rather than the `out` directory
	- Please note this way (just like Jekyll) pukes up your out folder all over your root path leaving a very messy directory

### Custom Domains
If you're using [GitHub Pages Custom Domains](https://help.github.com/articles/setting-up-a-custom-domain-with-pages):

- Place your `CNAME` file at `src/files/CNAME` so it gets copied over to `out/CNAME` upon generation and consequently to the root of the `gh-pages` branch upon deployment
- Use a DocPad version 6.48.1 or higher


## Debugging
Dpendending on circumstances, maybe the github pages plugin won't work and you'll see an error. We can debug this by running the deploy with the `-d` flag like so `docpad deploy-ghpages -d`. That will tell us at which step the deploy failed.

- If the deploy fails fetching the origin remote, it means that you do not have the remote "origin", you will need to add it, or update the `deployRemote` setting to reflect your desired remote.

- If the deploy fails on the push to github pages, you may need to specify your username and password within the remote. You can do this by running:

	``` bash
	node -e "console.log('https://'+encodeURI('USERNAME')+':'+encodeURI('PASSWORD')+'@github.com/REPO_OWNER/REPO_NAME.git')"
	```

	Replace the words in capitals with their actual values and press enter. This will then output the new remote URL, you then want to copy it and run `git remote rm origin` and `git remote add origin THE_NEW_URL` and try the deploy again.

	On OSX you may be able to avoid this step by running `git config --global credential.helper osxkeychain` to tell git to save the passwords to the OSX keychain rather than asking for them every single time.

- If you get EPERM or unlink errors, it means that DocPad does not have permission to clean up the git directory that it creates in the out folder. You must clean this up manually yourself by running `rm -Rf ./out/.git`



## History
[You can discover the history inside the `History.md` file](https://github.com/bevry/docpad-plugin-ghpages/blob/master/History.md#files)


## Contributing
[You can discover the contributing instructions inside the `Contributing.md` file](https://github.com/bevry/docpad-plugin-ghpages/blob/master/Contributing.md#files)


## License
Licensed under the incredibly [permissive](http://en.wikipedia.org/wiki/Permissive_free_software_licence) [MIT License](http://creativecommons.org/licenses/MIT/)
<br/>Copyright &copy; 2013+ [Bevry Pty Ltd](http://bevry.me) <us@bevry.me>


## Contributors

- [Benjamin Lupton](http://github.com/balupton)
- [Avi Deitcher](http://github.com/deitch)
- [Sergey Lukin](http://github.com/sergeylukin)
