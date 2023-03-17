<div class="row justify-content-center mt-5">
    <div class="col-12">
        <div class="card shadow  text-white bg-dark">
            <div class="card-header">Coding Challenge - Network connections</div>
            <div class="card-body" x-data="{ tab: 'tab1' }">
                <div class="btn-group w-100 mb-3" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                    <button class="btn btn-outline-primary" :class="{ 'active': tab === 'tab1' }"
                        x-on:click="tab='tab1'" for="btnradio1" id="get_suggestions_btn">Suggestions
                        ({{ count($users) }})</button>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <button class="btn btn-outline-primary" :class="{ 'active': tab === 'tab2' }"
                        x-on:click="tab='tab2'" for="btnradio2" id="get_sent_requests_btn">Sent Requests
                        ({{ count($sentreqs) }})</button>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <button class="btn btn-outline-primary" :class="{ 'active': tab === 'tab3' }"
                        x-on:click="tab='tab3'" for="btnradio3" id="get_received_requests_btn">Received
                        Requests({{ count($receivereqs) }})</button>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                    <button class="btn btn-outline-primary" :class="{ 'active': tab === 'tab4' }"
                        x-on:click="tab='tab4'" for="btnradio4" id="get_connections_btn">Connections
                        ({{ count($connections) }})</button>
                </div>
                <hr>
                <div class="" x-show="tab === 'tab1'">
                    @foreach ($users as $user)
                        <x-suggestion :name="$user->name" :email="$user->email" :id="$user->id" />
                    @endforeach
                    <div class="d-flex justify-content-center mt-2 py-3 {{-- d-none --}}"
                        id="load_more_btn_parent">
                        <button class="btn btn-primary" id="load_more_btn">Load
                            more</button>
                    </div>
                </div>

                <div class="" x-show="tab === 'tab2'">
                    @foreach ($sentreqs as $user)
                        <x-request :username="$user['name']" :useremail="$user['email']" :mode="'sent'" :id="$user['id']" />
                    @endforeach
                </div>
                <div class="" x-show="tab === 'tab3'">
                    @foreach ($receivereqs as $user)
                        <x-request :username="$user['name']" :useremail="$user['email']" :mode="'received'" :id="$user['id']" />
                    @endforeach
                </div>
                <div class="" x-show="tab === 'tab4'">
                    @foreach ($connections as $user)
                        <x-connection :userid="$user['user_id']" :username="$user['name']" :useremail="$user['email']" :id="$user['id']"
                            :comfriends="$user['common_connections']" />
                    @endforeach

                </div>


                {{-- Remove this when you start working, just to show you the different components --}}
                {{-- <span class="fw-bold">Sent Request Blade</span>


        <span class="fw-bold">Received Request Blade</span>


        <span class="fw-bold">Suggestion Blade</span> --}}


                {{-- <span class="fw-bold">Connection Blade (Click on "Connections in common" to see the connections in common
          component)</span>
        <x-connection /> --}}
                {{-- Remove this when you start working, just to show you the different components --}}

                {{-- <div id="skeleton" class="d-none">
          @for ($i = 0; $i < 10; $i++)
            <x-skeleton />
          @endfor
        </div> --}}

                {{-- <span class="fw-bold">"Load more"-Button</span> --}}
            </div>
        </div>
    </div>
</div>
