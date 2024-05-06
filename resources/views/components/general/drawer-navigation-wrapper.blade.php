<div 
    id="drawer-navigation"
    class="fixed top-0 h-screen w-64 flex-none md:sticky md:top-20 lg:w-80 md:h-[calc(100vh-80px)] overflow-y-scroll gap-7 py-3 px-2 text-green-800 z-50 transition-transform duration-500 ease-in-out -translate-x-64 md:translate-x-0 z-50"
>
    {{ $slot }}
</div>

<script type="module">
    $("#drawer-button").click(function(){
        $("#drawer-navigation").toggleClass("-translate-x-64");
    });
</script>
