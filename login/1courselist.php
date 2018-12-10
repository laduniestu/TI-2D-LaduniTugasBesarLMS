
                <?php 
                    require '../functions.php';
                ?>
                <div class="card my-4">
                    
                    <h5 class="card-header">Course List</h5>
                    <?php 
                    
                        
                        $halaman = 100;
                        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                        $result=mysqli_query($conn,"SELECT * FROM despelajaran");
                        $total = mysqli_num_rows($result);
                        $pages = ceil($total/$halaman);            
                        $query = mysqli_query($conn,"select * from despelajaran LIMIT $mulai, $halaman")or die(mysql_error);
                        
                        
                        while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                            <div class="card-body">
                                <div class="media border p-3">
                                    <div class="media-body">
                                        <h4 class="card-header"><a href=""><?= $data["judul"]; ?></a></h4>     
                                    </div>
                                </div>
                            </div>
                        
                            <?php               
                        } 
                        ?>
                </div>