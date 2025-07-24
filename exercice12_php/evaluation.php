<?php
$title="Evaluation";
$css="evaluation.css";
require_once "./includes/header.php";
?>

<main id="evaluation-main">
  <table>
    <thead>
        <tr>
            <th>Numéro du module</th>
            <th>Auto-évaluation</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i=1; $i < 7; $i++): ?>  
        <tr>
          <td><?=$i ?></td>
          
            <td><?= rand(1, 10)?></td>
            <?php endfor; ?> 
        </tr>
    </tbody>    
  </table>      
</main>

<?php
  include "./includes/footer.php";
?>