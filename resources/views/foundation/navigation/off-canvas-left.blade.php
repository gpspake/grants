<!--Left Off Canvas Menu-->
<nav class="offcanvas-nav menu push-menu-left">
    <a href="index.php" class="button uthsc-split-button-home"><i class="fa fa-home"></i></a>
    <button data-dropdown="breadcrumbs-left" aria-controls="drop" aria-expanded="false"
            class="button dropdown uthsc-split-button">Breadcrumbs Back Home
    </button>
    <br>
    <ol aria-labelledby="breadcrumblabel" id="breadcrumbs-left" data-dropdown-content="data-dropdown-content"
        role="menu" aria-hidden="false" tabindex="-1" class="f-dropdown mega uthsc-split-button-breadcrumb-links">
        <li>
            <a href="index.php" title="Home">Back to the Homepage
                <i style="float: left;" class="fa fa-level-up fa-2x fa-flip-horizontal"></i>
            </a>
        </li>
        <li><a href="products.html" title="Products">College of Medicine</a></li>
        <li><a href="products.html" title="Products">Office of Medical Education</a></li>
        <li><a href="products.html" title="Products">Clerkships</a></li>
        <li><a href="products.html" title="Products">Core Clerkship Directors</a></li>
        <li><a href="#"><strong>Current Page</strong></a></li>
    </ol>
    <input type="text" placeholder="Search" style="margin:0;">
    <button class="close-menu expand"><i class="fa fa-chevron-left"></i>&emsp; Close Menu</button>
    <ul>
        <li class="not-a-link">
            <a>Menu Dropdown One</a>
        </li>
        <li class="not-a-link">
            <a>Menu Dropdown Two</a>
        </li>
        <li class="not-a-link">
            <a>Menu Dropdown Three</a>
        </li>
        <li class="not-a-link">
            <a>Menu Dropdown Four</a>
        </li>
        <li class="not-a-link">
            <a>Menu Dropdown Five</a>
            <ul>
                <li>
                    <a href="#">First Item in Dropdown</a>
                </li>
            </ul>
        </li>
        <li class="not-a-link">
            <a>Menu Dropdown Six</a>
        </li>
    </ul>
    <button class="close-menu expand"><i class="fa fa-chevron-left"></i>&emsp; Close Menu</button>
    <?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')) { ?>
    <div class="bottom-nav-bar-off-canvas"></div><?php } ?>
</nav>