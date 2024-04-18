<?php

function recordStream($streamUrl, $outputFile, $duration = 60) {
    $outputDir = dirname($outputFile);
    if (!is_dir($outputDir)) {
        mkdir($outputDir, 0777, true);
    }

    // Ensure the command shows full output and errors
    $command = "streamripper $streamUrl -a $outputFile -A -l " . ($duration) . " 2>&1";
    echo "Executing command: $command<br>";

    // Execute command and capture output
    $output = shell_exec($command);
    echo "Command output: <pre>$output</pre>";
}

$streamUrl = 'https://stream.rcs.revma.com/ygxn9vgennruv';  // Stream URL
$duration = 5;  // Record for 1 minute for testing
$outputFile = 'C:\\xampp\\htdocs\\recordings\\streampk.mp3';  // Make sure the path is correct

recordStream($streamUrl, $outputFile, $duration);
?>
