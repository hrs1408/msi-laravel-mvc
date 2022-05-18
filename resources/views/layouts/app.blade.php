<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MSI Vietnam</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"
    ></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;1,100&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{@asset('/assets/scss/style-index.css')}}"/>
    <link rel="stylesheet" href="{{@asset('/assets/scss/store.css')}}"/>

    <link
        rel="shortcut icon"
        href="https://vn.msi.com/favicon-16x16.png"
        type="image/x-icon"
    />
</head>

<body>
<header>
    <div class="container-fluid p-0 d-none d-xl-block">
        <div class="header">
            <div class="row h-100 w-100 justify-content-between ps-5">
                <div class="col-8 menuAction d-flex">
                    <div class="logo">
                        <a href="index.html">
                            <img
                                src="https://storage-asset.msi.com/frontend/imgs/logo.png"
                                alt="logo"
                            />
                        </a>
                    </div>
                    <div class="menuAction-item">
                        <button class="btn">SẢN PHẨM</button>
                    </div>
                    <div class="menuAction-item">
                        <button class="btn">GIẢI PHÁP ODM</button>
                    </div>
                    <div class="menuAction-item">
                        <button class="btn">CÓ GÌ MỚI</button>
                    </div>
                    <div class="menuAction-item">
                        <button class="btn">HỖ TRỢ</button>
                    </div>
                </div>
                <div class="col-2">
                    <div class="menuFunction h-100 d-flex">
                        <div class="menuFunction-item">
                            <a href="">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </div>
                        <div class="menuFunction-item">
                            <a href="">
                                <i class="fa-solid fa-location-dot"></i>
                            </a>
                        </div>
                        <div class="menuFunction-item">
                            <a href="">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="ps-3 pe-3 d-flex d-xl-none header-repository justify-content-between"
    >
        <div class="button-offcanvas">
            <div
                class="container"
                onclick="myFunction(this)"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample"
            >
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
        <div class="logo-repository">
            <img
                src="https://storage-asset.msi.com/frontend/imgs/logo.png"
                alt=""
            />
        </div>
        <div class="menuFunction h-100 d-flex justify-content-between">
            <div class="menuFunction-item">
                <a href="">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>
            <div class="menuFunction-item">
                <a href="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
        </div>
    </div>
    <div
        class="offcanvas offcanvas-start"
        tabindex="-1"
        id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel"
    >
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button
                type="button"
                class="btn-close text-reset"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
            ></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Some text as placeholder. In real life you can have the elements you
                have chosen. Like, text, images, lists, etc.
            </div>
            <div class="dropdown mt-3"></div>
        </div>
    </div>
</header>
{{ $slot }}

