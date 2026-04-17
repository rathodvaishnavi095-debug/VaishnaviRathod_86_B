<?php
$type = $_GET['type'];
$score = $_GET['score'];

function getTitle($type) {
    if ($type == "ssl") return "SSL Security";
    if ($type == "headers") return "Security Headers";
    if ($type == "vuln") return "Vulnerabilities";
    if ($type == "malware") return "Malware Risk";
}

function getExplanation($type) {

    if ($type == "ssl") {
        return [
            "SSL (Secure Sockets Layer) is a security protocol that encrypts communication between a user's browser and a web server. It ensures that sensitive information such as passwords, personal data, and payment details remains private and secure during transmission.",

            "SSL works by using encryption algorithms to convert data into a secure format that cannot be easily read by unauthorized users. Websites with SSL use HTTPS instead of HTTP, which indicates a secure connection and builds user trust.",

            "SSL security is measured by checking whether the website uses HTTPS, the validity of its SSL certificate, encryption strength, and the TLS protocol version. A higher score indicates better encryption and secure communication."
        ];
    }

    if ($type == "headers") {
        return [
            "Security headers are HTTP response headers used by websites to protect against common cyber threats such as cross-site scripting (XSS), clickjacking, and code injection attacks.",

            "These headers instruct the browser on how to behave securely. For example, Content-Security-Policy controls which resources can load, and X-Frame-Options prevents embedding of pages into iframes.",

            "The score is measured based on the presence and correct configuration of important headers like CSP, HSTS, X-Frame-Options, and X-Content-Type-Options."
        ];
    }

    if ($type == "vuln") {
        return [
            "Vulnerabilities are weaknesses or flaws in a website that attackers can exploit to gain unauthorized access or cause damage. Common vulnerabilities include SQL Injection and Cross-Site Scripting (XSS).",

            "These weaknesses often arise due to poor coding practices, outdated software, or lack of proper validation. Attackers use automated tools to scan and exploit such issues.",

            "The score is calculated by checking for known vulnerabilities, outdated components, and insecure coding patterns. A higher score indicates fewer detected vulnerabilities."
        ];
    }

    if ($type == "malware") {
        return [
            "Malware refers to harmful software such as viruses, spyware, ransomware, or malicious scripts that can damage systems or steal user data.",

            "Websites may unknowingly host malware due to compromised files, insecure plugins, or malicious advertisements. This can harm users visiting the site.",

            "The score is measured by scanning the website for suspicious scripts, harmful downloads, phishing content, and unsafe external links. A higher score means the site is safer."
        ];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Details</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2><?php echo getTitle($type); ?></h2>
    <h3>Score: <?php echo $score; ?>%</h3>

    <p><?php
$explanations = getExplanation($type);
foreach ($explanations as $para) {
    echo "<p>$para</p>";
}
?></p>

    <br>
    <a href="index.php">⬅ Back to Home</a>
</div>

</body>
</html>