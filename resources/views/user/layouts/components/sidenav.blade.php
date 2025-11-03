<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu active">
                <a href="/">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
        </ul>


        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a id="profile-info">
                    <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                    <span class="pcoded-mtext">Profile Info</span>
                </a>
            </li>
           <li class="">
                <a  id="current-info">
                    <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                    <span class="pcoded-mtext">Current Info</span>
                </a>
            </li>

        </ul>
        <div class="pcoded-navigatio-lavel">Support</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">+++++
                <a href="http://html.codedthemes.com/Adminty/doc" target="_blank">
                    <span class="pcoded-micon"><i class="feather icon-monitor"></i></span>
                    <span class="pcoded-mtext">Documentation</span>
                </a>
            </li>
            <li class="">
                <a href="#" target="_blank">
                    <span class="pcoded-micon"><i class="feather icon-help-circle"></i></span>
                    <span class="pcoded-mtext">Submit Issue</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    $(document).ready(function() {

        $("#profile-info").on("click",function(){
            $("#current_info").hide();
            $("#profile_info").show();
            $("#info-tag").text("Profile Info");

            
        });
         $("#current-info").on("click",function(){
            $("#profile_info").hide();
            $("#current_info").show();
            $("#info-tag").text("Current Info");

            
        });
    });

</script>