<div class="container-fluid break-line"></div>
<footer>
    <div class="container-fluid footer d-none d-xl-block">
        <div class="row m-auto footer-head mt-3" style="width: 90%">
            <div class="col-3">
                <ul>
                    <li class="heading">COMMUNITY</li>
                    <li>MSI Reward Program</li>
                    <li>Forums</li>
                    <li>Social Media</li>
                    <li>Videos</li>
                    <li>Gaming Teams</li>
                    <li>Blogs</li>
                    <li>Customer Stories</li>
                </ul>
            </div>
            <div class="col-3">
                <ul>
                    <li class="heading">SUPPORT</li>
                    <li>Downloads</li>
                    <li>Member Center</li>
                    <li>Online Customer Service</li>
                    <li>Service Locations</li>
                    <li>Warranty</li>
                </ul>
            </div>
            <div class="col-2">
                <ul>
                    <li class="heading">NEWS</li>
                    <li>News</li>
                    <li>Awards</li>
                    <li>RSS</li>
                </ul>
            </div>
            <div class="col-2">
                <ul>
                    <li class="heading">MEDIA</li>
                    <li>Brochure</li>
                    <li>Wallpaper</li>
                    <li>MSI Apps</li>
                </ul>
            </div>
            <div class="col-2">
                <ul>
                    <li class="heading">ABOUT US</li>
                    <li>About MSI</li>
                    <li>Mission And Vision</li>
                    <li>Brand Story</li>
                    <li>Innovation DNA</li>
                    <li>Careers</li>
                    <li>CSR</li>
                </ul>
            </div>
        </div>
        <div class="container-fluid break-line"></div>
        <div class="row footer-item m-auto" style="width: 90%">
            <div class="col-6 d-flex align-items-center gap-3">
                <img
                    src="https://storage-asset.msi.com/frontend/imgs/logo-footer.png"
                    alt=""
                    class="img-fluid"
                />
                <span class="copyright"
                >Copyright © 2022 Micro-Star INT'L CO., LTD. All rights
              reserved.</span
                >
            </div>
            <div class="col-6 contact h-100 d-flex align-items-center">
                <ul class="d-flex list-unstyled align-items-center gap-3">
                    <li>Cookie Policy</li>
                    <li>Privacy Policy</li>
                    <li>Terms of Use</li>
                    <li>Contact Us</li>
                    <li>United States / English</li>
                    <li>
                        <svg
                            version="1.2"
                            width="25px"
                            baseProfile="tiny"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 12.96 15.577"
                            xml:space="preserve"
                        >
                  <path
                      width="38px"
                      height="38px"
                      fill="#a1a1a1"
                      d="M8.652,10.444c-0.299,0-0.539,0.24-0.539,0.538c-0.002,1.255-0.672,2.415-1.758,3.043
                            c-1.682,0.972-3.833,0.396-4.805-1.284C0.577,11.06,1.152,8.907,2.834,7.937c0.012-0.008,0.023-0.015,0.037-0.021
                            c0.251-0.16,0.324-0.494,0.166-0.745c-0.16-0.251-0.493-0.326-0.744-0.167C0.874,7.825,0,9.341,0,10.979
                            c-0.001,2.537,2.057,4.596,4.595,4.598c2.536-0.002,4.593-2.057,4.597-4.595C9.191,10.685,8.949,10.444,8.652,10.444z
                            M11.907,11.103l-1.644-2.84C10.006,7.816,9.51,7.563,8.997,7.614L7.25,7.791C7.085,7.812,6.934,7.694,6.916,7.528
                            C6.91,7.484,6.914,7.439,6.928,7.396l0.777-2.078l2.158,0.635c0.363,0.113,0.75-0.091,0.862-0.455
                            c0.112-0.365-0.091-0.751-0.456-0.863l-3.365-0.99c-0.1-0.035-0.213-0.069-0.342-0.103L6.354,3.48
                            c-0.079-0.024-0.161-0.031-0.24-0.026c-0.121-0.018-0.246-0.032-0.381-0.04C4.305,3.337,3.711,3.696,3.545,3.841
                            C3.375,3.987,3.262,4.2,3.248,4.444C3.244,4.505,3.246,4.566,3.256,4.627l0.663,3.808c0.176,1.018,1.143,1.701,2.161,1.528
                            L8.1,9.618c0.49-0.082,0.983,0.119,1.275,0.521l1.26,1.725c0.193,0.265,0.549,0.351,0.842,0.206l0.166-0.082
                            c0.313-0.156,0.439-0.536,0.284-0.849C11.92,11.126,11.914,11.114,11.907,11.103z M5.563,2.616c0.723,0.039,1.34-0.514,1.379-1.236
                            c0.038-0.723-0.516-1.339-1.238-1.378C4.98-0.038,4.364,0.517,4.325,1.239C4.286,1.961,4.84,2.577,5.563,2.616z M12.758,3.468
                            c-0.182-0.092-0.405-0.021-0.497,0.162l-1.47,2.877L8.355,6.376c-0.205-0.012-0.38,0.145-0.391,0.35
                            c-0.012,0.205,0.146,0.379,0.35,0.391l2.676,0.143c0.006,0,0.014,0.002,0.02,0.002c0.139,0,0.267-0.08,0.33-0.203l1.579-3.092
                            C13.012,3.783,12.939,3.561,12.758,3.468z"
                  ></path>
                </svg>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid footer-repository d-block d-xl-none">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button
                        class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                    >
                        COMMUNITY
                    </button>
                </h2>
                <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample"
                >
                    <div class="accordion-body">
                        <ul>
                            <li>MSI Reward Program</li>
                            <li>Forums</li>
                            <li>Social Media</li>
                            <li>Videos</li>
                            <li>Gaming Teams</li>
                            <li>Blogs</li>
                            <li>Customer Stories</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                    >
                        SUPPORT
                    </button>
                </h2>
                <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample"
                >
                    <div class="accordion-body">
                        <ul>
                            <li>Downloads</li>
                            <li>Member Center</li>
                            <li>Online Customer Service</li>
                            <li>Service Location</li>
                            <li>Warranty</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                    >
                        NEWS
                    </button>
                </h2>
                <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample"
                >
                    <div class="accordion-body">
                        <ul>
                            <li>News</li>
                            <li>Awards</li>
                            <li>RSS</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseFour"
                        aria-expanded="false"
                        aria-controls="collapseFour"
                    >
                        MEDIA
                    </button>
                </h2>
                <div
                    id="collapseFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample"
                >
                    <div class="accordion-body">
                        <ul>
                            <li>Brochure</li>
                            <li>Wallpaper</li>
                            <li>MSI Apps</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseFive"
                        aria-expanded="false"
                        aria-controls="collapseFive"
                    >
                        ABOUT US
                    </button>
                </h2>
                <div
                    id="collapseFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample"
                >
                    <div class="accordion-body">
                        <ul>
                            <li>About MSI</li>
                            <li>Mission And Vision</li>
                            <li>Brand Story</li>
                            <li>Innovation DNA</li>
                            <li>Careers</li>
                            <li>CSR</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"
></script>
<script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>
</body>
</html>
