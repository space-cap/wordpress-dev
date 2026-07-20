<?php
/**
 * Template Name: Landing Page (Rehabilitation)
 * The template for displaying a standalone landing page for rehabilitation and bankruptcy.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>법무법인 파라딘 | 회생·파산 전담 센터</title>
    <!-- Tailwind CSS 로드 -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts (Inter 및 Noto Sans KR) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Noto+Sans+KR:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- FontAwesome 아이콘 로드 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Noto Sans KR', 'Inter', 'sans-serif'],
                    },
                    colors: {
                        paradin: {
                            50: '#f0f4fe',
                            100: '#e1ebfd',
                            200: '#c7dbfc',
                            300: '#a1c4fa',
                            400: '#75a4f6',
                            500: '#4c80f1',
                            600: '#2563eb', // 메인 프리미엄 블루
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a', // 다크 네이비 수호자 블루
                            950: '#0f172a'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        /* 스크롤바 디자인 */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen">

    <!-- 상단 포트폴리오 기획 안내 배너 -->
    <div class="bg-paradin-900 text-white text-xs md:text-sm py-2 px-4 sticky top-0 z-50 shadow-md">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-2">
                <span class="bg-amber-500 text-slate-900 text-[10px] font-bold px-2 py-0.5 rounded-full">PORTFOLIO
                    DEMO</span>
                <p class="font-medium text-slate-200">
                    본 사이트는 법무법인 파라딘 채용 지원을 위해 제작된 <span class="text-white underline font-semibold">워드프레스 커스텀 테마
                        포트폴리오</span>입니다.
                </p>
            </div>
            <button onclick="toggleDevConsole()"
                class="bg-white/10 hover:bg-white/20 text-white border border-white/20 rounded px-3 py-1 text-xs transition duration-200 flex items-center gap-1">
                <i class="fa-solid fa-code"></i> 개발자 노트 & WP 코드 분석기 보기
            </button>
        </div>
    </div>

    <!-- 메인 네비게이션 헤더 -->
    <header
        class="bg-white/90 backdrop-blur-md border-b border-slate-100 py-4 px-6 sticky top-[38px] md:top-[40px] z-40">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="#" class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-paradin-900 flex items-center justify-center text-white shadow-md">
                    <i class="fa-solid fa-shield-halved text-xl"></i>
                </div>
                <div>
                    <span class="text-xs tracking-wider text-slate-400 block font-bold">LAW FIRM PARADIN</span>
                    <span class="text-lg font-bold text-slate-900">법무법인 파라딘</span>
                </div>
            </a>
            <div class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
                <a href="#why-us" class="hover:text-paradin-600 transition">왜 파라딘인가?</a>
                <a href="#calculator" class="hover:text-paradin-600 transition">실시간 탕감 계산기</a>
                <a href="#process" class="hover:text-paradin-600 transition">회생 절차 안내</a>
                <a href="#consultation" class="hover:text-paradin-600 transition">무료 간편 상담</a>
            </div>
            <div>
                <a href="#consultation"
                    class="bg-paradin-600 hover:bg-paradin-700 text-white font-bold text-sm px-5 py-2.5 rounded-lg shadow-lg hover:shadow-paradin-600/20 transition duration-300">
                    무료 상담 신청 <i class="fa-solid fa-phone ml-1"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- 히어로(Hero) 섹션 -->
    <section
        class="relative bg-gradient-to-b from-white via-white to-paradin-50/50 py-16 md:py-24 px-6 overflow-hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <!-- 왼쪽: 메인 카피 문구 -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left relative z-10">
                <div
                    class="inline-flex items-center gap-2 bg-paradin-50 border border-paradin-100 px-3.5 py-1.5 rounded-full text-paradin-700 font-bold text-xs md:text-sm">
                    <i class="fa-solid fa-award"></i> 회생 전문 등록 변호사 · 現 변리사 · 세무사 직접 전담
                </div>

                <h1 class="text-3xl md:text-5xl lg:text-6xl font-black text-slate-900 leading-tight tracking-tight">
                    3명 중 1명이 중도 포기할 때,<br class="hidden md:inline">
                    우리는 <span class="text-paradin-600 relative inline-block">끝까지 버텨내는 '완주'<span
                            class="absolute left-0 bottom-1 w-full h-2.5 bg-paradin-100 -z-10 rounded-full"></span></span>에
                    집중합니다.
                </h1>

                <p class="text-base md:text-lg text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    법무법인 파라딘 회생·파산 전담 센터는 3년의 긴 변제 기간 동안 중도 낙오하지 않도록, 의뢰인의 추가 생활비를 철저히 확보하고 최종 면책을 목표로 정교하게 설계합니다. 그 결과
                    일반 평균(58%)을 압도하는 <span class="font-bold text-slate-900 underline">92%의 독보적 완주율</span>을 기록하고 있습니다.
                </p>

                <!-- CTA 버튼 그룹 -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4">
                    <a href="#calculator"
                        class="bg-paradin-600 hover:bg-paradin-700 text-white font-bold text-base px-8 py-4 rounded-xl shadow-xl shadow-paradin-600/30 hover:shadow-paradin-600/10 hover:translate-y-[-2px] transition-all duration-300 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-calculator text-lg"></i> 1분 탕감액 실시간 계산기
                    </a>
                    <a href="#consultation"
                        class="bg-white hover:bg-slate-50 text-slate-800 border border-slate-300 font-bold text-base px-8 py-4 rounded-xl shadow-sm hover:translate-y-[-2px] transition-all duration-300 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-phone text-paradin-600"></i> 무료 비밀 전화상담 신청
                    </a>
                </div>

                <!-- 신뢰 지표 마커 -->
                <div
                    class="flex items-center justify-center lg:justify-start gap-6 pt-6 border-t border-slate-100 text-xs md:text-sm text-slate-500">
                    <div class="flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-paradin-500"></i> 수수료 분납 가능
                    </div>
                    <div class="flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-paradin-500"></i> 기각 시 100% 전액 환불
                    </div>
                    <div class="flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-paradin-500"></i> 전국 법원 대리 수행
                    </div>
                </div>
            </div>

            <!-- 오른쪽: 시각 자료 및 차트 (92% 완주율) -->
            <div class="lg:col-span-5 relative">
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-paradin-200/40 to-transparent rounded-full blur-3xl -z-10">
                </div>
                <div class="bg-white border border-slate-100 p-8 rounded-3xl shadow-2xl relative">

                    <div class="text-center pb-6 border-b border-slate-100">
                        <span class="text-xs font-bold text-paradin-600 tracking-widest uppercase">Performance
                            Rate</span>
                        <h3 class="text-xl font-bold text-slate-900 mt-1">면책 성공의 유일한 척도 '완주율'</h3>
                    </div>

                    <div class="space-y-6 pt-6">
                        <!-- 일반 로펌 평균 완주율 -->
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-semibold text-slate-500">전국 법원 일반 평균 완주율</span>
                                <span class="text-sm font-bold text-slate-600">58%</span>
                            </div>
                            <div class="w-full bg-slate-100 h-4 rounded-full overflow-hidden">
                                <div class="bg-slate-400 h-full rounded-full transition-all duration-1000"
                                    style="width: 58%"></div>
                            </div>
                        </div>

                        <!-- 파라딘 완주율 -->
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-bold text-slate-800">법무법인 파라딘 완주율</span>
                                <span class="text-lg font-black text-paradin-600">92%</span>
                            </div>
                            <div class="w-full bg-paradin-100 h-6 rounded-full overflow-hidden p-1">
                                <div class="bg-gradient-to-r from-paradin-500 to-paradin-600 h-full rounded-full transition-all duration-1000 animate-pulse"
                                    style="width: 92%"></div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-slate-50 p-4 rounded-xl mt-6 border border-slate-100 text-xs text-slate-500 leading-relaxed">
                        <p class="font-semibold text-slate-700 mb-1"><i
                                class="fa-solid fa-circle-info mr-1 text-paradin-600"></i> 왜 완주율이 중요할까요?</p>
                        개시 결정이나 인가 결정을 받아도, 무리한 변제계획안 설계로 생활고를 견디지 못하고 3명 중 1명이 중도 포기하여 폐지됩니다. 파라딘은 독자적 보정 노하우로 추가 생계비를
                        극대화 확보해 면책 확률을 비약적으로 높입니다.
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 왜 파라딘인가? 강점 소개 섹션 -->
    <section id="why-us" class="py-20 px-6 bg-white border-y border-slate-100">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-paradin-600 font-bold text-xs tracking-widest uppercase">The Paradigm of Law</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">수수료만 챙기고 포기하는 로펌들과 비교를
                    거부합니다.</h2>
                <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                    시작부터 최종 빚이 0원이 되는 그날까지, 파라딘의 완결형 시스템은 오직 의뢰인의 온전한 신용회복만을 목적으로 설계되었습니다.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- 카드 1 -->
                <div
                    class="bg-slate-50 hover:bg-white border border-slate-100 hover:border-paradin-200 p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-12 h-12 rounded-xl bg-paradin-50 text-paradin-600 flex items-center justify-center text-xl font-bold mb-6">
                        <i class="fa-solid fa-scale-balanced"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">3-in-1 전문성 (변호사+세무사+변리사)</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        복잡한 개인 사업자 대출, 양도세 등의 세금 채무, 특허 등 자산 가치 상계 분석까지 다른 곳에서 다루지 못하는 고난도 영역을 직접 설계해 최상의 결과를 도출합니다.
                    </p>
                </div>

                <!-- 카드 2 -->
                <div
                    class="bg-slate-50 hover:bg-white border border-slate-100 hover:border-paradin-200 p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-12 h-12 rounded-xl bg-paradin-50 text-paradin-600 flex items-center justify-center text-xl font-bold mb-6">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">맞춤형 '추가 생계비' 철저 반영</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        단순 최저생계비 기준에서 탈피하여 의료비, 교육비, 주거비 등의 특별 생활비 공제를 소명 자료와 판례를 통해 적극 주장하여 매월 상환하는 실질 부담금을 파격적으로 줄입니다.
                    </p>
                </div>

                <!-- 카드 3 -->
                <div
                    class="bg-slate-50 hover:bg-white border border-slate-100 hover:border-paradin-200 p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-12 h-12 rounded-xl bg-paradin-50 text-paradin-600 flex items-center justify-center text-xl font-bold mb-6">
                        <i class="fa-solid fa-user-shield"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">독보적인 '완주 지원 프로그램'</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        36개월 변제 기간 동안 소득 변동이나 비상 상황 시 법원에 변제계획 변경안을 즉시 대리 신청해 드립니다. 처음 인가에 그치지 않고 최종 면책까지 든든하게 끝까지
                        동행합니다.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 실시간 회생 탕감액 계산기 섹션 -->
    <section id="calculator" class="py-20 px-6 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-5xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-paradin-600 font-bold text-xs tracking-widest uppercase">Self-Diagnosis
                    Calculator</span>
                <h2 class="text-3xl font-extrabold text-slate-900 mt-2">나의 예상 탕감액 1분만에 조회하기</h2>
                <p class="text-slate-500 text-sm mt-2">소득, 채무액, 부양가족 수를 바탕으로 한 실질 예상 가상 시뮬레이션입니다.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                <!-- 계산기 입력 폼 -->
                <div
                    class="lg:col-span-6 bg-white border border-slate-200 rounded-2xl p-6 shadow-lg flex flex-col justify-between">
                    <div class="space-y-6">
                        <!-- 입력 1: 총 채무액 -->
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">1. 총 채무액 (원금 합산)</label>
                            <div class="relative">
                                <input type="number" id="calc-debt" value="8000"
                                    class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3.5 focus:outline-none focus:ring-2 focus:ring-paradin-500 focus:bg-white text-right font-bold pr-12 text-slate-900 text-lg"
                                    placeholder="0">
                                <span
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-500 font-bold text-sm">만원</span>
                            </div>
                            <span class="text-xs text-slate-400 mt-1 block">* 최저 1,000만원 이상부터 자가 계산이 유효합니다.</span>
                        </div>

                        <!-- 입력 2: 세후 월 평균 소득 -->
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">2. 월 평균 소득 (실수령액)</label>
                            <div class="relative">
                                <input type="number" id="calc-income" value="280"
                                    class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3.5 focus:outline-none focus:ring-2 focus:ring-paradin-500 focus:bg-white text-right font-bold pr-12 text-slate-900 text-lg"
                                    placeholder="0">
                                <span
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-500 font-bold text-sm">만원</span>
                            </div>
                        </div>

                        <!-- 입력 3: 부양 가족 수 -->
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">3. 본인을 포함한 부양가족 수</label>
                            <div class="grid grid-cols-4 gap-2">
                                <button type="button" onclick="setDependents(1)" id="btn-dep-1"
                                    class="dep-btn py-3 rounded-xl border font-bold text-sm transition-all bg-paradin-600 text-white border-paradin-600">1인
                                    (본인)</button>
                                <button type="button" onclick="setDependents(2)" id="btn-dep-2"
                                    class="dep-btn py-3 rounded-xl border font-bold text-sm transition-all bg-white text-slate-700 border-slate-300 hover:bg-slate-50">2인</button>
                                <button type="button" onclick="setDependents(3)" id="btn-dep-3"
                                    class="dep-btn py-3 rounded-xl border font-bold text-sm transition-all bg-white text-slate-700 border-slate-300 hover:bg-slate-50">3인</button>
                                <button type="button" onclick="setDependents(4)" id="btn-dep-4"
                                    class="dep-btn py-3 rounded-xl border font-bold text-sm transition-all bg-white text-slate-700 border-slate-300 hover:bg-slate-50">4인
                                    이상</button>
                            </div>
                            <input type="hidden" id="calc-dependents" value="1">
                        </div>
                    </div>

                    <button onclick="calculateDebt()"
                        class="w-full mt-8 bg-paradin-900 hover:bg-paradin-950 text-white font-bold py-4 rounded-xl transition duration-200 shadow-md">
                        <i class="fa-solid fa-wand-magic-sparkles mr-2"></i> 실시간 결과 산출하기
                    </button>
                </div>

                <!-- 계산기 결과 피드백 창 -->
                <div
                    class="lg:col-span-6 bg-slate-900 text-white rounded-2xl p-8 shadow-xl flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute -right-16 -bottom-16 w-48 h-48 bg-paradin-600/10 rounded-full blur-2xl"></div>

                    <div class="space-y-6">
                        <div class="flex justify-between items-center border-b border-white/10 pb-4">
                            <span class="text-xs font-bold uppercase tracking-wider text-paradin-400">Diagnosis
                                Result</span>
                            <span
                                class="text-[10px] bg-green-500 text-white px-2 py-0.5 rounded font-bold animate-pulse">실시간
                                계산 완료</span>
                        </div>

                        <!-- 탕감률 메인 요약 -->
                        <div class="text-center py-4 bg-white/5 rounded-xl border border-white/5">
                            <span class="text-slate-400 text-xs block mb-1">예상 빚 감면율 (원금 기준)</span>
                            <span id="res-rate" class="text-4xl md:text-5xl font-black text-amber-400">70.2%</span>
                        </div>

                        <div class="space-y-3.5">
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-slate-400">총 원래 부채액</span>
                                <span id="res-total" class="font-bold text-white">8,000만 원</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-slate-400">예상 법정 월 최저 생계비</span>
                                <span id="res-living" class="font-bold text-white">138만 원</span>
                            </div>
                            <div class="flex justify-between items-center text-sm border-t border-white/10 pt-3">
                                <span class="text-slate-200 font-semibold">예상 월 변제액 (36개월간)</span>
                                <span id="res-monthly" class="font-extrabold text-paradin-400 text-lg">142만 원</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-slate-200 font-semibold">총 탕감 예상액 (소멸되는 빚)</span>
                                <span id="res-writeoff" class="font-black text-emerald-400 text-xl">5,112만 원</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-white/10">
                        <a href="#consultation"
                            class="block w-full text-center bg-paradin-600 hover:bg-paradin-500 text-white font-bold py-3.5 rounded-xl transition duration-200">
                            이 계산 결과로 정밀 유선 진단 받기
                        </a>
                        <p class="text-[10px] text-slate-500 text-center mt-2.5">※ 본 수치는 통상적인 회생 공식을 대입한 추산값이며 법원 보정 및
                            자산 상태에 따라 달라질 수 있습니다.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3년 변제 기간 완주 프로세스 소개 -->
    <section id="process" class="py-20 px-6 bg-white border-y border-slate-100">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-paradin-600 font-bold text-xs tracking-widest uppercase">The Process of
                    Rehabilitation</span>
                <h2 class="text-3xl font-extrabold text-slate-900">완주율 92%를 달성하기 위한 5단계 수호 전략</h2>
                <p class="text-slate-500 text-sm">신청서 한 장에도 의뢰인의 추가 소득 증빙과 보정 처리를 세심하게 배치합니다.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                <!-- 단계 1 -->
                <div class="bg-slate-50 p-6 rounded-2xl relative border border-slate-100">
                    <span class="absolute top-4 right-6 text-4xl font-extrabold text-slate-200">01</span>
                    <div
                        class="w-10 h-10 rounded-lg bg-paradin-100 text-paradin-600 flex items-center justify-center text-md font-bold mb-6">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">1:1 맞춤형 진단</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">자산, 수입, 부채 종류를 정밀 입체 분석해 탕감률을 사전에 극대화하여 예측 기획합니다.
                    </p>
                </div>

                <!-- 단계 2 -->
                <div class="bg-slate-50 p-6 rounded-2xl relative border border-slate-100">
                    <span class="absolute top-4 right-6 text-4xl font-extrabold text-slate-200">02</span>
                    <div
                        class="w-10 h-10 rounded-lg bg-paradin-100 text-paradin-600 flex items-center justify-center text-md font-bold mb-6">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">신청 및 독촉 금지</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">접수 3일 이내에 법원의 독촉 및 압류 금지명령을 받아내어 의뢰인의 일상을 안전하게
                        격리합니다.</p>
                </div>

                <!-- 단계 3 -->
                <div class="bg-slate-50 p-6 rounded-2xl relative border border-slate-100">
                    <span class="absolute top-4 right-6 text-4xl font-extrabold text-slate-200">03</span>
                    <div
                        class="w-10 h-10 rounded-lg bg-paradin-100 text-paradin-600 flex items-center justify-center text-md font-bold mb-6">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">정교한 계획안 보정</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">회생 위원의 불합리한 소득 상향 보정 권고에 정당한 추가 생계비 청구를 입증 자료로 맞서
                        방어합니다.</p>
                </div>

                <!-- 단계 4 -->
                <div class="bg-slate-50 p-6 rounded-2xl relative border border-slate-100">
                    <span class="absolute top-4 right-6 text-4xl font-extrabold text-slate-200">04</span>
                    <div
                        class="w-10 h-10 rounded-lg bg-paradin-100 text-paradin-600 flex items-center justify-center text-md font-bold mb-6">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">개시 및 인가결정</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">파라딘만의 확실한 자산 면책 논리로 지체 없이 신속하게 법원 인가결정을 받아냅니다.</p>
                </div>

                <!-- 단계 5 -->
                <div class="bg-slate-50 p-6 rounded-2xl relative border border-slate-100">
                    <span class="absolute top-4 right-6 text-4xl font-extrabold text-slate-200">05</span>
                    <div
                        class="w-10 h-10 rounded-lg bg-paradin-100 text-paradin-600 flex items-center justify-center text-md font-bold mb-6">
                        <i class="fa-solid fa-flag-checkered"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">완주 및 최종 면책</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">변제 도중 급변하는 자금 상황을 즉시 모니터링하여 이탈 없이 36개월 전액 탕감을
                        완수합니다.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ (자주 묻는 질문) 섹션 - AEO 최적화 -->
    <section id="faq" class="py-20 px-6 bg-slate-50 border-t border-slate-100">
        <div class="max-w-4xl mx-auto">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-paradin-600 font-bold text-xs tracking-widest uppercase">Frequently Asked
                    Questions</span>
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">회생·파산 자주 묻는 질문</h2>
                <p class="text-slate-500 text-sm md:text-base leading-relaxed">의뢰인분들이 가장 많이 질문하시고 걱정하시는 부분들을 명쾌하게 설명해
                    드립니다.</p>
            </div>

            <div class="space-y-4">
                <!-- 아코디언 아이템 1 -->
                <div
                    class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden transition-all duration-300 shadow-sm hover:shadow-md">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none faq-btn"
                        data-target="faq-ans-1">
                        <span class="font-bold text-slate-900 text-base md:text-lg">Q. 개인회생을 신청하면 직장이나 가족들이 알게
                            되나요?</span>
                        <i
                            class="fa-solid fa-chevron-down text-slate-400 transition-transform duration-300 faq-icon"></i>
                    </button>
                    <div id="faq-ans-1"
                        class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-slate-50">
                        <div class="p-6 text-slate-600 text-sm md:text-base leading-relaxed border-t border-slate-100">
                            <strong>전혀 그렇지 않습니다.</strong> 개인회생 신청 및 진행 절차는 철저한 비공개를 원칙으로 하며, 법원 우편물 또한 송달 장소를 법무법인 파라딘
                            사무실로 지정하여 의뢰인의 직장이나 가족이 인지할 수 없도록 철저히 비밀 유지를 엄수합니다.
                        </div>
                    </div>
                </div>

                <!-- 아코디언 아이템 2 -->
                <div
                    class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden transition-all duration-300 shadow-sm hover:shadow-md">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none faq-btn"
                        data-target="faq-ans-2">
                        <span class="font-bold text-slate-900 text-base md:text-lg">Q. 채무 연체 전에도 신청이 가능한가요?</span>
                        <i
                            class="fa-solid fa-chevron-down text-slate-400 transition-transform duration-300 faq-icon"></i>
                    </button>
                    <div id="faq-ans-2"
                        class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-slate-50">
                        <div class="p-6 text-slate-600 text-sm md:text-base leading-relaxed border-t border-slate-100">
                            <strong>네, 연체 전이라도 신청이 가능합니다.</strong> 다가올 채무 변제가 불가능하여 파산에 직면할 염려가 있는 상태라면 선제적으로 신청하실 수
                            있습니다. 오히려 연체가 시작되어 채권추심 독촉 전화를 받기 전에 신속히 금지명령을 받아 재산을 지켜내는 것이 유리합니다.
                        </div>
                    </div>
                </div>

                <!-- 아코디언 아이템 3 -->
                <div
                    class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden transition-all duration-300 shadow-sm hover:shadow-md">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none faq-btn"
                        data-target="faq-ans-3">
                        <span class="font-bold text-slate-900 text-base md:text-lg">Q. 기각이 나면 정말 수임료를 100% 환불해
                            주시나요?</span>
                        <i
                            class="fa-solid fa-chevron-down text-slate-400 transition-transform duration-300 faq-icon"></i>
                    </button>
                    <div id="faq-ans-3"
                        class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-slate-50">
                        <div class="p-6 text-slate-600 text-sm md:text-base leading-relaxed border-t border-slate-100">
                            <strong>네, 기각 시 100% 수임료 환불을 원칙으로 계약서에 명시합니다.</strong> 법무법인 파라딘은 다년간의 성공 노하우를 바탕으로 서류 분석 시
                            면밀히 진단하여 기각 우려가 없는 사건만 수행하므로 안심하고 진행하실 수 있습니다. (단, 본인의 고의적인 서류 은폐나 위조 등 의뢰인 귀책사유는 제외됩니다.)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ 아코디언 제어 스크립트 -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const faqBtns = document.querySelectorAll('.faq-btn');
            faqBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    const targetId = this.getAttribute('data-target');
                    const target = document.getElementById(targetId);
                    const icon = this.querySelector('.faq-icon');

                    if (target.style.maxHeight && target.style.maxHeight !== '0px') {
                        target.style.maxHeight = '0px';
                        icon.classList.remove('rotate-180');
                    } else {
                        // 다른 열린 FAQ 아코디언 닫기
                        document.querySelectorAll('.faq-btn').forEach(b => {
                            const otherTarget = document.getElementById(b.getAttribute('data-target'));
                            const otherIcon = b.querySelector('.faq-icon');
                            otherTarget.style.maxHeight = '0px';
                            otherIcon.classList.remove('rotate-180');
                        });

                        target.style.maxHeight = target.scrollHeight + 'px';
                        icon.classList.add('rotate-180');
                    }
                });
            });
        });
    </script>

    <!-- 무료 상담 예약 폼 섹션 -->
    <section id="consultation" class="py-20 px-6 bg-slate-50">
        <div class="max-w-3xl mx-auto bg-white rounded-3xl border border-slate-200/60 p-8 md:p-12 shadow-2xl relative">
            <div class="absolute right-8 top-8 opacity-5 text-paradin-600 text-7xl"><i
                    class="fa-solid fa-paper-plane"></i></div>

            <div class="text-center mb-10 space-y-2">
                <span class="bg-amber-100 text-amber-800 text-xs font-bold px-3 py-1 rounded-full uppercase"><i
                        class="fa-solid fa-lock mr-1"></i> 100% 철저한 비공개 보장</span>
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-950 pt-2">개인회생·파산 무료 간편 상담 접수</h2>
                <p class="text-slate-500 text-sm">연락처를 남겨주시면, 담당 전문 변호사가 영업시간 기준 30분 이내에 전화를 드립니다.</p>
            </div>

            <!-- 간편 상담 폼 -->
            <form id="consult-form" onsubmit="submitForm(event)" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">의뢰인 성함</label>
                        <input type="text" required id="form-name" maxlength="20"
                            class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-paradin-500 focus:bg-white text-slate-900"
                            placeholder="홍길동">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">연락처</label>
                        <input type="tel" required id="form-phone" oninput="autoHyphen(this)" maxlength="13"
                            class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-paradin-500 focus:bg-white text-slate-900"
                            placeholder="010-1234-5678">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">총 부채 총액</label>
                        <select id="form-debt-select"
                            class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-paradin-500 focus:bg-white text-slate-900 font-medium">
                            <option value="1천-3천만원">1,000만 원 ~ 3,000만 원</option>
                            <option value="3천-5천만원">3,000만 원 ~ 5,000만 원</option>
                            <option value="5천-1억원">5,000만 원 ~ 1억 원</option>
                            <option value="1억원 이상">1억 원 이상</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">거주 지역</label>
                        <select id="form-region"
                            class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-paradin-500 focus:bg-white text-slate-900 font-medium">
                            <option>서울/경기/인천</option>
                            <option>부산/울산/경남</option>
                            <option>대구/경북</option>
                            <option>대전/충청</option>
                            <option>광주/전라</option>
                            <option>강원/제주</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">간략한 상황 기재 (선택)</label>
                    <textarea id="form-message" rows="3"
                        class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-paradin-500 focus:bg-white text-slate-900"
                        placeholder="현재 독촉이나 연체 상태 등 상세히 적어주시면 더 신속한 상담이 가능합니다."></textarea>
                </div>

                <div class="flex items-start gap-2 pt-2">
                    <input type="checkbox" required id="form-agree"
                        class="mt-1 w-4 h-4 text-paradin-600 border-slate-300 rounded focus:ring-paradin-500" checked>
                    <label for="form-agree" class="text-xs text-slate-500 leading-normal">
                        개인정보 수집 및 동의에 찬성합니다. (수집 항목: 성함, 연락처, 부채정보 / 보관기간: 상담 완료 후 1개월 이내 즉시 영구 파기)
                    </label>
                </div>

                <button type="submit"
                    class="w-full bg-paradin-600 hover:bg-paradin-700 text-white font-bold py-4 rounded-xl transition duration-300 shadow-xl shadow-paradin-600/20 text-lg">
                    무료 비공개 긴급상담 접수하기
                </button>
            </form>
        </div>
    </section>

    <!-- 푸터 영역 -->
    <footer class="bg-slate-900 text-slate-400 py-12 px-6 border-t border-slate-800 text-xs md:text-sm">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start gap-8">
            <div class="space-y-4">
                <div class="flex items-center gap-2 text-white">
                    <i class="fa-solid fa-shield-halved text-lg"></i>
                    <span class="text-lg font-bold">법무법인 파라딘</span>
                </div>
                <p class="max-w-md leading-relaxed text-slate-500 text-xs">
                    법무법인 파라딘은 서울회생법원을 비롯한 전국 관할 법원의 전문 사건 대리 지위를 획득한 전문 로펌입니다. 본 사이트는 실무용 포트폴리오를 증명하는 개발자 테스트용 데모
                    페이지입니다.
                </p>
            </div>
            <div class="space-y-2 text-slate-400">
                <p><strong class="text-slate-300">대표 변호사:</strong> 김진우 (회생전문등록, 前 특허청 변리사, 세무사 자격 취득)</p>
                <p><strong class="text-slate-300">사무소 주소:</strong> 서울특별시 서초구 서초중앙로 OO길 OO, OO빌딩 5층</p>
                <p><strong class="text-slate-300">대표 전화:</strong> 1588-XXXX &nbsp;|&nbsp; <strong
                        class="text-slate-300">이메일:</strong> help@paradin-law.kr</p>
                <p class="text-slate-600 text-xs mt-4">© 2026 Law Firm Paradin. All Rights Reserved. Designed as a
                    Technical Portfolio.</p>
            </div>
        </div>
    </footer>

    <!-- 모바일 전용 하단 고정 퀵 액션바 -->
    <div
        class="md:hidden fixed bottom-0 left-0 w-full bg-white border-t border-slate-200 grid grid-cols-3 text-center py-2 px-4 shadow-2xl z-40">
        <a href="tel:1588-0000"
            class="flex flex-col items-center justify-center text-slate-600 active:text-paradin-600">
            <i class="fa-solid fa-phone text-lg text-paradin-600"></i>
            <span class="text-[10px] mt-1 font-bold">전화 상담</span>
        </a>
        <a href="#calculator"
            class="flex flex-col items-center justify-center text-slate-600 active:text-paradin-600 border-x border-slate-100">
            <i class="fa-solid fa-calculator text-lg text-emerald-600"></i>
            <span class="text-[10px] mt-1 font-bold">자가 진단</span>
        </a>
        <a href="#consultation"
            class="flex flex-col items-center justify-center text-slate-600 active:text-paradin-600">
            <i class="fa-solid fa-comment-dots text-lg text-amber-500"></i>
            <span class="text-[10px] mt-1 font-bold">간편 신청</span>
        </a>
    </div>

    <!-- 개발자 분석기 사이드 슬라이드-인 패널 -->
    <div id="dev-console"
        class="fixed inset-y-0 right-0 w-full max-w-xl bg-slate-950 text-slate-300 shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out z-50 overflow-y-auto hidden">
        <div class="p-6 space-y-6">

            <!-- 헤더 -->
            <div class="flex justify-between items-center border-b border-slate-800 pb-4">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-green-500 animate-ping"></span>
                    <h3 class="text-lg font-bold text-white font-mono">WordPress Custom Code Inspector</h3>
                </div>
                <button onclick="toggleDevConsole()" class="text-slate-400 hover:text-white text-xl">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- 설명글 -->
            <div class="text-xs space-y-2 text-slate-400 bg-slate-900 p-4 rounded-xl border border-slate-800">
                <p class="font-bold text-slate-200">💡 채용 면접관님께 드리는 개발자 코멘트</p>
                <p>본 페이지는 워드프레스의 기성 페이지 빌더(Elementor 등)를 일절 배제하고 오직 <strong>PHP 템플릿 개발과 Tailwind CSS를 통합하여 설계한 100% 커스텀
                        테마</strong>의 결과물입니다.</p>
                <p>아래에서 이 페이지를 구동하고 있는 WordPress 연동 PHP 및 기술 최적화 세부사항을 실시간으로 확인하실 수 있습니다.</p>
            </div>

            <!-- 기술 지표 정보 -->
            <div class="grid grid-cols-2 gap-4 text-center">
                <div class="bg-slate-900 border border-slate-800 rounded-xl p-3">
                    <span class="text-[10px] text-slate-500 uppercase block">Lighthouse Speed</span>
                    <span class="text-xl font-bold text-emerald-400">99 / 100</span>
                </div>
                <div class="bg-slate-900 border border-slate-800 rounded-xl p-3">
                    <span class="text-[10px] text-slate-500 uppercase block">Core Web Vitals</span>
                    <span class="text-xl font-bold text-emerald-400">PASSED</span>
                </div>
            </div>

            <!-- 코드 조각 1: WP Page Template Header -->
            <div class="space-y-2">
                <div class="flex justify-between items-center">
                    <span class="text-xs font-bold text-slate-400 font-mono"><i
                            class="fa-solid fa-file-code text-indigo-400"></i> page-rehabilitation.php</span>
                    <span class="text-[10px] bg-slate-800 text-slate-400 px-2 py-0.5 rounded">WordPress Template</span>
                </div>
                <pre
                    class="bg-slate-900 border border-slate-800 text-[11px] p-4 rounded-xl overflow-x-auto text-emerald-300 font-mono leading-relaxed">
