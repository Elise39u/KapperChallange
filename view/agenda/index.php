<!-- Tabel css and construct
URL: https://codepen.io/venumadhavdiv/pen/eBYRZK
 Error handeling
 URL: https://github.com/petersnoek/authchallenge/blob/master/view/templates/header.php line 50 t/m 76-->
<div class="controller" id="searchMe">
    <label> Search function not working</label>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search">
        <table class="searchTable">
            <thead>
            <?php if (isset($_SESSION['error']) && is_array($_SESSION['error']) && sizeof($_SESSION['error'])>0) {
            echo '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Fout!</strong> <ul>';
            foreach($_SESSION['error'] as $error) {
                echo '<li>' . $error . '</li>';
            }
            echo '</ul></div>'; }
            if (isset($_SESSION['message']) && is_array($_SESSION['message']) && sizeof($_SESSION['message'])>0) {
            echo '<div class="alert alert-success alert-dismissable" id="alert-success-1"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Gelukt!</strong> <ul>';
            foreach($_SESSION['message'] as $message) {
                echo '<li>' . $message . '</li>';
            }
            echo '</ul></div>'; }?>
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
                    <?php } else { ?>
                    <th> Reseveer</th>
                <?php } }?>
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
                        if ($_SESSION['role'] == 'kapper') {?>
                            <td><a href="<?= URL ?>agenda/update/?id=<?php echo $appoint['id']; ?>"> Edit </a></td>
                            <?php if ($appoint['gereserveerd'] == 'Ja') {?>
                                <td><?php echo $appoint['gereserveerd'] ?></td>
                                <?php } else { ?>
                                <td><a href="<?= URL ?>agenda/delete/?id=<?php echo $appoint['id']; ?>"> Delete </a></td>
                           <?php } ?>
                        <?php } else { ?>
                            <td><a href="<?= URL ?>agenda/inplannen/?id=<?php echo $appoint['id']; ?>"> Reseveer</a></td>
                   <?php } } ?>
                <?php } $i++;
                }?>
            </tr>
            </tbody>
        </table>
        <?php if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 'kapper') { ?>
                <p class="middle"><a href="<?= URL ?>agenda/create"> Create appointment</a></p>
            <?php } // Unset the message sessions
        } unset($_SESSION['message'], $_SESSION['error']);?>
    </div>
</div>