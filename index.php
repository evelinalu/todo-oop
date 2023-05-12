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

    </form>



 </main>

<?php include("includes/footer.php");?>