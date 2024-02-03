<h3>Liste des logements</h3>

<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1">
    <tr>
        <td>ID Logement</td>
        <td>Type de logement</td>
        <td>Etat de disponibilité</td>
    </tr>

    <?php 
    if (isset($lesLogements)){
        foreach($lesLogements as $unLogement){
            echo "<tr>";
            echo "<td>".$unLogement['idhabitation']."</td>";
            echo "<td>".$unLogement['type']."</td>";
            echo "<td>".$unLogement['etat']."</td>";
            echo "</tr>";
        }
    }
    ?>
</table>