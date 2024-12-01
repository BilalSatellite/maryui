<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppBrand extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'HTML'
                <a href="/" wire:navigate>
                    <!-- Hidden when collapsed -->
                    <!-- <div {{ $attributes->class(["hidden-when-collapsed"]) }}>
                        <div class="flex items-center gap-2">
                            <x-icon name="o-square-3-stack-3d" class="w-6 -mb-1 text-purple-500" />
                            <span class="text-3xl font-bold text-transparent me-3 bg-gradient-to-r from-purple-500 to-pink-300 bg-clip-text ">
                                app
                            </span>
                        </div>
                    </div> -->
                <div {{ $attributes->class(["hidden-when-collapsed"]) }}>  
                <div class="flex items-center">
                    <img src="img/logo/smi3.png" alt="satellite  Logo" class="h-12 " />
                    <div>
                        <h2 class="-mb-1 font-[Poppins] text-brand50 text-2xl font-bold leading-tight tracking-widest"
                        :class="{
                                ' text-brandBlack': scrolledFromTop,
                                'text-brand50': !
                                    scrolledFromTop,
                                'text-brand900': NavisOpen
                            }"
                       >
                            
                            Satellite
                        </h2>
                        <p class="-mt-1 text-sm leading-tight text-center text-brand300 "
                        :class="{
                                ' text-brandBlack': scrolledFromTop,
                                'text-brand300': !
                                    scrolledFromTop,
                                'text-brand800': NavisOpen
                            }"
                        >
                            Mobile Institute
                        </p>
                        
                    </div>
                </div>
                </div>
                    <!-- Display when collapsed -->
                    <div class="display-when-collapsed hidden mx-5 mt-4 lg:mb-6 h-[28px]">
                        <x-icon name="s-square-3-stack-3d" class="w-6 -mb-1 text-purple-500" />
                    </div>
                </a>
            HTML;
    }
}
