You need to add the path to a class of global include path.
After that, your IDE, when IDE will display a hint on each pinba methods you write.

### For example:
    $timer = pinba_timer_start(array('tag' => 'value'), array('customData', 1, 2));
    ....
    pinba_timer_stop($timer);

![Example of use](https://github.com/misterion/pinba-phpdoc/raw/master/pinba.png)

### Install

 * Install [php pinba extension](https://github.com/tony2001/pinba_extension)
 * The simpliest way to install and use pinba-phpdoc is to use Composer, as there is a [package on Packagist](https://packagist.org/packages/misterion/pinba-phpdoc). Just add this to your project composer.json file :

    {
        "require": {
            "misterion/pinba-phpdoc": "*"
        },
        "minimum-stability": "dev"
    }

 * Or direct download [pinba-phpdoc](https://github.com/misterion/pinba-phpdoc/tarball/master)

### Setup in IDE PhpStorm

 Menu "File" -> "Settings" -> "PHP" -> _Select path to folder "pinba-phpdoc"_

### Setup in IDE NetBeans

 * Right click your project -> "Properties"
 * Select the "PHP Include Path" category
 * Click "Add Folder..."
 * Select your checkout of pinba-phpdoc
 * Click "Open"
 * Click "OK"