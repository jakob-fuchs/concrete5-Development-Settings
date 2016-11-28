# concrete5 Development Settings

Sets configuration options useful while developing or debugging concrete5 themes or other functionality. Just install it when you need it, uninstall it when you are done.

- Enable maintenance mode
- Enable more useful debug error messages
- Disable caching
- Disable compression of Less files and enable Less Sourcemaps
- Enable logging
- Disable help system and news flow overlay

Just comment out the parts you don't want to use in the package controller.

# Installation

1. Clone into a folder named "jaf_development_settings" in your concrete5 site's /packages directory.
2. Install via the concrete5 dashboard

Current Package version: **1.3.0**

Compatible concrete5 version: **5.7.5.9** (update $appVersionRequired variable in the package controller if you need to install on earlier versions)

License: **MIT**

# Other useful development add-ons:

https://github.com/dorian-marchal/concrete5-kint-debug

https://github.com/Mnkras/php_debugbar