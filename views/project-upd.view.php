<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Thisis a sample webpage demonstratingthe useof meta tags in HTML5."></metaname>
    <meta name="keywords" content="HTML5, meta tags, web development">
    <meta name="author"content="Jane Doe">
    <meta name="robots"content="index, follow">
    <link rel="stylesheet" href="../css/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<?php
require 'views/nav.php';
?>

<form action="store-project" method="post" class="container">
    <div class="project_data">
        <input type="hidden" class="form-control w-25" name="projectid" id="projectid" value="<?= $project[0]->id; ?>"<br>
        <label for="projecttitle" class="form-label">Project title</label>
        <input type="text" class="input" name="projecttitle" id="projecttitle" value="<?= $project[0]->title; ?>">
        <label for="projectcontent" class="form-label">Project content</label>
        <textarea name="projectcontent" id="projectcontent" cols="30" rows="05" value="<?= $project[0]->content; ?>"></textarea>
         <label for="projectauthor" class="form-label">Project author</label>
        <input type="text" class="input" name="projectauthor" id="projectauthor" value="<?= $project[0]->author; ?>">
        <button type="submit" class="btn btn-primary">Wijzigen</button>
    </div>
</form>
<?php 
require 'views/footer.php';
?>
</body>
</html>

