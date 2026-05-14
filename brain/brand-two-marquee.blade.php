    <style>
        .hc-marquee-container {
            overflow: hidden;
            width: 100%;
            padding: 30px 0;
            background: #fff;
            position: relative;
        }

        .hc-marquee-content {
            display: flex;
            width: max-content;
            animation: marquee 40s linear infinite;
        }

        .hc-marquee-item {
            flex-shrink: 0;
            padding: 0 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hc-marquee-item img {
            max-height: 70px;
            width: auto;
            object-fit: contain;
            /* filter: grayscale(100%); */
            /* opacity: 0.7; */
            transition: all 0.3s ease;
        }

        .hc-marquee-item:hover img {
            /* filter: grayscale(0%); */
            /* opacity: 1; */
            transform: scale(1.1);
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        /* Optional: Pause on hover */
        .hc-marquee-container:hover .hc-marquee-content {
            animation-play-state: paused;
        }
    </style>

    <section class="brand-two" style="padding-top: 60px; padding-bottom: 60px;">
        <h3 class="section-title__title title-animation" style="text-align: center; margin-bottom: 40px;">Our Suppliers</h3>
        <div class="hc-marquee-container">
            <div class="hc-marquee-content">
                @php
                    $images = $clientImages->count() > 0 ? $clientImages : null;
                @endphp
                
                @if($images)
                    {{-- First Set --}}
                    @foreach($images as $img)
                        <div class="hc-marquee-item">
                            <img src="{{ asset($img->image_path) }}" alt="Supplier Logo">
                        </div>
                    @endforeach
                    {{-- Duplicate Set for Seamless Loop --}}
                    @foreach($images as $img)
                        <div class="hc-marquee-item">
                            <img src="{{ asset($img->image_path) }}" alt="Supplier Logo">
                        </div>
                    @endforeach
                @else
                    {{-- Fallback Static Images --}}
                    @for($i = 0; $i < 2; $i++) {{-- Duplicate loop --}}
                        <div class="hc-marquee-item"><img src="{{ asset("/assets/images/brand/brand-2-1.png") }}" alt=""></div>
                        <div class="hc-marquee-item"><img src="{{ asset("/assets/images/brand/brand-2-2.png") }}" alt=""></div>
                        <div class="hc-marquee-item"><img src="{{ asset("/assets/images/brand/brand-2-3.png") }}" alt=""></div>
                        <div class="hc-marquee-item"><img src="{{ asset("/assets/images/brand/brand-2-4.png") }}" alt=""></div>
                        <div class="hc-marquee-item"><img src="{{ asset("/assets/images/brand/brand-2-5.png") }}" alt=""></div>
                    @endfor
                @endif
            </div>
        </div>
    </section>
