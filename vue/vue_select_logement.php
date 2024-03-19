<div class="banner">
    <form method="post">
        Filtrer par : <input type="text" name="filtre">
        <input type="submit" name="Filtrer" value="Filtrer">
    </form>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Etat de disponibilité</th>
                <?php
                if (isset($_SESSION['role']) && $_SESSION['role']=="client" ) {
                    echo "<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Réservations&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>"; 
                } 
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($lesLogements as $unLogement){
                echo "<tr>";
                echo "<td>".$unLogement['idhabitation']."</td>";
                echo "<td>".$unLogement['type']."</td>";
                echo "<td>".$unLogement['etat']."</td>";
                if(isset($_SESSION['role']) && $_SESSION['role'] == "client") {
                    echo '<td>
                            <form method="post">
                                <input type="hidden" name="idhabitation" value="'.$unLogement['idhabitation'].'">
                                <input type="submit" name="Reserver" value="Réserver" >
                            </form>
                          </td>';
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
