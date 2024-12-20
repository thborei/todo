<style>
   h1{
    color: blue;
}
body {
    background-color: grey;
    color :white
}
</style>
<h1>Ajouter une tâche</h1>
<form method="POST">
 <label for="title">Titre :</label>
 <input type="text" name="title" required>
 <label for="project">Projet</label>
 <input type="text" name="project">
 <button type="submit">Ajouter</button>
</form>
