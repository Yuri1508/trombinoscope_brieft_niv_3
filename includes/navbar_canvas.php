<html>

<head>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/offcanvas.css">

    <style type="text/css">
        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {

            .dropdown-menu li {
                position: relative;
            }

            .dropdown-menu .submenu {
                display: none;
                position: absolute;
                left: 100%;
                top: -7px;
            }

            .dropdown-menu .submenu-left {
                right: 100%;
                left: auto;
            }

            .dropdown-menu>li:hover {
                background-color: #f1f1f1
            }

            .dropdown-menu>li:hover>.submenu {
                display: block;
            }
        }

        /* ============ desktop view .end// ============ */

        /* ============ small devices ============ */
        @media (max-width: 991px) {

            .dropdown-menu .dropdown-menu {
                margin-left: 0.7rem;
                margin-right: 0.7rem;
                margin-bottom: .5rem;
            }

        }

        /* ============ small devices .end// ============ */
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
        <div class="container-fluid">
            <a class="navbar-brand" style="letter-spacing: 10px;" href="index.php">RSMA</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="form_trainee.php">Ajouter Stagiaire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display_data_trainee.php">Trombinoscope</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form_company.php">Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Switch account</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Compagnie</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">CCFPLI</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Section 1</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="#">APS</a></li>
                                            <li><a class="dropdown-item" href="#">APE</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Section 2</a></li>
                                    <li><a class="dropdown-item" href="#">Section 3</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">CFP2</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                                    <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">CFP3</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                                    <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">CFP4</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                                    <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../assets/js/offcanvas.js"></script>

    <script type="text/javascript">
        //	window.addEventListener("resize", function() {
        //		"use strict"; window.location.reload(); 
        //	});


        document.addEventListener("DOMContentLoaded", function() {


            /////// Prevent closing from click inside dropdown
            document.querySelectorAll('.dropdown-menu').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            })



            // make it as accordion for smaller screens
            if (window.innerWidth < 992) {

                // close all inner dropdowns when parent is closed
                document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
                    everydropdown.addEventListener('hidden.bs.dropdown', function() {
                        // after dropdown is hidden, then find all submenus
                        this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                            // hide every submenu as well
                            everysubmenu.style.display = 'none';
                        });
                    })
                });

                document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
                    element.addEventListener('click', function(e) {

                        let nextEl = this.nextElementSibling;
                        if (nextEl && nextEl.classList.contains('submenu')) {
                            // prevent opening link if link needs to open dropdown
                            e.preventDefault();
                            console.log(nextEl);
                            if (nextEl.style.display == 'block') {
                                nextEl.style.display = 'none';
                            } else {
                                nextEl.style.display = 'block';
                            }

                        }
                    });
                })
            }
            // end if innerWidth

        });
        // DOMContentLoaded  end
    </script>
    </script>
</body>

</html>