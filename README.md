# Twig

Twig helpers for Timber themes.

## Installation

You can install the package via Composer:

```bash
composer require mindkomm/theme-lib-twig
```

## Usage

### classnames

Allows you to conditionally join classnames. Inspired by [Classnames](https://www.npmjs.com/package/classnames).

```twig
<li class="postsTeaser-item {{ classnames({
    'is-sticky' : fn('is_sticky', post.ID)
}) }}">
```

```twig
<div {{ classnames({
    'isReverseOrder': attributes.isReverseOrder,
    'isVerticallyCentered': attributes.isVerticallyCentered
}) }}">
```

## Support

This is a library that we use at MIND to develop WordPress themes. You’re free to use it, but currently, we don’t provide any support. 
