<div class="container">
    <h1>Test</h1>
    <p>Welcome: <?php if (isset($_SESSION['username'])) {echo $_SESSION['username']; } ?></p>
    <p>You`re role is <?php if (isset($_SESSION['role'])) {echo $_SESSION['role'];}?></p>
</div>