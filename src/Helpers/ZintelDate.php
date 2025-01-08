<?php

namespace Zintel\LaravelHelpers\Helpers;

use Carbon\Carbon;

class ZintelDate
{
    /**
     * 1. Format date in 'd-m-Y' format.
     *
     * @param string $date
     * @return string
     */
    public static function formatDate($date)
    {
        return Carbon::parse($date)->format('d-m-Y');
    }

    /**
     * 2. Format date in 'Y-m-d' format (ISO).
     *
     * @param string $date
     * @return string
     */
    public static function formatDateISO($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }

    /**
     * 3. Format time in 'H:i:s' format.
     *
     * @param string $time
     * @return string
     */
    public static function formatTime($time)
    {
        return Carbon::parse($time)->format('H:i:s');
    }

    /**
     * 4. Add days to the given date.
     *
     * @param string $date
     * @param int $days
     * @return string
     */
    public static function addDays($date, $days)
    {
        return Carbon::parse($date)->addDays($days)->toDateString();
    }

    /**
     * 5. Subtract days from the given date.
     *
     * @param string $date
     * @param int $days
     * @return string
     */
    public static function subtractDays($date, $days)
    {
        return Carbon::parse($date)->subDays($days)->toDateString();
    }

    /**
     * 6. Get the difference in days between two dates.
     *
     * @param string $startDate
     * @param string $endDate
     * @return int
     */
    public static function differenceInDays($startDate, $endDate)
    {
        return Carbon::parse($startDate)->diffInDays($endDate);
    }

    /**
     * 7. Get the current date.
     *
     * @return string
     */
    public static function currentDate()
    {
        return Carbon::now()->toDateString();
    }

    /**
     * 8. Get the current time.
     *
     * @return string
     */
    public static function currentTime()
    {
        return Carbon::now()->toTimeString();
    }

    /**
     * 9. Get the current year.
     *
     * @return int
     */
    public static function currentYear()
    {
        return Carbon::now()->year;
    }

    /**
     * 10. Get the current month.
     *
     * @return int
     */
    public static function currentMonth()
    {
        return Carbon::now()->month;
    }

    /**
     * 11. Check if the given date is today.
     *
     * @param string $date
     * @return bool
     */
    public static function isToday($date)
    {
        return Carbon::parse($date)->isToday();
    }

    /**
     * 12. Check if the given date is in the future.
     *
     * @param string $date
     * @return bool
     */
    public static function isFutureDate($date)
    {
        return Carbon::parse($date)->isFuture();
    }

    /**
     * 13. Check if the given date is in the past.
     *
     * @param string $date
     * @return bool
     */
    public static function isPastDate($date)
    {
        return Carbon::parse($date)->isPast();
    }

    /**
     * 14. Get the day of the week for the given date.
     *
     * @param string $date
     * @return string
     */
    public static function dayOfWeek($date)
    {
        return Carbon::parse($date)->format('l');
    }

    /**
     * 15. Get the day of the month for the given date.
     *
     * @param string $date
     * @return int
     */
    public static function dayOfMonth($date)
    {
        return Carbon::parse($date)->day;
    }

    /**
     * 16. Get the week of the year for the given date.
     *
     * @param string $date
     * @return int
     */
    public static function weekOfYear($date)
    {
        return Carbon::parse($date)->weekOfYear;
    }

    /**
     * 17. Convert the date to SQL format.
     *
     * @param string $date
     * @return string
     */
    public static function toSQLDate($date)
    {
        return Carbon::parse($date)->toDateString();
    }

    /**
     * 18. Convert the time to SQL format.
     *
     * @param string $time
     * @return string
     */
    public static function toSQLTime($time)
    {
        return Carbon::parse($time)->toTimeString();
    }

    /**
     * 19. Convert the datetime to SQL format.
     *
     * @param string $dateTime
     * @return string
     */
    public static function toSQLDateTime($dateTime)
    {
        return Carbon::parse($dateTime)->toDateTimeString();
    }

    /**
     * 20. Get the current timestamp in UNIX format.
     *
     * @return int
     */
    public static function currentTimestamp()
    {
        return Carbon::now()->timestamp;
    }

    /**
     * 21. Get the date in the next month.
     *
     * @param string $date
     * @return string
     */
    public static function nextMonth($date)
    {
        return Carbon::parse($date)->addMonth()->toDateString();
    }

    /**
     * 22. Get the date in the previous month.
     *
     * @param string $date
     * @return string
     */
    public static function prevMonth($date)
    {
        return Carbon::parse($date)->subMonth()->toDateString();
    }

    /**
     * 23. Get the date in the next year.
     *
     * @param string $date
     * @return string
     */
    public static function nextYear($date)
    {
        return Carbon::parse($date)->addYear()->toDateString();
    }

    /**
     * 24. Get the date in the previous year.
     *
     * @param string $date
     * @return string
     */
    public static function prevYear($date)
    {
        return Carbon::parse($date)->subYear()->toDateString();
    }

    /**
     * 25. Get the next Friday from the given date.
     *
     * @param string $date
     * @return string
     */
    public static function nextFriday($date)
    {
        return Carbon::parse($date)->next(Carbon::FRIDAY)->toDateString();
    }

    /**
     * 26. Get the start of the current week.
     *
     * @param string $date
     * @return string
     */
    public static function startOfWeek($date)
    {
        return Carbon::parse($date)->startOfWeek()->toDateString();
    }

