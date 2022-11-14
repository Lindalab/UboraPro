
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


<body>

    
    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="left-side">
                        <div class="logo">
                            <img src="Assets/img/ubora.jpg" alt="">
                        </div>
                        <div class="tabs-content">
                            <h4>Choose Your Transport:</h4>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="submit-form">
                                <h4>Check availability for <em>transport</em>:</h4>
                                <form id="form-submit" action="" method="get">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="from">From:</label>
                                                <select required name='from' onchange='this.form.()'>
                                                    <option value="">Select a pick-up location...</option>
                                                    <option value="Campus">Campus</option>
                                                    <option value="Haatso">Haatso</option>

                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="to">To:</label>
                                                <select required name='to' onchange='this.form.()'>
                                                    <option value="">Select a drop-off location...</option>
                                                    <option value="Venue">Venue</option>                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="departure">Departure time:</label>
                                                <input name="deparure" type="text" class="form-control date" id="deparure" placeholder="Select date..." required="" onchange='this.form.()'>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="return">Return time:</label>
                                                <input name="return" type="text" class="form-control date" id="return" placeholder="Select date..." required="" onchange='this.form.()'>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="radio-select">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <label for="VIP">VIP</label>
                                                        <input type="radio" name="trip" id="VIP" value="VIP" required="required"onchange='this.form.()'>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <label for="standard">Standard</label>
                                                        <input type="radio" name="trip" id="standard" value="standard" required="required"onchange='this.form.()'>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <label for="couples">Couples</label>
                                                        <input type="radio" name="trip" id="couples" value="couples" required="required"onchange='this.form.()'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="btn">Confirm Transport Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</body>
</head>
</html>