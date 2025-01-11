<div>
    <!-- Jumbotron Section -->
    <div class="relative w-full min-h-screen overflow-hidden bg-gradient-to-br from-blue-400 to-purple-500">
        <!-- Background Image -->
        <div class="absolute inset-0">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <img
        src="https://media.discordapp.net/attachments/1307192203021647895/1327376965875007593/Razer_Blade_15_And_Blade_Pro_17_Gaming_Laptops_With_NVIDIA_GeForce_RTX_30_GPU.jpeg?ex=6782d7a2&is=67818622&hm=fe058aee06e9501ac521e8fef50d89eca4711fa5036d22f88a88cee098a8a785&=&format=webp&width=687&height=386"
        alt="Background"
        class="absolute inset-0 w-full h-full object-cover object-center"
    />
</div>


        <!-- Content Section -->
        <div class="relative z-10 flex flex-col items-center justify-center min-h-screen text-white px-4 sm:px-6 lg:px-8">
            <div class="text-center opacity-0 transition-opacity duration-1000 ease-in" id="fadeInSection">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6">
                    Welcome to <span class="text-yellow-300">ReveraStore</span>
                </h1>
                <p class="text-xl sm:text-2xl mb-8 max-w-2xl mx-auto">
                    Discover the latest in electronics and technology. Your journey to innovation starts here.
                </p>
                <div id="floatButton" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full text-blue-600 bg-white hover:bg-blue-50 transition duration-300">
                    <a href="{{ url('/products') }}" class="flex items-center">
                        Start Exploring
                        <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative SVG -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden">
            <svg
                class="relative block w-full h-[100px]"
                data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120"
                preserveAspectRatio="none"
            >
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="fill-current text-white"
                ></path>
            </svg>
        </div>
    </div>


    <div class="relative bg-gray-50 py-20">
  <div class="container mx-auto px-6 lg:px-8 text-center">
    <div class="max-w-4xl mx-auto">
      <!-- Judul Utama -->
      <h1 class="text-5xl font-bold text-gray-800 lg:text-6xl">
        Hai, kami <span class="text-indigo-600">ReveraStore</span>
      </h1>
      <!-- Deskripsi -->
      <p class="mt-6 text-lg text-gray-600 leading-relaxed">
        
ReveraStore adalah toko terpercaya yang menyediakan berbagai kebutuhan, mulai dari laptop berkualitas tinggi untuk kebutuhan kerja, gaming, hingga desain grafis, smartphone stylish dan canggih dengan performa terbaik, hingga koleksi fashion kasual dan trendy untuk menunjang gaya hidup urban Anda.
      </p>
    </div>
  </div>
  <!-- Background Large Text -->
  <div class="absolute inset-0 z-0 flex justify-center items-center text-gray-200 font-bold text-[15rem] lg:text-[20rem] opacity-10">
    ERIGO
  </div>
</div>


    <!-- Categories Section -->
    <section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-12">Our Brand</h2>
        
            <!-- Brand 1 -->

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
    @foreach($brands as $brand)
        <div class="bg-white rounded-xl shadow-lg p-8 text-center transition-transform duration-300 hover:scale-105">
            <div class="flex items-center justify-center mb-6">
                <!-- Pastikan logo brand diambil dari data -->
                <img src="{{ $brand->logo }}" alt="{{ $brand->name }} Logo" class="w-24 h-24 object-contain">
            </div>
            <h3 class="text-2xl font-semibold text-gray-800">{{ $brand->name }}</h3>
        </div>
    @endforeach
</div>

</section>

<div class="bg-gray-50 py-20">
  <div class="max-w-xl mx-auto">
    <div class="text-center ">
      <div class="relative flex flex-col items-center">
        <h1 class="text-5xl font-bold dark:text-gray-200"> Browse <span class="text-purple-500"> Categories
          </span> </h1>
        <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
          <div class="flex-1 h-2 bg-purple-200">
          </div>
          <div class="flex-1 h-2 bg-purple-400">
          </div>
          <div class="flex-1 h-2 bg-purple-600">
          </div>
        </div>
      </div>
      <p class="mb-12 text-base text-center text-gray-500">
      Jelajahi berbagai kategori produk yang tersedia di ReveraStore. Temukan kebutuhan Anda, mulai dari elektronik hingga fashion, dengan beragam pilihan yang sesuai dengan gaya hidup modern dan kebutuhan sehari-hari Anda.?
      </p>
    </div>
  </div>

  <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    @foreach($categories as $category)
        <a class="group flex items-center justify-between bg-white border shadow-sm rounded-xl hover:shadow-md transition-transform duration-300 hover:scale-105 dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 p-4" href="#">
            <div class="flex items-center">
                <img class="h-12 w-12 object-contain rounded-md" src="{{ $category->image }}" alt="{{ $category->name }}">
                <div class="ml-4">
                    <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                        {{ $category->name }}
                    </h3>
                </div>
            </div>
            <div>
                <svg class="flex-shrink-0 w-5 h-5 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </div>
        </a>
    @endforeach
</div>

            </div>
        </div>
    </section>
</div>

<script src="{{ mix('js/home.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fade-in effect when the page loads
        const fadeInSection = document.getElementById('fadeInSection');
        setTimeout(() => {
            fadeInSection.classList.remove('opacity-0');
            fadeInSection.classList.add('opacity-100');
        }, 300);

        // Floating button animation
        const floatButton = document.getElementById('floatButton');
        let isFloatingUp = true;
        setInterval(() => {
            if (isFloatingUp) {
                floatButton.style.transform = 'translateY(-20px)';
            } else {
                floatButton.style.transform = 'translateY(0px)';
            }
            isFloatingUp = !isFloatingUp;
        }, 2000);
    });
</script>
