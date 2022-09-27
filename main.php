<?php
session_start();
if (isset($_SESSION['username'])) {
session_destroy();
} else {
header("Location: ./login.html");
exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Boat Renting System</title>
    <link rel="icon" href="./image/favicon.ico">
    <link rel="stylesheet" href="./css/globle.css">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body onload="system_info()">
    <div id="container">
        <div id="header"><img src="./image/Peer.png" alt=""></div>
        <div id="body-main">
            <div id="left-side">
                <div id="left_inside">
                    <br><br><br><br>
                    <p>Advertising</p><br>
                    <p>For</p><br>
                    <p>Renting</p>
                </div>
            </div>
            <div id="body">
                <span id="username" class="name" th:text="${username}"></span>
                <div id="main">
                    <div id="main_header"><span id="main_header_text">Boat Renting System</span></div>
                    <div class="boat_list">
                        <div class="boat_id"><span class="boat_id_text">Boat 0<span></span></span></div>
                        <div class="start_time"><span class="boat_id_text">Start At : 00:00</span></div>
                        <div class="duration"><span class="boat_id_text">Total : 0</span></div>
                        <div class="start_bt"><button onclick="Boat_Start(0)" class="Bt">Start</button></div>
                        <div class="end_bt"><button onclick="Boat_End(0)" class="Bt">End</button></div>
                    </div>
                    <div class="boat_list">
                        <div class="boat_id"><span class="boat_id_text">Boat 1<span></span></span></div>
                        <div class="start_time"><span class="boat_id_text">Start At : 00:00</span></div>
                        <div class="duration"><span class="boat_id_text">Total : 0</span></div>
                        <div class="start_bt"><button onclick="Boat_Start(1)" class="Bt">Start</button></div>
                        <div class="end_bt"><button onclick="Boat_End(1)" class="Bt">End</button></div>
                    </div>
                    <div class="boat_list">
                        <div class="boat_id"><span class="boat_id_text">Boat 2<span></span></span></div>
                        <div class="start_time"><span class="boat_id_text">Start At : 00:00</span></div>
                        <div class="duration"><span class="boat_id_text">Total : 0</span></div>
                        <div class="start_bt"><button onclick="Boat_Start(2)" class="Bt">Start</button></div>
                        <div class="end_bt"><button onclick="Boat_End(2)" class="Bt">End</button></div>
                    </div>
                    <div class="boat_list">
                        <div class="boat_id"><span class="boat_id_text">Boat 3<span></span></span></div>
                        <div class="start_time"><span class="boat_id_text">Start At : 00:00</span></div>
                        <div class="duration"><span class="boat_id_text">Total : 0</span></div>
                        <div class="start_bt"><button onclick="Boat_Start(3)" class="Bt">Start</button></div>
                        <div class="end_bt"><button onclick="Boat_End(3)" class="Bt">End</button></div>
                    </div>
                    <div class="boat_list">
                        <div class="boat_id"><span class="boat_id_text">Boat 4<span></span></span></div>
                        <div class="start_time"><span class="boat_id_text">Start At : 00:00</span></div>
                        <div class="duration"><span class="boat_id_text">Total : 0</span></div>
                        <div class="start_bt"><button onclick="Boat_Start(4)" class="Bt">Start</button></div>
                        <div class="end_bt"><button onclick="Boat_End(4)" class="Bt">End</button></div>
                    </div>
                    <div class="boat_list">
                        <div class="boat_id"><span class="boat_id_text">Boat 5<span></span></span></div>
                        <div class="start_time"><span class="boat_id_text">Start At : 00:00</span></div>
                        <div class="duration"><span class="boat_id_text">Total : 0</span></div>
                        <div class="start_bt"><button onclick="Boat_Start(5)" class="Bt">Start</button></div>
                        <div class="end_bt"><button onclick="Boat_End(5)" class="Bt">End</button></div>
                    </div>
                    <span id="Trouble_info">If your boats got some troubles click the buttons below</span>
                    <div id="trouble_div" class="boat_list">
                        <button class="Bt" onclick="Stop_boat(0)">Boat 0</button>
                        <button class="Bt" onclick="Stop_boat(1)">Boat 1</button>
                        <button class="Bt" onclick="Stop_boat(2)">Boat 2</button>
                        <button class="Bt" onclick="Stop_boat(3)">Boat 3</button>
                        <button class="Bt" onclick="Stop_boat(4)">Boat 4</button>
                        <button class="Bt" onclick="Stop_boat(5)">Boat 5</button>
                    </div>
                    <span id="Trouble_info">click once to disable the boat,twice to enable the boat</span>
                </div>
            </div>
            <div id="right-side">
                <div id="right_inside">
                    <br><br><br><br>
                    <p>Advertising</p><br>
                    <p>For</p><br>
                    <p>Renting</p>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/main.js"></script>
</body>

</html>