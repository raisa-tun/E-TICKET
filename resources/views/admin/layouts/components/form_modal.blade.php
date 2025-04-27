<div class="md-modal md-effect-12" id="modal-12" style="display:none">
    <div class="md-content">
        
        <div>
            
            @include('admin.layouts.contents.form_input')
        </div>
    </div>
</div>
<div id="modal-backdrop" style="display: none;"></div>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="libraries\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="libraries\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="libraries\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="libraries\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    const $modal = $('#modal-12');
    const $backdrop = $('#modal-backdrop');
    const $openBtn = $('[data-modal="modal-12"]');
    const $closeBtn = $modal.find('.md-close');

    // Open the modal
    $openBtn.on('click', function () {
      //$modal.addClass('md-show');
      $modal.css('display', 'flex');
      $backdrop.show();
    });

    // Close the modal
    $closeBtn.on('click', function () {
     // $modal.removeClass('md-show');
     $modal.css('display', 'none');
     $backdrop.hide();
    });

    // Optional: Close modal when clicking outside the modal content
    $modal.on('click', function (e) {
      if ($(e.target).is($modal)) {
        $modal.removeClass('md-show');
        $backdrop.hide();
      }
    });
  });
</script>
