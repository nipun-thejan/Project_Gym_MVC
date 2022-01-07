<?php


$arr = $_SESSION['data'];
$msg = isset($_SESSION['msg']) ? $_SESSION['msg'] : '';
unset($_SESSION['msg']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php
    require_once 'public/html/boostraplinks.html';
    ?>
    <link rel="stylesheet" href=<?= BASE_DIR . "public/css/login.css" ?>>

    <title>Session View</title>
</head>

<body>

    <?php
    $menu_arr = array(
        "Dashboard" => BASE_DIR . $_SESSION['logged_user']['type'],
        "Notifications" => BASE_DIR . "Notification",
        "Messages" => BASE_DIR . "Message",
        "Log Out" => BASE_DIR . "Auth/logout"
    );
    $navbar =  new Navbar($menu_arr);
    echo $navbar->get();
    ?>
    <!-- <a href=<?= BASE_DIR . "Session/createdByMe" ?>>My Sessions</a> -->
    <div class="simple-login-container">
        <h2>Session Details</h2>
        <div>
            <form action=<?= BASE_DIR . "Session/edit/" . $arr["Session_id"] ?> method="POST">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>Session Id</label>
                        <input type="text" class="form-control" name='session_id' value=<?php echo $arr["Session_id"] ?> readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>Session Name</label>
                        <input type="text" class="form-control" name='session_name' value=<?php echo $arr["Session_Name"] ?>>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" name='date' value=<?php echo $arr["Date"] ?>>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>Start Time</label>
                        <input type="time" class="form-control" name='startTime' value=<?php echo $arr["Start_Time"] ?>>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>End Time</label>
                        <input type="time" class="form-control" name='endTime' value=<?php echo $arr["End_Time"] ?>>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>Number of participants</label>
                        <input type="text" class="form-control" name='num_participants' value=<?php echo $arr["Num_Participants"] ?>>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name='price' value=<?php echo $arr["Price"] ?>>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>Details</label>
                        <input type="text" class="form-control" name='details' <?php if($arr["Details"]) echo "value=".$arr["Details"]; ?>>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="submit" class="btn btn-block btn-login" value='Edit Session' name='edit_session_btn'>
                    </div>
                </div>


            </form>
            <br>
            <form action=<?= BASE_DIR . "Session/delete/" . $arr["Session_id"] ?> method="POST">
                <div class="row">
                    <div class="col-md-12 form-group">
                            <input type="submit" class="btn btn-block btn-login" value='Delete Session' name='delete_session_btn'>
                        
                    </div>
                </div>
            </form>






        </div>
    </div>




    <div class="d-flex justify-content-center" style="color:crimson">
        <p><?= $msg ?></p>
    </div>

    <?php
    require_once 'public/html/footer.html';
    ?>

</body>

</html>