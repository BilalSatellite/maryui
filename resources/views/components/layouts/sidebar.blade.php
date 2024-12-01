 <div class="min-h-screen bg-base-100">
     <!-- welcome to -->

     <!-- welcome to -->
     <section class="relative flex flex-col justify-center w-full h-20 bg-brandBlack/70 ">
         <img class="object-cover w-full h-full mix-blend-overlay" src="img/bg/1-circuit-red-1280_2.jpg" alt="" />

     </section>
     <!-- welcome to End-->
     {{-- MAIN --}}
     <x-main full-width>

         {{-- SIDEBAR --}}
         <x-slot:sidebar drawer="main-drawer" collapsible class="z-50 bg-base-100">
             {{-- BRAND --}}
             <div class="lg:hidden bg-brandRed">
                 <x-app-brand class="p-5 pt-3" />
             </div>
             {{-- MENU --}}
             <x-menu activate-by-route>
                 {{-- <div class="only space cover navbar "></div> --}}
                 {{-- User --}}
                 @if ($user = auth()->user())
                     <x-menu-separator />
                     <x-list-item :item="$user" value="name" sub-value="email" no-separator no-hover
                         class="-mx-2 !-my-2 rounded">
                         <x-slot:actions>
                             <x-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="logoff"
                                 no-wire-navigate link="/logout" />
                         </x-slot:actions>
                     </x-list-item>
                     <x-menu-separator />
                 @endif
                 <x-menu-item title="Hello" icon="o-sparkles" link="/" />
                 <x-menu-sub title="Settings" icon="o-cog-6-tooth">
                     <x-menu-item title="Wifi" icon="o-wifi" link="####" />
                     <x-menu-item title="Archives" icon="o-archive-box" link="####" />
                 </x-menu-sub>
             </x-menu>
         </x-slot:sidebar>
         {{-- The `$slot` goes here --}}
         <x-slot:content>
             <x-header title="Users" subtitle="Check this on mobile">
                 <x-slot:middle class="!justify-end">
                     <x-input icon="o-bolt" placeholder="Search..." />
                 </x-slot:middle>
                 <x-slot:actions>
                     <label for="main-drawer" class="lg:hidden me-3">
                         <x-icon name="o-bars-3" class="cursor-pointer" />
                     </label>
                     <x-button icon="o-funnel" />
                     <x-button icon="o-plus" class="btn-primary" />
                 </x-slot:actions>
             </x-header>

             {{ $slot }}
         </x-slot:content>
     </x-main>
 </div>
