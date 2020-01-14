<?php

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