    /**
     * 27. Get the end of the current week.
     *
     * @param string $date
     * @return string
     */
    public static function endOfWeek($date)
    {
        return Carbon::parse($date)->endOfWeek()->toDateString();
    }

    /**
     * 28. Check if the given year is a leap year.
     *
     * @param int $year
     * @return bool
     */
    public static function isLeapYear($year)
    {
        return Carbon::parse($year . '-01-01')->isLeapYear();
    }

    /**
     * 29. Get the last day of the given month.
     *
     * @param string $date
     * @return string
     */
    public static function lastDayOfMonth($date)
    {
        return Carbon::parse($date)->endOfMonth()->toDateString();
    }

    /**
     * 30. Get the first day of the given month.
     *
     * @param string $date
     * @return string
     */
    public static function firstDayOfMonth($date)
    {
        return Carbon::parse($date)->startOfMonth()->toDateString();
    }

    /**
     * 31. Check if the given date is a weekend.
     *
     * @param string $date
     * @return bool
     */
    public static function isWeekend($date)
    {
        return Carbon::parse($date)->isWeekend();
    }

    /**
     * 32. Get the number of days in the given month.
     *
     * @param string $date
     * @return int
     */
    public static function daysInMonth($date)
    {
        return Carbon::parse($date)->daysInMonth;
    }

    /**
     * 33. Get the name of the month (e.g., "January").
     *
     * @param  string  $date
     * @return string
     */
    public static function monthName($date)
    {
        return Carbon::parse($date)->format('F');
    }

    /**
     * 34. Get the short name of the month (e.g., "Jan").
     *
     * @param  string  $date
     * @return string
     */
    public static function shortMonthName($date)
    {
        return Carbon::parse($date)->format('M');
    }

    /**
     * 35. Get the number of the day of the week (1 = Sunday, 7 = Saturday).
     *
     * @param  string  $date
     * @return int
     */
    public static function dayOfWeekNumber($date)
    {
        return Carbon::parse($date)->dayOfWeek;
    }

    /**
     * 36. Get the current timestamp with timezone.
     *
     * @return string
     */
    public static function currentTimestampWithTimezone()
    {
        return Carbon::now()->toDateTimeString();
    }

    /**
     * 37. Get the day of the year (1-365).
     *
     * @param  string  $date
     * @return int
     */
    public static function dayOfYear($date)
    {
        return Carbon::parse($date)->dayOfYear;
    }

    /**
     * 38. Check if the given date is in a leap year.
     *
     * @param  string  $date
     * @return bool
     */
    public static function isLeapYearDate($date)
    {
        return Carbon::parse($date)->isLeapYear();
    }

    /**
     * 39. Get the number of weeks in the given year.
     *
     * @param  int  $year
     * @return int
     */
    public static function weeksInYear($year)
    {
        return Carbon::parse($year . '-01-01')->weeksInYear;
    }

    /**
     * 40. Get the first day of the given year.
     *
     * @param  int  $year
     * @return string
     */
    public static function firstDayOfYear($year)
    {
        return Carbon::parse($year . '-01-01')->toDateString();
    }

    /**
     * 41. Get the last day of the given year.
     *
     * @param  int  $year
     * @return string
     */
    public static function lastDayOfYear($year)
    {
        return Carbon::parse($year . '-12-31')->toDateString();
    }

    /**
     * 42. Get the week number of the year for the given date.
     *
     * @param  string  $date
     * @return int
     */
    public static function weekOfYearFromDate($date)
    {
        return Carbon::parse($date)->weekOfYear;
    }

    /**
     * 43. Check if the given date is the first day of the month.
     *
     * @param  string  $date
     * @return bool
     */
    public static function isFirstDayOfMonth($date)
    {
        return Carbon::parse($date)->isStartOfMonth();
    }

    /**
     * 44. Check if the given date is the last day of the month.
     *
     * @param  string  $date
     * @return bool
     */
    public static function isLastDayOfMonth($date)
    {
        return Carbon::parse($date)->isEndOfMonth();
    }

    /**
     * 45. Get the start of the given year.
     *
     * @param  int  $year
     * @return string
     */
    public static function startOfYear($year)
    {
        return Carbon::parse($year . '-01-01')->startOfYear()->toDateString();
    }

    /**
     * 46. Get the end of the given year.
     *
     * @param  int  $year
     * @return string
     */
    public static function endOfYear($year)
    {
        return Carbon::parse($year . '-12-31')->endOfYear()->toDateString();
    }

    /**
     * 47. Get the last day of the current week.
     *
     * @return string
     */
    public static function lastDayOfWeek()
    {
        return Carbon::now()->endOfWeek()->toDateString();
    }

    /**
     * 48. Get the first day of the current week.
     *
     * @return string
     */
    public static function firstDayOfWeek()
    {
        return Carbon::now()->startOfWeek()->toDateString();
    }

    /**
     * 49. Get the next weekday (Monday-Friday).
     *
     * @param  string  $date
     * @return string
     */
    public static function nextWeekday($date)
    {
        return Carbon::parse($date)->next(Carbon::MONDAY)->toDateString();
    }

    /**
     * 50. Get the previous weekday (Monday-Friday).
     *
     * @param  string  $date
     * @return string
     */
    public static function prevWeekday($date)
    {
        return Carbon::parse($date)->previous(Carbon::FRIDAY)->toDateString();
    }

}