# Twig Syntax

## Summary
This is an attempt to match Twig syntax in PHP.

## Roadmap
I will only build out the functionality I need to realize simple templates.  This will never be a full solution, it's just a bridge for a small project.  Don't expect great things.

## Examples 1
### Twig
    {% set classes = [
      'mi',
      'fa',
      'so',
    ]|merge(classes) %}

### TwigSyntax

    $twig = new TwigSyntax;
    ...
    $twig->set(array(
        'mi',
        'fa',
        'so',
    ))->merge($classes);
    
The result is that `$classes === ['mi', 'fa', 'so', 'do', 're']`.  

### Vanilla PHP
It is equivalent to:

    $classes = array_merge(
        array(
            'mi',
            'fa',
            'so',
        ),
        $classes
    );
    
## Examples 2
Ensuring that classes/$classes exits

### Twig
    {% set classes = [
      'mi',
      'fa',
      'so',
    ]|merge(classes|default([])) %}

### TwigSyntax

    $twig = new TwigSyntax;
    ...
    $classes = isset($classes) ? $classes : array();
    $twig->set(array(
        'mi',
        'fa',
        'so',
    ))->merge($classes);
