<?php


include('../includes/connect.php'); 







?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-commerce Homepage</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="animations.css" />
  </head>
  <body>
    <div class="page-container">
      <header>
        <nav class="top-nav">
          <a href="#feedback" class="nav-link">FEEDBACK</a>
          <a href="#track-order" class="nav-link">TRACK MY ORDER</a>
          <a href="#about-us" class="nav-link">ABOUT US</a>
          <a href="#customer-care" class="nav-link">CUSTOMER CARE</a>
          <a href="../logreg/index.php" class="nav-link">LOGIN/SIGNUP</a>
        </nav>

        <div class="header-main">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/c23e5a420de1ec920cee9a61665d94053421cdd7da83dbf94cf9084e362378d0?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
            alt="Company Logo"
            class="logo"
          />
          <div class="header-actions">
            <div class="search-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c54ed2d77fc3ac4a506280345ee173be27f803b6508d775a56696300a1f81996?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Search Icon"
                class="search-icon"
              />
              <input
                type="text"
                placeholder="Search Items Here....."
                class="search-input"
              />
            </div>
            <div class="cart-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/47dce07ff3fdf6cba01f1f5f4887334bd1f093658edcb32cbeafdf9696b5758c?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Shopping Cart"
                class="cart-icon"
              />
              <div class="cart-text">YOUR CART</div>
            </div>
            <div class="auth-container">
              <div class="auth-text"></div>
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c67d2b4e0badb482ecf23bc9357b7d29000e802b53b99dab72ed86defa2b3714?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="User Profile"
                class="user-icon"
              />
            </div>
          </div>
        </div>
      </header>

      <div class="divider"></div>

      <main class="main-content">
        <nav class="category-nav">
          <div class="category-title">CATEGORIES</div>
          <div class="voucher-title">MY VOUCHERS</div>
        </nav>

        <div class="category-container">
          <div class="category-items">
            <div class="category-column">
              <div class="category-item">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2a42f6911628bf924d92077d6e3f43fd634aa67be8acfc309b3792ed845dc508?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Mobile Phones"
                  class="category-icon"
                />
              </div>
              <div class="category-label">Mobiles</div>
              <div class="category-item-alt">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2a42f6911628bf924d92077d6e3f43fd634aa67be8acfc309b3792ed845dc508?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Mobile Phones"
                  class="category-icon"
                />
              </div>
              <div class="category-label">Mobiles</div>
            </div>

            <div class="category-column-alt">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/26759c79569a9189ced92d6d7e4115473ead121cfeb196f8690c4118c6e69668?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="PC Parts"
                class="pc-parts-icon"
              />
              <div class="pc-parts-label">Pc Parts</div>
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/26759c79569a9189ced92d6d7e4115473ead121cfeb196f8690c4118c6e69668?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="PC Parts"
                class="pc-parts-icon-alt"
              />
              <div class="pc-parts-label">Pc Parts</div>
            </div>

            <div class="accessories-column">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/090eedd42554c4cab37c2dbb02b7f19afa0228180bb63ebd7bbc8a2fe488ca50?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Accessories"
                class="accessories-icon"
              />
              <div class="accessories-label">Accessories</div>
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/090eedd42554c4cab37c2dbb02b7f19afa0228180bb63ebd7bbc8a2fe488ca50?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Accessories"
                class="accessories-icon-alt"
              />
              <div class="accessories-label">Accessories</div>
            </div>

            <div class="category-column">
              <div class="category-item">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2a42f6911628bf924d92077d6e3f43fd634aa67be8acfc309b3792ed845dc508?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Mobile Phones"
                  class="category-icon"
                />
              </div>
              <div class="category-label">Mobiles</div>
              <div class="category-item-alt">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2a42f6911628bf924d92077d6e3f43fd634aa67be8acfc309b3792ed845dc508?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Mobile Phones"
                  class="category-icon"
                />
              </div>
              <div class="category-label">Mobiles</div>
            </div>

            <div class="category-column-alt">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/26759c79569a9189ced92d6d7e4115473ead121cfeb196f8690c4118c6e69668?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="PC Parts"
                class="pc-parts-icon"
              />
              <div class="pc-parts-label">Pc Parts</div>
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/26759c79569a9189ced92d6d7e4115473ead121cfeb196f8690c4118c6e69668?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="PC Parts"
                class="pc-parts-icon-alt"
              />
              <div class="pc-parts-label">Pc Parts</div>
            </div>

            <div class="accessories-column">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/090eedd42554c4cab37c2dbb02b7f19afa0228180bb63ebd7bbc8a2fe488ca50?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Accessories"
                class="accessories-icon"
              />
              <div class="accessories-label">Accessories</div>
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/090eedd42554c4cab37c2dbb02b7f19afa0228180bb63ebd7bbc8a2fe488ca50?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Accessories"
                class="accessories-icon-alt"
              />
              <div class="accessories-label">Accessories</div>
            </div>

            <div class="category-divider"></div>
          </div>

          <div class="vouchers-container">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/269455b69377c90142f6617da5e449deef57b7a2e025908d463cca92dc4263bd?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
              alt="Vouchers"
              class="vouchers-icon"
            />
            <div class="vouchers-label">Vouchers</div>
          </div>
        </div>

        <img
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/68e96d4b9f0dac8c538204470e7387e1e3163c9abb31afb8bbca6c829dfdb99d?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
          alt="Banner"
          class="banner-image fade-in"
        />

        <div class="deals-header">
          <div class="deals-title">
            <div class="deals-subtitle">Grab the best deal of you favorite</div>
            <div class="deals-highlight">GADGET</div>
          </div>
          <div class="view-all-container">
            <div class="view-all-text">View All</div>
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/a8127cbcb5bcb8f8b474c86d272fb5786a0b18421120f4f6c2ac8aee8f1aba58?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
              alt="Arrow"
              class="view-all-icon"
            />
          </div>
        </div>

        <div class="section-divider"></div>

        <div class="products-row">
          

          <article class="product-card slide-in-right">
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card slide-in-right"
            style="animation-delay: 0.2s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card slide-in-right"
            style="animation-delay: 0.4s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>


        </div>

        <div class="brands-header">
          <h2 class="brands-title">Top Electronic Brand</h2>
          <div class="brands-view-all">
            <div class="brands-view-all-text">View All</div>
            <div class="brands-view-all-icon-wrapper">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/a8127cbcb5bcb8f8b474c86d272fb5786a0b18421120f4f6c2ac8aee8f1aba58?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Arrow"
                class="brands-view-all-icon"
              />
            </div>
          </div>
        </div>

        <div class="brands-section-divider"></div>

        <section class="brand-showcase">
          <div class="brand-row">
            <div class="brand-column">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8abaf1f97e4b826cf8eee79a89a872b8caea44516baaaa32edda5d76448d2fd?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Brand"
                class="brand-image fade-in"
              />
            </div>
            <div class="brand-column-middle">
              <div class="brand-promo pulse-effect">
                <div class="brand-promo-row">
                  <div class="brand-promo-column">
                    <div class="brand-promo-content">
                      <div class="brand-name">REALME</div>
                      <img
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/e3a09f8f641ea0235829b6857ef6fb5bda2c0191ae4b5e5cca427d5f0736e477?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                        alt="Realme Logo"
                        class="brand-logo"
                      />
                      <div class="brand-offer">UP to 80% OFF</div>
                    </div>
                  </div>
                  <div class="brand-promo-column-right">
                    <img
                      src="https://cdn.builder.io/api/v1/image/assets/TEMP/e5642d2bf2228c3e850caab33cc9ce6d45032a7997b5883cb10325753bb3453d?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                      alt="Realme Product"
                      class="brand-product-image float-effect"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="brand-column-right">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/67acfad4ecb81e9aa57d14872500e6518bded0c9b645808a3f0802aa4d1492f3?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Brand"
                class="brand-image-right fade-in"
                style="animation-delay: 0.3s"
              />
            </div>
          </div>
        </section>

        <h2 class="just-for-you-title">Just For You</h2>
        <div class="just-for-you-divider"></div>

        <div class="product-grid">
          <article class="product-card-grid fade-in-up">
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 0.1s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 0.2s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 0.3s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 0.4s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>
        </div>

        <div class="product-grid">
          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 0.5s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 0.6s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 0.7s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 0.8s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 0.9s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>
        </div>

        <div class="product-grid">
          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 1s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 1.1s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 1.2s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 1.3s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>

          <article
            class="product-card-grid fade-in-up"
            style="animation-delay: 1.4s"
          >
            <div class="product-image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c9c225d686e9f241169716b2cf871ee29062a00c16139e8dba16a32ab8acc40a?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                alt="Ryzen 3 3200G"
                class="product-image"
              />
              <div class="heart-icon"></div>
            </div>
            <h3 class="product-title">Ryzen 3 3200 G 4 CORES<br />8THREADS</h3>
            <div class="product-details">
              <div class="price-container">
                <div>$</div>
                <div>250</div>
              </div>
              <div class="rating-container">
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2edbdfb04d41a7ca21510a84fb559ac7732fe70aef8cfc1658c6bf29ccdbb1b6?placeholderIfAbsent=true&apiKey=e0b668ff39a044118072b3ab4bd08021"
                  alt="Rating"
                  class="rating-icon"
                />
                <div>4.5</div>
              </div>
            </div>
          </article>
        </div>
      </main>
    </div>

    <script src="script.js"></script>
  </body>
</html>


