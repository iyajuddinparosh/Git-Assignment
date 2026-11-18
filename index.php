
<?php
$name = "";
$department = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $department = htmlspecialchars($_POST["department"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>

    <h2>Student Information Form</h2>

    <form method="POST">
        Name:
        <input type="text" name="name" required>
        <br><br>

        Department:
        <select name="department" required>
            <option value="">Select Department</option>
            <option value="CSE">CSE</option>
            <option value="EEE">EEE</option>
            <option value="BBA">BBA</option>
        </select>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Student Details</h3>";
        echo "Name: " . $name . "<br>";
        echo "Department: " . $department;
    }
    ?>

</body>
</html>
