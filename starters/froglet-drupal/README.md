# Froglet Theme

## Froglet Plugins

Froglet adds three sets of Theme Plugin helpers to simplify repetitive tasks.
The goal of these is to split some basic theme configuration with the
overrides we'd expect to use in Drupal. The directory structure is here:

```
|-- includes
    |-- blocks.theme.inc
    |-- content.theme.inc
    |-- form.theme.inc
    |-- layout.theme.inc
    |-- media.theme.inc
    |-- misc.theme.inc
    |-- navigation.theme.inc
|-- src
    |-- CustomTools
        |-- CustomTools.php
    |-- FrogletTools
        |-- FrogletTools.php
    |-- Widgets
        |-- Widgets.php
```

To guarantee this theme is as update-able as possible, all `./includes`, 
`src/CustomTools`, `src/Widgets` directory code are considered to be 
project-specific code. What this means is that you have a safe assumption of 
putting overrides here that have no effect on ongoing development of the Froglet
project as a whole. Simply put, you're safe to "hack Froglet core" here.


### Configuration

`Froglet.php` includes a set of global constants configuration specific to 
a installation of Smosh: 

* `THEME_NAME`: The Drupal theme name, default is set as Froglet.

Be aware that this configuration should be updated based on your Froglet. 
If you change these variables of your theme, these `const` should be updated.  

### Usage

If you have an additional helper function you'd like to include in your app, 
simply extend the functionality of `FrogletTools.php` in `CustomTools.php`:

```php
class CustomTools extends FrogletTools
``` 

This step will make sure any changes to your theme are not lost if you update
Froglet in the future.

CustomTools have already been added to individual `theme.inc` files, however
if you'd like to use the Tools elsewhere in PHP simply include the namespace to
the file (or your custom Tools):

```php
use Drupal\froglet\CustomTools\CustomTools;
```

Now whenever you wish to use a helper:

```php
CustomTools::yourHelperFunction()
```

Note this usage assumes you've declared a public static function and that it's
return is not tied specifically to the context of the instance. If you need a
more context specific approach, consider using public functions and declaring
your tools as an instance:

```php
$tools = new CustomTools;
$tools->yourHelperFunction();
```
