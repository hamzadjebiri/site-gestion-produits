@extends('layouts.header')

@section('header')

<style>
     

</style>

<div class="container-fluid">
    <div class="row profile">

        <div class="col-md-3">

            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                       Panel Admin
                    </div>
                    
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav nav-stacked">
                        <li class="active">
                            <a href="#">
                            <i class="glyphicon glyphicon-home"></i>
                            Produits </a>
                        </li>

                        
                        <li>
                            <a href="#liste">
                            <i class="glyphicon glyphicon-user"></i>
                            Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                            <i class="glyphicon glyphicon-ok"></i>
                            Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="glyphicon glyphicon-flag"></i>
                            Help </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>



        </div>


        <!-- Produits -->
        <div class="col-md-9" id="liste">
            <div class="profile-content">
               Some user related content goes here...
            </div>
        </div>



        <!-- Table  des Produits -->

          <div class="col-md-9">
            <div class="profile-content">
               Some user related content goes here...
            </div>
        </div>





    </div>
</div>

<br>
<br>
    <script type="text/javascript">
    
    </script>


    @endsection
