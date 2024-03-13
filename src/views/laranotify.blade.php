<!-- resources/views/laranotify.blade.php -->
@empty(!Laranotify::getMessage())
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="warning" viewBox="0 0 16 16">
      <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
    </symbol>
    <symbol id="failed" viewBox="0 0 16 16">
      <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"/>
    </symbol>
    <symbol id="successful" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
  </svg>
  <div class="modal-overlay active modal-top-right" id="modal">
    <div class="modal-content ">
        <span class="close-button" onclick="closeModal()">&#10005;</span>
        <h3 class="notification-caption">
          <span>
            <svg width="16" height="16" fill="currentColor"><use xlink:href="#{{ Laranotify::getType() }}"/></svg>
          </span>
          <span> {{ Laranotify::getType() }}!</span>
        </h3>
        <p>{{ Laranotify::getMessage() }}</p>
    </div>
  </div>

  <script>
    function openModal() {
        document.getElementById('modal').classList.add('active');
    }

    function closeModal() {
        document.getElementById('modal').classList.remove('active');
    }
  </script>

  <style>
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
        display: none;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }
    .modal-content {
      background-color: {{ Laranotify::getColor() }};
      color: white;
      margin: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      text-align: center;
      position: relative;
      min-width: 300px;
    }
    .modal-overlay.active {
        display: flex;
    }
    .modal-top-left {
        justify-content: flex-start;
        align-items: flex-start;
    }

    .modal-top-right {
        justify-content: flex-end;
        align-items: flex-start;
    }

    .modal-bottom-left {
        justify-content: flex-start;
        align-items: flex-end;
    }

    .modal-bottom-right {
        justify-content: flex-end;
        align-items: flex-end;
    }

    .close-button {
        position: absolute;
        top: 5px;
        right: 10px;
        cursor: pointer;
        background-color: transparent;
        color: white
    }
    .notification-caption{
      display: flex;
      align-items: center;
      justify-content: center;
      text-transform:capitalize ;
      gap: 2px;
      font-weight: bold;
    }
  </style>
@endempty
