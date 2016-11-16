{{--Top Bar Navigation--}}
<nav data-topbar="data-topbar" role="navigation" class="top-bar show-for-large-up">
    <ul class="title-area">
        <li class="name"></li>
        {{--Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone--}}
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
    {{--Left Top Bar Section--}}
    <section class="top-bar-section left">
        <ul>
            <li><a href="#">Students</a></li>
            <li><a href="#">Faculty &amp; Staff</a></li>
            <li><a href="#">Alumni</a></li>
            <li><a href="#">Visitors</a></li>
            <li><a href="#">Patients</a></li>
        </ul>
    </section>
    {{--Right Top Bar Section--}}
    <section class="top-bar-section right">
        <ul>
            <li class="has-dropdown"><a href="#" class="button label">Our Mission</a>
                <ul class="dropdown">
                    <li><a href="#"><i class="fa fa-graduation-cap"></i><span>Education</span></a></li>
                    <li><a href="#"><i class="fa fa-flask"></i><span>Research</span></a></li>
                    <li><a href="#"><i class="fa fa-medkit"></i><span>Clinical Care</span></a></li>
                    <li><a href="#"><i class="fa fa-globe"></i><span>Public Service</span></a></li>
                    <li><a href="#"> Mission Statement</a></li>
                </ul>
            </li>
            <li class="has-dropdown"><a href="#" class="button label"><i class="fa fa-university"></i> Resources</a>

            </li>
            <li class="button menu secondary label"><i class="fa fa-gift"></i> Make a Gift</li>
            <li><a href="template.php" class="button top-bar-button label"><i class="fa fa-road"></i> Take a
                    Tour</a></li>
            <li class="has-form search-bar-large">
                <input type="text" placeholder="Search" class="search"><a href="#" class="button tiny"><i
                            class="fa fa-search"></i></a>
            </li>
        </ul>
    </section>
</nav>