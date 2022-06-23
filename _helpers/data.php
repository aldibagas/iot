<?php

  $setTemplate=true;

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1', 'testing');
 
// Buat Koneksinya
$db1 = new mysqli(HOST, USER, PASS, DB1);
?>
            <?php
              $page = (isset($_POST['page']))? $_POST['page'] : 1;
              $limit = 6; 
              $limit_start = ($page - 1) * $limit;
              $no = $limit_start + 1;
 
              $query = "SELECT * FROM tbl_mahasiswa ORDER BY nama_mahasiswa ASC LIMIT $limit_start, $limit";
              $dewan1 = $db1->prepare($query);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              while ($row = $res1->fetch_assoc()) {
            ?>
              <div class="d-flex rounded overflow-hidden mb-3">
                <img class="img-fluid" src="_assets/templates/startup2/img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet <?php echo $no++; ?>
                </a>
              </div>
            <?php } ?>
          </tbody>
        </table>
 
        <?php
          $query_jumlah = "SELECT count(*) AS jumlah FROM tbl_mahasiswa";
          $dewan1 = $db1->prepare($query_jumlah);
          $dewan1->execute();
          $res1 = $dewan1->get_result();
          $row = $res1->fetch_assoc();
          $total_records = $row['jumlah'];
        ?>
        <p>Total baris : <?php echo $total_records; ?></p>
        <nav class="mb-5">
          <ul class="pagination justify-content-end">
            <?php
              $jumlah_page = ceil($total_records / $limit);
              $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
              $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
              $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;
        
              
 
              if($page == 1){
                echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
                echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
              } else {
                $link_prev = ($page > 1)? $page - 1 : 1;
                echo '<li class="page-item halaman" id="1"><a class="page-link" href="#">First</a></li>';
                echo '<li class="page-item halaman" id="'.$link_prev.'"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
              }
 
              for($i = $start_number; $i <= $end_number; $i++){
                $link_active = ($page == $i)? ' active' : '';
                echo '<li class="page-item halaman '.$link_active.'" id="'.$i.'"><a class="page-link" href="#">'.$i.'</a></li>';
              }
 
              if($page == $jumlah_page){
                echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
              } else {
                $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
                echo '<li class="page-item halaman" id="'.$link_next.'"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                echo '<li class="page-item halaman" id="'.$jumlah_page.'"><a class="page-link" href="#">Last</a></li>';
              }
            ?>
          </ul>
        </nav>