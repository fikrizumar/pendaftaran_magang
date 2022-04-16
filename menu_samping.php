<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

<div class="sidebar-header">
    <div class="sidebar-title">
    </div>
   <!-- <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
    </div>-->
</div>

<div class="nano">
    <div class="nano-content">
        <nav id="menu" class="nav-main" role="navigation">
            <ul class="nav nav-main">
                <li class="nav-parent">

                    <a>

               

                <span class="name">

                   

                   </span>

                    </a>

                    <ul class="nav nav-children">
                       
                <li class="">
                    <a href="<?php echo $href; ?>">
                  <i class="fa fa-cog" aria-hidden="true"></i><span>Setting Profil</span>
              </a>
                </li>
              
                <li class="">
               <a href="<?php echo ''; ?>">
              <i class="fa fa-cog" aria-hidden="true"></i><span>Setting Profil</span>
              </a>
                </li>
               
                    </ul>

                </li>
                <li class="nav-active">
                    <a href="index.php">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
               
                <!--<li>
                        <a href="proses/logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
                    </li>-->
                <li>
                    <a href="proses/logout.php">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                        <span>Logout</span>
                    </a>
                </li>
               
            </ul>
        </nav>
        <hr class="separator" />

        <script>
            var mydate = new Date()
            var year = mydate.getYear()
            if (year < 1000)
                year += 1900
            var day = mydate.getDay()
            var month = mydate.getMonth()
            var daym = mydate.getDate()
            if (daym < 10)
                daym = "0" + daym
            var dayarray = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu")
            var montharray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember")
            document.write("<center><font color='orange' style='font=bold'><b>" + dayarray[day] + ", " + daym + " " + montharray[month] + " " + year + "</b></font></center>")

        </script>

        <script>
            if (document.all || document.getElementById)
                document.write('<center><font color="white"><span id="worldclock" style="font:bold 25px Arial ;"></span></font></center>')
            zone = 0;
            isitlocal = true;
            ampm = '';
            function updateclock(z) {
                zone = z.options[z.selectedIndex].value;
                isitlocal = (z.options[0].selected) ? true : false;
            }
            function WorldClock() {
                now = new Date();
                ofst = now.getTimezoneOffset() / 60;
                secs = now.getSeconds();
                sec = -1.57 + Math.PI * secs / 30;
                mins = now.getMinutes();
                min = -1.57 + Math.PI * mins / 30;
                hr = (isitlocal) ? now.getHours() : (now.getHours() + parseInt(ofst)) + parseInt(zone);
                hrs = -1.575 + Math.PI * hr / 6 + Math.PI * parseInt(now.getMinutes()) / 360;
                if (hr < 0)
                    hr += 24;
                if (hr > 23)
                    hr -= 24;
                ampm = (hr > 11) ? "PM" : "AM";
                statusampm = ampm.toLowerCase();
                hr2 = hr;
                if (hr2 == 0)
                    hr2 = 12;
                (hr2 < 13) ? hr2 : hr2 %= 12;
                if (hr2 < 10)
                    hr2 = "0" + hr2
                var finaltime = hr2 + ':' + ((mins < 10) ? "0" + mins : mins) + ':' + ((secs < 10) ? "0" + secs : secs) + ' ' + statusampm;
                if (document.all)
                    worldclock.innerHTML = finaltime
                else if (document.getElementById)
                    document.getElementById("worldclock").innerHTML = finaltime
                else if (document.layers) {
                    document.worldclockns.document.worldclockns2.document.write(finaltime)
                    document.worldclockns.document.worldclockns2.document.close()
                }
                setTimeout('WorldClock()', 1000);
            }
            window.onload = WorldClock
//-->
        </script>
    </div>

</div>

</aside>
<!-- end: sidebar -->