<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <title>Example LP EN</title>
    <style>
        body,
        html {
            height: 100%;
            font-family: sans-serif;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <button type="button" class="btn btn-lg btn-block btn-success " data-toggle="modal" data-target="#registerModal">Register</button>
        </div>
        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- registration form -->
                        <div id="registrationForm">
                            <form class="form-horizontal" method="post">
                                <input type="hidden" name="hard" value="0" id="hard" />
                                <div class="form-group ">
                                    <input type="text" name="nick" id="nick" value="" class="form-control" autocomplete="off" placeholder="Nickname">
                                    <div class="invalid-feedback errors" id="nick_error"></div>
                                </div>

                                <div class="form-group ">
                                    <input type="password" name="pass" id="pass" value="" class="form-control" autocomplete="off" placeholder="Password">
                                    <div class="invalid-feedback errors" id="pass_error"></div>
                                </div>
                                <input type="hidden" name="frame" value="1" id="frame">
                                <div class="form-group ">
                                    <input type="text" name="email" id="email" value="" class="form-control" autocomplete="off" placeholder="Email">
                                    <div class="invalid-feedback errors" id="email_error"></div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label">Birthday</label>
                                    <br>
                                    <div class="row">
                                        <div class="col"><select name="day" id="day" class="form-control">
                                                <?php for ($i = 1; $i <= 31; $i++) { echo "<option value=\"{$i}\" label=\"{$i}\">{$i}</option>"; } ?>
                                            </select></div>
                                        <div class="col"><select name="month" id="month" class="form-control">
                                                <?php
                                                $month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                                                for ($i = 0; $i < 12; $i++) { echo "<option value=\"" . ($i + 1) . "\" label=\"{$month[$i]}\">{$month[$i]}</option>"; } ?>
                                            </select></div>
                                        <div class="col"><select name="year" id="year" class="form-control">
                                                <?php
                                                $start = intval(date("Y"));
                                                for ($i = $start - 16; $i >= $start - 90; $i--) { echo "<option value=\"{$i}\" label=\"{$i}\">{$i}</option>"; } ?> </select>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback errors" id="day_error"></div>
                                </div>
                                <div class="form-group ">
                                    <select name="country" id="country" class="form-control">
                                    </select>
                                </div>
                                <div class="invalid-feedback errors" id="country_error">
                                </div>
                                <div class="form-group ">
                                    <input placeholder="City" type="text" name="city" id="city" value="" class="form-control" autocomplete="off">
                                    <div class="invalid-feedback errors" id="city_error"></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="control-label" for="gender">I am</label><br>
                                            <select name="gender" id="gender" class="form-control select-toggle">
                                                <option value="m" selected data-content="<i class='fa fa-male'></i>"> Man</option>
                                                <option value="w" data-content="<i class='fa fa-female'></i>"> Woman</option>
                                            </select>
                                            <div class="invalid-feedback errors" id="gender_error"></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="control-label" for="gender_search">I'm looking for</label><br>
                                            <select name="gender_search" id="gender_search" class="form-control select-toggle">
                                                <option value="m" data-content="<i class='fa fa-male'></i>"> Man</option>
                                                <option value="w" selected data-content="<i class='fa fa-female'></i>"> Woman</option>
                                            </select>
                                            <div class="invalid-feedback errors" id="gender_search_error"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="checkbox ">
                                    <label>
                                        <input type="checkbox" name="conditions" id="conditions" value="1" checked> I accept
                                        <a class="c4f-terms c4f-service-page" target="_blank" data-toggle="modal" data-target="#agbModal">terms</a> /
                                        <a class="c4f-privacy c4f-service-page" target="_blank" data-toggle="modal" data-target="#agbModal">privacy</a>
                                    </label>
                                    <div class="invalid-feedback errors" id="agb_error"></div>
                                </div>
                                <div class="invalid-feedback" id="server_error"></div>
                                <input type="submit" name="submit" id="submit" value="Register for free" class="btn btn-lg btn-block btn-success btn-submit c4f-submit ">
                                <hr />
                                <div class="row">
                                    <div class="col-6"><a class="btn  btn-grin btn-block btn-primary c4f-fb">
                                            <em class="fab fa-facebook-square"></em> Facebook </a></div>
                                    <div class="col-6"><a class="btn  btn-grin btn-block btn-danger c4f-gg">
                                            <em class="fab fa-google"></em> Google 
                                        </a>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-6">
                                        <a class="btn btn-block btn-outline-dark c4f-applnk">
                                            <em class="fab fa-apple"></em> App Store 
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn btn-block btn-outline-dark c4f-applnk">
                                            <em class="fab fa-android"></em> Play Store
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright text-center py-3">
            <a class='c4f-privacy c4f-service-page' target="_blank" data-toggle="modal" data-target="#agbModal">Privacy Policy</a>
            <br>
            <a class='c4f-terms c4f-service-page' target="_blank" data-toggle="modal" data-target="#agbModal">Terms and Conditions</a>
            <br>
            <a class='c4f-imprint c4f-service-page' target="_blank" data-toggle="modal" data-target="#agbModal">Imprint</a>
            <br><br>
            <span>&copy; <?= date('Y') ?> - C4F</span>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script type="text/javascript" src="https://api.cash4flirt.com/js/register.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            // create instance
            const cfr = new C4fRegister("<?= (isset($_REQUEST['code']) ? $_REQUEST['code'] : null) ?>");

            //init session
            cfr.getInitData(function(c4fpData) {
                cfr.setFormView(c4fpData.form);
            });

            $(".c4f-submit").click(function(e) {
                e.preventDefault();

                // register user
                cfr.registerUser(function() {

                    //show success message
                    cfr.portalData.postfach = cfr.getProvider($('#email').val());
                    $("#registrationForm").html(Cash4FlirtUtil.parseTemplate(Cash4FlirtUtil.getText('registerSuccess'), cfr.portalData));

                });
            });
        });
    </script>

</body>

</html>