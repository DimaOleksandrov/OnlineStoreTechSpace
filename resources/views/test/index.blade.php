@extends('layouts.main')
@section('title','Product')
@section('content')
<div class="uk-section-default uk-section uk-padding-remove-vertical">

<div class="uk-container uk-container-xlarge">

  <div class="tm-grid-expand uk-grid-column-large uk-grid" uk-grid="">
    <div class="uk-width-expand uk-first-column uk-height-max-large">

      <div uk-slideshow="ratio: 1:1; minHeight: 300;" class="uk-margin uk-slideshow">
        <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

          <ul class="uk-slideshow-items" style="min-height: 454px; max-height: 654px;">
            <li class="el-item uk-active uk-transition-active" tabindex="-1" style="transform: translate3d(0px, 0px, 0px);">

                <img class="el-image uk-cover" alt="" uk-img="target: !.uk-slideshow-items" uk-cover="" src="/images/img-2.jpg">

            </li>
            <li class="el-item" tabindex="-1">
                <img class="el-image uk-cover" alt="" uk-img="target: !.uk-slideshow-items" uk-cover="" src="/images/img-1.jpg">
            </li>
            <li class="el-item" tabindex="-1">
            <img class="el-image uk-cover" alt="" uk-img="target: !.uk-slideshow-items" uk-cover="" src="/images/img-2.jpg">
            </li>
          </ul>

          <div class="uk-hidden-hover uk-hidden-touch uk-visible@s">
            <a class="el-slidenav uk-slidenav-large uk-position-medium uk-position-center-left uk-icon uk-slidenav-previous uk-slidenav" href="#" uk-slidenav-previous="" uk-slideshow-item="previous">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" data-svg="slidenav-previous-large">
                <polyline fill="none" stroke="#000" stroke-width="2.3" points="15 1 2 14 15 27"></polyline>
              </svg>
            </a>
            <a class="el-slidenav uk-slidenav-large uk-position-medium uk-position-center-right uk-icon uk-slidenav-next uk-slidenav" href="#" uk-slidenav-next="" uk-slideshow-item="next">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" data-svg="slidenav-next-large">
                <polyline fill="none" stroke="#000" stroke-width="2.3" points="1 27 14 14 1 1"></polyline>
              </svg>
            </a>
          </div>

        </div>

        <ul class="el-nav uk-thumbnav uk-flex-left uk-margin-small-top" uk-margin="">
          <li uk-slideshow-item="0" class="uk-active uk-first-column">
            <a href="#"><img alt="" src="/images/img-2.jpg" width="80px" height="80px"></a>
          </li>
          <li uk-slideshow-item="1">
                <a href="#"><img alt="" src="/images/img-1.jpg" width="80px" height="80px"></a>
            </li>
          <li uk-slideshow-item="2">
          <a href="#"><img alt="" src="/images/img-2.jpg" width="80px" height="80px"></a>
          </li>
        </ul>

      </div>

    </div>

    <div class="uk-grid-item-match uk-flex-middle uk-width-1-3@l">

      <div class="uk-panel uk-width-1-1">

        <div class="uk-margin">

          <a class="el-content uk-link-text" href="">
