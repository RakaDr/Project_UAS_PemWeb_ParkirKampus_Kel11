<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.absolute{position:absolute}.relative{position:relative}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-left-20{left:-5rem}.top-0{top:0}.z-0{z-index:0}.\!row-span-1{grid-row:span 1 / span 1!important}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.-ml-px{margin-left:-1px}.ml-3{margin-left:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.\!hidden{display:none!important}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-5{height:1.25rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-5{width:1.25rem}.w-\[calc\(100\%_\+_8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-\[877px\]{max-width:877px}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-default{cursor:default}.resize{resize:both}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.\!flex-row{flex-direction:row!important}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-items-center{justify-items:center}.gap-2{gap:.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-sm{border-radius:.125rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-gray-300{--tw-border-opacity: 1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.bg-\[\#FF2D20\]\/10{background-color:#ff2d201a}.bg-gray-50{--tw-bg-opacity: 1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from: transparent var(--tw-gradient-from-position);--tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to: #fff var(--tw-gradient-to-position)}.to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#ff2d20}.object-cover{-o-object-fit:cover;object-fit:cover}.object-top{-o-object-position:top;object-position:top}.p-6{padding:1.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.pt-3{padding-top:.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"}.text-sm{font-size:.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.leading-5{line-height:1.25rem}.text-black{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-black\/50{color:#00000080}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.underline{text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\]{--tw-shadow: 0px 14px 34px 0px rgba(0,0,0,.08);--tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity: 1;--tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))}.ring-gray-300{--tw-ring-opacity: 1;--tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))}.ring-transparent{--tw-ring-color: transparent}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.ring-white\/\[0\.05\]{--tw-ring-color: rgb(255 255 255 / .05)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-150{transition-duration:.15s}.duration-300{transition-duration:.3s}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.selection\:bg-\[\#FF2D20\] *::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white *::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white *::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:bg-\[\#FF2D20\]::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:text-black:hover{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.hover\:text-black\/70:hover{color:#000000b3}.hover\:text-gray-400:hover{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.hover\:text-gray-500:hover{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.hover\:ring-black\/20:hover{--tw-ring-color: rgb(0 0 0 / .2)}.focus\:z-10:focus{z-index:10}.focus\:border-blue-300:focus{--tw-border-opacity: 1;border-color:rgb(147 197 253 / var(--tw-border-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.active\:bg-gray-100:active{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.active\:text-gray-500:active{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.active\:text-gray-700:active{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}@media (min-width: 640px){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:flex-1{flex:1 1 0%}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0}.lg\:text-\[\#FF2D20\]{--tw-text-opacity: 1;color:rgb(255 45 32 / var(--tw-text-opacity, 1))}}.rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-gray-600{--tw-border-opacity: 1;border-color:rgb(75 85 99 / var(--tw-border-opacity, 1))}.dark\:bg-black{--tw-bg-opacity: 1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity, 1))}.dark\:bg-zinc-900{--tw-bg-opacity: 1;background-color:rgb(24 24 27 / var(--tw-bg-opacity, 1))}.dark\:via-zinc-900{--tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.dark\:text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.dark\:text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:text-white\/50{color:#ffffff80}.dark\:text-white\/70{color:#ffffffb3}.dark\:ring-zinc-800{--tw-ring-opacity: 1;--tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))}.dark\:hover\:text-gray-300:hover{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white:hover{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white\/70:hover{color:#ffffffb3}.dark\:hover\:text-white\/80:hover{color:#fffc}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity: 1;--tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))}.dark\:focus\:border-blue-700:focus{--tw-border-opacity: 1;border-color:rgb(29 78 216 / var(--tw-border-opacity, 1))}.dark\:focus\:border-blue-800:focus{--tw-border-opacity: 1;border-color:rgb(30 64 175 / var(--tw-border-opacity, 1))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.dark\:active\:bg-gray-700:active{--tw-bg-opacity: 1;background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1))}.dark\:active\:text-gray-300:active{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}}
            </style>
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="relative min-h-screen items-center">
        <div class="absolute inset-0 -z-10 w-full h-auto bg-black/98">
            <img src="{{ asset('images/bg.jpg') }}" alt="" class="w-full h-lvh object-cover object-center opacity-40 rounded-b-4xl" />
        </div>
        <header>
            <nav class="p-5">
            <div class="navbar shadow-sm bg-black/80 p-5 rounded-xl text-white">
                <!-- Navbar Start (Mobile Dropdown) -->
                <div class="navbar-start">
                <div class="dropdown">
                    <button tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                    </button>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content absolute mt-3 z-10 w-52 rounded-box bg-base-100 p-2 shadow">
                    <li><a href="/" class="text-black hover:text-[#F65500] font-bold active:hover:text-[#F65500]">Home</a></li>
                    <li><a href="#" class="text-black hover:text-[#F65500] font-bold">About</a></li>
                    <li><a href="#" class="text-black hover:text-[#F65500] font-bold">Contact</a></li>
                    <li><a href="#" class="text-black hover:text-[#F65500] font-bold">Help</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost" href="/"><img src="{{ asset('images/logo.png') }}" alt="" class="w-40"></a>
                </div>

                <!-- Navbar Center (Desktop Menu) -->
                <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="#" class="hover:text-[#F65500] font-bold mx-2">Home</a></li>
                    <li><a href="#" class="hover:text-[#F65500] font-bold mx-2">About</a></li>
                    <li><a href="#" class="hover:text-[#F65500] font-bold mx-2">Contact</a></li>
                    <li><a href="#" class="hover:text-[#F65500] font-bold mx-2">Help</a></li>
                </ul>
                </div>

                <!-- Navbar End -->
                <div class="navbar-end">
                    @auth
                        <a href="{{ url('/admin') }}" class="btn btn-outline-dark me-2">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ url('/admin/login') }}" class="btn hover:bg-[#F65500] hover:text-white">
                            Log in
                        </a>

                    @if (Route::has('register'))
                        <a href="{{ url('/admin/register') }}" class="btn btn-outline-secondary">
                            Register
                        </a>
                    @endif
                    @endauth
                </div>
            </div>
            </nav>
        </header>

        <main class="flex flex-col items-center justify-center text-center px-6 py-20 space-y-32 mt-14">

            <!-- Hero Section -->
            <section class="max-w-7xl h-100">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="text-left">
                        <h1 class="text-5xl lg:text-7xl font-bold text-white leading-tight">
                            Parkir <span class="text-[#F65500]">Kampus</span>
                        </h1>
                        <h2 class="text-5xl lg:text-6xl font-bold text-white leading-tight">
                            Masa Depan
                        </h2>
                        <p class="text-xl text-gray-300 leading-relaxed max-w-lg">
                            Sistem parkir cerdas dengan teknologi terdepan untuk kemudahan dan keamanan mahasiswa dan staff kampus.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 pt-4">
                            <a
                                class="btn bg-[#F65500] hover:bg-[#F65500]/90 text-white font-semibold px-8 py-4 text-lg transition-all duration-300 hover:scale-105"
                            >
                                Mulai Parkir
                            </a>
                        </div>
                    </div>
                    <div>
                        <img src="" alt="">
                    </div>
                </div>
            </section>

            <!-- Fitur Section -->
            <section id="fitur" class="w-full max-w-6xl">
                <div class="text-center mb-16">
                    <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                        Layanan <span class="text-[#F65500]">Terdepan</span>
                    </h2>
                    <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                        Nikmati berbagai layanan modern yang dirancang khusus untuk memenuhi kebutuhan parkir kampus yang efisien dan aman
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="bg-[#F65500]/20 border-[#F65500]/50 hover:border-[#F65500] p-6 rounded-xl border hover:scale-105 transition">
                        <h3 class="text-xl text-white font-semibold mb-3">Scan QR Masuk-Keluar</h3>
                        <p class="text-white/60">Gunakan QR Code dari aplikasi untuk keluar-masuk parkiran tanpa antri.</p>
                    </div>
                    <div class="bg-[#F65500]/20 border-[#F65500]/50 hover:border-[#F65500] p-6 rounded-xl border hover:scale-105 transition">
                        <h3 class="text-xl text-white font-semibold mb-3">Pantau Slot Parkir</h3>
                        <p class="text-white/60">Lihat ketersediaan lahan parkir secara langsung dari dashboard atau aplikasi.</p>
                    </div>
                    <div class="bg-[#F65500]/20 border-[#F65500]/50 hover:border-[#F65500] p-6 rounded-xl border hover:scale-105 transition">
                        <h3 class="text-xl text-white font-semibold mb-3">Laporan & Riwayat</h3>
                        <p class="text-white/60">Data kendaraan dan riwayat parkir tersimpan aman dan bisa diakses kapan saja.</p>
                    </div>
                </div>
            </section>

            <section class="h-fit">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
                    <!-- Bagian teks, atur order agar di atas saat mobile -->
                    <div class="order-1 md:order-2 md:mt-28 text-center md:text-left md:pr-20">
                        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                            Statistik <span class="text-[#F65500]">Mengagumkan</span>
                        </h2>
                        <p class="text-xl text-gray-300 max-w-3xl mx-auto md:mx-0">
                            Angka-angka yang membuktikan kepercayaan dan kepuasan pengguna terhadap sistem parkir kampus kami
                        </p>
                    </div>

                    <!-- Bagian card -->
                    <div class="order-2 md:order-1 grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <div class="bg-[#F65500]/20 border-[#F65500]/50 hover:border-[#F65500] p-6 rounded-xl border hover:scale-105 transition">
                                <div class="bg-[#F65500]/10 p-4 mx-28 rounded-xl group-hover:bg-[#F65500]/20 transition-colors duration-300">
                                    <div class="text-[#F65500] group-hover:scale-110 transition-transform duration-300">
                                        icon
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold text-white group-hover:text-[#F65500] transition-colors duration-300">
                                    title
                                </h3>
                                <p class="text-gray-300 leading-relaxed">
                                    deskripsi
                                </p>
                            </div>
                            <div class="bg-[#F65500]/20 border-[#F65500]/50 hover:border-[#F65500] p-6 rounded-xl border hover:scale-105 transition mt-4">
                                <div class="bg-[#F65500]/10 p-4 mx-28 rounded-xl group-hover:bg-[#F65500]/20 transition-colors duration-300">
                                    <div class="text-[#F65500] group-hover:scale-110 transition-transform duration-300">
                                        icon
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold text-white group-hover:text-[#F65500] transition-colors duration-300">
                                    title
                                </h3>
                                <p class="text-gray-300 leading-relaxed">
                                    deskripsi
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="bg-[#F65500]/20 border-[#F65500]/50 hover:border-[#F65500] p-6 rounded-xl border hover:scale-105 transition">
                                <div class="bg-[#F65500]/10 p-4 mx-28 rounded-xl group-hover:bg-[#F65500]/20 transition-colors duration-300">
                                    <div class="text-[#F65500] group-hover:scale-110 transition-transform duration-300">
                                        icon
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold text-white group-hover:text-[#F65500] transition-colors duration-300">
                                    title
                                </h3>
                                <p class="text-gray-300 leading-relaxed">
                                    deskripsi
                                </p>
                            </div>
                            <div class="bg-[#F65500]/20 border-[#F65500]/50 hover:border-[#F65500] p-6 rounded-xl border hover:scale-105 transition mt-4">
                                <div class="bg-[#F65500]/10 p-4 mx-28 rounded-xl group-hover:bg-[#F65500]/20 transition-colors duration-300">
                                    <div class="text-[#F65500] group-hover:scale-110 transition-transform duration-300">
                                        icon
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold text-white group-hover:text-[#F65500] transition-colors duration-300">
                                    title
                                </h3>
                                <p class="text-gray-300 leading-relaxed">
                                    deskripsi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="fitur" class="w-full max-w-6xl">
                <div class="text-center mb-16">
                    <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                        Our <span class="text-[#F65500]">Team</span>
                    </h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-5 gap-10">
                    <div class="bg-[#F65500]/20 border-[#F65500]/50 hover:border-[#F65500] p-6 rounded-xl border hover:scale-105 transition">
                        <img src="" alt="">
                        <h3 class="text-xl text-white font-semibold mb-3">Raka Dwi Randika</h3>
                        <p class="text-white/60">0110224109</p>
                    </div>
                    <div class="bg-[#F65500]/20 border-[#F65500]/50 hover:border-[#F65500] p-6 rounded-xl border hover:scale-105 transition">
                        <img src="" alt="">
                        <h3 class="text-xl text-white font-semibold mb-3">Rois Azzam Shiddiq</h3>
                        <p class="text-white/60">0110224156</p>
                    </div>
                    <div class="bg-[#F65500]/20 border-[#F65500]/50 hover:border-[#F65500] p-6 rounded-xl border hover:scale-105 transition">
                        <img src="" alt="">
                        <h3 class="text-xl text-white font-semibold mb-3">Anwar Maulana</h3>
                        <p class="text-white/60">0110224020</p>
                    </div>
                    <div class="bg-[#F65500]/20 border-[#F65500]/50 hover:border-[#F65500] p-6 rounded-xl border hover:scale-105 transition">
                        <img src="" alt="">
                        <h3 class="text-xl text-white font-semibold mb-3">Rama Aditia</h3>
                        <p class="text-white/60">0110224160</p>
                    </div>
                    <div class="bg-[#F65500]/20 border-[#F65500]/50 hover:border-[#F65500] p-6 rounded-xl border hover:scale-105 transition">
                        <img src="" alt="">
                        <h3 class="text-xl text-white font-semibold mb-3">Muhammad Rizqi Nurrohmat</h3>
                        <p class="text-white/60">0110224001</p>
                    </div>
                </div>
            </section>

            <!-- Call To Action -->
            <section class="bg-white/60 w-full py-20 px-8 rounded-3xl shadow-lg text-black text-center">
                <h2 class="text-3xl font-bold mb-4">Ingin Terapkan di Kampusmu?</h2>
                <p class="text-lg mb-6">Daftar sekarang untuk menggunakan sistem parkir kampus modern kami.</p>
                <a href="{{ url('/admin/register') }}" class="bg-[#F65500] text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-black transition">Daftar Sekarang</a>
            </section>

        </main>

        <!-- Footer -->
        <footer class="bg-white dark:bg-gray-900">
            <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
                <div class="lg:flex lg:items-start lg:gap-8">
                <div class="text-teal-600 dark:text-teal-300">
                    <svg class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"
                        fill="currentColor"
                    />
                    </svg>
                </div>

                <div class="mt-8 grid grid-cols-2 gap-8 lg:mt-0 lg:grid-cols-5 lg:gap-y-16">
                    <div class="col-span-2">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Get the latest news!</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse non cupiditate quae nam
                        molestias.
                        </p>
                    </div>
                    </div>

                    <div class="col-span-2 lg:col-span-3 lg:flex lg:items-end">
                    <form class="w-full">
                        <label for="UserEmail" class="sr-only"> Email </label>

                        <div
                        class="border border-gray-100 p-2 focus-within:ring-3 sm:flex sm:items-center sm:gap-4 dark:border-gray-800"
                        >
                        <input
                            type="email"
                            id="UserEmail"
                            placeholder="john@rhcp.com"
                            class="w-full border-none focus:border-transparent focus:ring-transparent sm:text-sm dark:bg-gray-900 dark:text-white"
                        />

                        <button
                            class="mt-1 w-full bg-teal-500 px-6 py-3 text-sm font-bold tracking-wide text-white uppercase transition-none hover:bg-teal-600 sm:mt-0 sm:w-auto sm:shrink-0"
                        >
                            Sign Up
                        </button>
                        </div>
                    </form>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                    <p class="font-medium text-gray-900 dark:text-white">Services</p>

                    <ul class="mt-6 space-y-4 text-sm">
                        <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                            1on1 Coaching
                        </a>
                        </li>

                        <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                            Company Review
                        </a>
                        </li>

                        <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                            Accounts Review
                        </a>
                        </li>

                        <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                            HR Consulting
                        </a>
                        </li>

                        <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                            SEO Optimisation
                        </a>
                        </li>
                    </ul>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                    <p class="font-medium text-gray-900 dark:text-white">Company</p>

                    <ul class="mt-6 space-y-4 text-sm">
                        <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                            About
                        </a>
                        </li>

                        <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                            Meet the Team
                        </a>
                        </li>

                        <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                            Accounts Review
                        </a>
                        </li>
                    </ul>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                    <p class="font-medium text-gray-900 dark:text-white">Helpful Links</p>

                    <ul class="mt-6 space-y-4 text-sm">
                        <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                            Contact
                        </a>
                        </li>

                        <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                            FAQs
                        </a>
                        </li>

                        <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                            Live Chat
                        </a>
                        </li>
                    </ul>
                    </div>

                    <ul class="col-span-2 flex justify-start gap-6 lg:col-span-5 lg:justify-end">
                    <li>
                        <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                        >
                        <span class="sr-only">Facebook</span>

                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                            fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd"
                            />
                        </svg>
                        </a>
                    </li>

                    <li>
                        <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                        >
                        <span class="sr-only">Instagram</span>

                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                            fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"
                            />
                        </svg>
                        </a>
                    </li>

                    <li>
                        <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                        >
                        <span class="sr-only">Twitter</span>

                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                            />
                        </svg>
                        </a>
                    </li>

                    <li>
                        <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                        >
                        <span class="sr-only">GitHub</span>

                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                            fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd"
                            />
                        </svg>
                        </a>
                    </li>

                    <li>
                        <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                        >
                        <span class="sr-only">Dribbble</span>

                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                            fill-rule="evenodd"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                            clip-rule="evenodd"
                            />
                        </svg>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>

                <div class="mt-8 border-t border-gray-100 pt-8 dark:border-gray-800">
                <div class="sm:flex sm:justify-between">
                    <p class="text-xs text-gray-500 dark:text-gray-400">
                    &copy; 2022. Company Name. All rights reserved.
                    </p>

                    <ul class="mt-8 flex flex-wrap justify-start gap-4 text-xs sm:mt-0 lg:justify-end">
                    <li>
                        <a href="#" class="text-gray-500 transition hover:opacity-75 dark:text-gray-400">
                        Terms & Conditions
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-gray-500 transition hover:opacity-75 dark:text-gray-400">
                        Privacy Policy
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-gray-500 transition hover:opacity-75 dark:text-gray-400">
                        Cookies
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </footer>



    </div>
    </body>
</html>
