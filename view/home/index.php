<!-- Used code pen to find a layout
URL: https://codepen.io/JacobLett/pen/EPbZOr -->
<div class="container">
    <div class="container">
        <form method="post" action="<?= URL ?>home/doLogin">
            <h2>Welkom bij kappers zaak KnipZe</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="whole name" id="first">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">Adres</label>
                        <input type="text" name="adres" class="form-control" placeholder="adres" id="last">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="company">ZIP code</label>
                        <input type="text" name="zipcode" class="form-control" placeholder="Zipcode">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">City</label>
                        <input type="tel" name="city" class="form-control" placeholder="city">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="url">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="phone">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="url">Moblie</label>
                        <input type="text" name="mobile" class="form-control" placeholder="phone">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="email">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="password">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