Smart­phones
</a>

        </div>

        <h1 class="uk-h2 uk-margin-remove-vertical uk-width-xlarge">        Apple iPhone 11 Pro 256GB Space Gray    </h1>
        <div class="uk-panel uk-text-meta uk-margin-small">5.8″ Display, 3x 12MP Rear Camera</div>
        <ul class="uk-list uk-margin-medium" uk-scrollspy="target: [uk-scrollspy-class];">
          <li class="el-item">
            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
              <div class="uk-width-auto uk-first-column"><img width="26" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="dataSrc:/themes/wordpress/2020/tech-space/wp-content/uploads/yootheme/icon-truck.svg" src="https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-content/uploads/yootheme/icon-truck.svg" hidden="">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" viewBox="0 0 35 30" class="el-image uk-text-primary uk-svg" data-svg="https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-content/uploads/yootheme/icon-truck.svg">
                  <path fill="none" stroke="#564aeb" stroke-width="1.5" d="M9 23H5v-5m0-9V4h17v19h-7m-3-3c1.7 0 3 1.4 3 3s-1.4 3-3 3-3-1.3-3-3 1.4-3 3-3zm16 0c1.7 0 3 1.4 3 3s-1.4 3-3 3-3-1.3-3-3 1.4-3 3-3zm3 3h3V12l-5-5h-7m0 16h3m9-7H22"></path>
                  <path fill="#564aeb" d="M1.5 11.7v1.2h2.2v1.2H1.5v2.3H0v-5.9h4v1.2H1.5zm8 4.6l-1.6.1-1-2h-.7v2H4.7v-5.9H7c.4 0 .8.1 1.2.2.3.1.6.3.8.6s.3.6.3 1-.1.7-.2 1.1c-.2.3-.4.5-.7.6l1.1 2.3zm-3.3-3.1h.9c.2 0 .4-.1.5-.2.1-.1.2-.3.2-.5s-.1-.4-.2-.5c-.2-.1-.3-.2-.5-.2h-.9v1.4zm5.3-1.5v1.1h2.2V14h-2.2v1.2h2.6v1.2H10v-5.9h4.1v1.2h-2.6zm4.9 0v1.1h2.2V14h-2.2v1.2H19v1.2h-4.1v-5.9H19v1.2h-2.6z"></path>
                </svg>
              </div>
              <div>
                <div class="el-content uk-panel">Free Delivery in 3-5 Working Days</div>
              </div>
            </div>
          </li>
          <li class="el-item">
            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
              <div class="uk-width-auto uk-first-column"><img width="26" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="dataSrc:/themes/wordpress/2020/tech-space/wp-content/uploads/yootheme/icon-calendar.svg" src="https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-content/uploads/yootheme/icon-calendar.svg" hidden="">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" viewBox="0 0 35 30" class="el-image uk-text-primary uk-svg" data-svg="https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-content/uploads/yootheme/icon-calendar.svg">
                  <path fill="none" stroke="#564aeb" stroke-width="1.5" d="M6 4h23v23H6V4zm23 6H6m5-3V1M24 7V1"></path>
                  <path fill="#564aeb" d="M10.6 23.6v-5L9 19v-1.4l3.2-1.1h.1v7.1h-1.7zm8.7-6.1c.2.3.3.6.3 1s-.1.8-.4 1.1c-.3.3-.6.6-1 .7-.4.2-.9.3-1.3.3s-.8-.1-1.2-.2c-.4-.1-.7-.4-1-.7-.3-.3-.4-.8-.4-1.2h1.8c0 .1 0 .2.1.3.1.1.2.2.3.2.1.1.3.1.4.1.2 0 .3 0 .5-.1l.3-.3c.1-.1.1-.2.1-.4 0-.3-.1-.5-.2-.7-.2-.2-.4-.2-.7-.2h-.8V16h.9c.4.1.8-.2.8-.6v-.2c0-.1 0-.2-.1-.3-.1-.1-.1-.2-.3-.2-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.4.1-.1 0-.2.1-.3.2-.1.1-.1.2-.1.3h-1.8c0-.4.1-.7.3-1 .2-.3.5-.5.9-.7.4-.2.8-.2 1.2-.2.5 0 .9.1 1.4.2.4.1.7.4.9.7.2.3.3.7.3 1.1 0 .3-.1.6-.3.9-.2.3-.5.5-.8.6.5.2.8.4 1 .7zm6 1.6c.3.2.6.5.7.9.2.4.2.8.2 1.3 0 .4-.1.9-.3 1.2-.2.4-.5.7-.9.9-.4.2-.8.3-1.3.3s-.9-.1-1.4-.3c-.4-.2-.7-.6-1-1-.3-.5-.4-1-.4-1.5v-.7c0-.7.2-1.4.5-2.1.4-.6.9-1 1.5-1.3.6-.3 1.2-.4 1.8-.4h.3v1.4c-.5 0-1 .1-1.5.4-.4.3-.7.7-.7 1.2.2-.2.4-.3.6-.4.2-.1.5-.2.8-.1.4-.1.7 0 1.1.2zM24 22.2c.1-.1.2-.2.3-.4.1-.2.1-.4.1-.5 0-.3-.1-.6-.2-.8-.2-.2-.4-.3-.6-.3-.2 0-.3 0-.5.1l-.3.3v.5c0 .3 0 .6.2.9.2.2.4.3.7.3 0 0 .2 0 .3-.1z"></path>
                </svg>
              </div>
              <div>
                <div class="el-content uk-panel">Flexible Rental Period</div>
              </div>
            </div>
          </li>
          <li class="el-item">
            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
              <div class="uk-width-auto uk-first-column"><img width="26" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="dataSrc:/themes/wordpress/2020/tech-space/wp-content/uploads/yootheme/icon-package.svg" src="https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-content/uploads/yootheme/icon-package.svg" hidden="">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" viewBox="0 0 35 30" class="el-image uk-text-primary uk-svg" data-svg="https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-content/uploads/yootheme/icon-package.svg">
                  <path fill="none" stroke="#564aeb" stroke-width="1.5" d="M27.5 15.5c3.6 0 6.5 2.9 6.5 6.5s-2.9 6.5-6.5 6.5S21 25.6 21 22s2.9-6.5 6.5-6.5zM26 16V7l-4-4H8L4 7v17h17M16.5 3l1 4v6h-5V7l1-4M26 7H4m3 10h7m-7 3h5m12 2l3 2.5 4-5.5"></path>
                </svg>
              </div>
              <div>
                <div class="el-content uk-panel">Free Easy Returns</div>
              </div>
            </div>
          </li>
        </ul>
        <div class="uk-h1 uk-margin-small uk-margin-remove-bottom"> 59,90 € </div>
        <div class="uk-panel uk-text-meta uk-margin-remove-vertical">per month, incl. VAT</div>
        <div class="uk-margin-medium">

          <a class="el-content uk-button uk-button-primary" href="mailto:info@example.com">