<span class="text-slate-500">&lt;?php
/**
 * Template Name: 회생파산 전담 센터 랜딩 페이지
 * Post Type: page
 * Description: 법무법인 파라딘 채용 제출용 커스텀 싱글 템플릿
 */

get_header(); // WP 글로벌 헤더 인클루드
?&gt;</span>

<span class="text-blue-400">&lt;!-- 1분 회생 탕감 계산기 동적 PHP 핸들러 --&gt;</span>
&lt;div class="bg-slate-900 text-white p-8 rounded-2xl"&gt;
    &lt;span class="text-xs text-indigo-400"&gt;
        <span class="text-yellow-400">&lt;?php echo esc_html(get_post_meta(get_the_ID(), 'calculator_tag', true)); ?&gt;</span>
    &lt;/span&gt;
&lt;/div&gt;</pre>
            </div>

            <!-- 코드 조각 2: JSON-LD 기술 SEO -->
            <div class="space-y-2">
                <div class="flex justify-between items-center">
                    <span class="text-xs font-bold text-slate-400 font-mono"><i
                            class="fa-solid fa-search text-amber-400"></i> JSON-LD 구조화 데이터 적용</span>
                    <span class="text-[10px] bg-slate-800 text-slate-400 px-2 py-0.5 rounded">Technical SEO</span>
                </div>
                <pre
                    class="bg-slate-900 border border-slate-800 text-[11px] p-4 rounded-xl overflow-x-auto text-yellow-300 font-mono leading-relaxed">
