<!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->

<div class="Navbar">
   <div class="Navbar__Link Navbar__Link-brand">
    Menu's list
    </div>
    <div class="Navbar__Link Navbar__Link-toggle">
      <i class="fas fa-bars"></i>
    </div>
    <div class="profileCnt_sidebar Navbar__Items">
    <ul class="list-unstyled bg-white common-shadow common-radius mb-0">
    <li><a href="settings.php" class=" active ">My Profile <i class="fas fa-angle-right float-right"></i></a></li>
    <li><a href="change-password.php" class="">Change Password <i class="fas fa-angle-right float-right"></i></a></li>

    <li><a href="#" class="">Past Sessions <i class="fas fa-angle-right float-right"></i></a></li>
    <li><a href="#" class="">Notifications <i class="fas fa-angle-right float-right"></i></a></li>
    <li><a href="#" class="">Payment Settings <i class="fas fa-angle-right float-right"></i></a></li>
    <li><a href="#" class="">My Transactions <i class="fas fa-angle-right float-right"></i></a></li>
    <li><a href="#" class="border-bottom-0  ">My Invitations <i class="fas fa-angle-right float-right"></i></a></li>
    <li class="divider font-sm">Other </li>
    <li><a href="#" class=" ">Support <i class="fas fa-angle-right float-right"></i></a></li>
    <li><a href="#">Rate the App <i class="fas fa-angle-right float-right"></i></a></li>
    <li><a href="#" class="">Frequently asked questions <i class="fas fa-angle-right float-right"></i></a></li>
    <li><a href="#" class="">Terms and condition <i class="fas fa-angle-right float-right"></i></a></li>
    <li><a href="#" class="border-bottom-0 ">Privacy Policy <i class="fas fa-angle-right float-right"></i></a></li>
    <li><a href="#" >Sign out  <i class="fas fa-angle-right float-right"></i></a></li>
    </ul>
    </div>
    <div class="asideToggler">
    <a href="#" class="d-flex align-items-center"> <em class="icon-list-view"></em></a>
    </div>

</div>


<script>


jQuery(function($){
var path=window.location.href;
console.log("path  hdshsdjf ",path)
$('div ul li a').each(function(){
if(path==this.href){

console.log("added...dfsd ")
$(this).addClass('active_css');
}

})

})


function classToggle() {
const navs = document.querySelectorAll('.Navbar__Items')

navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
}

document.querySelector('.Navbar__Link-toggle')
.addEventListener('click', classToggle);
</script>
