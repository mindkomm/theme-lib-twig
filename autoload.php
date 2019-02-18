<?php

/**
 * Customize Twig
 *
 * @param Twig_Environment $twig
 * @return $twig
 */
add_filter( 'timber/twig', function( \Twig_Environment $twig ) {
	$twig->addFunction( new Timber\Twig_Function( 'classnames', function( $classnames ) {
		$classes = [];

		foreach ( $classnames as $class => $condition ) {
			if ( (bool) $condition ) {
				$classes[] = $class;
			}
		}

		return implode( ' ', $classes );
	} ) );

	return $twig;
} );
