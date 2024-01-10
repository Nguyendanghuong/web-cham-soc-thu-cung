<?php
      require_once '../ketnoi.php';
      $lietke_sql = " SELECT * FROM sanpham order by id";
      $result = mysqli_query($conn, $lietke_sql);
      while ($r = mysqli_fetch_assoc($result))
      ?>
      <div class="col-md6 col-lg-4 col-xl-3">
                      <div class="card">
                        <img
                          class="card-img-top"
                          src="./img/sanpham/<?php echo $r['hinhanh']; ?>"
                          alt="Card image"
                        />
                        <div class="card-body">
                          <h4 class="card-title">
                          <td><?php echo $r['tensanpham'];?></td>
                          </h4>
                          <p class="card-text"><td><?php echo $r['gia'];?></td></p>
                          <a href="#" class="btn btn-primary"
                            >Thêm vào giỏ hàng</a
                          >
                        </div>
                      </div>
                    </div>
      