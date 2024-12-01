<x-layouts.fullwidh>

    <!-- Carousel -->

    <section x-data="backgroundImage()" x-init="loop" class="relative w-full overflow-hidden bg-brandBlack">
        <img class="object-cover w-full opacity-0" src="img/slider/image11.jpg" alt="" />

        <template x-for="(image,index) in images" :key="index">
            <div x-show="selected === index" class="absolute inset-0 "
                x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-1000"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <img class="object-cover w-full" :src="image" />
            </div>
        </template>

        <div x-data="{
            active: 0,
            loop() {
                setInterval(() => { this.active = this.active === 2 ? 0 : this.active + 1 }, 10000)
            },
        }" x-init="loop" class="absolute inset-0 bg-brandBlack/60">
            <div class="flex items-center justify-between h-full mt-8 md:mt-0 lg:-mt-20">
                <!-- Previous button -->
                <div @click="if (active > 0 ) {active -= 1} else { active = 2 }"
                    class="flex items-center p-1 ml-1 transition duration-300 bg-opacity-50 rounded-full cursor-pointer group bg-brand900 hover:bg-opacity-100 md:p-2">
                    <ion-icon
                        class="w-4 h-4 transition duration-300 text-brand300 text-opacity-30 group-hover:text-opacity-100 md:h-6 md:w-6"
                        name="arrow-undo-outline"></ion-icon>
                </div>
                <!-- End Previous button -->
                <div>
                    <!-- slide 1 -->
                    <template x-if="active == 0">
                        <div class="flex flex-col items-center overflow-hidden">
                            <h2 class="-mt-1 bg-[url('/img/slider/gif/redleft.gif')] bg-cover bg-clip-text bg-center bg-no-repeat pt-2 text-lg font-semibold text-transparent sm:text-4xl md:text-6xl"
                                data-aos="fade-right" data-aos-offset="0">
                                हम सिखाये आप कमाए !!!
                            </h2>
                            <h2 class="text-md -mt-1 bg-[url('/img/slider/gif/redright.gif')] bg-cover bg-clip-text bg-center bg-no-repeat pt-2 font-semibold text-transparent sm:text-3xl md:text-5xl"
                                data-aos="fade-left" data-aos-offset="0">
                                छोटा कोर्स बड़ी सफ़लता !!!
                            </h2>

                            <p class="mt-0 text-xs font-medium tracking-wider text-center text-brand100 md:text-sm lg:text-lg"
                                data-aos="fade-up" data-aos-delay="500" data-aos-offset="0">
                                We provide computerized mobile repairing course in<span class="lg:hidden"><br /></span>
                                Bharuch. starting from basics to advance chip-level.
                            </p>
                            <a href="#why_chusus" type="button" class="brandBtn" data-aos="fade-up"
                                data-aos-delay="1000" data-aos-offset="0">
                                More Info
                            </a>
                        </div>
                    </template>
                    <!--End slide 1 -->
                    <!-- slide 2 -->
                    <template x-if="active == 1">
                        <div class="flex flex-col items-center mt-3 overflow-hidden">
                            <h2 class="-mt-1 bg-[url('/img/slider/gif/mckh.gif')] bg-cover bg-clip-text bg-bottom bg-no-repeat pt-2 text-center text-lg font-semibold text-transparent sm:text-4xl md:text-6xl"
                                data-aos="fade-right" data-aos-offset="0">
                                मोबाइल चाहें कोई भी हो !!!
                            </h2>
                            <h2 class="text-md -mt-1 bg-[url('/img/slider/gif/hhn.gif')] bg-cover bg-clip-text bg-center bg-no-repeat pt-2 text-center font-semibold text-transparent sm:text-3xl md:text-5xl"
                                data-aos="fade-left" data-aos-offset="0">
                                हम हैं ना !!!
                            </h2>
                            <p class="text-xs font-medium tracking-widest text-center sm:text-md text-brand100 md:text-lg"
                                data-aos="fade-up" data-aos-delay="500" data-aos-offset="0">
                                We Repair All Brand Mobile Phones.<span class="lg:hidden"><br /></span>
                                Screen Replacement/ Broken screen change.
                                <span class="lg:hidden"><br /></span>
                                <span class="bg-clip-text">we specialist cruve display repair.</span>
                            </p>
                            <a href="repairing.html" type="button" class="brandBtn" data-aos="fade-up"
                                data-aos-delay="1000" data-aos-offset="0">
                                More Info
                            </a>
                        </div>
                    </template>
                    <!-- End slide 2 -->
                    <!-- slide 3 -->
                    <template x-if="active == 2">
                        <div class="flex flex-col items-center overflow-hidden">
                            <h2 class="bg-[url('/img/slider/gif/19.gif')] bg-cover bg-clip-text bg-center bg-no-repeat text-center text-2xl font-semibold text-transparent sm:text-4xl md:text-7xl"
                                data-aos="zoom-in" data-aos-offset="0">
                                Satellite
                            </h2>
                            <h2 class="text-md bg-[url('/img/slider/gif/20.gif')] bg-cover bg-clip-text bg-center bg-no-repeat text-center font-semibold text-transparent sm:text-2xl"
                                data-aos="zoom-in" data-aos-delay="500" data-aos-offset="0">
                                GSM Shop
                            </h2>
                            <p class="mt-2 text-xs font-medium tracking-widest text-center sm:text-md text-brand100 md:text-lg"
                                data-aos="fade-up" data-aos-offset="0" data-aos-delay="700">
                                Buy All Mobile Accessory | Spares Parts.<span class="md:hidden"><br /></span>
                                Repairing Tools & Equipment.
                            </p>
                            <a href="index.html" type="button" class="brandBtn" data-aos="fade-up"
                                data-aos-delay="1000" data-aos-offset="0">
                                More Info
                            </a>
                        </div>
                    </template>
                    <!--End slide 3 -->
                </div>
                <!-- Next button -->
                <div class="flex items-center p-1 mr-1 transition duration-300 bg-opacity-50 rounded-full cursor-pointer group bg-brand900 hover:bg-opacity-100 md:p-2"
                    @click="if (active < 2  ) {active += 1} else { active = 0 }">
                    <ion-icon
                        class="w-4 h-4 transition duration-300 text-brand300 text-opacity-30 group-hover:text-opacity-100 md:h-6 md:w-6"
                        name="arrow-redo-outline"></ion-icon>
                </div>
                <!-- End Next button -->
            </div>
        </div>
    </section>
    <!-- Carousel End -->

</x-layouts.fullwidh>
@push('script')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        const backgroundImage = () => {
            return {
                selected: 0,
                loop() {
                    setInterval(() => {
                        this.selected =
                            this.selected === this.images.length - 1 ?
                            0 :
                            this.selected + 1;
                    }, 7000);
                },
                images: [
                    "img/slider/image6.jpg",
                    "img/slider/image7.jpg",
                    "img/slider/image8.jpg",
                    "img/slider/image9.jpg",
                    "img/slider/image10.jpg",
                    "img/slider/image11.jpg",
                    "img/slider/image12.jpg",
                    "img/slider/image13.jpg",
                    "img/slider/image14.jpg",
                    "img/slider/image15.jpg",
                ],
            };
        };
    </script>
    <script>
        AOS.init({
            duration: 1000, // values from 0 to 3000, with step 50ms
            offset: 300, // offset (in px) from the original trigger point
        });
    </script>
@endpush
