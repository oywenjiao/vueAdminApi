<?php
use Illuminate\Support\Facades\DB;

/**
 * 获取时间
 * @param int $time
 * @return false|string
 */
function timestamp($time = 0) {
    if ($time > 0) {
        return date('Y-m-d H:i:s', $time);
    }
    return date('Y-m-d H:i:s');
}

/**
 * 调试SQL语句
 */
function getLastSql() {
    DB::listen(function ($sql) {
        foreach ($sql->bindings as $i => $binding) {
            if ($binding instanceof \DateTime) {
                $sql->bindings[$i] = $binding->format('\'Y-m-d H:i:s\'');
            } else {
                if (is_string($binding)) {
                    $sql->bindings[$i] = "'$binding'";
                }
            }
        }
        $query = str_replace(array('%', '?'), array('%%', '%s'), $sql->sql);
        $query = vsprintf($query, $sql->bindings);
        print_r($query);
        echo '<br />';
    });
}