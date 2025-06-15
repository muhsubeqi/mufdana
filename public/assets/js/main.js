//------------ Table of Contents -----------------

// Section
// --- Header ----
// ------ Add fixed header ------
// ------ Open menu mobile ------
// --- Map ---
// ------ Initial leaflet map ------
// ------ Initial marker array ------
// --- Brand ----
// ------ List brand ------
// --- Categories ----
// ------ Popular categories home3 ------
// --- Freelancers ----
// ------ Expert Freelancers home5 ------
// --- Projects ----
// ------ Projects home6 ------
// --- Services ----
// ------ Active menu tab ------
// ------ Popular services home2 ------
// ------ Feature services home3 ------
// ------ List thumb images service detail ------
// --- Testimonials ----
// ------ List testimonials 2 item ------
// ------ List testimonials 3 item ------
// ------ List testimonials center home3 ------
// ------ List testimonials home5 ------
// ------ List testimonials home6 ------
// --- FAQs ----
// --- List location ----
// ------ List location home10 ------
// ------ List location home11 ------
// --- Modal ----
// ------ Open popup ------
// ------ Close popup ------
// ------ Sidebar ------
// ------ Add filter to screen when click ------
// ------ Price range ------
// ------ Age range ------
// ------ Radius range ------
// ------ Handle number delivery popup Apply ------
// ------ Handle change cols number ------

// --- Dashboard ----
// ------ Chart Dashboard ------
// ------ Remove item dashboard ------
// ------ Remove active message ------
// ------ Display preview image when choose file ------
// ------ Handle select category, tool, language ------
// ------ Text editor ------
// ------ Candidates Dashboard: My Portfolio ------

// Components
// --- Select ---
// --- Active Wishlist icon ---
// --- Toggle button ---

// Animation
// --- Toastify ---
// --- Scroll reveal ---


