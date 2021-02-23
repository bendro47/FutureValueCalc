<?php 
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();
   
       
   
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment"
            value="<?php echo $investment; ?>"/><br>
        </div>
       <div id="data">
            <label>Yearly Interest Rate:</label>
            <select name ="interest_rate">
            <option value="4" selected>4</option>      
            <option value="4.5">4.5</option>
            <option value="5">5</option>
            <option value="5.5">5.5</option>
            <option value="6">6</option>
            <option value="6.5">6.5</option>
            <option value="7">7</option>
            <option value="7.5">7.5</option>
            <option value="8">8</option>
            <option value="8.5">8.5</option>
            <option value="9">9</option>
            <option value="9.5">9.5</option>
            <option value="10">10</option>
            <option value="10.5">10.5</option>
            <option value="11">11</option>
            <option value="11.5">11.5</option>
            <option value="12">12</option>
            </select>                                                   
       </div>
        <div id="data">
            <label>Number of Years:</label>
            <input type="text" name="years"
            value="<?php echo $years; ?>"/><br>
       
         
        </div>
        <div id="checkbox">
            <label> Compound Interest</label>
      <input type="checkbox" name="compound" value="<?php echo $compound;?>"/>
      
            
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
           
            <input type="submit" value="Calculate"/><br>
        </div>
        

    </form>
    </main>
</body>
</html>
