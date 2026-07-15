<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        // 로컬스토리지 혹은 시스템 설정에 따른 다크모드 즉각 초기화 (깜빡임 방지)
        (function () {
            var theme = localStorage.getItem('theme');
            if (theme === 'dark' || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-black font-pretendard'); ?>>
    <?php wp_body_open(); ?>

    <nav id="gnb"
        class="fixed top-0 left-0 right-0 z-50 w-full transition-all duration-300 bg-transparent border-b border-white/10">
        <div
            class="max-w-[1520px] mx-auto px-5 lg:px-10 py-4 lg:py-6 flex items-center justify-between transition-all duration-300">
            <!-- 로고 -->
            <a href="/" class="flex items-center gap-2">
                <!-- 텍스트 로고 형태 -->
                <span
                    class="font-lora text-[22px] lg:text-[28px] font-bold tracking-tight text-white transition-all duration-300 gnb-logo">
                    법무법인 이엘
                </span>
            </a>

            <!-- 데스크톱 메뉴 -->
            <div class="hidden lg:block">
                <ul class="flex items-center gap-[30px] xl:gap-[40px]">
                    <li><a href="/about/"
                            class="gnb-menu-link text-[18px] font-medium text-white hover:opacity-75 transition-all duration-300">법인
                            소개</a></li>
                    <li><a href="/practice-areas/"
                            class="gnb-menu-link text-[18px] font-medium text-white hover:opacity-75 transition-all duration-300">법률
                            서비스</a></li>
                    <li class="relative group">
                        <button
                            class="gnb-menu-link text-[18px] font-medium text-white hover:opacity-75 transition-all duration-300 flex items-center gap-1.5 focus:outline-none">
                            이엘 피드
                            <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-1/2 -translate-x-1/2 top-full pt-4 hidden group-hover:block z-50">
                            <ul
                                class="w-[140px] bg-white border border-black/5 rounded-xl py-3 px-2 shadow-lg flex flex-col gap-1.5 backdrop-blur-[15px]">
                                <li><a href="/news/"
                                        class="block px-4 py-2 text-[15px] font-medium text-gray-700 hover:text-iel-blue hover:bg-[#eef4ff] rounded-lg transition-colors text-center">뉴스</a>
                                </li>
                                <li><a href="/insight/"
                                        class="block px-4 py-2 text-[15px] font-medium text-gray-700 hover:text-iel-blue hover:bg-[#eef4ff] rounded-lg transition-colors text-center">인사이트</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="/careers/"
                            class="gnb-menu-link text-[18px] font-medium text-white hover:opacity-75 transition-all duration-300">인재
                            채용</a></li>
                    <li><a href="/contact/"
                            class="gnb-menu-link text-[18px] font-medium text-white hover:opacity-75 transition-all duration-300 px-5 py-2.5 rounded-full border border-white/20 hover:border-white/50 hover:bg-white/10 transition-all duration-300">상담
                            신청</a></li>

                    <!-- 테마 토글 버튼 (데스크톱) -->
                    <li>
                        <button id="theme-toggle-btn"
                            class="gnb-menu-link flex items-center justify-center w-10 h-10 rounded-full border border-white/20 hover:bg-white/10 text-white transition-all duration-300 focus:outline-none"
                            aria-label="테마 전환">
                            <!-- 해 아이콘 (다크모드 시 노출) -->
                            <svg id="theme-icon-sun" class="w-5 h-5 hidden" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.344l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z">
                                </path>
                            </svg>
                            <!-- 달 아이콘 (라이트모드 시 노출) -->
                            <svg id="theme-icon-moon" class="w-5 h-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                                </path>
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>

            <!-- 모바일 메뉴 버튼 -->
            <button id="mobile-menu-btn" class="lg:hidden flex flex-col gap-[6px] p-2" aria-label="메뉴 열기">
                <span class="gnb-hamburger w-[28px] h-[1.5px] bg-white transition-all duration-300"></span>
                <span class="gnb-hamburger w-[20px] h-[1.5px] bg-white transition-all duration-300 self-end"></span>
            </button>
        </div>

        <!-- 모바일 메뉴 오버레이 -->
        <div id="mobile-menu"
            class="hidden lg:hidden fixed inset-0 bg-[#1a1a1a] dark:bg-[#0b0f19] z-50 flex flex-col justify-between p-6 overflow-y-auto">
            <div class="flex justify-between items-center h-[60px] shrink-0">
                <span class="font-lora text-[22px] font-bold text-white">법무법인 이엘</span>
                <div class="flex items-center gap-4">
                    <!-- 테마 토글 버튼 (모바일) -->
                    <button id="mobile-theme-toggle-btn"
                        class="flex items-center justify-center w-10 h-10 rounded-full border border-white/20 hover:bg-white/10 text-white transition-all duration-300 focus:outline-none"
                        aria-label="테마 전환">
                        <!-- 해 아이콘 -->
                        <svg id="mobile-theme-icon-sun" class="w-5 h-5 hidden" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.344l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z">
                            </path>
                        </svg>
                        <!-- 달 아이콘 -->
                        <svg id="mobile-theme-icon-moon" class="w-5 h-5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                            </path>
                        </svg>
                    </button>
                    <button id="mobile-menu-close" class="p-2" aria-label="메뉴 닫기">
                        <span
                            class="block w-[28px] h-[1.5px] bg-white rotate-45 translate-y-[0.75px] transition-all duration-300"></span>
                        <span
                            class="block w-[28px] h-[1.5px] bg-white -rotate-45 -translate-y-[0.75px] transition-all duration-300"></span>
                    </button>
                </div>
            </div>
            <ul class="flex flex-col gap-8 my-auto text-left py-10">
                <li><a href="/about/" class="text-[24px] font-semibold text-white tracking-wide">법인 소개</a></li>
                <li><a href="/practice-areas/" class="text-[24px] font-semibold text-white tracking-wide">법률 서비스</a>
                </li>
                <li>
                    <button id="mobile-feed-toggle"
                        class="w-full flex items-center justify-between text-[24px] font-semibold text-white tracking-wide text-left focus:outline-none">
                        <span>이엘 피드</span>
                        <svg id="mobile-feed-arrow" class="w-6 h-6 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <ul id="mobile-feed-submenu" class="hidden flex-col gap-4 pl-4 mt-4">
                        <li><a href="/news/"
                                class="text-[20px] font-medium text-white/70 hover:text-white transition-colors">뉴스</a>
                        </li>
                        <li><a href="/insight/"
                                class="text-[20px] font-medium text-white/70 hover:text-white transition-colors">인사이트</a>
                        </li>
                    </ul>
                </li>
                <li><a href="/careers/" class="text-[24px] font-semibold text-white tracking-wide">인재 채용</a></li>
                <li><a href="/contact/" class="text-[24px] font-semibold text-white tracking-wide">상담 신청</a></li>
            </ul>
            <div class="text-[14px] text-gray-500 font-light shrink-0">
                © 2026 Legal Firm IEL. All Rights Reserved.
            </div>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const gnb = document.getElementById('gnb');
            const logo = gnb.querySelector('.gnb-logo');
            const menuLinks = gnb.querySelectorAll('.gnb-menu-link');
            const hamburgers = gnb.querySelectorAll('.gnb-hamburger');
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuClose = document.getElementById('mobile-menu-close');

            // 다크모드 엘리먼트 획득
            const themeToggleBtn = document.getElementById('theme-toggle-btn');
            const mobileThemeToggleBtn = document.getElementById('mobile-theme-toggle-btn');

            const sunIcon = document.getElementById('theme-icon-sun');
            const moonIcon = document.getElementById('theme-icon-moon');
            const mobileSunIcon = document.getElementById('mobile-theme-icon-sun');
            const mobileMoonIcon = document.getElementById('mobile-theme-icon-moon');

            // 1. 테마 상태에 맞는 아이콘 표시 업데이트 함수
            function updateThemeIcons() {
                const isDark = document.documentElement.classList.contains('dark');

                if (isDark) {
                    if (sunIcon) sunIcon.classList.remove('hidden');
                    if (moonIcon) moonIcon.classList.add('hidden');
                    if (mobileSunIcon) mobileSunIcon.classList.remove('hidden');
                    if (mobileMoonIcon) mobileMoonIcon.classList.add('hidden');
                } else {
                    if (sunIcon) sunIcon.classList.add('hidden');
                    if (moonIcon) moonIcon.classList.remove('hidden');
                    if (mobileSunIcon) mobileSunIcon.classList.add('hidden');
                    if (mobileMoonIcon) mobileMoonIcon.classList.remove('hidden');
                }
            }

            // 2. 테마 토글 함수
            function toggleTheme() {
                const isDark = document.documentElement.classList.contains('dark');
                if (isDark) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                }
                updateThemeIcons();
                handleScroll(); // 다크모드에 맞춰 즉시 GNB 스타일 재반영
            }

            // 3. 토글 이벤트 바인딩
            if (themeToggleBtn) {
                themeToggleBtn.addEventListener('click', toggleTheme);
            }
            if (mobileThemeToggleBtn) {
                mobileThemeToggleBtn.addEventListener('click', toggleTheme);
            }

            // 초기 테마 상태에 맞게 아이콘 동기화
            updateThemeIcons();

            // 스크롤 시 GNB 배경 및 내부 텍스트 스타일 변화
            function handleScroll() {
                const isDark = document.documentElement.classList.contains('dark');
                if (window.scrollY > 50) {
                    gnb.classList.remove('bg-transparent', 'border-white/10');

                    if (isDark) {
                        // 다크 모드일 때 스크롤 후 GNB 색상
                        gnb.classList.add('bg-[#0b0f19]/95', 'shadow-sm', 'border-white/5', 'backdrop-blur-[15px]');
                    } else {
                        // 라이트 모드일 때 스크롤 후 GNB 색상
                        gnb.classList.add('bg-white/95', 'shadow-sm', 'border-black/5', 'backdrop-blur-[15px]');
                    }

                    logo.classList.remove('text-white');
                    logo.classList.add('text-black'); // CSS 파일의 다크모드 클래스가 white로 오버라이딩함

                    hamburgers.forEach(h => {
                        h.classList.remove('bg-white');
                        h.classList.add('bg-black');
                    });
                    menuLinks.forEach(link => {
                        link.classList.remove('text-white');
                        link.classList.add('text-black');
                        if (link.classList.contains('border-white/20')) {
                            link.classList.remove('border-white/20', 'hover:border-white/50', 'hover:bg-white/10');
                            link.classList.add('border-black/20', 'hover:border-black/50', 'hover:bg-black/5');
                        }
                    });
                } else {
                    gnb.classList.add('bg-transparent', 'border-white/10');

                    if (isDark) {
                        gnb.classList.remove('bg-[#0b0f19]/95', 'shadow-sm', 'border-white/5', 'backdrop-blur-[15px]');
                    } else {
                        gnb.classList.remove('bg-white/95', 'shadow-sm', 'border-black/5', 'backdrop-blur-[15px]');
                    }

                    logo.classList.add('text-white');
                    logo.classList.remove('text-black');
                    hamburgers.forEach(h => {
                        h.classList.add('bg-white');
                        h.classList.remove('bg-black');
                    });
                    menuLinks.forEach(link => {
                        link.classList.add('text-white');
                        link.classList.remove('text-black');
                        if (link.classList.contains('border-black/20')) {
                            link.classList.add('border-white/20', 'hover:border-white/50', 'hover:bg-white/10');
                            link.classList.remove('border-black/20', 'hover:border-black/50', 'hover:bg-black/5');
                        }
                    });
                }
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll(); // 초기 상태 설정

            // 모바일 메뉴 열기/닫기
            if (mobileMenuBtn && mobileMenu && mobileMenuClose) {
                mobileMenuBtn.addEventListener('click', function () {
                    mobileMenu.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                });

                mobileMenuClose.addEventListener('click', function () {
                    mobileMenu.classList.add('hidden');
                    document.body.style.overflow = '';
                });
            }

            // 모바일 이엘 피드 서브메뉴 토글
            const mobileFeedToggle = document.getElementById('mobile-feed-toggle');
            const mobileFeedSubmenu = document.getElementById('mobile-feed-submenu');
            const mobileFeedArrow = document.getElementById('mobile-feed-arrow');
            if (mobileFeedToggle && mobileFeedSubmenu && mobileFeedArrow) {
                mobileFeedToggle.addEventListener('click', function () {
                    const isHidden = mobileFeedSubmenu.classList.contains('hidden');
                    if (isHidden) {
                        mobileFeedSubmenu.classList.remove('hidden');
                        mobileFeedSubmenu.classList.add('flex');
                        mobileFeedArrow.classList.add('rotate-180');
                    } else {
                        mobileFeedSubmenu.classList.add('hidden');
                        mobileFeedSubmenu.classList.remove('flex');
                        mobileFeedArrow.classList.remove('rotate-180');
                    }
                });
            }
        });
    </script>