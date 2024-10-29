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
    <link rel="stylesheet" href="../css/portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<?php
require 'views/nav.php';
?>
<h2>Update teacher</h2>
<form action="store-project" method="post">
    <div class="mb-3">
        <input type="hidden" class="form-control w-25" name="projectid" id="projectid" value="<?= $project[0]->id; ?>"<br>
        <label for="teachername" class="form-label">Project title</label>
        <input type="text" class="form-control w-25" name="projecttitle" id="projecttitle" value="<?= $project[0]->title; ?>">
        <label for="teacheremail" class="form-label">Project content</label>
        <input type="text" class="form-control w-25" name="projectcontent" id="projectcontent" value="<?= $project[0]->content; ?>">
         <label for="teacheremail" class="form-label">Project author</label>
        <input type="text" class="form-control w-25" name="projectauthor" id="projectauthor" value="<?= $project[0]->author; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Wijzigen</button>
</form>
<?php 
require 'views/footer.php';
?>
</body>
</html>

