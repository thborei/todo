<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<h1 class="text-black-50 display-1">PROJET</h1>
<body class="">
    
<a href="/">Liste des tâches</a>
<table class="container-sm text-black">
   <thead>
      <tr>
         <th class=>id</th>
         <th>Titre</th>
         <th>Statut</th>
      </tr>
   </thead>
   <tbody>
      <?php foreach ($project as $projet): ?>
         <tr>
         <td><?= $projet['id'] ?></td>
         <td><?= $projet['title'] ?></td>
         </tr>
      <?php endforeach ?>
   </tbody>
</table>
      </body>