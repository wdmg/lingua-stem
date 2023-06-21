[![Downloads](https://img.shields.io/packagist/dt/wdmg/lingua-stem.svg)](https://packagist.org/packages/wdmg/lingua-stem)
[![Packagist Version](https://img.shields.io/packagist/v/wdmg/lingua-stem.svg)](https://packagist.org/packages/wdmg/lingua-stem)
![Progress](https://img.shields.io/badge/progress-ready_to_use-green.svg)
[![GitHub license](https://img.shields.io/github/license/wdmg/lingua-stem.svg)](https://github.com/wdmg/lingua-stem/blob/master/LICENSE)


# LinguaStem

Implementation of the Porter Stemmer algorithm with support English, Russian and Ukrainian locales.
Based on PorterStemmer class [https://tartarus.org/martin/PorterStemmer/php.txt] and [http://snowball.tartarus.org/algorithms/russian/stemmer.html]

# Requirements 
* PHP 5.6 or higher

# Installation
To install the library, run the following command in the console:

`$ composer require "wdmg/lingua-stem"`

# Usage

    <?php
    
        $word = 'landmarks';
        $stem = new LinguaStem('en');
        print $stem::word($word);
        
        // or
        
        $text = 'Chicago has many historic places to visit. Keith found the Chicago Water Tower impressive as it is one of the few remaining landmarks to have survived the Great Chicago Fire of 1871.';
        $stem = new LinguaStem('en');
        print $stem->text($text);
    
    ?>

# Common Information
http://snowball.tartarus.org/algorithms/porter/stemmer.html
https://metacpan.org/release/Lingua-Stem
https://en.wikipedia.org/wiki/Stemming
https://ru.wikipedia.org/wiki/Стеммер_Портера

# Status and version [ready to use]
* v.1.1.0 - Update copyrights
* v.1.0.1 - Added namespace
* v.1.0.0 - Added LinguaStem() class code and library  of patterns

# Copyrights
* Copyright (c) 2023 W.D.M.Group, Ukraine (https://wdmg.com.ua/)
* Copyright (c) 2020 by Alexsander Vyshnyvetskyy <alex.vyshnyvetskyy@gmail.com>
* Copyright (c) 2017 by Roman Romadin <romadinr@i.ua>
* Copyright (c) 2005 by Richard Heyes (https://www.phpguru.org/)
* Copyright (c) 2005 by Jon Abernathy, Hostmake LLC
* Copyright (C) 2003 by Aldo Calpini <dada@perl.it>
* Copyright (C) 2004 by Aleksandr Guidrevitch <pillgrim@mail.ru>