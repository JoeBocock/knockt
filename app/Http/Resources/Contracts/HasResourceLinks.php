<?php

namespace App\Http\Resources\Contracts;

use Illuminate\Support\Str;

trait HasResourceLinks
{
    /**
     * Dynamically create resource links for simple resources.
     *
     * @param array $resourceMap
     * @return array
     */
    private function generateResourceLinks(array $resourceMap): array
    {
        $class = Str::plural(Str::lower(class_basename($this)));

        foreach ($this->routeMapping as $method => $requiredResources) {
            if (count($requiredResources)) {
                $parameters = [];
                foreach ($requiredResources as $resource) {
                    $parameters[$resource] = $resourceMap[$resource];
                }
                $links[$method] = route("{$class}.{$method}", $parameters);
            } else {
                $links[$method] = route("{$class}.{$method}");
            }
        }

        return $links ?? [];
    }
}