Send a Request
</a>

        </div>

      </div>

    </div>
  </div>
  <div class="uk-margin-xlarge uk-margin-remove-bottom uk-container">
    <div class="uk-margin-remove-bottom tm-grid-expand uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
      <div class="uk-width-1-1@m uk-first-column">

        <h2 class="uk-width-2xlarge">        Rent the New Apple iPhone 11 Pro 256GB Space Gray    </h2>
        <div class="uk-panel uk-margin-medium uk-width-2xlarge">
          <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
          </p>
          <p>
            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
          </p>
          <ul class="uk-list uk-list-bullet">
            <li>At vero eos et accusam et justo duo dolores et ea rebum</li>
            <li>Lorem ipsum dolor sit amet consetetur sadipscing elitr</li>
            <li>Stet clita kasd gubergren no sea takimata</li>
            <li>At vero eos et accusam et justo duo dolores rebum</li>
          </ul>
        </div>
        <hr class="uk-margin-large">

      </div>
    </div>
  </div>
  <div class="uk-margin-large uk-container">
    <div class="tm-grid-expand uk-grid" uk-grid="">
      <div class="uk-width-1-3@m uk-first-column">

        <h2 class="uk-h3">        What’s in the box    </h2>

      </div>

      <div class="uk-width-2-3@m">

        <ul class="uk-list uk-list-large">
          <li class="el-item">
            <div class="el-content uk-panel uk-h5">Apple iPhone 11 Pro 256GB</div>
          </li>
          <li class="el-item">
            <div class="el-content uk-panel uk-h5">EarPods with Lightning connector</div>
          </li>
          <li class="el-item">
            <div class="el-content uk-panel uk-h5">USB-C to Lightning cable</div>
          </li>
          <li class="el-item">
            <div class="el-content uk-panel uk-h5">18W USB-C power adapter</div>
          </li>
          <li class="el-item">
            <div class="el-content uk-panel uk-h5">Documentation</div>
          </li>
        </ul>

      </div>
    </div>
  </div>
  <div class="uk-margin-large uk-container">
    <div class="tm-grid-expand uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
      <div class="uk-width-1-1@m uk-first-column">

        <hr class="uk-margin-large">

      </div>
    </div>
  </div>
  <div class="uk-grid-margin uk-container">
    <div class="tm-grid-expand uk-grid" uk-grid="">
      <div class="uk-width-1-3@m uk-first-column">

        <h2 class="uk-h3">        Tech Specs    </h2>

      </div>

      <div class="uk-width-2-3@m">

        <div class="uk-margin">
          <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-grid-match uk-grid" uk-grid="">
            <div class="uk-first-column">
              <div class="el-item uk-panel uk-margin-remove-first-child">

                <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">                        Screen Resolution                    </h3>

                <div class="el-content uk-panel">
                  <p>2436 x 1125 pixels</p>
                </div>

              </div>
            </div>
            <div>
              <div class="el-item uk-panel uk-margin-remove-first-child">

                <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">                        Display Type                    </h3>

                <div class="el-content uk-panel">
                  <p>Super Retina XDR display</p>
                </div>

              </div>
            </div>
            <div class="uk-grid-margin uk-first-column">
              <div class="el-item uk-panel uk-margin-remove-first-child">

                <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">                        Wireless Technology                    </h3>

                <div class="el-content uk-panel">
                  <p>4G LTE</p>
                </div>

              </div>
            </div>
            <div class="uk-grid-margin">
              <div class="el-item uk-panel uk-margin-remove-first-child">

                <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">                        Rear-Facing Camera                    </h3>

                <div class="el-content uk-panel">
                  <p>12MP</p>
                </div>

              </div>
            </div>
            <div class="uk-grid-margin uk-first-column">
              <div class="el-item uk-panel uk-margin-remove-first-child">

                <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">                        Internal Memory                    </h3>

                <div class="el-content uk-panel">
                  <p>256GB</p>
                </div>

              </div>
            </div>
            <div class="uk-grid-margin">
              <div class="el-item uk-panel uk-margin-remove-first-child">

                <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">                        Water Resistant                    </h3>

                <div class="el-content uk-panel">
                  <p>Yes</p>
                </div>

              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
  <div class="uk-margin-large uk-container">
    <div class="tm-grid-expand uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
      <div class="uk-width-1-1@m uk-first-column">

        <hr class="uk-margin-large">

      </div>
    </div>
  </div>
  <div class="uk-margin-large uk-container">
    <div class="tm-grid-expand uk-grid" uk-grid="">
      <div class="uk-width-1-3@m uk-first-column">

        <h2 class="uk-h3">        FAQ    </h2>

      </div>

      <div class="uk-width-2-3@m">

        <div uk-accordion="multiple: 1; collapsible: true;" class="uk-accordion">
          <div class="el-item">

            <a class="el-title uk-accordion-title" href="#">How long does the battery last?</a>

            <div class="uk-accordion-content uk-margin-remove-first-child" hidden="">

              <div class="el-content uk-panel uk-margin-top">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </p>
                <p>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                <p>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
                <p>esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt </p>
                <p>in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
          <div class="el-item">

            <a class="el-title uk-accordion-title" href="#">How to transfer data from my old device?</a>

            <div class="uk-accordion-content uk-margin-remove-first-child" hidden="">

              <div class="el-content uk-panel uk-margin-top">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </p>
                <p>labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                <p>nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
                <p>esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt </p>
                <p>in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
          <div class="el-item">

            <a class="el-title uk-accordion-title" href="#">How can I order the device?</a>

            <div class="uk-accordion-content uk-margin-remove-first-child" hidden="">

              <div class="el-content uk-panel uk-margin-top">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
          </div>
          <div class="el-item">

            <a class="el-title uk-accordion-title" href="#">When does the rent begin and end?</a>

            <div class="uk-accordion-content uk-margin-remove-first-child" hidden="">

              <div class="el-content uk-panel uk-margin-top">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
          </div>
          <div class="el-item">

            <a class="el-title uk-accordion-title" href="#">What if the device gets damaged during rental?</a>

            <div class="uk-accordion-content uk-margin-remove-first-child" hidden="">

              <div class="el-content uk-panel uk-margin-top">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
          </div>
          <div class="el-item">

            <a class="el-title uk-accordion-title" href="#">What is your exchange/return policy?</a>

            <div class="uk-accordion-content uk-margin-remove-first-child" hidden="">

              <div class="el-content uk-panel uk-margin-top">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
          </div>
          <div class="el-item">

            <a class="el-title uk-accordion-title" href="#">When can I expect my device to arrive?</a>

            <div class="uk-accordion-content uk-margin-remove-first-child" hidden="">

              <div class="el-content uk-panel uk-margin-top">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
  <div class="tm-grid-expand uk-child-width-1-1 uk-margin-xlarge uk-grid uk-grid-stack" uk-grid="">
    <div class="uk-width-1-1@m uk-first-column">

      <h2 class="uk-h3 uk-margin-medium uk-text-left">        You Might Like    </h2>
      <div>
        <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-column-small uk-grid-row-large uk-grid-match uk-grid" uk-grid="">
          <div class="uk-first-column">
            <a class="el-item uk-panel uk-margin-remove-first-child uk-link-toggle uk-display-block" href="https://demo.yootheme.com/themes/wordpress/2020/tech-space/?yo_product=amazon-kindle-paperwhite-8gb">

              <img class="el-image" alt="" data-src="/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-amazon-kindle-paperwhite-8gb-5c65f2ed.webp" data-srcset="/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-amazon-kindle-paperwhite-8gb-5c65f2ed.webp 460w, https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-admin/admin-ajax.php?action=kernel&amp;p=theme%2Fimage&amp;src=WyJ3cC1jb250ZW50XC91cGxvYWRzXC95b290aGVtZVwvcHJvZHVjdC1wb3N0LWFtYXpvbi1raW5kbGUtcGFwZXJ3aGl0ZS04Z2IuanBnIixbWyJkb1Jlc2l6ZSIsWzc2OCw4ODgsNzY4LDg4OF1dLFsiZG9Dcm9wIixbNzY4LDg4OCwwLDBdXSxbInR5cGUiLFsid2VicCIsIjg1Il1dXV0%3D&amp;hash=cfde7fbe71bd74e4d2c525c21723636d 768w, /themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-amazon-kindle-paperwhite-8gb-feb53366.webp 920w" data-sizes="(min-width: 460px) 460px" data-width="460" data-height="532" uk-img="" sizes="(min-width: 460px) 460px" srcset="/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-amazon-kindle-paperwhite-8gb-5c65f2ed.webp 460w, https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-admin/admin-ajax.php?action=kernel&amp;p=theme%2Fimage&amp;src=WyJ3cC1jb250ZW50XC91cGxvYWRzXC95b290aGVtZVwvcHJvZHVjdC1wb3N0LWFtYXpvbi1raW5kbGUtcGFwZXJ3aGl0ZS04Z2IuanBnIixbWyJkb1Jlc2l6ZSIsWzc2OCw4ODgsNzY4LDg4OF1dLFsiZG9Dcm9wIixbNzY4LDg4OCwwLDBdXSxbInR5cGUiLFsid2VicCIsIjg1Il1dXV0%3D&amp;hash=cfde7fbe71bd74e4d2c525c21723636d 768w, /themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-amazon-kindle-paperwhite-8gb-feb53366.webp 920w" src="https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-amazon-kindle-paperwhite-8gb-5c65f2ed.webp">

              <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">                        Amazon Kindle Paperwhite 8GB                    </h3>

              <div class="el-meta uk-text-meta uk-margin-small-top">7,90 € / Month</div>

            </a>
          </div>
          <div>
            <a class="el-item uk-panel uk-margin-remove-first-child uk-link-toggle uk-display-block" href="https://demo.yootheme.com/themes/wordpress/2020/tech-space/?yo_product=apple-ipad-pro-12-9-wi-fi-64gb">

              <img class="el-image" alt="" data-src="/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-ipad-pro-12-9-wi-fi-64gb-74cab0e2.webp" data-srcset="/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-ipad-pro-12-9-wi-fi-64gb-74cab0e2.webp 460w, https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-admin/admin-ajax.php?action=kernel&amp;p=theme%2Fimage&amp;src=WyJ3cC1jb250ZW50XC91cGxvYWRzXC95b290aGVtZVwvcHJvZHVjdC1wb3N0LWFwcGxlLWlwYWQtcHJvLTEyLTktd2ktZmktNjRnYi5qcGciLFtbImRvUmVzaXplIixbNzY4LDg4OCw3NjgsODg4XV0sWyJkb0Nyb3AiLFs3NjgsODg4LDAsMF1dLFsidHlwZSIsWyJ3ZWJwIiwiODUiXV1dXQ%3D%3D&amp;hash=a2ee8f9497d837719e5b2a5c7a338441 768w, /themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-ipad-pro-12-9-wi-fi-64gb-4477460d.webp 920w" data-sizes="(min-width: 460px) 460px" data-width="460" data-height="532" uk-img="" sizes="(min-width: 460px) 460px" srcset="/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-ipad-pro-12-9-wi-fi-64gb-74cab0e2.webp 460w, https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-admin/admin-ajax.php?action=kernel&amp;p=theme%2Fimage&amp;src=WyJ3cC1jb250ZW50XC91cGxvYWRzXC95b290aGVtZVwvcHJvZHVjdC1wb3N0LWFwcGxlLWlwYWQtcHJvLTEyLTktd2ktZmktNjRnYi5qcGciLFtbImRvUmVzaXplIixbNzY4LDg4OCw3NjgsODg4XV0sWyJkb0Nyb3AiLFs3NjgsODg4LDAsMF1dLFsidHlwZSIsWyJ3ZWJwIiwiODUiXV1dXQ%3D%3D&amp;hash=a2ee8f9497d837719e5b2a5c7a338441 768w, /themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-ipad-pro-12-9-wi-fi-64gb-4477460d.webp 920w" src="https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-ipad-pro-12-9-wi-fi-64gb-74cab0e2.webp">

              <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">                        Apple iPad Pro 12.9″ Wi-Fi 64GB                    </h3>

              <div class="el-meta uk-text-meta uk-margin-small-top">44,90 € / Month</div>

            </a>
          </div>
          <div>
            <a class="el-item uk-panel uk-margin-remove-first-child uk-link-toggle uk-display-block" href="https://demo.yootheme.com/themes/wordpress/2020/tech-space/?yo_product=apple-iphone-11-pro-max-256gb-space-gray">

              <img class="el-image" alt="" data-src="/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-iphone-11-pro-max-256gb-space-gray-e7be7100.webp" data-srcset="/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-iphone-11-pro-max-256gb-space-gray-e7be7100.webp 460w, https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-admin/admin-ajax.php?action=kernel&amp;p=theme%2Fimage&amp;src=WyJ3cC1jb250ZW50XC91cGxvYWRzXC95b290aGVtZVwvcHJvZHVjdC1wb3N0LWFwcGxlLWlwaG9uZS0xMS1wcm8tbWF4LTI1NmdiLXNwYWNlLWdyYXkuanBnIixbWyJkb1Jlc2l6ZSIsWzc2OCw4ODgsNzY4LDg4OF1dLFsiZG9Dcm9wIixbNzY4LDg4OCwwLDBdXSxbInR5cGUiLFsid2VicCIsIjg1Il1dXV0%3D&amp;hash=e226be45c8ead90460cf3228ebf0777b 768w, /themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-iphone-11-pro-max-256gb-space-gray-9f228cd2.webp 920w" data-sizes="(min-width: 460px) 460px" data-width="460" data-height="532" uk-img="" sizes="(min-width: 460px) 460px" srcset="/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-iphone-11-pro-max-256gb-space-gray-e7be7100.webp 460w, https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-admin/admin-ajax.php?action=kernel&amp;p=theme%2Fimage&amp;src=WyJ3cC1jb250ZW50XC91cGxvYWRzXC95b290aGVtZVwvcHJvZHVjdC1wb3N0LWFwcGxlLWlwaG9uZS0xMS1wcm8tbWF4LTI1NmdiLXNwYWNlLWdyYXkuanBnIixbWyJkb1Jlc2l6ZSIsWzc2OCw4ODgsNzY4LDg4OF1dLFsiZG9Dcm9wIixbNzY4LDg4OCwwLDBdXSxbInR5cGUiLFsid2VicCIsIjg1Il1dXV0%3D&amp;hash=e226be45c8ead90460cf3228ebf0777b 768w, /themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-iphone-11-pro-max-256gb-space-gray-9f228cd2.webp 920w" src="https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-iphone-11-pro-max-256gb-space-gray-e7be7100.webp">

              <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">                        Apple iPhone 11 Pro Max 256GB Space Gray                    </h3>

              <div class="el-meta uk-text-meta uk-margin-small-top">59,90 € / Month</div>

            </a>
          </div>
          <div>
            <a class="el-item uk-panel uk-margin-remove-first-child uk-link-toggle uk-display-block" href="https://demo.yootheme.com/themes/wordpress/2020/tech-space/?yo_product=apple-iphone-xr-64gb-black">
  
              <img class="el-image" alt="" data-src="/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-iphone-xr-64gb-black-1133ed5d.webp" data-srcset="/themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-iphone-xr-64gb-black-1133ed5d.webp 460w, https://demo.yootheme.com/themes/wordpress/2020/tech-space/wp-admin/admin-ajax.php?action=kernel&amp;p=theme%2Fimage&amp;src=WyJ3cC1jb250ZW50XC91cGxvYWRzXC95b290aGVtZVwvcHJvZHVjdC1wb3N0LWFwcGxlLWlwaG9uZS14ci02NGdiLWJsYWNrLmpwZyIsW1siZG9SZXNpemUiLFs3NjgsODg4LDc2OCw4ODhdXSxbImRvQ3JvcCIsWzc2OCw4ODgsMCwwXV0sWyJ0eXBlIixbIndlYnAiLCI4NSJdXV1d&amp;hash=0e04c4502cc12c8ae7e4e6e7d80033b1 768w, /themes/wordpress/2020/tech-space/wp-content/themes/yootheme/cache/product-post-apple-iphone-xr-64gb-black-dfcec79e.webp 920w" data-sizes="(min-width: 460px) 460px" data-width="460" data-height="532" uk-img="" src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;460&quot; height=&quot;532&quot;></svg>">        
                  

      
              <h3 class="el-title uk-h5 uk-margin-top uk-margin-remove-bottom">                        Apple iPhone Xr 64GB Black                    </h3>        
      
  
      
      
      
              <div class="el-meta uk-text-meta uk-margin-small-top">59,90 € / Month</div>        
      
      
      
  
</a></div>
        </div>

      </div>
      <hr class="uk-margin-xlarge">

    </div>
  </div>
</div>

</div>
@endsection