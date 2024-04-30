<?php
/*
Template Name: About Page Template
*/
?>

<?php get_header(); ?>

<div
      style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.6),
            rgba(0, 0, 0, 0.6)
          ),
          url('http://universal-frontier.local/wp-content/uploads/2024/04/hero-image.jpg');
      "
      class="banner"
    >
      <div class="container">
        <h2>About Universal Frontier</h2>
      </div>
    </div>
    <section class="about">
      <div class="container">
        <div class="tabs" role="tablist">
          <div class="tabs__header">
            <button
              class="tab-link active"
              role="tab"
              aria-selected="true"
              aria-controls="tab1"
              id="tab1-btn"
              tabindex="0"
            >
              Innovation
            </button>
            <button
              class="tab-link"
              role="tab"
              aria-selected="false"
              aria-controls="tab2"
              id="tab2-btn"
            >
              Looking Forward
            </button>
            <button
              class="tab-link"
              role="tab"
              aria-selected="false"
              aria-controls="tab3"
              id="tab3-btn"
            >
              Coming Forward
            </button>
          </div>
          <div
            class="tab-content active"
            role="tabpanel"
            id="tab1"
            tabindex="0"
          >
            <p>
              At Universal Frontier, innovation is at the core of everything we
              do. We strive to push the boundaries of technology and
              exploration, constantly seeking new ways to advance our
              understanding of the cosmos. From developing revolutionary
              spacecraft and instruments to pioneering novel approaches to space
              exploration, innovation drives our quest to unlock the secrets of
              the universe. By fostering a culture of creativity, collaboration,
              and experimentation, we empower our team to think boldly, solve
              complex challenges, and push the limits of what's possible in
              space exploration.
            </p>
          </div>
          <div class="tab-content" role="tabpanel" id="tab2">
            <p>
              At Universal Frontier, we are committed to shaping the future of
              space exploration. With a vision for a thriving spacefaring
              civilization, we are dedicated to laying the groundwork for
              humanity's expansion beyond Earth. Through our ambitious missions,
              partnerships, and initiatives, we are working to build a
              sustainable and inclusive future in space, where exploration is
              accessible to all. By looking forward with optimism,
              determination, and a spirit of adventure, we inspire others to
              join us in our quest to explore new frontiers and unlock the
              potential of the cosmos.
            </p>
          </div>
          <div class="tab-content" role="tabpanel" id="tab3">
            <p>
              At Universal Frontier, our commitment to excellence is unwavering.
              We are dedicated to achieving our goals with integrity,
              professionalism, and a relentless pursuit of excellence. From our
              world-class team of scientists, engineers, and astronauts to our
              state-of-the-art facilities and technologies, we hold ourselves to
              the highest standards of quality and performance. We are committed
              to safety, sustainability, and ethical conduct in all aspects of
              our operations, ensuring that our endeavors benefit humanity and
              the planet. With a steadfast commitment to our mission and values,
              we are poised to lead the way in shaping the future of space
              exploration for generations to come.
            </p>
          </div>
        </div>
        <img src="http://universal-frontier.local/wp-content/uploads/2024/04/about.jpg" alt="Picture of a supernova">
      </div>
    </section>
  

<?php get_footer(); ?>