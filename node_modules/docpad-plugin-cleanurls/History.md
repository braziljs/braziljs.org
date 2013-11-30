## History

- v2.5.2 November 24, 2013
	- Repackaged
	- Dependency upgrades

- v2.5.1 August 20, 2013
	- Dependency upgrades

- v2.5.0 June 12, 2013
	- Optionally generate document urls with trailing slashes
		- Thanks to [Adam Hull](https://github.com/hurrymaplelad) for [pull request #4](https://github.com/docpad/docpad-plugin-cleanurls/pull/4)
	- Dependency upgrades

- v2.4.3 April 5, 2013
	- Dependency upgrades

- v2.4.2 April 1, 2013
	- Dependency upgrades

- v2.4.1 March 6, 2013
	- Dependency upgrades
		-  `bal-util` from ~1.15.3 to ~1.16.8
		-  `coffee-script` from 1.4.x to ~1.4.0

- v2.4.0 January 6, 2013
	- Clean URLs for the static environment now operates more gracefully
		- No longer modifies the out path and corresponding attributes
		- Now work by outputting redirect file to the secondary url paths, and the result file to the primary url path

- v2.3.0 January 4, 2013
	- Now supports static environments by changing the document's `outPath` to that of a directory with an `index.html` file inside.
	- Updated tests to also check the directory output
	- Updated coffeescript devDependency to v1.4.0

- v2.2.5 October 8, 2012
	- Fixed plugin name (`cleanUrls` to `cleanurls`)

- v2.2.4 September 5, 2012
	- Fixed windows support

- v2.2.3 August 10, 2012
	- Re-added markdown files to npm distribution as they are required for the npm website

- v2.2.2 July 19, 2012
	- Removed a `console.log` left from debugging

- v2.2.1 July 18, 2012
	- Minor cleanup

- v2.2.0 July 18, 2012
	- Updated for DocPad v6.3.0

- v2.1.0 July 8, 2012
	- Updated for DocPad v6.1.1
	- Fixed unit tests again

- v2.0.2 June 12, 2012
	- Updated for DocPad v6.0.8
	- Fixed clean urls not actually working

- v1.1.0
	- Updated for DocPad v5.3
	- Now uses the clean url as the default url for the document

- v1.0.0 April 14, 2012
	- Updated for DocPad v5.0
