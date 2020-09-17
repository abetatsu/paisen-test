<?php

namespace App;

use Carbon\Carbon;

class Calendar
{
     private $holidays;
     function __construct($holidays) {
          $this->holidays = $holidays;
     }

     private $html;
     public function showCalendarTag($m, $y)
     {
          $now = Carbon::now();
          $year = $y;
          $month = $m;
          if ($year == null) {
               // システム日付を取得する。
               $year = $now->year;
               $month = $now->month;
          }

          $prev = $now->setDate($year, $month, 1)->subMonth();
          $prev_year = $prev->year;
          $prev_month = $prev->month;

          $next = $now->setDate($year, $month, 1)->addMonth();
          $next_year = $next->year;
          $next_month = $next->month;

          $firstWeekDay = Carbon::create($year, $month, 1)->dayOfWeek;// 1日の曜日(0:日曜日、6:土曜日)
          $lastDay = Carbon::create($year, $month, 1)->daysInMonth;// 指定した月の最終日
          // 日曜日からカレンダーを表示するため前月の余った日付をループの初期値にする
          $day = 1 - $firstWeekDay;
          $this->html = <<< EOS
          <h1>
          <a class="btn btn-primary" href="/calendar/?year={$prev_year}&month={$prev_month}" role="button">&lt;前月</a>
          {$year}年{$month}月
          <a class="btn btn-primary" href="/calendar/?year={$next_year}&month={$next_month}" role="button">翌月&gt;</a>
          </h1>
          <table class="table table-bordered">
          <tr>
          <th scope="col">日</th>
          <th scope="col">月</th>
          <th scope="col">火</th>
          <th scope="col">水</th>
          <th scope="col">木</th>
          <th scope="col">金</th>
          <th scope="col">土</th>
          </tr>
EOS;

          // カレンダーの日付部分を生成する
          while ($day <= $lastDay) {
               $this->html .= "<tr>";
               // 各週を描画するHTMLソースを生成する
               for ($i = 0; $i < 7; $i++) {
                    if ($day <= 0 || $day > $lastDay) {
                         $this->html .= "<td>&nbsp;</td>";
                    } else {
                         $this->html .= "<td>" . $day . "&nbsp";
                         $target = $now->setDate($year, $month, $day)->toDateString();
                         foreach($this->holidays as $val) {
                              if ($val->day == $target) {
                                   $this->html .= $val->description;
                              break;
                              }
                         }
                         $this->html .= "</td>";
                    }
                    $day++;
               }
               $this->html .= "</tr>";
          }
          return $this->html .= '</table>';
     }

}