; (function (win, $) {
    // Header
    // Add fixed header
    const handleFixedHeader = function () {
        const header = $(".header")

        if (window.scrollY > 200) {
            header.addClass("fixed");
            $('.scroll-to-top-btn').addClass("active");
        } else {
            header.removeClass("fixed");
            $('.scroll-to-top-btn').removeClass("active");
        }
    }

    // Open menu mobile
    const handleOpenHeaderMobile = function () {
        const menuMobile = $(".menu_mobile")

        $(".humburger_btn").on("click", function () {
            menuMobile.toggleClass('open')
            $('body').addClass('scroll_locked')
        })

        $(".menu_mobile_close").on("click", function () {
            menuMobile.removeClass('open')
            $('body').removeClass('scroll_locked')
        })

        $('.nav_mobile .nav_item').on("click", function () {
            if (!$(this).hasClass("open")) {
                $(this).addClass("open")
            }
        });

        $('.nav_mobile .sub_nav_mobile .nav_item').on("click", function () {
            if (!$(this).hasClass("open")) {
                $(this).addClass("open")
            }
        });

        $('.sub_nav_mobile .back_btn').on("click", function (e) {
            e.stopPropagation()
            $(this).closest('.nav_item').removeClass('open')
        });
    }

    // Map
    // Initial leaflet map
    if ($('#map').length > 0) {
        var map = L.map('map').setView([51.505, -0.09], 13);

        // Street
        // L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     maxZoom: 19,
        //     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        // }).addTo(map);

        // CartoDB Positron (Light colors, bright tones):
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://carto.com">CartoDB</a>'
        }).addTo(map);

        // CartoDB Dark Matter (Dark color, dark tone):
        // L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
        //     attribution: '&copy; <a href="https://carto.com">CartoDB</a>'
        // }).addTo(map);

        var locateIcon = L.icon({
            iconUrl: '/assets/images/location/icon.png',
            iconSize: [60, 60], // size of the icon
            popupAnchor: [0, -20] // point from which the popup should open relative to the iconAnchor
        });

        // Initial marker array
        const markers = [
            {
                lat: 51.5001,
                lng: -0.0999,
                companyImg: "./assets/images/company/1.png",
                companyName: "rockstar games london",
                jobName: "Full Stack Developer",
                address: "367 king james street, london, UK"
            },
            {
                lat: 51.5101,
                lng: -0.1555,
                companyImg: "./assets/images/company/2.png",
                companyName: "tech innovators",
                jobName: "frontend developer",
                address: "13 upper grovest, london, United Kingdom"
            },
            {
                lat: 51.5225,
                lng: -0.0111,
                companyImg: "./assets/images/company/3.png",
                companyName: "creative solutions",
                jobName: "UI/UX designer",
                address: "24D3 empson road, west ham, UK"
            }
        ];

        markers.forEach(function (item) {
            var marker = L.marker([item.lat, item.lng], { icon: locateIcon }).addTo(map);

            marker.bindPopup(`
                <a href="jobs-detail1.html" class="jobs_info flex gap-4">
                    <img src=${item.companyImg} alt=${item.companyName} class="jobs_avatar flex-shrink-0 w-15 h-15 rounded-full" />
                    <div href="jobs-detail1.html" class="jobs_detail flex flex-col gap-0.5">
                        <span class="jobs_company text-sm font-semibold text-primary capitalize">${item.companyName}</span>
                        <strong class="jobs_name text-title -style-1 text-black capitalize">${item.jobName}</strong>
                        <div class="jobs_address -style-1 text-secondary">
                            <span class="ph ph-map-pin text-lg"></span>
                            <span class="address caption1 align-top capitalize">${item.address}</span>
                        </div>
                    </div>
                </a>`
            );
        })
    }

    // List brand
    var swiperListBrand = new Swiper(".swiper-list-brand", {
        pagination: { clickable: true, el: ".swiper-pagination" },
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        slidesPerView: 2,
        spaceBetween: 12,
        breakpoints: {
            640: {
                slidesPerView: 3,
                spaceBetween: 12,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 0,
            },
            1280: {
                slidesPerView: 6,
                spaceBetween: 0,
            },
        },
    });

    // Popular categories home3
    var swiperPopularCategories = new Swiper(".swiper-popular-categories", {
        navigation: {
            prevEl: ".custom-button-prev",
            nextEl: ".custom-button-next",
        },
        loop: true,
        freeMode: false,
        slidesPerView: 2,
        spaceBetween: 16,
        breakpoints: {
            576: {
                slidesPerView: 3,
                spaceBetween: 16,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
            1320: {
                slidesPerView: 6,
                spaceBetween: 30,
            },
        },
    });

    // Expert Freelancers home5
    var swiperExpertFreelancers = new Swiper(".swiper-expert_freelancers", {
        navigation: {
            prevEl: ".custom-button-prev3",
            nextEl: ".custom-button-next3",
        },
        loop: true,
        slidesPerView: 1,
        spaceBetween: 16,
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1320: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
    });

    // Projects home6
    var swiperProjects6 = new Swiper(".swiper-projects6", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 16,
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
        },
    });

    // Active menu tab
    const handleActiveMenu = function () {
        $(".tab_btn").each(function () {
            if ($(this).hasClass("active")) {
                let indicator = $(this).closest('.menu_tab').find(".indicator");
                if (indicator.length > 0) {
                    indicator.css('width', $(this)[0].getBoundingClientRect().width + "px")
                    indicator.css('left', $(this)[0].getBoundingClientRect().left - $(this)[0].closest('.menu').getBoundingClientRect().left + "px")
                }
            }
        })

        $('.tab_btn').on('click', function () {
            // Find parent section include menu, tabs
            const $section = $(this).closest('section, .list_category, .list_tags, .list_pagination');

            // active menu
            if ($section.length > 0) {
                $section.find('.tab_btn').removeClass('active');
                $(this).addClass('active');

                // change indicator
                $(".tab_btn").each(function () {
                    if ($(this).hasClass("active")) {
                        let indicator = $(this).closest('.menu_tab').find(".indicator");
                        if (indicator.length > 0) {
                            indicator.css('width', $(this)[0].getBoundingClientRect().width + "px")
                            indicator.css('left', $(this)[0].getBoundingClientRect().left - $(this)[0].closest('.menu').getBoundingClientRect().left + "px")
                        }
                    }
                })

                // change aria-selected menu
                $section.find('.tab_btn').attr('aria-selected', 'false')
                $(this).attr('aria-selected', 'true')

                // show loading
                $section.find('.tab_list.active').addClass('loading');

                // active tabs
                const $ariaControl = '#' + $(this).attr('aria-controls');

                setTimeout(function () {
                    $($ariaControl).addClass('active').siblings().removeClass('active');

                    // change aria-hidden tabs
                    $section.find('.tab_list').attr('aria-hidden', 'true');
                    $($ariaControl).attr('aria-hidden', 'false');

                    // remove loading
                    $section.find('.tab_list.active').removeClass('loading');
                }, 200)
            }
        })

        // category header when hover
        $('.category_link').on('mouseenter', function () {
            // active menu
            $('.category_block').find('.category_link').removeClass('active');
            $(this).addClass('active');

            // change aria-selected menu
            $('.category_block').find('.category_link').attr('aria-selected', 'false')
            $(this).attr('aria-selected', 'true')

            // active tabs
            const $ariaControl = '#' + $(this).attr('aria-controls');
            $($ariaControl).addClass('active').siblings().removeClass('active');

            // change aria-hidden tabs
            $('.category_block').find('.tab_list').attr('aria-hidden', 'true');
            $($ariaControl).attr('aria-hidden', 'false');
        })
    }

    // Popular services home2
    var swiperPopularServices = new Swiper(".swiper-popular_services", {
        navigation: {
            prevEl: ".custom-button-prev",
            nextEl: ".custom-button-next",
        },
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        slidesPerView: 2,
        spaceBetween: 16,
        breakpoints: {
            640: {
                slidesPerView: 3,
                spaceBetween: 16,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1280: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
        },
    });

    // Feature services home3
    var swiperPopularCategories = new Swiper(".swiper-feature_services", {
        navigation: {
            prevEl: ".custom-button-prev2",
            nextEl: ".custom-button-next2",
        },
        loop: true,
        slidesPerView: 1,
        spaceBetween: 16,
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 16,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1280: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
    });

    // List thumb images service detail
    var swiperListServiceDetail = new Swiper(".swiper-list-images", {
        loop: true,
        spaceBetween: 12,
        slidesPerView: 3,
        watchSlidesProgress: true,
        breakpoints: {
            640: {
                slidesPerView: 4,
                spaceBetween: 16,
            },
        },
    });

    var swiperThumbServiceDetail = new Swiper(".swiper-thumb-images", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".custom-button-next",
            prevEl: ".custom-button-prev",
        },
        thumbs: {
            swiper: swiperListServiceDetail,
        },
    });

    // List testimonials 2 item
    var swiperListTestimonials = new Swiper(".swiper-list-testimonials.style-2", {
        pagination: { clickable: true, el: ".swiper-pagination" },
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 16,
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
        },
    });

    // List testimonials 3 item
    var swiperListTestimonials = new Swiper(".swiper-list-testimonials.style-3", {
        pagination: { clickable: true, el: ".swiper-pagination" },
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 16,
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });

    // List testimonials center home3
    $('.list-testimonials.-style-3').slick({
        dots: true,
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 2,
        touchThreshold: 100,
        swipe: true,
        swipeToSlide: true,
        speed: 500,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    // List testimonials home5
    var swiperListTestimonials5 = new Swiper(".swiper-list-testimonials5", {
        navigation: {
            prevEl: ".custom-button-prev4",
            nextEl: ".custom-button-next4",
        },
        loop: true,
        slidesPerView: 1,
        spaceBetween: 24,
    });

    // List testimonials home6
    const handleActiveAvatar6 = function (swiper) {
        const currentSlideIndex = swiper.activeIndex;
        $('.testimonials_avatar').each(function () {
            if (Number($(this).attr('data-item')) === (currentSlideIndex + 1)) {
                $(this).fadeIn(250);
            } else {
                $(this).fadeOut(250);
            }
        })
    }

    var swiperListTestimonials6 = new Swiper(".swiper-list-testimonials6", {
        navigation: {
            prevEl: ".custom-button-testimonials-prev",
            nextEl: ".custom-button-testimonials-next",
        },
        slidesPerView: 1,
        spaceBetween: 24,
        on: {
            init: function () {
                handleActiveAvatar6(this)
            },
            slideChange: function () {
                handleActiveAvatar6(this)
            }
        }
    });

    // List testimonials center home12
    $('.list-testimonials.-style-12').slick({
        dots: true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        touchThreshold: 100,
        swipe: true,
        swipeToSlide: true,
        speed: 500,
        centerMode: true,
        centerPadding: '250px',
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    centerPadding: '50px',
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    centerPadding: '150px',
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerMode: true,
                    centerPadding: '100px',
                }
            },
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerMode: true,
                    centerPadding: '150px',
                }
            },
        ]
    });

    // FAQs
    const handleFaq = function () {
        $(".faq_item .heading, .toggle_item .heading").on('click', function () {
            $(this).closest('.faq_item, .toggle_item').toggleClass('active').siblings('.faq_item, .toggle_item').removeClass('active');
            $(this).closest('.faq_item, .toggle_item').find('.answer, .toggle_menu').slideToggle(300)
            $(this).closest('.faq_item, .toggle_item').siblings('.faq_item, .toggle_item').find('.answer, .toggle_menu').slideUp(300);
        })
    }

    // List location home10
    var swiperLocation = new Swiper(".swiper-location", {
        navigation: {
            prevEl: ".custom-button-prev",
            nextEl: ".custom-button-next",
        },
        loop: true,
        slidesPerView: 2,
        spaceBetween: 16,
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 16,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1280: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
    });

    // List location home11
    $('.slick-list-location').slick({
        dots: true,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 5,
        touchThreshold: 100,
        swipe: true,
        swipeToSlide: true,
        centerMode: true,
        centerPadding: '200px',
        speed: 500,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerPadding: '40px',
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerPadding: '60px',
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerPadding: '100px',
                }
            },
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 1840,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    centerPadding: '200px',
                }
            },
        ]
    });

    // Countdown time
    const countDownTime = function (hours, minutes, seconds, infinite) {
        // Set time to countdown
        var duration = (hours * 60 * 60) + (minutes * 60) + (seconds); // change to seconds

        var timer = setInterval(function () {
            var hoursLeft = Math.floor(duration / 3600);
            var minutesLeft = Math.floor((duration % 3600) / 60);
            var secondsLeft = duration % 60;

            // Show time
            $('.countdown_time .hour').text(hoursLeft + "h");
            $('.countdown_time .minute').text(minutesLeft + "m");
            $('.countdown_time .second').text(secondsLeft + "s");

            // decrease time
            duration--;

            if (duration < 0) {
                if (infinite === true) {
                    // reset countdown
                    countDownTime(hours, minutes, seconds, infinite);
                } else {
                    // stop countdown
                    clearInterval(timer);
                }
            }
        }, 1000);
    }

    // Open popup
    const handleOpenPopup = function () {
        const btnOpenPopup = $('.btn_open_popup')

        btnOpenPopup.on("click", function (e) {
            e.preventDefault()

            const popupType = $(this).data('type')
            $('.modal_item').each(function (e) {
                if ($(this).data('type') === popupType) {
                    $(this).addClass('open')
                    $('body').addClass('scroll_locked')
                }
            })
        })

        $('.modal_item').on("click", function (e) {
            e.stopPropagation()
        })
    }

    // Close popup
    const handleClosePopup = function () {
        const modal = $(".modal")

        modal.on('click', function () {
            modal.find('>.open').removeClass('open')
            $('body').removeClass('scroll_locked')
        })

        $('.close_popup_btn').on('click', function () {
            modal.find('>.open').removeClass('open')
            $('body').removeClass('scroll_locked')
        })
    }

    // Sidebar
    const handleOpenSidebar = function () {
        const sidebar = $(".sidebar")

        $(".filter_btn").on("click", function () {
            sidebar.toggleClass('open')
            $('body').addClass('scroll_locked')
        })

        sidebar.on("click", function (e) {
            e.stopPropagation()
        })
    }

    // Add filter to screen when click
    const handleAddFilter = function () {
        const optionItems = $(".select_block .list_option li");
        const checkboxItems = $(".filter_section .checkbox_block .checkbox");

        optionItems.on('click', function () {
            let dataItem = $(this).attr('data-item');
            const filterSection = $(this).closest('.filter_section');

            if (filterSection.length > 0) {
                const filterType = filterSection.attr('class').split(' ')[1];

                // Check and remove old items in $('.list_filtered .list') for current filter_section
                $('.list_filtered .list .selected_item[data-type="' + filterType + '"]').remove();

                // Create new item and add to $('.list_filtered .list')
                const selectedItem = `
                    <button class="selected_item inline-flex items-center gap-1 py-1 px-2 border border-line rounded-full capitalize duration-300 hover:border-black" data-type="${filterType}">
                        <span class="ph ph-x text-sm"></span>
                        <span class="caption1">${dataItem}</span>
                    </button>
                `

                // Add item to $('.list_filtered .list')
                $('.list_filtered .list').append(selectedItem)

                handleOpenListFiltered()
            }
        })

        checkboxItems.change(function () {
            var selectedId = $(this).attr('id');
            var selectedLabel = $(this).data('label');

            if ($(this).is(':checked')) {
                // Create new item and add to $('.list_filtered .list')
                const selectedItem = `
                    <button class="selected_item inline-flex items-center gap-1 py-1 px-2 border border-line rounded-full capitalize duration-300 hover:border-black" data-id="${selectedId}">
                        <span class="ph ph-x text-sm"></span>
                        <span class="caption1">${selectedLabel}</span>
                    </button>
                `

                // Add item to $('.list_filtered .list')
                $('.list_filtered .list').append(selectedItem)
            } else {
                // Remove selected item
                $('.list_filtered .list').find(`.selected_item[data-id="${selectedId}"]`).remove();
            }

            handleOpenListFiltered()
        })

        // Remove item
        $(document).on('click', '.selected_item', function () {
            $(this).remove();

            // checkbox
            var itemId = $(this).data('id');
            $('#' + itemId).prop('checked', false);

            handleOpenListFiltered()
        });

        // Remove all item
        $(document).on('click', '.clear_all_btn', function () {
            $('.list_filtered .list').text('');
            $('.checkbox_block .checkbox').prop('checked', false);
            handleOpenListFiltered()
        });

        // Toggle list_filtered
        const handleOpenListFiltered = function () {
            if ($('.list_filtered .list .selected_item').length < 1) {
                $('.list_filtered').removeClass('open')
            } else {
                $('.list_filtered').addClass('open')
            }
        }
    }

    // Price range
    const handlePriceRange = function () {
        const rangeInput = $('.filter_price .range_input .input')
        const progress = $('.filter_price .tow_bar_block .progress')
        const minPrice = $('.filter_price .price_min input')
        const maxPrice = $('.filter_price .price_max input')
        let priceGap = 200

        rangeInput.on('input', function () {
            let minValue = parseInt(rangeInput.eq(0).val())
            let maxValue = parseInt(rangeInput.eq(1).val())

            if (maxValue - minValue <= priceGap) {
                if ($(this).hasClass('range_min')) {
                    rangeInput.eq(0).val(maxValue - priceGap)
                    minValue = maxValue - priceGap
                } else {
                    rangeInput.eq(1).val(minValue + priceGap)
                    maxValue = minValue + priceGap
                }
            } else {
                progress.css({
                    'left': (minValue / rangeInput.eq(0).attr('max')) * 100 + "%",
                    'right': 100 - (maxValue / rangeInput.eq(1).attr('max')) * 100 + "%"
                });
            }

            minPrice.val(minValue)
            maxPrice.val(maxValue)
        })

        minPrice.on('change', function () {
            let maxValue = parseInt(rangeInput.eq(1).val())

            if ($(this).val() < 0) {
                $(this).val(0)
                rangeInput.eq(0).val(0)
                progress.css({ 'left': "0%" });
            } else if ($(this).val() < maxValue - priceGap) {
                rangeInput.eq(0).val($(this).val())
                progress.css({ 'left': ($(this).val() / rangeInput.eq(0).attr('max')) * 100 + "%" });
            } else if ($(this).val() >= maxValue - priceGap) {
                $(this).val(maxValue - priceGap)
                rangeInput.eq(0).val(maxValue - priceGap)
                progress.css({ 'left': ((maxValue - priceGap) / rangeInput.eq(0).attr('max')) * 100 + "%" });
            }
        })

        minPrice.on('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault()
                maxPrice.focus()
            }
        })

        maxPrice.on('change', function () {
            let minValue = parseInt(rangeInput.eq(0).val())

            if (parseInt($(this).val()) > rangeInput.eq(1).attr('max')) {
                $(this).val(rangeInput.eq(1).attr('max'))
                rangeInput.eq(1).val(rangeInput.eq(1).attr('max'))
                progress.css({ 'right': "0%" });
            } else if (parseInt($(this).val()) > minValue + priceGap && parseInt($(this).val()) <= rangeInput.eq(1).attr('max')) {
                rangeInput.eq(1).val($(this).val())
                progress.css({ 'right': 100 - ($(this).val() / rangeInput.eq(1).attr('max')) * 100 + "%" });
            } else if (parseInt($(this).val()) <= minValue + priceGap) {
                $(this).val(minValue + priceGap)
                rangeInput.eq(1).val(minValue + priceGap)
                progress.css({ 'right': 100 - ((minValue + priceGap) / rangeInput.eq(1).attr('max')) * 100 + "%" });
            }
        })

        maxPrice.on('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault()
                $(this).blur()
            }
        })
    }

    // Age range
    const handleAgeRange = function () {
        const rangeInput = $('.filter_age .range_input .input')
        const progress = $('.filter_age .tow_bar_block .progress')
        const minAge = $('.filter_age .age_min')
        const maxAge = $('.filter_age .age_max')
        let ageGap = 5

        rangeInput.on('input', function () {
            let minValue = parseInt(rangeInput.eq(0).val())
            let maxValue = parseInt(rangeInput.eq(1).val())

            if (maxValue - minValue <= ageGap) {
                if ($(this).hasClass('range_min')) {
                    rangeInput.eq(0).val(maxValue - ageGap)
                    minValue = maxValue - ageGap
                } else {
                    rangeInput.eq(1).val(minValue + ageGap)
                    maxValue = minValue + ageGap
                }
            } else {
                progress.css({
                    'left': (minValue / rangeInput.eq(0).attr('max')) * 100 + "%",
                    'right': 100 - (maxValue / rangeInput.eq(1).attr('max')) * 100 + "%"
                });
            }

            minAge.text(minValue)
            maxAge.text(maxValue)
        })
    }

    // Radius range
    const handleRadius = function () {
        const rangeInput = $('.filter_radius .range_input .input')
        const progress = $('.filter_radius .tow_bar_block .progress')

        rangeInput.on('input', function () {
            let radiusValue = parseInt(rangeInput.val());
            progress.css({ 'right': 100 - (radiusValue / rangeInput.attr('max')) * 100 + "%" });
            $('.filter_radius .radius').text(radiusValue + 'km');
        })
    }

    // Handle number delivery popup Apply
    const handleNumberDeliveryPopupApply = function () {
        $('.delivery .minus_btn').on('click', function (e) {
            e.preventDefault()
            let currentValue = parseInt($('.delivery input').val())
            $('.delivery input').val(currentValue - 1)

            if (parseInt($('.delivery input').val()) < 2) {
                $(this).addClass('disabled')
            }
        })

        $('.delivery .plus_btn').on('click', function (e) {
            e.preventDefault()
            let currentValue = parseInt($('.delivery input').val())
            $('.delivery input').val(currentValue + 1)

            if (parseInt($('.delivery input').val()) > 1) {
                $('.delivery .minus_btn').removeClass('disabled')
            }
        })
    }

    // Handle change layout cols number
    const handleLayoutColsNumber = function () {
        $('.layout_btn').on('click', function (e) {
            e.preventDefault()

            if ($(this).hasClass('cols_5') && !$(this).hasClass('active')) {
                // add class active
                $('.layout_btn').removeClass('active')
                $(this).addClass('active')

                // Remove all class start with cols_
                $('.list_layout_cols').removeClass(function (index, className) {
                    return (className.match(/(^|\s)cols_\S+/g) || []).join(' ');
                });

                // add class
                $('.list_layout_cols').addClass('cols_5');
            }
            else if ($(this).hasClass('cols_4') && !$(this).hasClass('active')) {
                // add class active
                $('.layout_btn').removeClass('active')
                $(this).addClass('active')

                // Remove all class start with cols_
                $('.list_layout_cols').removeClass(function (index, className) {
                    return (className.match(/(^|\s)cols_\S+/g) || []).join(' ');
                });

                // add class
                $('.list_layout_cols').addClass('cols_4')
            }
            else if ($(this).hasClass('cols_3') && !$(this).hasClass('active')) {
                // add class active
                $('.layout_btn').removeClass('active')
                $(this).addClass('active')

                // Remove all class start with cols_
                $('.list_layout_cols').removeClass(function (index, className) {
                    return (className.match(/(^|\s)cols_\S+/g) || []).join(' ');
                });

                // add class
                $('.list_layout_cols').addClass('cols_3')
            }
            else if ($(this).hasClass('cols_2') && !$(this).hasClass('active')) {
                // add class active
                $('.layout_btn').removeClass('active')
                $(this).addClass('active')

                // Remove all class start with cols_
                $('.list_layout_cols').removeClass(function (index, className) {
                    return (className.match(/(^|\s)cols_\S+/g) || []).join(' ');
                });

                // add class
                $('.list_layout_cols').addClass('cols_2')
            }
            else if ($(this).hasClass('cols_1') && !$(this).hasClass('active')) {
                // add class active
                $('.layout_btn').removeClass('active')
                $(this).addClass('active')

                // Remove all class start with cols_
                $('.list_layout_cols').removeClass(function (index, className) {
                    return (className.match(/(^|\s)cols_\S+/g) || []).join(' ');
                });

                // add class
                $('.list_layout_cols').addClass('cols_1')
            }
        })
    }

    // Remove item dashboard
    const handleRemoveItemDashboard = function () {
        let itemToDelete;

        $('.btn_delete').on('click', function (e) {
            e.preventDefault()

            itemToDelete = $(this).closest('tr.item, li.item');

            if ($('.modal_delete').length <= 0) {
                itemToDelete.remove();
            }
        });

        $('.btn_confirm_delete').on('click', function () {
            itemToDelete.remove();
            $('.modal_delete').removeClass('open')
        });
    }

    // Remove active message
    const handleActiveMessage = function () {
        $('.chat_item').on('click', function () {
            $(this).addClass('active').siblings().removeClass('active')

            let dataPerson = $(this).data('chat')
            $('.chat_box').each(function () {
                if ($(this).data('chat') === dataPerson) {
                    $(this).addClass('open').siblings().removeClass('open')
                }
            })
        })

        $('.back_to_list_btn').on('click', function () {
            $('.chat_item').removeClass('active')
            $('.chat_box').removeClass('open')
        })
    }

    // Display preview image when choose file
    const handleDisplayPreviewImage = function () {
        $('#uploadImage, #uploadLogo, #uploadBanner').on('change', function (event) {
            const file = event.target.files[0];
            let img = $(this).closest('.upload_image').find('.upload_img')

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    img.attr('src', e.target.result).show();
                }
                reader.readAsDataURL(file);
            }
        });

        // Portfolio Multiple Images Preview
        $('#multipleImages').on('change', function (event) {
            const files = event.target.files;
            const $imagePreviews = $('.image-previews');

            // Loop through each selected file
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const $preview = $(`
                            <div class="image-preview">
                                <img src="${e.target.result}">
                                <button class="remove-image shadow-md">x</button>
                            </div>
                        `);
                        $imagePreviews.append($preview);
                    }
                    reader.readAsDataURL(file);
                }
            }
        });

        // Handle image removal
        $('.image-previews').on('click', '.remove-image', function () {
            $(this).closest('.image-preview').remove();
        });
    }

    // Handle select category, tool, language
    const handleInputSelect = function () {
        var categories = ['UX Design', 'UI Design', 'Web Development', 'Graphic Design', 'Content Writing', 'SEO', 'Marketing', 'Data Science'];
        var languages = ['English', 'Spanish', 'French', 'German', 'Chinese', 'Japanese', 'Korean'];
        var tools = ['Photoshop', 'Illustrator', 'Figma', 'Sketch', 'VSCode', 'Sublime Text', 'Atom'];

        function setupAutocomplete(inputClass, data) {
            $('.' + inputClass).each(function () {
                var $input = $(this);
                var $categoryList = $input.siblings('.categoryList');
                var $selectedCategories = $input.siblings('.selectedCategories');

                $input.on('keyup', function () {
                    var inputValue = $input.val().toLowerCase();
                    var filteredCategories = data.filter(function (item) {
                        return item.toLowerCase().includes(inputValue);
                    });
                    displayCategoryList(filteredCategories, $categoryList);
                });

                function displayCategoryList(items, list) {
                    list.empty();
                    if (items.length > 0) {
                        items.forEach(function (item) {
                            list.append('<li>' + item + '</li>');
                        });
                        list.show();
                    } else {
                        list.append('<li class="no-data">No data</li>');
                        list.show();
                    }
                }

                $categoryList.on('click', 'li', function () {
                    if ($(this).hasClass('no-data')) {
                        return;
                    }
                    var selectedItem = $(this).text();
                    if (!$selectedCategories.text().includes(selectedItem)) {
                        $selectedCategories.append('<span class="selected-category">' + selectedItem + '</span>');
                    }
                    $input.val('');
                    $categoryList.hide();
                });

                $selectedCategories.on('click', '.selected-category', function () {
                    $(this).remove();
                });

                $(document).click(function (event) {
                    if (!$(event.target).closest('.category-selector').length) {
                        $categoryList.hide();
                    }
                });
            });
        }

        setupAutocomplete('categoryInput', categories);
        setupAutocomplete('languageInput', languages);
        setupAutocomplete('toolsInput', tools);
    }

    // Text editor
    if ($('#editor').length > 0) {
        const quill = new Quill('#editor', {
            theme: 'snow'
        });
    }

    // Candidates Dashboard: My Portfolio
    var swiperListPortfolio = new Swiper(".swiper-list-portfolio", {
        navigation: {
            prevEl: ".custom-button-prev",
            nextEl: ".custom-button-next",
        },
        loop: true,
        slidesPerView: 1,
        spaceBetween: 16,
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1320: {
                slidesPerView: 3,
                spaceBetween: 24,
            },
        },
    });

    // Select
    const handleSelectBlock = function () {
        const selectBlock = $(".select_block");
        const listOption = $(".select_block .list_option");
        const optionItems = $(".select_block .list_option li");
        const formInput = $(".select_block .form_input");

        if (selectBlock.length > 0) {
            selectBlock.on('click', function () {
                let list = $(this).find('.list_option');
                let isOpen = list.hasClass('open');

                $('.list_option').removeClass('open');

                if (!isOpen) {
                    list.addClass('open');
                }
            })

            optionItems.on('click', function (e) {
                e.stopPropagation()
                listOption.removeClass('open');
                let dataItem = $(this).attr('data-item')
                $(this).closest('.select_block').find('.selected').text(dataItem)
            })

            formInput.on('click', function (e) {
                e.stopPropagation()
            })

            $(window).on('click', function (e) {
                if (!$(e.target).closest('.select_block').length) {
                    listOption.removeClass('open');
                }
            })
        }
    }

    // Active wishlist icon
    const handleActiveWishlistIcon = function () {
        $('.add_wishlist_btn').on('click', function (e) {
            e.preventDefault()
            $(this).toggleClass('active')
        })
    }

    // Toggle button
    const handleToggleButton = function () {
        $('.toggle_btn').on('click', function () {
            if (!$(this).hasClass('disabled')) {
                $(this).toggleClass('active');
            }
        });
    }

    // Rate
    const handleRate = function () {
        var selectedRating = 0;

        // Handle mouse enter (hover) event
        $('.user_rating .star').on('mouseenter', function () {
            var rating = $(this).data('value');
            highlightStars(rating);
        });

        // Handle mouse leave event
        $('.user_rating .list_rate').on('mouseleave', function () {
            highlightStars(selectedRating);
        });

        // Handle click event
        $('.user_rating .star').on('click', function () {
            selectedRating = $(this).data('value');
            highlightStars(selectedRating);
        });

        // Function to highlight stars
        function highlightStars(rating) {
            $('.user_rating .star').each(function () {
                var starValue = $(this).data('value');
                if (starValue <= rating) {
                    $(this).css('color', 'var(--yellow)');
                } else {
                    $(this).css('color', 'var(--line)');
                }
            });
        }

        // Handle form submission
        $('#form-review .form').on('submit', function (e) {
            if (selectedRating === 0) {
                e.preventDefault(); // Prevent form submission
                alert('Please select your rating before submit the comment.');
            } else {
                $('#form-review .form').append('<input type="hidden" name="rating" value="' + selectedRating + '">');
            }
        });
    }

    // Toastify
    const handleToastify = function () {
        const showToastify = function () {
            setTimeout(function () {
                $('.toastify').addClass('active')
            }, [300])

            setTimeout(function () {
                $('.toastify').removeClass('active')
            }, [5000])
        }

        if ($('#map').length > 0) {
            showToastify()
        }

        $('.add_bookmark_btn').on('click', function () {
            showToastify()
        })

        $('.toastify_close_btn').on('click', function () {
            $('.toastify').removeClass('active')
        })
    }

    // Scroll reveal
    const handleReveal = function () {
        var reveal = $(".animate");

        reveal.each(function (index, element) {
            const windowHeight = window.innerHeight;
            const revealTop = element.getBoundingClientRect().top;
            const revealpoint = 400 * 100 / 1920;

            if (revealTop < windowHeight - revealpoint) {
                $(element).addClass("animate_active");
            }
        });
    }

    // Scroll to top
    const handleScrollTop = function () {
        $('.scroll-to-top-btn').on('click', function (e) {
            e.preventDefault()
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        })
    }

    $(win).scroll(function () {
        handleFixedHeader()
        handleReveal()
    }).scroll();

    $(win).on('load', function () {
        handleOpenHeaderMobile()
        handleActiveMenu()
        handleFaq()
        countDownTime(40, 32, 30, false)
        handleClosePopup()
        handleOpenPopup()
        handleOpenSidebar()
        handleAddFilter()
        handlePriceRange()
        handleAgeRange()
        handleRadius()
        handleNumberDeliveryPopupApply()
        handleLayoutColsNumber()
        handleRemoveItemDashboard()
        handleActiveMessage()
        handleDisplayPreviewImage()
        handleInputSelect()
        handleSelectBlock()
        handleActiveWishlistIcon()
        handleToggleButton()
        handleRate()
        handleToastify()
        handleScrollTop()
    });
})(window, window.jQuery);
