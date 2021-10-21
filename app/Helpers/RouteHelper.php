<?php

namespace App\Helpers;

use Route;

class RouteHelper
{
    const META_REFRESH_INTERMEDIATE_DEFAULT_URL = 'url';

    /**
     * Checks whether the sent route part
     * matches the current route for both
     * self-contained and nested routes
     *
     * @param string $part
     * @return boolean
     */
    public static function isPartOfCurrentRoute(String $part): bool
    {
        self::checkCurrentRoute();
        return strpos(strtolower(request()->path()), strtolower($part)) !== false;
    }

    /**
     * @param string $routeName
     * @return bool
     */
    public static function isCurrentRouteName(String $routeName): bool
    {
        $currentRoute = Route::getCurrentRoute();
        if (!$currentRoute) {
            return false;
        }
        return (bool) preg_match('/^' . $routeName . '/', $currentRoute->getName());
    }

    /**
     * @param string $routeName
     * @param string $part
     * @return bool
     */
    public static function isCurrentRoute(String $routeName, String $part = null): bool
    {
        return self::isCurrentRouteName($routeName) && ($part ? self::isPartOfCurrentRoute($part) : true);
    }

    /**
     * @param string $routeName
     * @return bool
     */
    public static function isCurrentRouteEquals(String $routeName): bool
    {
        $route = request()->route();
        if (!$route) {
            return false;
        }
        return strpos($route->getName(), $routeName) !== false;
    }

    private static function checkCurrentRoute()
    {
        if (!\Request::route()) {
            return false;
        }
    }

    public static function getBaseDomain()
    {
        $host = request()->getHost();
        $hostParts = explode('.', $host);
        $domain = $hostParts[count($hostParts) - 2] . '.' . $hostParts[count($hostParts) - 1];

        return $domain;
    }

    public static function getLocalUrlFromRoute(string $route): string
    {
        $host = request()->getHost();
        $routeParts = explode($host, $route);
        return $routeParts[1] ?? '';
    }

    /**
     * @return string
     */
    public static function getCurrentControllerName(): string
    {
        preg_match('/([a-z]*)@/i', request()->route()->getActionName(), $matches);

        $controllerName = str_replace('Controller', '', $matches[1]);

        return lcfirst($controllerName);
    }
}
