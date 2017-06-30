<!-- Bootstrap form codepen
URL: https://codepen.io/arooly/pen/WbwKKj -->
<div class ="container">
    <h1>Do you want to delete this appointment</h1>
    <form role="form" id="arooly_cform" action="<?= URL ?>agenda/deleteSure" method="post">
        <input type="hidden" name="id" value="<?php echo $appointments['id'];?>">

        <div class="form-group">
            <label for="inputName">Kapper ID</label>
            <div class="input-group Name">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input readonly type="number" class="form-control" id="inputName" value='<?php echo $appointments['user_id'];?>' name="kapper" placeholder="Enter Name">
            </div>
        </div>

        <div class="form-group">
            <label for="inputDate">Schedule Preview Date</label>
            <div class="input-group date">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input readonly type="date" class="form-control" value='<?php echo $appointments['datum']; ?>' id="inputDate" name="date" placeholder="Enter date">
            </div>
        </div>

        <div class="form-group">
            <label for="inputTime">Start time</label>
            <div class="input-group clock">
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-time"></span>
            </span>
                <input type="text" class="form-control" readonly value='<?php echo $appointments['start_tijd']; ?>' name='starttime' placeholder="Enter Time">
            </div>
        </div>

        <div class="form-group">
            <label for="inputTime">End time</label>
            <div class="input-group clock">
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-time"></span>
            </span>
                <input type="text" class="form-control" readonly value='<?php echo $appointments['eind_tijd']; ?>' name='endtime' placeholder="Enter Time">
            </div>
        </div>

        <button type="submit" name="yes" class="btn btn-primary">Yes</button>
        <button type="submit" name='no' class="btn btn-primary">No</button>

    </form>
</div>