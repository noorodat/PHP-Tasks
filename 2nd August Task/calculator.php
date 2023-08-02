<?php 
session_start();

$_SESSION["num1"] = $_GET["num1"];
$_SESSION["num2"] = $_GET["num2"];
$_SESSION["operation"] = $_GET["operations"];

$n1 = intval($_SESSION["num1"]);
$n2 = intval($_SESSION["num2"]);
$operation = $_SESSION["operation"];

$answer = '';

switch($operation) {
    case "+":
        $answer = $n1 + $n2;
        break;

    case "-":
        $answer = $n1 - $n2;
        break;

    case "*":
        $answer = $n1 * $n2;
        break;

    case "/":
        $answer = $n1 / $n2;
        break;
}

$_SESSION["answer"] = $answer;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

<form action="calculator.php" method="GET">
<?php echo "<h2>Hello " . $_SESSION["username"] . "</h2>"; ?>
    <input type="text" name="num1" id="" placeholder="First number">
    <select name="operations" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="num2" id="" placeholder="Second number">
    <input type="submit" name="" id="">
</form>

<?php 
if(isset($_SESSION["answer"])) {
    echo "<h2>Answer is: " . $_SESSION["answer"] . "</h2>";
}
?>

</body>
</html>
