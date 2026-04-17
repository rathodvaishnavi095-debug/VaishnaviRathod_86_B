<?php
$url = $_POST['url'];

// Fake scores
$ssl = rand(60, 100);
$headers = rand(40, 90);
$vulnerabilities = rand(30, 85);
$malware = rand(50, 95);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h2>Analysis Result</h2>
    <p class="url"><?php echo $url; ?></p>

    <div class="charts-grid">

    <a href="details.php?type=ssl&score=<?php echo $ssl; ?>">
        <div class="chart-box">
            <div class="circle" style="--value: <?php echo $ssl; ?>; --color:#22c55e;">
                <span><?php echo $ssl; ?>%</span>
            </div>
            <p>SSL Security</p>
        </div>
    </a>

    <a href="details.php?type=headers&score=<?php echo $headers; ?>">
        <div class="chart-box">
            <div class="circle" style="--value: <?php echo $headers; ?>; --color:#3b82f6;">
                <span><?php echo $headers; ?>%</span>
            </div>
            <p>Security Headers</p>
        </div>
    </a>

    <a href="details.php?type=vuln&score=<?php echo $vulnerabilities; ?>">
        <div class="chart-box">
            <div class="circle" style="--value: <?php echo $vulnerabilities; ?>; --color:#f59e0b;">
                <span><?php echo $vulnerabilities; ?>%</span>
            </div>
            <p>Vulnerabilities</p>
        </div>
    </a>

    <a href="details.php?type=malware&score=<?php echo $malware; ?>">
        <div class="chart-box">
            <div class="circle" style="--value: <?php echo $malware; ?>; --color:#ef4444;">
                <span><?php echo $malware; ?>%</span>
            </div>
            <p>Malware Risk</p>
        </div>
    </a>

</div>
</body>
</html>