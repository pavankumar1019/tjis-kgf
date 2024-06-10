<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pkwebdev</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    
<?php

// Define classes, subjects, grades, and sections along with their respective credits
$classes = [
    'Math' => 7,
    'Science/EVS' => 7,
    'Social' => 6,
    'PE' => 6,
    'English' => 6,
    '2nd Lang' => 3,
    '3rd Lang' => 2,
    'Library' => 1,
    'Value Education' => 1,
    'Art Music & Dance' => 3,
    'CCA' => 3,
    'Computer' => 8,
];

$grades = ['Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5', 'Grade 6', 'Grade 7', 'Grade 8', 'Grade 9'];
$sections = ['Section A', 'Section B'];

// Define periods and days
$periods = ['Period 1', 'Period 2', 'Period 3', 'Period 4', 'Period 5', 'Period 6', 'Period 7', 'Period 8'];
$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

// Initialize timetable array
$timetable = [];

// Initialize weekly class counters
$weeklyClassCount = [];
foreach ($grades as $grade) {
    foreach ($sections as $section) {
        foreach ($classes as $class => $credits) {
            $weeklyClassCount[$grade][$section][$class] = $credits;
        }
    }
}

// Function to check if a class can be assigned to avoid consecutive repeats
function canAssignClass($timetable, $grade, $section, $day, $period, $class) {
    global $periods, $days;
    // Check the previous period in the same day
    $prevPeriodIndex = array_search($period, $periods) - 1;
    if ($prevPeriodIndex >= 0) {
        $prevPeriod = $periods[$prevPeriodIndex];
        if (isset($timetable[$grade][$section][$day][$prevPeriod]) && $timetable[$grade][$section][$day][$prevPeriod]['class'] === $class) {
            return false;
        }
    }
    // Check the next period in the same day
    $nextPeriodIndex = array_search($period, $periods) + 1;
    if ($nextPeriodIndex < count($periods)) {
        $nextPeriod = $periods[$nextPeriodIndex];
        if (isset($timetable[$grade][$section][$day][$nextPeriod]) && $timetable[$grade][$section][$day][$nextPeriod]['class'] === $class) {
            return false;
        }
    }
    // Check the previous day at the same period
    $prevDayIndex = array_search($day, $days) - 1;
    if ($prevDayIndex >= 0) {
        $prevDay = $days[$prevDayIndex];
        if (isset($timetable[$grade][$section][$prevDay][$period]) && $timetable[$grade][$section][$prevDay][$period]['class'] === $class) {
            return false;
        }
    }
    // Check the next day at the same period
    $nextDayIndex = array_search($day, $days) + 1;
    if ($nextDayIndex < count($days)) {
        $nextDay = $days[$nextDayIndex];
        if (isset($timetable[$grade][$section][$nextDay][$period]) && $timetable[$grade][$section][$nextDay][$period]['class'] === $class) {
            return false;
        }
    }
    return true;
}

// Generate timetable for each grade and section
foreach ($grades as $grade) {
    foreach ($sections as $section) {
        foreach ($days as $day) {
            foreach ($periods as $period) {
                // Shuffle the classes to ensure a random order for each period
                $shuffledClasses = array_keys($classes);
                shuffle($shuffledClasses);
                
                // Attempt to assign a class with remaining credits
                $assigned = false;
                foreach ($shuffledClasses as $class) {
                    if ($weeklyClassCount[$grade][$section][$class] > 0 && canAssignClass($timetable, $grade, $section, $day, $period, $class)) {
                        // Assign class to the timetable
                        $timetable[$grade][$section][$day][$period] = [
                            'class' => $class,
                        ];
                        $weeklyClassCount[$grade][$section][$class]--;
                        $assigned = true;
                        break;
                    }
                }
                // Fill remaining slots with a placeholder if no class with remaining credits found
                if (!$assigned) {
                    $timetable[$grade][$section][$day][$period] = [
                        'class' => '-',
                    ];
                }
            }
        }
    }
}

// Display timetable
echo "<h2>AI Automated Time Table Generator</h2> 
-pkwebdev.com
";
foreach ($grades as $grade) {
    echo "<br><h3 class='bg-dark text-white'>$grade</h3>";
    foreach ($sections as $section) {
        echo "<h4>$section</h4>";
        echo "<table border='1'>";
        echo "<tr><th>Day/Period</th>";
        foreach ($periods as $period) {
            echo "<th>$period</th>";
        }
        echo "</tr>";
        
        foreach ($days as $day) {
            echo "<tr><td>$day</td>";
            foreach ($periods as $period) {
                $class = $timetable[$grade][$section][$day][$period]['class'] ?? '-';
                echo "<td>$class</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

?>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>

