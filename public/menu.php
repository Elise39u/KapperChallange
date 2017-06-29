<?php if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'kapper') { ?>
    <ul class="nav nav-tabs nav-pills" ><!--nav-justified for keeping in center-->
    <li class="active" ><a data - toggle = "tab" href = "<?= URL ?>home/startPage" > Home</a ></li >
    <li ><a data - toggle = "tab" href = "<?= URL ?>home/priceList" > PriceList</a ></li >
    <li ><a data - toggle = "tab" href = "<?= URL ?>home/logOut" > Logout</a ></li >
    <li ><a data - toggle = "tab" href = "<?= URL ?>agenda/index"> Agenda</a ></li >
    </ul>
</ul > <?php } else { ?>
    <ul class="nav nav-tabs nav-pills" ><!--nav-justified for keeping in center-->
    <li class="active" ><a data - toggle = "tab" href = "<?= URL ?>home/startPage" > Home</a ></li >
    <li ><a data - toggle = "tab" href = "<?= URL ?>home/priceList" > PriceList</a ></li >
    <li ><a data - toggle = "tab" href = "<?= URL ?>home/logOut" > Logout</a ></li >
        <li ><a data - toggle = "tab" href = "<?= URL ?>agenda/index"> Agenda</a ></li >
    </ul>
<?php  } } ?>
<!--
<nav>
    <li><a href="<?= URL ?>home/startPage">Home</a></li>
    <li><a href="<?= URL ?>home/logOut"> Logout </a></li>
</nav>
-->