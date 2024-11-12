@extends('admin.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('content')
    <div class="owl-carousel counter-carousel owl-theme">
        <!-- Card for Category -->
        <div class="item">
            <div class="card border-0 zoom-in shadow-lg bg-light-info">
                <div class="card-body">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category mb-3 text-info"
                            width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 4h6v6h-6z"></path>
                            <path d="M14 4h6v6h-6z"></path>
                            <path d="M4 14h6v6h-6z"></path>
                            <path d="M14 14h6v6h-6z"></path>
                        </svg>
                        <p class="fw-semibold fs-3 text-info mb-1">Category</p>
                        <h5 class="fw-bold text-info mb-0">{{ $count_category ?? 0 }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card for Alat -->
        <div class="item">
            <div class="card border-0 zoom-in shadow-lg bg-light-primary">
                <div class="card-body">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools mb-3 text-primary"
                            width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 21l3 -3l5 5l4 -4l-5 -5"></path>
                            <path d="M12 13v6"></path>
                            <path d="M3 21l3 -3"></path>
                            <path d="M9 3l6 6"></path>
                        </svg>
                        <p class="fw-semibold fs-3 text-primary mb-1">Alat</p>
                        <h5 class="fw-bold text-primary mb-0">{{ $count_alat ?? 0 }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card for Tipe -->
        <div class="item">
            <div class="card border-0 zoom-in shadow-lg bg-light-secondary">
                <div class="card-body">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-settings mb-3 text-secondary" width="50" height="50"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19.9 12.1a8 8 0 1 0 -7.8 7.8"></path>
                            <path d="M12 6v6"></path>
                            <path d="M12 12l5 5"></path>
                        </svg>
                        <p class="fw-semibold fs-3 text-secondary mb-1">Tipe</p>
                        <h5 class="fw-bold text-secondary mb-0">{{ $count_tipe ?? 0 }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(function() {
            $(".counter-carousel").owlCarousel({
                loop: true,
                margin: 30,
                mouseDrag: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplaySpeed: 1500,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    576: {
                        items: 2,
                    },
                    768: {
                        items: 3,
                    },
                    1200: {
                        items: 3,
                    }
                },
            });
        });
    </script>
@endpush
