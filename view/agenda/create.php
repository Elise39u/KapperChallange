<!-- Bootstrap form codepen
URL: https://codepen.io/arooly/pen/WbwKKj -->
<div class ="container">
    <form role="form" id="arooly_cform" action="<?= URL ?>agenda/createSave" method="post">

        <div class="form-group">
            <label for="inputName">Kapper ID</label>
            <div class="input-group Name">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="number" class="form-control" id="inputName" name="kapper" placeholder="Enter Name">
            </div>
        </div>

        <div class="form-group">
            <label for="inputDate">Schedule Preview Date</label>
            <div class="input-group date">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input type="date" class="form-control" id="inputDate" name="date" placeholder="Enter date">
            </div>
        </div>

        <div class="form-group">
            <label for="inputTime">Start time</label>
            <div class="input-group clock">
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-time"></span>
            </span>
                <input type="text" class="form-control" name='starttime' placeholder="Enter Time">
            </div>
        </div>

        <div class="form-group">
            <label for="inputTime">End time</label>
            <div class="input-group clock">
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-time"></span>
            </span>
                <input type="text" class="form-control" name='endtime' placeholder="Enter Time">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>