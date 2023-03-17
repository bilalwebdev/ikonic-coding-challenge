<div class="my-2 shadow text-white bg-dark p-1" id="">
    <div class="d-flex justify-content-between">
        <table class="ms-1">
            <td class="align-middle">{{ $name }}</td>
            <td class="align-middle"> - </td>
            <td class="align-middle">{{ $email }}</td>
            <td class="align-middle">
        </table>
        <div>
            @if ($mode == 'sent')
                <div>
                    <form action="{{ url('user/withdraw-request') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $id }}" name="id">
                        <button id="cancel_request_btn_" class="btn btn-danger me-1" o>Withdraw
                            Request</button>
                    </form>
                </div>
            @else
                <div>
                    <form action="{{ url('user/accept-request') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $id }}" name="id">
                        <button id="accept_request_btn_" class="btn btn-primary me-1" onclick="">Accept</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
