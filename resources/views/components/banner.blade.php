@props(['style' => session('flash.bannerStyle', 'success'), 'message' => session('flash.banner')])

<div style="display: none;" x-data="{{ json_encode(['show' => true, 'style' => $style, 'message' => $message]) }}"
    :class="{
        'bg-indigo-500': style == 'success',
        'bg-red-700': style == 'danger',
        'bg-gray-500': style != 'success' &&
            style != 'danger'
    }"
    x-show="show && message"
    x-on:banner-message.window="
                style = event.detail.style;
                message = event.detail.message;
                show = true;
            ">
    <div class="mx-auto max-w-screen-xl px-3 py-2 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-center justify-between">
            <div class="flex w-0 min-w-0 flex-1 items-center">
                <span class="flex rounded-lg p-2"
                    :class="{ 'bg-indigo-600': style == 'success', 'bg-red-600': style == 'danger' }">
                    <svg class="h-5 w-5 text-white" x-show="style == 'success'" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <svg class="h-5 w-5 text-white" x-show="style == 'danger'" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>
                    <svg class="h-5 w-5 text-white" x-show="style != 'success' && style != 'danger'"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>
                </span>

                <p class="ml-3 truncate text-sm font-medium text-white" x-text="message"></p>
            </div>

            <div class="shrink-0 sm:ml-3">
                <button class="-mr-1 flex rounded-md p-2 transition focus:outline-none sm:-mr-2" type="button"
                    aria-label="Dismiss"
                    :class="{
                        'hover:bg-indigo-600 focus:bg-indigo-600': style ==
                            'success',
                        'hover:bg-red-600 focus:bg-red-600': style == 'danger'
                    }"
                    x-on:click="show = false">
                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
