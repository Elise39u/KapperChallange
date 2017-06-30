<div class="container">

    <h1>Mijn ingeplande afspraken</h1>

    <table class="table">
        <tr>
            <th>Kapper</th>
            <th>Datum</th>
            <th>Starttijd sessie</th>
            <th>Eindtijd sessie</th>
            <th>Status</th>

            <th>Actie</th>
        </tr>

        <?php
        if ($checkapp == false) {
            echo '<tr><td colspan="10">Er zijn geen beschikbare momenten toegevoegd.</td></tr>';
        } else {
            foreach ($checkapp as $plan) {?>
                <tr>
                    <td><?=$plan['user_id']?></td>
                    <td><?=$plan['datum'];?></td>
                    <td><?=$plan['start_tijd'];?></td>
                    <td><?=$plan['eind_tijd'];?></td>
                    <td><span class="label <?= $plan['gereserveerd']; ?>"><?= $plan['gereserveerd']; ?></span></td>
                    <td><a href="<?= URL ?>planning/cancel/<?= $plan['id'] ?>">Afspraak afzeggen</a></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>