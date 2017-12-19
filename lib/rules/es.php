<?php

Plural::setLanguage(basename(__FILE__, '.php'));

# each rule is a regular expression and its replacement
Plural::addRules([
		'/([^aeiou]|нъ)$/i'		=> '\1es',     # -es rule
		'/([a-rt-z])$/i'		=> '\1s'        # not ending in s
]);
