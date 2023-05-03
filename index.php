<?php include ("includes/header.php");?>

<main>
    <h2>To-do</h2>

    <form action="todo.php" method="post">
        <label for="task">Att göra:</label>
        <br>
        <input type="text" name="task" id="task">
        <br>
        <input class="btn" type="submit" value="Lägg till">
        <br>
        
        <span class="message">
            <?php
            if(isset($_SESSION['errormsg'])) {
                echo $_SESSION['errormsg'];
            }
            unset($_SESSION['errormsg']);
            ?>
            
        </span>

    </form>



 </main>

<?php include("includes/footer.php");?>