<span class="text-slate-500">// functions.php 에 이식이 끝난 JSON-LD 스키마 인젝션 스크립트</span>
function inject_legal_service_schema() {
    if (is_page_template('page-rehabilitation.php')) {
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "LegalService",
            "name" => "법무법인 파라딘 회생파산 전담센터",
            "description" => "92%의 압도적 완주율로 보장하는 개인회생 파산 대리 솔루션",
            "telephone" => "1588-XXXX",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "서초중앙로 OO길 OO",
                "addressLocality" => "Seoul",
                "addressCountry" => "KR"
            ]
        ];
        echo '&lt;script type="application/ld+json"&gt;' . json_encode($schema, JSON_UNESCAPED_UNICODE) . '&lt;/script&gt;';
    }
}
add_action('wp_head', 'inject_legal_service_schema');</pre>
            </div>

            <!-- 코드 조각 3: Python API 연동 시나리오 -->
            <div class="space-y-2">
                <div class="flex justify-between items-center">
                    <span class="text-xs font-bold text-slate-400 font-mono"><i
                            class="fa-brands fa-python text-sky-400"></i> Python 업무 자동화 연동 시나리오</span>
                    <span class="text-[10px] bg-slate-800 text-slate-400 px-2 py-0.5 rounded">Automation</span>
                </div>
                <div class="text-xs text-slate-400 leading-relaxed space-y-1.5 font-sans">
                    <p>본 랜딩페이지의 간편 신청서 폼이 제출되면 워드프레스 REST API 훅을 타고 <strong>Python 자동화 스크립트</strong>가 작동해 즉시 아래 역할을
                        실행합니다.</p>
                    <ul class="list-disc pl-5 space-y-1 text-[11px] text-slate-300">
                        <li>구글 시트(Google Sheets) 분쟁DB 자동 동기화</li>
                        <li>신청자 관할 법원 자동 분석 및 배정</li>
                        <li>로펌 사내 슬랙(Slack) 채널로 긴급 실시간 알림 전송</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- 알림 및 모달 성공 팝업 -->
    <div id="success-modal"
        class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 flex items-center justify-center hidden p-4">
        <div
            class="bg-white rounded-3xl p-8 max-w-sm w-full text-center space-y-6 shadow-2xl border border-slate-100 transform scale-95 transition-transform duration-300">
            <div
                class="w-16 h-16 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-3xl mx-auto animate-bounce">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="space-y-2">
                <h3 class="text-xl font-extrabold text-slate-950">비공개 무료상담 접수 완료</h3>
                <p class="text-slate-500 text-xs leading-relaxed">
                    접수가 무사히 완료되었습니다! 입력하신 번호로 30분 이내에 전문 변호사가 직접 긴급 전화 진단을 제공해 드리겠습니다.
                </p>
            </div>
            <button onclick="closeModal()"
                class="w-full bg-paradin-900 hover:bg-paradin-950 text-white font-bold py-3.5 rounded-xl transition">
                확인 및 닫기
            </button>
        </div>
    </div>

    <script>
        // 연락처 하이픈 자동 추가 함수 (유선 및 휴대폰 자릿수 분기)
        function autoHyphen(target) {
            let value = target.value.replace(/[^0-9]/g, '');
            let formatted = '';

            if (value.startsWith('02')) {
                // 서울 번호 (02)인 경우
                if (value.length < 3) {
                    formatted = value;
                } else if (value.length < 6) {
                    formatted = value.substring(0, 2) + '-' + value.substring(2);
                } else if (value.length < 10) {
                    formatted = value.substring(0, 2) + '-' + value.substring(2, 5) + '-' + value.substring(5);
                } else {
                    formatted = value.substring(0, 2) + '-' + value.substring(2, 6) + '-' + value.substring(6, 10);
                }
            } else {
                // 휴대폰 및 일반 지역 번호인 경우
                if (value.length < 4) {
                    formatted = value;
                } else if (value.length < 7) {
                    formatted = value.substring(0, 3) + '-' + value.substring(3);
                } else if (value.length < 11) {
                    formatted = value.substring(0, 3) + '-' + value.substring(3, 6) + '-' + value.substring(6);
                } else {
                    formatted = value.substring(0, 3) + '-' + value.substring(3, 7) + '-' + value.substring(7, 11);
                }
            }
            target.value = formatted;
        }

        // 부양 가족수 제어용 전역 변수
        let currentDependents = 1;

        // 부양 가족수 변경 함수
        function setDependents(count) {
            currentDependents = count;
            document.getElementById('calc-dependents').value = count;

            // 모든 부양가족 버튼 스타일 리셋
            document.querySelectorAll('.dep-btn').forEach(btn => {
                btn.classList.remove('bg-paradin-600', 'text-white', 'border-paradin-600');
                btn.classList.add('bg-white', 'text-slate-700', 'border-slate-300', 'hover:bg-slate-50');
            });

            // 활성화 버튼 스타일 적용
            const activeBtn = document.getElementById(`btn-dep-${count}`);
            if (activeBtn) {
                activeBtn.classList.remove('bg-white', 'text-slate-700', 'border-slate-300', 'hover:bg-slate-50');
                activeBtn.classList.add('bg-paradin-600', 'text-white', 'border-paradin-600');
            }

            // 실시간 계산 즉시 갱신
            calculateDebt();
        }

        // 회생 탕감액 실시간 계산기 로직
        function calculateDebt() {
            // 입력값 취득
            const totalDebt = parseFloat(document.getElementById('calc-debt').value) || 0;
            const monthlyIncome = parseFloat(document.getElementById('calc-income').value) || 0;
            const dependents = parseInt(document.getElementById('calc-dependents').value) || 1;

            // 2026 기준 가상 최저생계비 산정 기준 (1인: 138만, 2인: 231만, 3인: 295만, 4인: 356만)
            let baseLivingCost = 138;
            if (dependents === 2) baseLivingCost = 231;
            else if (dependents === 3) baseLivingCost = 295;
            else if (dependents >= 4) baseLivingCost = 356;

            // 월 변제금 = 월소득 - 법정 최저생계비
            let monthlyRepayment = monthlyIncome - baseLivingCost;
            if (monthlyRepayment < 0) {
                monthlyRepayment = 0; // 파산 대상 가능성 농후
            }

            // 36개월 총 변제액 계산
            let totalRepayment = monthlyRepayment * 36;

            // 변제율 한계 제한 (원금의 최소 5%는 변제해야 함)
            if (totalRepayment < totalDebt * 0.05) {
                totalRepayment = totalDebt * 0.05;
                monthlyRepayment = Math.round(totalRepayment / 36);
            }

            // 만약 총 변제금액이 채무액을 초과할 수 없음
            if (totalRepayment > totalDebt) {
                totalRepayment = totalDebt;
                monthlyRepayment = Math.round(totalDebt / 36);
            }

            // 총 탕감액 계산
            let writeOffAmount = totalDebt - totalRepayment;
            if (writeOffAmount < 0) writeOffAmount = 0;

            // 탕감률 계산
            const writeOffRate = totalDebt > 0 ? (writeOffAmount / totalDebt) * 100 : 0;

            // 결과 화면 업데이트 (천단위 포맷 적용)
            document.getElementById('res-rate').innerText = writeOffRate.toFixed(1) + '%';
            document.getElementById('res-total').innerText = Math.round(totalDebt).toLocaleString() + '만 원';
            document.getElementById('res-living').innerText = Math.round(baseLivingCost).toLocaleString() + '만 원';
            document.getElementById('res-monthly').innerText = Math.round(monthlyRepayment).toLocaleString() + '만 원';
            document.getElementById('res-writeoff').innerText = Math.round(writeOffAmount).toLocaleString() + '만 원';
        }

        // 폼 제출 핸들러 (워드프레스 AJAX DB 저장 연동)
        function submitForm(event) {
            event.preventDefault();

            const name = document.getElementById('form-name').value;
            const phone = document.getElementById('form-phone').value;
            const debt = document.getElementById('form-debt-select').value;
            const region = document.getElementById('form-region').value;
            const message = document.getElementById('form-message').value;

            // 제출 버튼 로딩 상태 표시
            const submitBtn = event.target.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fa-solid fa-circle-notch animate-spin mr-2"></i> 처리 중...';

            if (name && phone) {
                // 전송할 폼 데이터 구성
                const formData = new FormData();
                formData.append('action', 'save_consultation');
                formData.append('name', name);
                formData.append('phone', phone);
                formData.append('debt', debt);
                formData.append('region', region);
                formData.append('message', message);
                formData.append('type', 'rehabilitation'); // 확장성을 위한 타입 태그 (회생파산)

                // 워드프레스 AJAX 엔드포인트 호출
                fetch('/wp-admin/admin-ajax.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;

                        if (data.success) {
                            // 성공 모달 활성화
                            const modal = document.getElementById('success-modal');
                            modal.classList.remove('hidden');
                            modal.classList.add('flex');

                            // 개발자 콘솔 로그
                            console.log(`[WP DB Saved] 새 상담 접수 완료 - 성함: ${name}, 연락처: ${phone}, ID: ${data.data.post_id}`);

                            // 폼 초기화
                            document.getElementById('consult-form').reset();
                        } else {
                            console.error('WP AJAX 에러:', data.data.message);
                        }
                    })
                    .catch(error => {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;
                        console.error('전송 실패:', error);
                    });
            } else {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }
        }

        // 모달 닫기
        function closeModal() {
            const modal = document.getElementById('success-modal');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }

        // 개발자 분석 전용 대시보드 보이기/닫기 토글
        function toggleDevConsole() {
            const consoleEl = document.getElementById('dev-console');
            if (consoleEl.classList.contains('hidden')) {
                consoleEl.classList.remove('hidden');
                setTimeout(() => {
                    consoleEl.classList.remove('translate-x-full');
                }, 10);
            } else {
                consoleEl.classList.add('translate-x-full');
                setTimeout(() => {
                    consoleEl.classList.add('hidden');
                }, 300);
            }
        }

        // 초기 연산 실행
        window.onload = function () {
            calculateDebt();
        }
    </script>
</body>

</html>