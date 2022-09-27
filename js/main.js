var boat_status = [0, 0, 0, 0, 0, 0]
var boat_start_time = ['', '', '', '', '', '']
var total_rent_time = 0
var rent_times = 0
var max_time = 0
var total_rent_time_pm = 0
var rent_times_pm = 0
var max_time_pm = 0
var print_flag = 0
function Boat_Start(idx) {
    var div = document.getElementById("main").children[idx + 1]
    var div1 = document.getElementById("main").children[idx + 1].children[2].children[0]
    div1.innerText = "Total : 0"
    div.className = 'running_boat_list'
    start_time = div.children[1].children[0]
    Time = new Date().toLocaleTimeString()
    start_time.innerText = 'Start At : ' + Time
    boat_status[idx] = 1
    boat_start_time[idx] = Time
    console.log(boat_start_time)
}

function Boat_End(idx) {
    if (boat_status[idx] == 1) {
        boat_status[idx] = 0
        var div = document.getElementById("main").children[idx + 1]
        div.className = 'boat_list'
        duration = div.children[2].children[0]
        Cur_Time = new Date().toLocaleTimeString()
        Start_hour = boat_start_time[idx].substring(0, 2)
        Start_hour = parseInt(Start_hour)
        Cur_hours = Cur_Time.substring(0, 2)
        Cur_hours = parseInt(Cur_hours)
        Cur_min = Cur_Time.substring(3, 5)
        Cur_sec = Cur_Time.substring(6, 8)
        Cur_min = parseInt(Cur_min)
        Cur_sec = parseInt(Cur_sec)
        Start_min = boat_start_time[idx].substring(3, 5)
        Start_sec = boat_start_time[idx].substring(6, 8)
        Start_min = parseInt(Start_min)
        Start_sec = parseInt(Start_sec)
        var hour = 0, min = 0, sec = 0
        if (Cur_sec < Start_sec) {
            sec = 60 - Start_sec + Cur_sec
            if (sec >= 60) {
                min++
                sec -= 60
            }
        } else {
            sec = Cur_sec - Start_sec
        }
        if (Cur_min < Start_min) {
            min = 60 - Start_min + Cur_min
            if (min >= 60) {
                hour++
                min -= 60;
            }
        } else {
            min = Cur_min - Start_min
        }
        if (Cur_Time.substring(0, 2) <= 12) {
            rent_times++
            This_time = 0
            total_rent_time += min
            if (hour > 0) {
                total_rent_time += 60 * hour
            }
            This_time += min
            if (hour > 0) {
                This_time += 60 * hour
            }
            if (This_time > max_time) {
                max_time = This_time
            }
        } else {
            rent_times_pm++
            This_time = 0
            total_rent_time_pm += min
            if (hour > 0) {
                total_rent_time_pm += 60 * hour
            }
            This_time += min
            if (hour > 0) {
                This_time += 60 * hour
            }
            if (This_time > max_time_pm) {
                max_time_pm = This_time
            }
        }
        console.log(Cur_hours - Start_hour)
        console.log(Cur_min - Start_min)
        console.log(Cur_sec - Start_sec)
        console.log(Cur_Time)
        duration.innerText = 'Total : ' + String(hour) + "h" + String(min) + "m" + String(sec) + "s"
    }
}

function system_info() {
    window.setInterval("Check()", 60000)
}

function Check() {
    Time = new Date().toLocaleTimeString()
    console.log(Time)
    hour = Time.substring(0, 2)
    hour = parseInt(hour)
    min = Time.substring(3, 5)
    min = parseInt(min)
    console.log(hour)
    console.log(min)
    if (hour == 20 && min == 11 && print_flag == 0) {
        print_flag = 1
        boat_message = "This Morning " + String(rent_times) + " are rented\n" + "The averagy renting time is "
        boat_message += String(parseInt(total_rent_time / rent_times)) + " minutes\n" + "The longest renting time is : "
        boat_message += String(max_time) + "minutes\n"
        boat_message += "This Afternoon " + String(rent_times_pm) + " are rented\n" + "The averagy renting time is "
        boat_message += String(parseInt(total_rent_time_pm / rent_times_pm)) + " minutes\n" + "The longest renting time is : "
        boat_message += String(max_time_pm) + "minutes"
        alert(boat_message)
    }
}

function Stop_boat(idx) {
    if (boat_status[idx] != 2) {
        boat_status[idx] = 2
        var div = document.getElementById("main").children[idx + 1]
        console.log(div)
        div.className = "stop_boat_list"
        start_btn = div.children[3].children[0]
        end_btn = div.children[4].children[0]
        start_btn.disabled = true
        end_btn.disabled = true
    } else {
        var div = document.getElementById("main").children[idx + 1]
        div.className = "boat_list"
        start_btn = div.children[3].children[0]
        end_btn = div.children[4].children[0]
        start_btn.disabled = false
        end_btn.disabled = false
    }
}
