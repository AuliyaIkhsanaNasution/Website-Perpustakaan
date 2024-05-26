
<footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="https://polmed.ac.id/">Politeknik Negeri Medan</a>.</strong>
    Kampus Vokasi
    <div class="float-right d-none d-sm-inline-block">
      <b>Perpustakaan</b> 
    </div>
  </footer>

  <script>
    // Script untuk menghilangkan tombol Kembalikan setelah dikembalikan
    document.querySelectorAll('.kembalikan-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            btn.style.display = 'none';
        });
    });

    // Script untuk menyembunyikan tombol kembalikan jika status sudah "Dikembalikan"
    document.addEventListener('DOMContentLoaded', () => {
        const statusPeminjaman = document.querySelectorAll('.status-peminjaman');
        statusPeminjaman.forEach(status => {
            const btnKembalikan = status.parentNode.querySelector('.kembalikan-btn');
            if (status.innerText.trim() === 'dikembalikan') {
                btnKembalikan.style.display = 'none';
            }
        });
    });
</script>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= BASEURL; ?>css/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= BASEURL; ?>css/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= BASEURL; ?>css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= BASEURL; ?>css/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= BASEURL; ?>css/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= BASEURL; ?>css/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= BASEURL; ?>css/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= BASEURL; ?>css/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= BASEURL; ?>css/plugins/moment/moment.min.js"></script>
<script src="<?= BASEURL; ?>css/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= BASEURL; ?>css/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= BASEURL; ?>css/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= BASEURL; ?>css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= BASEURL; ?>css/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= BASEURL; ?>css/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= BASEURL; ?>css/dist/js/pages/dashboard.js"></script>
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>js/script.js"></script>

</body>
</html>
