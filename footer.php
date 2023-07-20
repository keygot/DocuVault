 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

<!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>






  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Dùng cho thẻ pre - code -->
  <script src="assets/js/prism.js"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script> -->
<!-- 
  <script>
    document.addEventListener('DOMContentLoaded', () => {
  hljs.initHighlightingOnLoad();

  const codeBlock = document.getElementById('code');
  const copyButton = document.getElementById('copy-button');
  const copySuccess = document.getElementById('copy-success');

  const copyTextHandler = () => {
    const text = codeBlock.innerText;

    // first version - document.execCommand('copy');
    // var element = document.createElement('textarea');
    // document.body.appendChild(element);
    // element.value = text;
    // element.select();
    // document.execCommand('copy');
    // document.body.removeChild(element);

    // copySuccess.classList.add('show-message');
    // setTimeout(() => {
    //   copySuccess.classList.remove('show-message');
    // }, 2500);

    //   second version - Clipboard API
    navigator.clipboard.writeText(text).then(
      () => {
        copySuccess.classList.add('show-message');
        setTimeout(() => {
          copySuccess.classList.remove('show-message');
        }, 2500);
      },
      () => {
        console.log('Error writing to the clipboard');
      }
    );
  };

  copyButton.addEventListener('click', copyTextHandler);
});

  </script> -->

</body>

</html>
