<x-guest-layout>

    <!-- Classifica -->
    <div class="bg-gray-100">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12">
                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Twitch</h2>
                    <p class="text-xl text-gray-500">Guardaci Live!</p>
                </div>
                <div class="space-y-4">
                    <div class="rounded-lg shadow-md overflow-hidden w-full h-96 md:h-[560px] xl:h-[680px]">
                        <div class="w-full h-full" id="twitch-embed"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Testimonials -->
    <x-testimonials/>

    <!-- Load the Twitch embed script -->
    <script src="https://player.twitch.tv/js/embed/v1.js"></script>

    <!-- Create a Twitch.Player object. This will render within the placeholder div -->
    <script type="text/javascript">
        new Twitch.Player("twitch-embed", {
            channel: "6ixproject",
            width: "100%",
            height: "100%",
            autoplay: "true"
        });
    </script>
</x-guest-layout>
