@extends('layouts.layout3')
@section('title', 'Coming Soon || Courtice Home Health Care')
@section('content')
  <style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600&display=swap');

    .cs-wrap {
      font-family: 'DM Sans', sans-serif;
      background: #F4F8FB;
      border-radius: 16px;
      overflow: hidden;
      min-height: 520px;
      position: relative;
      /* margin: 50px auto; */
      /* max-width: 1200px; */
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
    }

    .cs-header {
      background: #0D2137;
      padding: 16px 28px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .cs-logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .cs-logo-mark {
      width: 34px;
      height: 34px;
      background: #D4581A;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .cs-logo-mark svg {
      display: block;
    }

    .cs-brand {
      font-size: 13px;
      font-weight: 600;
      color: #fff;
      line-height: 1.2;
    }

    .cs-brand span {
      display: block;
      font-size: 10px;
      font-weight: 400;
      color: #88AACC;
      text-transform: uppercase;
      letter-spacing: 0.07em;
    }

    .cs-nav {
      display: flex;
      gap: 20px;
    }

    .cs-nav a {
      font-size: 12px;
      color: #88AACC;
      text-decoration: none;
      font-weight: 500;
    }

    .cs-nav a.active {
      color: #fff;
    }

    .cs-hero {
      background: linear-gradient(135deg, #4a3276 0%, #4a3276 55%, #4a3276 100%);
      /* background: linear-gradient(135deg, #0D2137 0%, #163350 55%, #1B4F7A 100%); */
      padding: 80px 48px 72px;
      position: relative;
      overflow: hidden;
    }

    .cs-hero::before {
      content: '';
      position: absolute;
      right: -60px;
      top: -60px;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: rgba(212, 88, 26, 0.08);
    }

    .cs-hero::after {
      content: '';
      position: absolute;
      right: 80px;
      bottom: -80px;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background: rgba(221, 232, 240, 0.06);
    }

    .cs-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: rgba(212, 88, 26, 0.18);
      border: 1px solid rgba(212, 88, 26, 0.35);
      color: #F0936A;
      font-size: 11px;
      font-weight: 600;
      padding: 5px 12px;
      border-radius: 99px;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      margin-bottom: 22px;
    }

    .cs-badge-dot {
      width: 6px;
      height: 6px;
      background: #D4581A;
      border-radius: 50%;
      animation: pulse 1.8s ease-in-out infinite;
    }

    @keyframes pulse {

      0%,
      100% {
        opacity: 1;
        transform: scale(1);
      }

      50% {
        opacity: 0.5;
        transform: scale(0.7);
      }
    }

    .cs-headline {
      font-family: 'DM Serif Display', serif;
      font-size: 48px;
      font-style: italic;
      color: #fff;
      line-height: 1.1;
      margin: 0 0 15px;
      max-width: 550px;
    }

    .cs-headline .accent {
      color: #F0936A;
      font-style: normal;
    }

    .cs-subline {
      font-size: 17px;
      color: #88AACC;
      line-height: 1.6;
      margin: 0 0 40px;
      max-width: 480px;
      font-weight: 400;
    }

    .cs-countdown {
      display: flex;
      gap: 15px;
      margin-bottom: 40px;
    }

    .cs-unit {
      text-align: center;
      background: rgba(255, 255, 255, 0.07);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      padding: 15px 20px 12px;
      min-width: 80px;
    }

    .cs-unit-num {
      font-size: 36px;
      font-weight: 600;
      color: #fff;
      line-height: 1;
      font-family: 'DM Serif Display', serif;
    }

    .cs-unit-label {
      font-size: 10px;
      color: #88AACC;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-top: 6px;
      font-weight: 600;
    }

    .cs-divider {
      font-size: 32px;
      color: rgba(255, 255, 255, 0.2);
      align-self: center;
      margin-bottom: 18px;
      font-weight: 300;
    }

    .cs-notify-row {
      display: flex;
      gap: 12px;
      max-width: 450px;
    }

    .cs-input {
      flex: 1;
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.18);
      border-radius: 10px;
      padding: 14px 20px;
      font-size: 14px;
      color: #fff;
      font-family: 'DM Sans', sans-serif;
      outline: none;
      transition: all 0.3s;
    }

    .cs-input:focus {
      background: rgba(255, 255, 255, 0.15);
      border-color: rgba(255, 255, 255, 0.3);
    }

    .cs-input::placeholder {
      color: rgba(255, 255, 255, 0.4);
    }

    .cs-btn {
      background: #D4581A;
      color: #fff;
      border: none;
      border-radius: 10px;
      padding: 14px 28px;
      font-size: 14px;
      font-weight: 700;
      font-family: 'DM Sans', sans-serif;
      cursor: pointer;
      white-space: nowrap;
      transition: all 0.3s;
    }

    .cs-btn:hover {
      background: #E66524;
      transform: translateY(-2px);
    }

    .cs-float-card {
      position: absolute;
      right: 60px;
      top: 50%;
      transform: translateY(-50%);
      background: #fff;
      border-radius: 20px;
      padding: 28px;
      width: 260px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
      z-index: 2;
    }

    .cs-float-icon {
      width: 48px;
      height: 48px;
      background: #F0F5F8;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 16px;
    }

    .cs-float-title {
      font-size: 16px;
      font-weight: 700;
      color: #0D2137;
      margin-bottom: 6px;
    }

    .cs-float-sub {
      font-size: 13px;
      color: #5A7A96;
      line-height: 1.5;
    }

    .cs-float-cats {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-top: 18px;
    }

    .cs-cat-pill {
      background: #F0F5F8;
      color: #1B4F7A;
      font-size: 10px;
      font-weight: 700;
      padding: 4px 10px;
      border-radius: 99px;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    .cs-body {
      padding: 40px 48px 48px;
      display: flex;
      gap: 24px;
    }

    .cs-info-card {
      flex: 1;
      background: #fff;
      border-radius: 16px;
      padding: 24px;
      border: 1px solid #E8F0F5;
      transition: all 0.3s;
    }

    .cs-info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.04);
    }

    .cs-ic-head {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 12px;
    }

    .cs-ic-icon {
      width: 36px;
      height: 36px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .cs-ic-title {
      font-size: 14px;
      font-weight: 700;
      color: #0D2137;
    }

    .cs-ic-body {
      font-size: 13px;
      color: #5A7A96;
      line-height: 1.6;
    }


    @media (max-width: 991px) {
      .cs-float-card {
        display: none;
      }

      .cs-body {
        flex-direction: column;
      }

      .cs-headline {
        font-size: 36px;
      }
    }
  </style>

  <div class="cs-wrap">

    <div class="cs-hero">
      <div class="cs-badge">
        <div class="cs-badge-dot"></div>
        Big launch incoming
      </div>

      <h1 class="cs-headline">
        Yay, we're coming<br>
        to <span class="accent">Courtice!</span> 🎉
      </h1>

      <p class="cs-subline">
        Our full online product store is getting a big update — mobility aids, bath safety, compression, and more.
        Launching very soon for Durham Region!
      </p>

      <div class="cs-countdown" id="countdown">
        <div class="cs-unit">
          <div class="cs-unit-num" id="cd-d">14</div>
          <div class="cs-unit-label">Days</div>
        </div>
        <div class="cs-divider">:</div>
        <div class="cs-unit">
          <div class="cs-unit-num" id="cd-h">08</div>
          <div class="cs-unit-label">Hours</div>
        </div>
        <div class="cs-divider">:</div>
        <div class="cs-unit">
          <div class="cs-unit-num" id="cd-m">32</div>
          <div class="cs-unit-label">Mins</div>
        </div>
        <div class="cs-divider">:</div>
        <div class="cs-unit">
          <div class="cs-unit-num" id="cd-s">47</div>
          <div class="cs-unit-label">Secs</div>
        </div>
      </div>

      <div class="cs-notify-row">
        <input class="cs-input" type="email" placeholder="Enter your email for early access" />
        <button class="cs-btn">Notify me</button>
      </div>

      <div class="cs-float-card">
        <div class="cs-float-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect x="2" y="5" width="20" height="16" rx="2" stroke="#163350" stroke-width="1.5" />
            <path d="M2 10h20M8 2v5M16 2v5" stroke="#163350" stroke-width="1.5" stroke-linecap="round" />
            <circle cx="8" cy="15" r="1.5" fill="#D4581A" />
            <circle cx="12" cy="15" r="1.5" fill="#D4581A" />
            <circle cx="16" cy="15" r="1.5" fill="#D4581A" />
          </svg>
        </div>
        <div class="cs-float-title">1,000+ Products</div>
        <div class="cs-float-sub">All ADP-registered. Available in-store & online.</div>
        <div class="cs-float-cats">
          <span class="cs-cat-pill">Mobility</span>
          <span class="cs-cat-pill">Bath Safety</span>
          <span class="cs-cat-pill">Compression</span>
          <span class="cs-cat-pill">Wound Care</span>
          <span class="cs-cat-pill">Daily Living</span>
        </div>
      </div>
    </div>
    <!-- 
            <div class="cs-body">
              <div class="cs-info-card">
                <div class="cs-ic-head">
                  <div class="cs-ic-icon" style="background:#FEF0E8;">
                    <svg width="18" height="18" viewBox="0 0 16 16" fill="none">
                      <path d="M8 2l1.5 3 3.5.5-2.5 2.5.6 3.5L8 10l-3.1 1.5.6-3.5L3 5.5l3.5-.5L8 2z" stroke="#D4581A"
                        stroke-width="1.3" fill="none" stroke-linejoin="round" />
                    </svg>
                  </div>
                  <div class="cs-ic-title">ADP-Authorized Vendor</div>
                </div>
                <div class="cs-ic-body">We are a registered Ontario ADP vendor — we handle the paperwork and claim the funding for
                  you.</div>
              </div>
              <div class="cs-info-card">
                <div class="cs-ic-head">
                  <div class="cs-ic-icon" style="background:#E8F2F8;">
                    <svg width="18" height="18" viewBox="0 0 16 16" fill="none">
                      <circle cx="8" cy="8" r="5.5" stroke="#163350" stroke-width="1.3" />
                      <path d="M8 5v3.5l2 1.5" stroke="#163350" stroke-width="1.3" stroke-linecap="round" />
                    </svg>
                  </div>
                  <div class="cs-ic-title">In-Store & Online</div>
                </div>
                <div class="cs-ic-body">Visit us at 1423 King St E, Courtice or shop online — Mon–Fri 9am–5pm, Sat 11am–2pm.</div>
              </div>
              <div class="cs-info-card">
                <div class="cs-ic-head">
                  <div class="cs-ic-icon" style="background:#E8F8EE;">
                    <svg width="18" height="18" viewBox="0 0 16 16" fill="none">
                      <path d="M3 8l3.5 3.5L13 4.5" stroke="#1A7A45" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </div>
                  <div class="cs-ic-title">Free Consultations</div>
                </div>
                <div class="cs-ic-body">Our team helps you find the right product for your recovery needs — no pressure, just
                  care.</div>
              </div>
            </div> -->

    <x-footerThree />


    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />

  </div>

  <script>
    (function () {
      // Set target to 14 days from now
      var target = new Date(Date.now() + 14 * 24 * 60 * 60 * 1000);
      function tick() {
        var diff = Math.max(0, target - Date.now());
        var d = Math.floor(diff / 86400000);
        var h = Math.floor((diff % 86400000) / 3600000);
        var m = Math.floor((diff % 3600000) / 60000);
        var s = Math.floor((diff % 60000) / 1000);
        var pad = function (n) { return n < 10 ? '0' + n : '' + n; };

        var dEl = document.getElementById('cd-d');
        var hEl = document.getElementById('cd-h');
        var mEl = document.getElementById('cd-m');
        var sEl = document.getElementById('cd-s');

        if (dEl) dEl.textContent = pad(d);
        if (hEl) hEl.textContent = pad(h);
        if (mEl) mEl.textContent = pad(m);
        if (sEl) sEl.textContent = pad(s);
      }
      tick();
      setInterval(tick, 1000);
    })();
  </script>
@endsection