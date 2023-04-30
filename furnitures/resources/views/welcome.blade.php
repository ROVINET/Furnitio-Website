<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <head>
  <title>Furnitio Online Store</title>
  <meta property="og:title" content="Furnitio Online Store" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />

  <style data-tag="reset-style-sheet">
    html {
      line-height: 1.15;
    }

    body {
      margin: 0;
    }

    * {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
    }

    p,
    li,
    ul,
    pre,
    div,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    figure,
    blockquote,
    figcaption {
      margin: 0;
      padding: 0;
    }

    button {
      background-color: transparent;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
    }

    button,
    select {
      text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
      -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }

    button:-moz-focus,
    [type="button"]:-moz-focus,
    [type="reset"]:-moz-focus,
    [type="submit"]:-moz-focus {
      outline: 1px dotted ButtonText;
    }

    a {
      color: inherit;
      text-decoration: inherit;
    }

    input {
      padding: 2px 4px;
    }

    img {
      display: block;
    }

    html {
      scroll-behavior: smooth
    }
  </style>
  <style data-tag="default-style-sheet">
    html {
      font-family: Jost;
      font-size: 16px;
    }

    body {
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: 0.02;
      line-height: 1.55;
      color: var(--dl-color-gray-black);
      background-color: var(--dl-color-gray-white);

    }
  </style>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet" href="{{ url('/style.css') }}"
</head>

