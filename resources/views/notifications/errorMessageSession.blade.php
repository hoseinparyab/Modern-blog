<div class="position-fixed end-0 p-3" style="z-index: 50;top: 80px">
    <div id="successMge" class="toast hide bg-danger text-white d-flex justify-content-between" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body flex-grow-1">
            {{session()->get('error')}}
        </div>
        <a class="me-3 m-auto"> <i class="fa fa-times text-white"></i></a>
    </div>
</div>
