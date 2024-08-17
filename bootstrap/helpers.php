<?php

declare(strict_types=1);

if (!function_exists('config_path')) {
    /**
     * Get the configuration path.
     *
     * @param string $path
     * @return string
     */
    function config_path(string $path = ''): string
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}

if (!function_exists('parse_redis_host_info')) {
    /**
     * @param $hostInfo
     * @return array
     */
    function parse_redis_host_info($hostInfo): array
    {
        $hostInfoArray = explode(':', $hostInfo, 2);
        if (count($hostInfoArray) === 2) {
            list($host, $port) = $hostInfoArray;
        } else {
            $host = $hostInfoArray[0];
            $port = 6379;
        }

        return [$host, (int)$port];
    }
}

if (!function_exists('get_redis_cluster_from_env')) {
    /**
     * @param string $hosts
     * @param array $options
     * @return array
     * @throws Exception
     */
    function get_redis_cluster_from_env(string $hosts = '', array $options = []): array
    {
        if (empty($hosts)) {
            throw new Exception('Missing Redis hosts');
        }

        $redisHosts = explode(',', $hosts);

        shuffle($redisHosts);

        $clusterInfo = [];
        foreach ($redisHosts as $hostInfo) {
            list($host, $port) = parse_redis_host_info($hostInfo);

            $fp = @fsockopen($host, (int)$port, $errno, $errStr, 0.1);

            if ($fp) {
                @fclose($fp);
                $clusterInfo = [['host' => $host, 'port' => $port]];
                break;
            }
        }

        if ($options) {
            $clusterInfo = array_merge($clusterInfo, [
                'options' => $options
            ]);
        }

        return $clusterInfo;
    }
}

if (!function_exists('get_mysql_host_from_env')) {
    /**
     * @return string
     */
    function get_mysql_host_from_env(): string
    {
        $mysqlHostArray = explode(',', env('DB_HOST', '127.0.0.1'));

        return $mysqlHostArray[array_rand($mysqlHostArray)];
    }
}
