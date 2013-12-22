<?php
namespace Yaf ;

/**
 * <b>\Yaf\Route_Interface</b> used for developer defined their custom route.
 *
 * @link http://www.php.net/manual/en/class.yaf-route-interface.php
 */
interface Route_Interface {

	/**
	 * <p><b>\Yaf\Route_Interface::route()</b> is the only method that a custom route should implement.</p><br/>
	 * <p>if this method return TRUE, then the route process will be end. otherwise,\Yaf\Router will call next route in the route stack to route request.</p><br/>
	 * <p>This method would set the route result to the parameter request, by calling \Yaf\Request_Abstract::setControllerName(), \Yaf\Request_Abstract::setActionName() and \Yaf\Request_Abstract::setModuleName().</p><br/>
	 * <p>This method should also call \Yaf\Request_Abstract::setRouted() to make the request routed at last.</p>
	 *
	 * @link http://www.php.net/manual/en/yaf-route-interface.route.php
	 *
	 * @param \Yaf\Request_Abstract $request
	 * @return bool
	 */
	function route(\Yaf\Request_Abstract $request);
}