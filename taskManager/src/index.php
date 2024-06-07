<?php
require "config/database.php";
$db =conectarDB();
if ($db->connect_errno) {
    // Print the connection error message
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    // You can also log the error message to a file or other logging mechanism
    // error_log("Failed to connect to MySQL: " . mysqli_connect_error());
    exit(); // Exit the script if there's a connection error
}

$getNotes = "select * from nota" ;
$notes = mysqli_query($db,$getNotes);
if(!$notes){
    echo "Error: " . mysqli_error($db);
}
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Document</title>
</head>
<body>
    <div class="contenedor">

        <h1>Notes manager</h1>
        <form class="addNote"id="myForm" method="post" action="crud/create.php">
            <label for="note"></label>
            <input name="note" id="note" type="text">
            <input class="button greenButton" type="submit" value="add">
        </form>
        <div class="notas">
            <?php while($row=mysqli_fetch_array($notes)){?>
            <div class="note">
                <form action="crud/edit.php"class="contenido-and-edit" onsubmit="checkSubmit(event)" method="post">
                    <input type="text" class ="notaImpresa" name="note" value ="<?php echo $row['noteContent'] ?>" readonly>
                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                    <!--Edit button-->
                    <button class="button greenButton"><span class="material-symbols-outlined">edit</span></button>
                </form>
                <!--Delete button-->
                <form action="crud/delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']?>"> <!-- Aquí puedes poner el ID del elemento a eliminar -->
                    <button class="button redButton" type="submit" name="delete"> <span class="material-symbols-outlined">delete</span></button>
                </form>
               
            </div>
            <?php }?>
            <script>
                     function checkSubmit(event) {
                         if(event.target.classList.contains("contenido-and-edit")){
                            var form = event.target;
                            var input = form.querySelector(".notaImpresa");
                            var editButton = form.querySelector(".button");
                            if (input.readOnly) {
                                event.preventDefault(); // Prevent form submission
                                input.readOnly=false;
                                editButton.querySelector(".material-symbols-outlined").innerText = "done";
                            }
                        }
                    }
                    
                </script>
        </div>
        

    </div>
</body>
</html>