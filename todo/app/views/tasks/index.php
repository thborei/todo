<style>
   h1{
    color: blue;
}
body {
    background-color: grey;
    color :white
}
</style>
<h1>Liste des tâches</h1>
<a href="/create">Ajouter une tâche</a>
<a href="/project">Projet</a>
<table>
 <thead>
 <tr>
 <th>ID</th>
 <th>Titre</th>
 <th>Project</th>
 <th>Statut</th>
 <th>Action</th>
 </tr>
 </thead>
 <tbody>
 <?php foreach ($tasks as $task): ?>
 <tr>
 <td><?= $task['id'] ?></td>
 <td><?= $task['title'] ?></td>
 <td><?= $task['project_id'] ?></td>
 <td><?= $task['is_completed'] ? 'Terminée' :'En cours' ?></td>
 <td>
 <?php if (!$task['is_completed']): ?>
    <form method="POST" action="/complete">
        <input type="hidden" name="id" value="<?= $task['id'] ?>">
 <button type="submit">Marquer comme terminée</button>
 </form>
 <?php endif; ?>
 <form method="POST" action="/delete">
    <input type="hidden" name="id" value="<?=$task['id'] ?>">
 <button type="submit">Supprimer</button>
 </form>
 </td>
 </tr>
 <?php endforeach; ?>
 </tbody>
</table>