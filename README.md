# Twig

Twig helpers for Timber themes.

## Installation

You can install the package via Composer:

```bash
composer require mindkomm/theme-lib-twig
```

## Usage

### classnames()

Allows you to conditionally join classnames. Inspired by [Classnames](https://www.npmjs.com/package/classnames).

```twig
<li class="{{ classnames(
    'postsTeaser-item'     
    { 'is-sticky': fn('is_sticky', post.ID) }
) }}">
```

```twig
<div {{ classnames({
    'isReverseOrder': attributes.isReverseOrder,
    'isVerticallyCentered': attributes.isVerticallyCentered
}) }}">
```

You can also directly pass the strings of the classes you want to apply.

```twig 
{{ classnames
    'nav-item',
    'nav-item--level-0'
) }}
{# 'nav-item nav-item--level-0' #}

{{ classnames(
    'nav-item',
    { 'nav-item--level-0': true }
) }}
{# 'nav-item nav-item--level-0' #}

{{ classnames(
    { 'nav-item': true },
    { 'nav-item--level-0': true }
) }}
{# 'nav-item nav-item--level-0' #}

{{ classnames({
    'nav-item': true,
    'nav-item--level-0': true
}) }}
{# 'nav-item nav-item--level-0' #}

{# Falsy values will be ignored #}
{{ classnames(null, false, 'bar', 0, 1, { baz: null }, '') }}
{# 'bar 1' #}
```

## Support

This is a library that we use at MIND to develop WordPress themes. You’re free to use it, but currently, we don’t provide any support. 
