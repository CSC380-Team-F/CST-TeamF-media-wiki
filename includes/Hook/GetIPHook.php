<?php

namespace MediaWiki\Hook;

/**
 * This is a hook handler interface, see docs/Hooks.md.
 * Use the hook name "GetIP" to register handlers implementing this interface.
 *
 * @stable to implement
 * @ingroup Hooks
 */
interface GetIPHook {
	/**
	 * Use this hook to modify the IP of the current user (called only once).
	 *
	 * @since 1.35
	 *
	 * @param string &$ip IP as determined so far
	 * @return bool|void True or no return value to continue or false to abort
	 */
	public function onGetIP( &$ip );
}
