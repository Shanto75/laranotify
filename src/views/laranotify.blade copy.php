<!-- resources/views/laranotify.blade.php -->
@if(session()->has('message'))
  <div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="notificationToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
      <div class="toast-header bg-warning">
          <strong class="me-auto">Notification</strong>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body bg-light">
        <p class="fs-3">
          {{ session()->get('message') }}
        </p>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastElement = document.getElementById('notificationToast');
        var notificationToast = new bootstrap.Toast(toastElement, { autohide: false });
        notificationToast.show();
    });
  </script>
@endif
