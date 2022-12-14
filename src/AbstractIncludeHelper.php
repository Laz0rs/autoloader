<?php

namespace Laz0r\AutoLoader;

/**
 * Wrappers for include/require statements, to
 * avoid leaking the $this context in the file
 *
 * @psalm-suppress UnresolvableInclude
 */
abstract class AbstractIncludeHelper {

	/**
	 * include a file or URL
	 *
	 * @param string $file
	 *
	 * @return mixed Result of include
	 */
	public static function includeFile() {
		return include func_get_arg(0);
	}

	/**
	 * include_once a file or URL
	 *
	 * @param string $file
	 *
	 * @return mixed Result of include_once
	 */
	public static function includeFileOnce() {
		return include_once func_get_arg(0);
	}

	/**
	 * require a file or URL
	 *
	 * @param string $file
	 *
	 * @return mixed Result of require
	 */
	public static function requireFile() {
		return require func_get_arg(0);
	}

	/**
	 * require_once a file or URL
	 *
	 * @param string $file
	 *
	 * @return mixed Result of require_once
	 */
	public static function requireFileOnce() {
		return require_once func_get_arg(0);
	}

}

/* vi:set ts=4 sw=4 noet: */
