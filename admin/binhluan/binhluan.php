<div class=" ">

<div class="row frmtitle"><h1>DANH SÁCH BÌNH LUẬN</h1></div>
<div class="row frmcontent">
  
            <div class="container">
                <div class="bang">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>MÃ TÀI KHOẢN</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- // Vòng lặp foreach được sử dụng để lặp qua mỗi phần tử trong mảng $listtaikhoan. Mỗi phần tử được gán cho biến $taikhoan. -->
                    <?php
                        foreach($listtaikhoan as $taikhoan){
                            extract($taikhoan);
                            $suatk = "index.php?act=suatk&id=".$id;
                            $xoatk = "index.php?act=xoatk&id=".$id;
                            echo ' <tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.'</td>
                            <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a>  <a href="'. $xoatk.'"><input type="button" value="Xóa"></a></td>
                          </tr>';
                        };

                    ?>
                    </tbody>
                  </table>
                </div>
                </div>
                <div class=" mb">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                </div>
            
            </div>
        </div>
        </div>        