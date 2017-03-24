<?php 
class Tools_Runtime{
/**
 * 获取当前时间
 */
  static function gettime() {
    $time = explode(' ',microtime());
    return $time[0]+$time[1];
  }
  // 计算时差
  static function getruntime($start,$end) {
    return $end-$start;
  }
}
?>