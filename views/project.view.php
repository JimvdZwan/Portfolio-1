<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Thisis a sample webpage demonstratingthe useof meta tags in HTML5."></metaname>
    <meta name="keywords" content="HTML5, meta tags, web development">
    <meta name="author"content="Jim van der Zwan">
    <meta name="robots"content="index, follow">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<?php
require 'views/nav.php';
?>
<h2>Zoek een gebruiker</h2>
<input type="text" class="search"  id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<?php foreach($projects as $project): ?>
<table id="myTable">
  <thead>
  <tr class="header">
  <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Author</th>
            <th>Wijzigen</th>
            <th>Verwijderen</th>
  </tr>
</thead>
<tbody>
<td><?= $project->id ?></td>
            <td><?= $project->title ?></td>
            <td><?= $project->content ?></td>
            <td><?= $project->author ?></td>
            <td><form action="upd-project" method="post">
                    <button type="submit" name="id" class="btn btn-outline-success" value="<?= $project->id; ?>">Updaten</button>
                </form></td>
            <td> <form action="del-project" method="post">
                    <button type="submit" name="id" class="btn btn-outline-danger" value="<?= $project->id; ?>">Verwijderen</button>
                </form></td>
        </tr>
</body>
</table>



<?php endforeach; ?>
<h2>Add project</h2>
<form action="add-project" method="post" class="container">
    <div class="project_data">
        <label for="projecttitle" class="form-label">Titel project</label>
        <input type="text" class="input" name="projecttitle" id="projecttitle"><br>
        <label for="projectcontent" class="form-label">Content project</label>
        <textarea name="projectcontent" id="projectcontent" cols="30" rows="05"></textarea>
        <label for="projectauthor" class="form-label">Author project</label>
        <input type="text" class="input" name="projectauthor" id="projectauthor">
        <button type="submit" class="btn btn-primary">Aanmaken</button>
    </div>
</form>
</div>

<script src="js/main.js"></script>
<?php require 'footer.php';
?>
</body>
</html>