<?php
// Include your database connection file
include("../connect.php");

// Get and validate the islandOfPersonalityID from the URL
if (isset($_GET['islandOfPersonalityID']) && is_numeric($_GET['islandOfPersonalityID'])) {
    $destination = $_GET['islandOfPersonalityID'];
} else {
    die("Invalid or missing island ID.");
}

// Fetch related content from islandcontents
$queryContent = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = $destination";
$resultContent = executeQuery($queryContent);

if (!$resultContent) {
    die("Error fetching island content: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Island of Contents</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="images/emtiLogo.png">
</head>

<body>
    <?php
    // Display island content
    if (mysqli_num_rows($resultContent) > 0) {
        while ($contentRow = mysqli_fetch_assoc($resultContent)) {
            ?>

            <!-- About / Jane And John -->
            <div class="w3-container w3-padding-64 w3-pale-red" id="us">
                <div class="w3-content">
                    <img class="w3-round" src="images/<?php echo $contentRow['image']; ?>" style="width:100%;margin:32px 0">
                    <p><i><?php echo $contentRow['content']; ?></i>
                    </p>
                </div>

                <?php
        }
    }
    ?>
</body>

</html>