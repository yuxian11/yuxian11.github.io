<?php

SimCalendar('2021-10');//显示x月份日历
function SimCalendar($date)
{
  
  echo '<table border="1">
  <thead>
    <tr>
      <th>日</th>
      <th>一</th>
      <th>二</th>
      <th>三</th>
      <th>四</th>
      <th>五</th>
      <th>六</th>
    </tr>
  </thead>
  <tbody>';
    $date_array = explode('-', $date);
    $start_week = 0;//从星期天开始为0
    $month = cal_days_in_month(CAL_GREGORIAN, $date_array[1], $date_array[0]);//当月的天数
    $wstar = date('w', strtotime($date . '-01'));//当月从星期几天始
    $rows = ceil(($wstar + $month) / 7);//总行数
    $mday = 1;//第几天
    for ($i = 0; $i < $rows; $i++) {
      echo '<tr>';
      for ($d = 0; $d < 7; $d++) {
        $nowday = 7 * $i + $d + $start_week;
        if ($nowday >= $wstar && $mday <= $month) {
          $temp = date('d', strtotime($date . '-' . $mday));
          echo '<td>'.$temp . '</td>';
          $mday++;
        } else {
          echo '<td>&nbsp;</td>';
        }
      }
      echo '</tr>';
    }
  echo '</tbody>
</table>';
}
?>
