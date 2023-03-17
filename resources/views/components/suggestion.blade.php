<div class="my-2 shadow  text-white bg-dark p-1" id="">
    <div class="d-flex justify-content-between">
        <table class="ms-1">
            <td class="align-middle">{{ $name }}</td>
            <td class="align-middle"> - </td>
            <td class="align-middle">{{ $email }}</td>
            <td class="align-middle">
        </table>
        <div>
            <form action="{{ url('user/connect') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $id }}" name="id">
                <button id="create_request_btn_" class="btn btn-primary me-1">Connect</button>
            </form>
        </div>
    </div>
</div>
