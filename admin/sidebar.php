<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../sidebar.php">
                                <span data-feather="home"></span>
                                <h3>Dashboard</h3>
                            </a>
                        </li>
                        <li class="nav-item">
                            <p class="nav text-primary px-3 pb-2"><?php echo $_SESSION['email'];?></p>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../user/index.php">
                                <span data-feather="file"></span>
                                <h6>Users</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../product/index.php">
                                <span data-feather="shopping-cart"></span>
                                <h6>Products</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../faq/index.php">
                                <span data-feather="users"></span>
                                <h6>FAQs</h6>
                            </a>
                        </li>
                       
                    </ul>

                </div>
            </nav>
            <?php include('footer.php');?>