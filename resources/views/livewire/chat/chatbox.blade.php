<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    @if ($selectedConversation)
    <div class="chatbox_header">
        <div class="return">
            <i class="bi bi-arrow-left"></i>
        </div>
        <div class="img_container">
            <img src="https://ui-avatars.com/api/?name={{ $receiverInstance->name }}" alt="">
        </div>
        <div class="name">
            {{ $receiverInstance->name }}
        </div>
        <div class="info">
            <div class="info_item">
                <i class="bi bi-telephone-fill"></i>
            </div>
            <div class="info_item">
                <i class="bi bi-image"></i>
            </div>
            <div class="info_item">
                <i class="bi bi-info-circle"></i>
            </div>
        </div>
    </div>

    <div class="chatbox_body">

        @foreach ($messages as $message)
            <div class="msg_body msg_body_receiver">
                {{ $message->body }}
                <div class="msg_body_footer">
                    <div class="date">
                        {{ $message->created_at->format('m:i a') }}
                    </div>
                    <div class="read">
                        <i class="bi bi-check"></i>
                    </div>
                </div>
            </div>
        @endforeach


        {{-- <div class="msg_body msg_body_me">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dignissimos necessitatibus veritatis, omnis sint illo. Distinctio, consequuntur doloremque. Magnam incidunt tempora expedita placeat natus vero suscipit rem, numquam adipisci voluptatibus?
            <div class="msg_body_footer">
                <div class="date">
                    1 Week Ago
                </div>
                <div class="read">
                    <i class="bi bi-check"></i>
                </div>
            </div>
        </div> --}}
    </div>
    @else
    <div class="fs-4 text-center text-primary mt-5">
        No Conversation Selected
    </div>
    @endif



</div>
