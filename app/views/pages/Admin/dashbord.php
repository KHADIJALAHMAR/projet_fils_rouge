<?php include_once APPROOT . '/views/inc/header.php'; ?>

<body>
    <main class="root_m">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Yopharma</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">pharmacy</h3>
                    <div class="col">
		<table class="table bg-white rounded shadow-sm  table-hover">
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>First Name</th>
		            <th>Last Name</th>
		            <th>email</th>
                    <th>password</th>
                    <th>role</th>
                    <th>Delete</th>
		          
		        </tr>
		    </thead>
            <tbody>
		        <tr id="d1">
		            <td>1</td>
		            <td id="f1">John</td>
		            <td id="l1">Wick</td>
		            <td id="m1">Doewick@gmail.com</td>
                    <td id="m1">password</td>
                    <td id="m1">role</td>
                    <td><a href="<?php echo URLROOT;?>/Contact/delete?id=<?php echo $row->id;?>"class="btn btn-danger" <span class="glyphicon glyphicon-trash"></span>Delete<a></td>
		           
		        </tr>
		    </tbody>
		</table>
	

                    </div>
                    
                </div>
<!-- """""""""""""""""""""""""""""""""""""""" -->
<div class="container-fluid px-4">
    <div class="row g-3 my-2">

    <div class="row my-5">
        <h3 class="fs-4 mb-3">pharmacist</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover">
            <tr>
		            <th>ID</th>
		            <th>name_pharmacie</th>
		            <th>Localisation</th>
		            <th>phone</th>
                    <th>Delete</th>
		            <th>Edit</th>
		           
		        </tr>
		    </thead>
            <tbody>
		        <tr id="d1">
		            <td>1</td>
		            <td id="f1">hhjkhjhj</td>
		            <td id="l1">sdfghjbklmùùlmlùmlùmlùmlùlùmlùlùmlmùlmùlmùlmlmùlù</td>
		            <td id="m1">1234567890</td>
		            <td><a href="<?php echo URLROOT;?>/Contact/delete?id=<?php echo $row->id;?>"class="btn btn-danger" <span class="glyphicon glyphicon-trash"></span>Delete<a> </td>
                    <td><a href="<?php echo URLROOT;?>/Contact/update/<?php echo $row->id;?>"class="btn btn-success"
                    <span class="glyphicon glyphicon-pencil"></span>Edit</a></td>
		        </tr>
		    </tbody>
            </table>
        </div>
    </div>

</div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    </main>
</body>

</html>