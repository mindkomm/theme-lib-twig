<?php

/**
 * Customize Twig
 *
 * @param \Twig\Environment $twig
 *
 * @return $twig
 */
add_filter( 'timber/twig', function( \Twig\Environment $twig ) {
	$twig->addFunction( new Timber\Twig_Function( 'classnames', function() {
		$classes = [];
		$inputs  = func_get_args();

		foreach ( $inputs as $input ) {
			if ( ! $input ) {
				continue;
			}

			if ( is_string( $input ) ) {
				$classes[] = $input;
			} elseif ( is_array( $input ) && ! empty( $input ) ) {
				foreach ( $input as $class => $condition ) {
					if ( is_numeric( $class ) ) {
						// When an array with strings is passed.
						$classes[] = $condition;
					} elseif ( (bool) $condition ) {
						$classes[] = $class;
					}
				}
			}
		}

		// Remove empty values and trim whitespaces.
		$classes = array_values( $classes );
		$classes = array_map( 'trim', $classes );

		return implode( ' ', $classes );
	} ) );

	return $twig;
} );