<body>
  <div>
    <link href="{{ url('/home.css') }}" rel="stylesheet" />

    <div class="home-container">
      <div class="home-navbar">
        <header data-role="Header" class="home-header max-width-container">
          <div class="home-navbar1">
            <div class="home-container01">
              <img alt="search3271286"
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjQnIGhlaWdodD0nMjQnIHZpZXdCb3g9JzAgMCAyNCAyNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPHBhdGggZmlsbC1ydWxlPSdldmVub2RkJyBjbGlwLXJ1bGU9J2V2ZW5vZGQnIGQ9J00xOC4zMTkgMTQuNDMyNkMyMC43NjI4IDExLjI5NDEgMjAuNTQyIDYuNzUzNDQgMTcuNjU2OSAzLjg2ODI2QzE0LjUzMjcgMC43NDQwNjcgOS40NjczNCAwLjc0NDA2NyA2LjM0MzE1IDMuODY4MjZDMy4yMTg5NSA2Ljk5MjQ2IDMuMjE4OTUgMTIuMDU3OCA2LjM0MzE1IDE1LjE4MkM5LjIyODMzIDE4LjA2NzIgMTMuNzY5IDE4LjI4NzkgMTYuOTA3NSAxNS44NDQyQzE2LjkyMSAxNS44NTk0IDE2LjkzNTEgMTUuODc0NCAxNi45NDk3IDE1Ljg4OTFMMjEuMTkyNCAyMC4xMzE3QzIxLjU4MjkgMjAuNTIyMiAyMi4yMTYxIDIwLjUyMjIgMjIuNjA2NiAyMC4xMzE3QzIyLjk5NzEgMTkuNzQxMiAyMi45OTcxIDE5LjEwOCAyMi42MDY2IDE4LjcxNzVMMTguMzY0IDE0LjQ3NDlDMTguMzQ5MyAxNC40NjAyIDE4LjMzNDMgMTQuNDQ2MSAxOC4zMTkgMTQuNDMyNlpNMTYuMjQyNiA1LjI4MjQ4QzE4LjU4NTggNy42MjU2MiAxOC41ODU4IDExLjQyNDYgMTYuMjQyNiAxMy43Njc4QzEzLjg5OTUgMTYuMTEwOSAxMC4xMDA1IDE2LjExMDkgNy43NTczNiAxMy43Njc4QzUuNDE0MjEgMTEuNDI0NiA1LjQxNDIxIDcuNjI1NjIgNy43NTczNiA1LjI4MjQ4QzEwLjEwMDUgMi45MzkzMyAxMy44OTk1IDIuOTM5MzMgMTYuMjQyNiA1LjI4MjQ4WicgZmlsbD0nYmxhY2snLz4KPC9zdmc+Cg=="
                class="home-image" />
              <input type="text" placeholder="search" class="home-textinput input" />
            </div>
            <div class="home-middle">
              <div class="home-left">
                <span class="navbar-link">SHOP</span>
                <span class="navbar-link">LOOKBOOK</span>
                <span class="navbar-link">SPECIAL</span>
              </div>
              <span class="navbar-logo-title">
                <span>FURNITIO</span>
                <br />
              </span>
              <div class="home-right">
                <span class="navbar-link">ABOUT</span>
                <span class="navbar-link">BLOG</span>
                <span class="navbar-link">CONTACT</span>
              </div>
            </div>
            <div class="home-icons">
              <img alt="iconsbxscart3271299"
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjQnIGhlaWdodD0nMjQnIHZpZXdCb3g9JzAgMCAyNCAyNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPHBhdGggZD0nTTIxLjgyMiA3LjQzMUMyMS42MzUgNy4xNjEgMjEuMzI4IDcgMjEgN0g3LjMzM0w2LjE3OSA0LjIzQzUuODY3IDMuNDgyIDUuMTQzIDMgNC4zMzMgM0gyVjVINC4zMzNMOS4wNzcgMTYuMzg1QzkuMjMyIDE2Ljc1NyA5LjU5NiAxNyAxMCAxN0gxOEMxOC40MTcgMTcgMTguNzkgMTYuNzQxIDE4LjkzNyAxNi4zNTJMMjEuOTM3IDguMzUyQzIyLjA1MiA4LjA0NCAyMi4wMDkgNy43IDIxLjgyMiA3LjQzMVonIGZpbGw9JyMxNjE2MTYnLz4KPHBhdGggZD0nTTEwLjUgMjFDMTEuMzI4NCAyMSAxMiAyMC4zMjg0IDEyIDE5LjVDMTIgMTguNjcxNiAxMS4zMjg0IDE4IDEwLjUgMThDOS42NzE1NyAxOCA5IDE4LjY3MTYgOSAxOS41QzkgMjAuMzI4NCA5LjY3MTU3IDIxIDEwLjUgMjFaJyBmaWxsPScjMTYxNjE2Jy8+CjxwYXRoIGQ9J00xNy41IDIxQzE4LjMyODQgMjEgMTkgMjAuMzI4NCAxOSAxOS41QzE5IDE4LjY3MTYgMTguMzI4NCAxOCAxNy41IDE4QzE2LjY3MTYgMTggMTYgMTguNjcxNiAxNiAxOS41QzE2IDIwLjMyODQgMTYuNjcxNiAyMSAxNy41IDIxWicgZmlsbD0nIzE2MTYxNicvPgo8L3N2Zz4K"
                class="home-image1" />
              <img alt="iconsbxsheartcircle3271300"
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjQnIGhlaWdodD0nMjQnIHZpZXdCb3g9JzAgMCAyNCAyNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPHBhdGggZD0nTTEyIDJDNi40ODYgMiAyIDYuNDg2IDIgMTJDMiAxNy41MTQgNi40ODYgMjIgMTIgMjJDMTcuNTE0IDIyIDIyIDE3LjUxNCAyMiAxMkMyMiA2LjQ4NiAxNy41MTQgMiAxMiAyWk0xNi4xODYgMTIuNzRMMTIgMTYuOTI2TDcuODE0IDEyLjc0QzYuNzI1IDExLjY1MiA2LjcyNSA5LjkyNyA3LjgxNCA4LjgzM0M4LjkwOCA3Ljc0NSAxMC42MzIgNy43NDUgMTEuNzIgOC44MzNMMTIgOS4xMTJMMTIuMjc5IDguODMzQzEzLjM2NyA3Ljc0NSAxNS4wOTIgNy43NDUgMTYuMTg1IDguODMzQzE3LjI3NCA5LjkyNyAxNy4yNzQgMTEuNjUxIDE2LjE4NiAxMi43NFonIGZpbGw9JyMxNjE2MTYnLz4KPC9zdmc+Cg=="
                class="home-image2" />
              <img alt="AccountCircle3271301"
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjQnIGhlaWdodD0nMjQnIHZpZXdCb3g9JzAgMCAyNCAyNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPHBhdGggZD0nTTEyIDJDNi40OCAyIDIgNi40OCAyIDEyQzIgMTcuNTIgNi40OCAyMiAxMiAyMkMxNy41MiAyMiAyMiAxNy41MiAyMiAxMkMyMiA2LjQ4IDE3LjUyIDIgMTIgMlpNMTIgNUMxMy42NiA1IDE1IDYuMzQgMTUgOEMxNSA5LjY2IDEzLjY2IDExIDEyIDExQzEwLjM0IDExIDkgOS42NiA5IDhDOSA2LjM0IDEwLjM0IDUgMTIgNVpNMTIgMTkuMkM5LjUgMTkuMiA3LjI5IDE3LjkyIDYgMTUuOThDNi4wMyAxMy45OSAxMCAxMi45IDEyIDEyLjlDMTMuOTkgMTIuOSAxNy45NyAxMy45OSAxOCAxNS45OEMxNi43MSAxNy45MiAxNC41IDE5LjIgMTIgMTkuMlonIGZpbGw9JyMxNjE2MTYnLz4KPC9zdmc+Cg=="
                class="home-image3" />
            </div>
          </div>
          <div data-role="BurgerMenu" class="home-burger-menu">
            <svg viewBox="0 0 1024 1024" class="home-icon">
              <path
                d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z">
              </path>
            </svg>
          </div>
          <div data-role="MobileMenu" class="home-mobile-menu">
            <div class="home-nav">
              <div class="home-container02">
                <span class="home-logo-center1">FURNITIO</span>
                <div data-role="CloseMobileMenu" class="home-close-mobile-menu">
                  <svg viewBox="0 0 1024 1024" class="home-icon02">
                    <path
                      d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z">
                    </path>
                  </svg>
                </div>
              </div>
              <div class="home-middle1">
                <span class="home-text08">SHOP</span>
                <span class="home-text09">LOOKBOOK</span>
                <span class="home-text10">SPECIAL</span>
                <span class="home-text11">ABOUT</span>
                <span class="home-text12">BLOG</span>
                <span class="home-text13">CONTACT</span>
              </div>
            </div>
            <div>
              <svg viewBox="0 0 950.8571428571428 1024" class="home-icon04">
                <path
                  d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z">
                </path>
              </svg><svg viewBox="0 0 877.7142857142857 1024" class="home-icon06">
                <path
                  d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z">
                </path>
              </svg><svg viewBox="0 0 602.2582857142856 1024" class="home-icon08">
                <path
                  d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z">
                </path>
              </svg>
            </div>
          </div>
        </header>
      </div>
      <div class="home-main">
        <div class="home-hero section-container">
          <div class="home-max-width max-width-container">
            <div class="home-hero1">
              <div class="home-container03">
                <div class="home-info">
                  <img alt="Rectangle43271305"
                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMicgaGVpZ2h0PSc1Micgdmlld0JveD0nMCAwIDIgNTInIGZpbGw9J25vbmUnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zyc+CjxyZWN0IHdpZHRoPScyJyBoZWlnaHQ9JzUyJyBmaWxsPSdibGFjaycgZmlsbC1vcGFjaXR5PScwLjUnLz4KPC9zdmc+Cg=="
                    class="home-image4" />
                  <span class="home-text14">
                    <span>furniture</span>
                    <br />
                    <span>trends - 2022</span>
                  </span>
                </div>
                <h1 class="home-text18 Heading-1">Yellowstone</h1>
                <div class="home-container04">
                  <span class="home-text19">FROM</span>
                  <span class="home-text20">$339</span>
                </div>
                <div class="home-btn-group">
                  <button class="button">Explore the collection</button>
                </div>
              </div>
              <img alt="image23271449" src="Images/1.png" class="home-image5" />
            </div>
          </div>
        </div>
        <div class="section-container column">
          <div class="max-width-container">
            <div class="section-heading-section-heading">
              <h1 class="section-heading-text Heading-2">
                <span>SHOP BY CATEGORIES</span>
              </h1>
              <span class="section-heading-text1">
                <span>
                  Start shopping based on the categories you are interested in
                </span>
              </span>
            </div>
            <div class="home-cards-container">
              <div class="category-card-category-card">
                <img alt="image" src="Images/2.jpg" class="category-card-image" />
                <span class="category-card-text"><span>Desks</span></span>
              </div>
              <div class="category-card-category-card">
                <img alt="image" src="Images/3.jpg" class="category-card-image" />
                <span class="category-card-text"><span>Chairs</span></span>
              </div>
              <div class="category-card-category-card">
                <img alt="image" src="Images/4.jpg" class="category-card-image" />
                <span class="category-card-text"><span>Tables</span></span>
              </div>
              <div class="category-card-category-card">
                <img alt="image" src="Images/5.jpg" class="category-card-image" />
                <span class="category-card-text"><span>Lamps</span></span>
              </div>
              <div class="category-card-category-card">
                <img alt="image" src="Images/6.jpg" class="category-card-image" />
                <span class="category-card-text"><span>Plants</span></span>
              </div>
              <div class="category-card-category-card">
                <img alt="image" src="Images/7.jpg" class="category-card-image" />
                <span class="category-card-text">
                  <span>Decoration</span>
                </span>
              </div>
              <div class="category-card-category-card">
                <img alt="image" src="Images/8.jpg" class="category-card-image" />
                <span class="category-card-text">
                  <span>Collections</span>
                </span>
              </div>
            </div>
          </div>
          <div class="home-banner">
            <div class="home-container05">
              <h3 class="home-text21 Heading-3">FURNITIO</h3>
            </div>
          </div>
          <div class="home-container06 max-width-container">
            <div class="home-container07">
              <img alt="M3271427"
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMTk5JyBoZWlnaHQ9JzIwMCcgdmlld0JveD0nMCAwIDE5OSAyMDAnIGZpbGw9J25vbmUnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zyc+CjxwYXRoIGQ9J00zNy4zMDI2IDcxLjI5MjVMOTkuMzgyNyAxODIuMzEzTDE2MS40NjMgNzEuMjkyNUwxNzUuNjIyIDIwMEgxOTguNzY1TDE3NS42MjIgMEw5OS4zODI3IDEzNy45NTlMMjMuMTQzOSAwTDAgMjAwSDIzLjE0MzlMMzcuMzAyNiA3MS4yOTI1WicgZmlsbD0nYmxhY2snIGZpbGwtb3BhY2l0eT0nMC4wNicvPgo8L3N2Zz4K"
                class="home-svg" />
              <span class="home-text22">
                <span>
                  Furnitio Stores Inc. are unique reseller of modern
                  furnitors, designer-made,
                </span>
                <br />
                <span>home-decoration items, since 1997.</span>
                <br />
                <span>
                  Our legacy guarantees exceptional product quality, unique
                  designs and special prices for all of our product line-up.
                  Lorem ipsum, consectetur adipiscing elit duis tristique
                  sollicitudin nibh sit amet commodo nulla facilisi nullam
                  vehicula ipsum a arcu cursus vitae congue. Consectetur
                  adipiscing elit duis tristique sollicitudin nibh sit amet
                  commodo nulla facilisi nullam vehicula ipsum a arcu cursus
                  vitae congue
                </span>
              </span>
              <button class="button">Read more</button>
            </div>
          </div>
        </div>
        <div class="section-container">
          <div class="max-width-container">
            <div class="section-heading-section-heading">
              <h1 class="section-heading-text Heading-2">
                <span>TRENDING ITEMS</span>
              </h1>
              <span class="section-heading-text1">
                <span>
                  Explore our monthly most trending products, new items and
                  the best Furnitio offers you can buy
                </span>
              </span>
            </div>

            <div class="home-gallery-run" id="applist">
            </div>
          </div>
        </div>
        <div class="section-container">
          <div class="max-width-container">
            <div class="section-heading-section-heading section-heading-root-class-name">
              <h1 class="section-heading-text Heading-2">
                <span>Our blog</span>
              </h1>
              <span class="section-heading-text1">
                <span>
                  Read the latest news and furniture related articles
                </span>
              </span>
            </div>
            <div class="home-container08">
              <div class="blog-post-card-blog-post-card blog-post-card-root-class-name">
                <img alt="image" src="Images/9.jpg" class="blog-post-card-image" />
                <div class="blog-post-card-container">
                  <span class="blog-post-card-text">
                    <span>Chic sofa designs for 2022</span>
                  </span>
                  <span class="blog-post-card-text1">
                    <span>
                      Consectetur adipiscing elit duis tristique sollicitudin
                      nibh
                    </span>
                  </span>
                  <a href="" target="_blank" rel="noreferrer noopener" class="button">
                    Read more
                  </a>
                </div>
              </div>
              <div class="blog-post-card-blog-post-card">
                <img alt="image" src="Images/10.jpg" class="blog-post-card-image" />
                <div class="blog-post-card-container">
                  <span class="blog-post-card-text">
                    <span>Unique natural color combinations</span>
                  </span>
                  <span class="blog-post-card-text1">
                    <span>
                      Consectetur adipiscing elit duis tristique sollicitudin
                      nibh
                    </span>
                  </span>
                  <a href="" target="_blank" rel="noreferrer noopener" class="button">
                    Read more
                  </a>
                </div>
              </div>
              <div class="blog-post-card-blog-post-card">
                <img alt="image" src="Images/11.jpg" class="blog-post-card-image" />
                <div class="blog-post-card-container">
                  <span class="blog-post-card-text">
                    <span>Special combinations for nature lovers</span>
                  </span>
                  <span class="blog-post-card-text1">
                    <span>
                      Consectetur adipiscing elit duis tristique sollicitudin
                      nibh
                    </span>
                  </span>
                  <a href="" target="_blank" rel="noreferrer noopener" class="button">
                    Read more
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="home-footer">
        <div class="max-width-container">
          <footer class="home-footer1">
            <div class="home-container09">
              <h3 class="home-text31 Heading-3">FURNITIO</h3>
              <span class="home-text32">
                69F 420ST, Terk Laak III, Toul Kork, Phnom Penh
              </span>
              <span class="home-text33">(855) 069 420 168</span>
              <span class="home-text34">contact@furnitio.com</span>
            </div>
            <div class="home-links-container">
              <div class="home-container10">
                <span class="home-text35">Categories</span>
                <span class="home-text36">Collections</span>
                <span class="home-text37">Desks</span>
                <span class="home-text38">Furniture</span>
                <span class="home-text39">Lamps</span>
                <span class="home-text40">Plants</span>
                <span class="home-text41">Decoration</span>
              </div>
              <div class="home-container11">
                <span class="home-text42">Company</span>
                <span class="home-text43">Shop</span>
                <span class="home-text44">Lookbook</span>
                <span class="home-text45">Specials</span>
                <span class="home-text46">About</span>
                <span class="home-text47">Blog</span>
              </div>
              <div class="home-container12">
                <span class="home-text48">Resources</span>
                <span class="home-text49">Contact us</span>
                <span class="home-text50">Order</span>
                <span class="home-text51">Track your order</span>
                <span class="home-text52">Shipping &amp; Delivery</span>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
  <script src="/main.js"></script>
</body>
</html>
