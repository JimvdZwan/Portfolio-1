<!DOCTYPE>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
require 'views/nav.php';
?>
<h2>Add teacher</h2>
<form action="add-teacher" method="post">
    <div class="mb-3">
        <label for="teachername" class="form-label">Teachers name</label>
        <input type="text" class="form-control w-25" name="teachername" id="teachername"><br>
        <label for="teacheremail" class="form-label">Teachers email</label>
        <input type="text" class="form-control w-25" name="teacheremail" id="teacheremail">
    </div>
    <button type="submit" class="btn btn-primary">Aanmaken</button>
</form>
</div>
<?php 
require 'views/footer.php';
?>
</body>
</html>
