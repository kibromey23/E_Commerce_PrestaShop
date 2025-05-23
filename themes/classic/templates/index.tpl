{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 * 
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{extends file=$layout}

{block name='content'}

<style>
  .hero-banner {
    background: linear-gradient(to right, #004d99, #0066cc);
    padding: 60px 20px;
    text-align: center;
    color: white;
    animation: fadeIn 2s ease-in;
  }

  .hero-banner h1 {
    font-size: 3em;
    font-weight: bold;
  }

  .hero-banner p {
    font-size: 1.2em;
    margin-bottom: 20px;
  }

  .device-menu {
    text-align: center;
    background: #f0f0f0;
    padding: 15px 10px;
    font-size: 1.1em;
    animation: slideIn 1s ease;
  }

  .device-menu a {
    margin: 0 20px;
    color: #333;
    font-weight: bold;
    text-decoration: none;
    position: relative;
    transition: color 0.3s;
  }

  .device-menu a:hover {
    color: #007bff;
  }

  .device-menu a:hover::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 3px;
    background: #007bff;
    left: 0;
    bottom: -5px;
  }

  /* Consistent image styling */
  .categories img,
  .popular-products img {
    width: 180px;
    height: 180px;
    object-fit: cover;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    border-radius: 12px;
    border: 3px solid transparent;
  }

  .categories img:hover,
  .popular-products img:hover {
    transform: scale(1.08);
    border-color: black;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }

  .categories div,
  .popular-products div {
    text-align: center;
    margin: 10px;
  }

  .categories h3,
  .popular-products p {
    margin-top: 10px;
    font-weight: bold;
  }

  .testimonials {
    background: #f8f9fa;
    padding: 40px 20px;
    border-top: 2px solid #007bff;
  }

  /* Animations */
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes slideIn {
    from { transform: translateY(-100%); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
  }
</style>

<div class="hero-banner">
  <h1>Welcome to KB Electronics</h1>
  <p style = "color:white;">Discover the best devices at unbeatable prices.</p>
  <a href="index.php?controller=category" class="btn btn-primary">Shop Now</a>
</div>


<section class="categories" style="display:flex; justify-content:space-around; margin:40px 0;">
  <div><img src="{$urls.theme_assets}img/tablet.jpeg" alt="Tablet" style="width:200px;"><h3>Tablets</h3></div>
  <div><img src="{$urls.theme_assets}img/yellow-phone.jpeg" alt="Smartphones" style="width:200px;"><h3>Smartphones</h3></div>
  <div><img src="{$urls.theme_assets}img/laptop.jpeg" alt="Laptop" style="width:200px;"><h3>Laptops</h3></div>
  <div><img src="{$urls.theme_assets}img/smartwatch.jpeg" alt="Smartwatchs" style="width:200px;"><h3>Smart Watchs</h3></div>
</section>

<section class="popular-products" style="text-align:center;">
  <h2>Popular Products</h2>
  <div style="display:flex; justify-content:space-around; flex-wrap:wrap;">
    <div><img src="{$urls.theme_assets}img/tv.jpeg" width="200"><p>Smart TV<br>$399</p></div>
    <div><img src="{$urls.theme_assets}img/watch.jpeg" width="200"><p>Watchs<br>$15</p></div>
    <div><img src="{$urls.theme_assets}img/airpads.jpeg" width="200"><p>Wireless Earbuds<br>$10</p></div>
    <div><img src="{$urls.theme_assets}img/camera.jpeg" width="200"><p>DSLR Camera<br>$600</p></div>
  </div>
</section>

<section class="testimonials" style="margin:40px; text-align:center;">
  <h3>What Our Customers Are Saying</h3>
  <p>"Great selection of electronics at fantastic prices. Highly recommended!" – John D.</p>
</section>


{/block}
