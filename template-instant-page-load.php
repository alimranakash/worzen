<?php
/**
 * Template Name: Instant Page Load Landing Page
 * Template Post Type: page
 *
 * Landing page for Instant Page Load – WordPress SPA Plugin
 *
 * @package Worzen
 * @version 1.0.0
 */

get_header();
?>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-24">
  <div class="container mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-6xl font-bold mb-4">Instant Page Load 🚀</h1>
    <p class="text-lg md:text-xl mb-8">Transform your WordPress website into a blazing-fast Single Page Application (SPA) — no code required!</p>
    <div class="flex justify-center gap-4">
      <a href="#" class="bg-white text-blue-700 font-semibold px-6 py-3 rounded-xl shadow hover:bg-gray-100 transition">Download Now</a>
      <a href="#" class="border border-white px-6 py-3 rounded-xl hover:bg-white hover:text-blue-700 transition">View Demo</a>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-6">How It Works ⚙️</h2>
    <p class="max-w-3xl mx-auto text-gray-600 mb-10">
      Instant Page Load converts your WordPress site into a Single Page Application (SPA) by dynamically loading content without reloading the full page.
      This means your visitors enjoy faster navigation, improved SEO performance, and a smoother experience.
    </p>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="font-semibold text-xl mb-3">Step 1</h3>
        <p>Install and activate the plugin from your WordPress dashboard.</p>
      </div>
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="font-semibold text-xl mb-3">Step 2</h3>
        <p>Enable “Instant Page Load” mode with one click.</p>
      </div>
      <div class="bg-white p-8 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="font-semibold text-xl mb-3">Step 3</h3>
        <p>Enjoy seamless, lightning-fast browsing across your entire site.</p>
      </div>
    </div>
  </div>
</section>

<!-- Features -->
<section class="py-20">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-10">Core Features 🌟</h2>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="font-semibold mb-2">Instant Navigation</h3>
        <p>Load new pages in milliseconds without full reloads.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="font-semibold mb-2">SEO Friendly</h3>
        <p>Works with WordPress permalinks & Google indexing flawlessly.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="font-semibold mb-2">No Coding Required</h3>
        <p>One-click setup for beginners and professionals alike.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="font-semibold mb-2">Theme Compatible</h3>
        <p>Works seamlessly with all WordPress themes and builders.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="font-semibold mb-2">Smart Prefetch</h3>
        <p>Preloads pages in the background for true instant loading.</p>
      </div>
      <div class="bg-gray-50 p-6 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="font-semibold mb-2">Performance Boost</h3>
        <p>Improves Core Web Vitals & overall site ranking.</p>
      </div>
    </div>
  </div>
</section>

<!-- Comparison Table -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-10">Traditional vs Instant Page Load</h2>
    <div class="overflow-x-auto">
      <table class="min-w-full border border-gray-200 text-left">
        <thead class="bg-blue-600 text-white">
          <tr>
            <th class="px-6 py-3">Feature</th>
            <th class="px-6 py-3">Traditional</th>
            <th class="px-6 py-3">Instant Page Load</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b">
            <td class="px-6 py-4 font-medium">Page Reloads</td>
            <td class="px-6 py-4">Full Reload</td>
            <td class="px-6 py-4 text-green-600 font-semibold">Instant (No Reload)</td>
          </tr>
          <tr class="border-b">
            <td class="px-6 py-4 font-medium">Speed</td>
            <td class="px-6 py-4">3–6 seconds</td>
            <td class="px-6 py-4 text-green-600 font-semibold">&lt;1 second</td>
          </tr>
          <tr class="border-b">
            <td class="px-6 py-4 font-medium">User Experience</td>
            <td class="px-6 py-4">Average</td>
            <td class="px-6 py-4 text-green-600 font-semibold">Smooth & Engaging</td>
          </tr>
          <tr>
            <td class="px-6 py-4 font-medium">SEO Support</td>
            <td class="px-6 py-4">Limited</td>
            <td class="px-6 py-4 text-green-600 font-semibold">Full SEO Compatible</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Pricing Table -->
