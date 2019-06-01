<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Authors:
 * - Tornike Razmadze
 * - François B
 * - Lasha Dolidze
 * - Tim Fish
 * - JD Isaacks
 * - Tornike Razmadze
 * - François B
 * - Lasha Dolidze
 * - JD Isaacks
 * - LONGMAN
 */
return [
    'year' => ':count წელი',
    'y' => ':count წელი',
    'a_year' => '{1}წელი|]1,Inf[:count წელი',
    'month' => ':count თვე',
    'm' => ':count თვე',
    'a_month' => '{1}თვე|]1,Inf[:count თვე',
    'week' => ':count კვირი',
    'w' => ':count კვირი',
    'a_week' => '{1}კვირი|]1,Inf[:count კვირი',
    'day' => ':count დღე',
    'd' => ':count დღე',
    'a_day' => '{1}დღე|]1,Inf[:count დღე',
    'hour' => ':count საათი',
    'h' => ':count საათი',
    'a_hour' => '{1}საათი|]1,Inf[:count საათი',
    'minute' => ':count წუთი',
    'min' => ':count წუთი',
    'a_minute' => '{1}წუთი|]1,Inf[:count წუთი',
    'second' => ':count წამი',
    's' => ':count წამი',
    'a_second' => '{1}რამდენიმე წამი|]1,Inf[:count წამი',
    'ago' => function ($time) {
        $replacements = [
            'წუთი' => 'წუთის',
            'წამი' => 'წამის',
            'საათი' => 'საათის',
            'დღე' => 'დღის',
            'კვირი' => 'კვირის',
            'თვე' => 'თვის',
            'წელი' => 'წლის',
        ];
        $time = strtr($time, array_flip($replacements));
        $time = strtr($time, $replacements);

        return "$time წინ";
    },
    'from_now' => function ($time) {
        $replacements = [
            'წამი' => 'წამში',
            'საათი' => 'საათის',
            'დღე' => 'დღის',
            'კვირი' => 'კვირის',
            'თვე' => 'თვის',
            'წელი' => 'წლის',
        ];
        $time = strtr($time, array_flip($replacements));
        $time = strtr($time, $replacements);

        return "$time შემდეგ";
    },
    'after' => function ($time) {
        $replacements = [
            'წუთი' => 'წუთის',
            'წამი' => 'წამის',
            'საათი' => 'საათის',
            'დღე' => 'დღის',
            'კვირი' => 'კვირის',
            'თვე' => 'თვის',
            'წელი' => 'წლის',
        ];
        $time = strtr($time, array_flip($replacements));
        $time = strtr($time, $replacements);

        return "$time შემდეგ";
    },
    'before' => ':time უკან',
    'diff_yesterday' => 'გუშინ',
    'diff_tomorrow' => 'ხვალ',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'dddd, D MMMM YYYY HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[დღეს], LT[-ზე]',
        'nextDay' => '[ხვალ], LT[-ზე]',
        'nextWeek' => function (\Carbon\CarbonInterface $current, \Carbon\CarbonInterface $other) {
            return ($current->isSameWeek($other) ? '' : '[შემდეგ] ').'dddd, LT[-ზე]';
        },
        'lastDay' => '[გუშინ], LT[-ზე]',
        'lastWeek' => '[წინა] dddd, LT-ზე',
        'sameElse' => 'L',
    ],
    'ordinal' => function ($number) {
        if ($number === 0) {
            return $number;
        }
        if ($number === 1) {
            return $number.'-ლი';
        }
        if (($number < 20) || ($number <= 100 && ($number % 20 === 0)) || ($number % 100 === 0)) {
            return 'მე-'.$number;
        }

        return $number.'-ე';
    },
    'months' => ['იანვარს', 'თებერვალს', 'მარტს', 'აპრილის', 'მაისს', 'ივნისს', 'ივლისს', 'აგვისტს', 'სექტემბერს', 'ოქტომბერს', 'ნოემბერს', 'დეკემბერს'],
    'months_standalone' => ['იანვარი', 'თებერვალი', 'მარტი', 'აპრილი', 'მაისი', 'ივნისი', 'ივლისი', 'აგვისტო', 'სექტემბერი', 'ოქტომბერი', 'ნოემბერი', 'დეკემბერი'],
    'months_short' => ['იან', 'თებ', 'მარ', 'აპრ', 'მაი', 'ივნ', 'ივლ', 'აგვ', 'სექ', 'ოქტ', 'ნოე', 'დეკ'],
    'months_regexp' => '/D[oD]?(\[[^\[\]]*\]|\s)+MMMM?/',
    'weekdays' => ['კვირას', 'ორშაბათს', 'სამშაბათს', 'ოთხშაბათს', 'ხუთშაბათს', 'პარასკევს', 'შაბათს'],
    //'weekdays_standalone' => ['კვირა', 'ორშაბათი', 'სამშაბათი', 'ოთხშაბათი', 'ხუთშაბათი', 'პარასკევი', 'შაბათი'],
    'weekdays_short' => ['კვი', 'ორშ', 'სამ', 'ოთხ', 'ხუთ', 'პარ', 'შაბ'],
    'weekdays_min' => ['კვ', 'ორ', 'სა', 'ოთ', 'ხუ', 'პა', 'შა'],
    'weekdays_regexp' => '/(წინა|შემდეგ)/',
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
    'list' => [', ', ' და '],
    'meridiem' => function ($hour) {
        if ($hour >= 4) {
            if ($hour < 11) {
                return 'დილის';
            }

            if ($hour < 16) {
                return 'შუადღის';
            }

            if ($hour < 22) {
                return 'საღამოს';
            }
        }

        return 'ღამის';
    },
];
