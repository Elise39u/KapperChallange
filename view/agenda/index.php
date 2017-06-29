<div class="controller">
    <div class="table">
        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>datum</th>
                <th>start_tijd</th>
                <th>eind_tijd</th>
                <th>Kapper</th>
                <?php if (isset($_SESSION['role'])) {
                    if ($_SESSION['role'] == 'kapper') { ?>
                        <th>Edit</th>
                        <th>Delete</th>
                    <?php }
                } ?>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            foreach ($appointment as $appoint) { ?>
            <tr>
                <th><?php echo $i ?></th>
                <td><?php echo $appoint['datum']; ?></td>
                <td><?php echo $appoint['start_tijd']; ?></td>
                <td><?php echo $appoint['eind_tijd']; ?></td>
                <?php foreach ($kapper as $holder) { ?>
                    <td><?php echo $holder['name'] ?></td>
                    <?php if (isset($_SESSION['role'])) {
                        if ($_SESSION['role'] == 'kapper') { ?>
                            <td><a href="#"> Edit </a></td>
                            <td><a href="#"> Delete </a></td>
                        <?php }
                    }
                } ?>
                <?php $i++;
                } ?>
            </tr>
            </tbody>
        </table>
        <?php if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 'kapper') { ?>
                <p class="middle"><a href="#"> Create appointment</a></p>
            <?php }
        } ?>
    </div>
</div>