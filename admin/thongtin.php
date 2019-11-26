<div class="container">
<div class="col-12">
<table id="example" class="table table-reponsive-sm table-bordered" cellspacing="0">
        <thead>
            <tr class="bg-primary">
                <th colspan="6" class="text-center">THÔNG TIN KHÁCH HÀNG</th>
            </tr>
            <tr class="bg-primary">
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Điện thoại</th>
                    <th>BDS</th>
                    <th>Nhu cầu KH</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once '../Controller/config.php';
            $sql_table = "SELECT * FROM tbl_emailkh order by IDKH DESC";
            $kq = mysqli_query($con, $sql_table);
            $i=1;
            while ($row = mysqli_fetch_assoc($kq)) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td ><?php echo $row['HoVaTen']; ?></td>
                    <td ><?php echo $row['Email']; ?></td>
                    <td ><?php echo "0".$row['DienThoai']; ?></td>
                    <td ><?php echo $row['BDS']; ?></td>
                    <td ><?php echo $row['NhuCauKH']; ?></td>
                </tr>
            <?php
            $i++;
            }
            ?>
        </tbody>
    </table>
</div>
</div>
<!-- <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script> -->