<?php 

session_start();
$lifetime = 60 * 60 * 24 * 365;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
$investment=0;
        $interest_rate=0;
        $years=0;
        
        if($_SESSION["investment"] !=NULL)
        {
            
        
          if (isset($_SESSION["investment"])) {
        $investment += $_SESSION["investment"];
        
        return;
        }
        }
        
        if($_SESSION["interest"] !=NULL){
    if (isset($_SESSION["intreset"])) {
        $interest_rate += $_SESSION["interest"];
        
        return;
        }
        }
        
        if($_SESSION["years"] !=NULL){
    if (isset($_SESSION["years"])) {
        $years += $_SESSION["years"];
        return;
        }
        }
  
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php }; ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment"
                   value="<?php echo htmlspecialchars($investment); ?>">
            <br>

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest"
                   value="<?php echo htmlspecialchars($interest_rate); ?>">
            <br>

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo htmlspecialchars($years); ?>">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>

    </form>
    </main>
</body>
</html>