<section class="py-20">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-10">Pricing Plans 💰</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Free -->
      <div class="border rounded-2xl p-8 shadow hover:shadow-lg transition">
        <h3 class="text-xl font-bold mb-4">Free</h3>
        <p class="text-gray-600 mb-6">Perfect for personal blogs and small websites.</p>
        <h4 class="text-4xl font-bold mb-4">$0</h4>
        <ul class="text-gray-600 mb-6 space-y-2">
          <li>✔ Basic SPA loading</li>
          <li>✔ Works with any theme</li>
          <li>✔ Regular updates</li>
        </ul>
        <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-blue-700 transition">Get Started</a>
      </div>

      <!-- Pro -->
      <div class="border-2 border-blue-600 rounded-2xl p-8 shadow-xl bg-blue-50">
        <h3 class="text-xl font-bold mb-4 text-blue-700">Pro</h3>
        <p class="text-gray-700 mb-6">For professionals and growing businesses.</p>
        <h4 class="text-4xl font-bold mb-4">$39<span class="text-lg text-gray-500">/year</span></h4>
        <ul class="text-gray-700 mb-6 space-y-2">
          <li>✔ All Free features</li>
          <li>✔ Smart Prefetch Engine</li>
          <li>✔ Priority Support</li>
          <li>✔ Custom Exclusion Rules</li>
        </ul>
        <a href="https://checkout.freemius.com/plugin/11491/plan/19562/" class="bg-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-blue-700 transition">Buy Pro</a>
      </div>

      <!-- Lifetime -->
      <div class="border rounded-2xl p-8 shadow hover:shadow-lg transition">
        <h3 class="text-xl font-bold mb-4">Lifetime</h3>
        <p class="text-gray-600 mb-6">One-time payment for lifetime updates.</p>
        <h4 class="text-4xl font-bold mb-4">$199</h4>
        <ul class="text-gray-600 mb-6 space-y-2">
          <li>✔ All Pro features</li>
          <li>✔ Lifetime Updates</li>
          <li>✔ Premium Support</li>
        </ul>
        <a href="https://checkout.freemius.com/plugin/11491/plan/29933/" class="bg-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-blue-700 transition">Get Lifetime</a>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-10">What Users Say 💬</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
        <p class="italic text-gray-600 mb-4">“My website speed score jumped from 65 to 98! This plugin is a must-have.”</p>
        <h4 class="font-semibold">— Sarah J., Blogger</h4>
      </div>
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
        <p class="italic text-gray-600 mb-4">“Seamless experience! It feels like my WordPress site became an app.”</p>
        <h4 class="font-semibold">— Mark R., Web Developer</h4>
      </div>
      <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
        <p class="italic text-gray-600 mb-4">“Instant Page Load saved us so much time and improved user engagement.”</p>
        <h4 class="font-semibold">— Lina W., Agency Owner</h4>
      </div>
    </div>
  </div>
</section>

<!-- Installation Steps -->
<section class="py-20">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-10">Installation & Setup 🧩</h2>
    <ol class="max-w-2xl mx-auto text-left text-gray-700 space-y-4">
      <li><strong>1.</strong> Download and install the plugin in your WordPress dashboard.</li>
      <li><strong>2.</strong> Activate the plugin and go to <em>Settings → Instant Page Load</em>.</li>
      <li><strong>3.</strong> Toggle the switch to enable SPA mode.</li>
      <li><strong>4.</strong> Test your pages — navigation will now be instant!</li>
    </ol>
  </div>
</section>

<!-- CTA Footer -->
<footer class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16 text-center">
  <h2 class="text-3xl font-bold mb-4">Ready to Supercharge Your WordPress Speed?</h2>
  <p class="mb-8 text-lg">Install <strong>Instant Page Load</strong> today and experience next-level performance.</p>
  <a href="#" class="bg-white text-blue-700 font-semibold px-8 py-4 rounded-xl shadow hover:bg-gray-100 transition">Get Started Now</a>
</footer>

<section>
    <div class="container mx-auto px-6 text-center">
      <?php
      while ( have_posts() ) :
          the_post();
          the_content();
      endwhile;
      ?>
    </div>
</section>

<?php get_footer(); ?>
