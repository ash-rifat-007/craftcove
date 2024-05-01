<?php
/*
 * Get the base path
 *
 * @param string $path
 * @return string
 */

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/*
 * Load a view
 *
 * @param string $name
 * @return void
 *
 */

function loadView($name)
{
    $viewPath = basePath("views/pages/{$name}.php");
    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View '{$name}' not found.";
    }
}

/*
 * Load a partial
 *
 * @param string $name
 * @return void
 *
 */

function loadPartial($name)
{
    $partialPath = basePath("views/partials/{$name}.php");
    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial '{$name}' not found.";
    }
}

/*
 * Inspect a value(s)*
 *
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

/*
 * Inspect a value(s) and Die*
 *
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function getTimeElapsedString($datetime, $full = false)
{
    // Set the default timezone to Bangladeshi time
    date_default_timezone_set('Asia/Dhaka');

    $now = new DateTime;
    $now->setTimezone(new DateTimeZone('Asia/Dhaka')); // Set the timezone to Bangladeshi time
    $ago = new DateTime($datetime);
    $ago->setTimezone(new DateTimeZone('Asia/Dhaka')); // Set the timezone to Bangladeshi time
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = [
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    ];

    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'Just now';
}