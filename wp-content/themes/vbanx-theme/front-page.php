<?php
/**
 * Template Name: Home Page
 *
 * A standalone WordPress page template.
 * On purpose this file does NOT call get_header() or get_footer() —
 * it only outputs the page content itself, so you can drop it into
 * your theme and select it from the "Template" dropdown on a Page.
 *
 * Save this file inside your active theme folder, e.g.:
 *   /wp-content/themes/your-theme/page-vbanx.php
 *
 * Put the partner logo SVGs inside your theme at:
 *   /wp-content/themes/your-theme/assets/logo-1.svg (etc.)
 */
get_header();

$theme_uri = esc_url( get_template_directory_uri() );
$bg = content_url('/uploads/2026/07/qaulity.png');

$vbanx_partner_logos = array();
$partner_alts = array( 'CMA', 'AC', 'CBC', 'PMTK', 'PCG', 'SEC', 'CAFT', 'BNI', 'ACC', 'TCG', 'NTT DATA', 'KOSIGN' );

for ( $i = 1; $i <= 12; $i++ ) {
	$url = get_field( "partner_logo_{$i}" );
	if ( $url ) {
		$vbanx_partner_logos[] = array(
			'src' => $url,
			'alt' => isset( $partner_alts[ $i - 1 ] ) ? $partner_alts[ $i - 1 ] : 'Partner logo',
		);
	}
}


?>

<head>
  <link rel="stylesheet" href="<?php echo $theme_uri; ?>/assets/css/front-page.css">
  <style>
  .perf-section {
      background-image: url('<?php echo esc_url($bg); ?>');background-position: center;background-size: cover;background-repeat: no-repeat;
  }
</style>
</head>

<section class="hero">
  <div class="hero-inner">
    <div class="hero-copy">
      <span class="badge"><?php the_field('hero_badge'); ?></span>
      <h1><?php the_field('hero_title'); ?><br><span class="accent"><?php the_field('hero_title_accent'); ?></span></h1>
      <p class="hero-desc"><?php the_field('hero_description'); ?></p>
      <div class="hero-actions">
        <a class="cta-btn" href="<?php the_field('hero_cta_url'); ?>"><?php the_field('hero_cta_text'); ?></a>
        <a class="btn-outline" href="<?php the_field('hero_outline_url'); ?>"><?php the_field('hero_outline_text'); ?></a>
      </div>
      <div class="stats">
        <div>
          <div class="stat-num">20+ yrs</div>
          <div class="stat-label">Banking &amp; technology experience</div>
        </div>
        <div>
          <div class="stat-num">8</div>
          <div class="stat-label">Core institution types supported</div>
        </div>
        <div>
          <div class="stat-num">24/7</div>
          <div class="stat-label">Structured support &amp; escalation</div>
        </div>
      </div>
    </div>

    <div class="globe-wrap">
      <div class="globe-glow"></div>
      <canvas id="globeCanvas" width="480" height="480"></canvas>
    </div>
  </div>
</section>

<section class="partners-section">
  <div class="partners-inner">
    <div class="partners-label">Ours Strategic<span>Partners</span></div>
    <div class="marquee-mask">
      <div class="marquee-track" id="marqueeTrack">
        <!-- logos injected twice via JS for seamless loop -->
      </div>
    </div>
  </div>
</section>

<!-- ============ MODULES // FEATURE PRODUCTS ============ -->
<section class="section section-tint">
  <div class="section-inner">
    <span class="eyebrow">Feature Products</span>
    <h2 class="section-title">One platform, every line<br>of business.</h2>
    <p class="section-desc">Each VBANX module is built on the same compliant core, so institutions can start with one business line and scale into others without re-platforming.</p>

    <div class="carousel-row">
      <button class="carousel-arrow" id="prevArrow" aria-label="Previous modules"><svg viewBox="0 0 24 24" width="18" height="18"><path d="M15 6l-6 6 6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>

      <div class="carousel-mask">
        <div class="carousel-track" id="moduleTrack">
          <?php for ( $i = 1; $i <= 8; $i++ ) :
              $icon     = get_field( "module_{$i}_icon" );
              $title    = get_field( "module_{$i}_title" );
              $subtitle = get_field( "module_{$i}_subtitle" );
              $desc = get_field( "module_{$i}_description" ); 
              $tag      = get_field( "module_{$i}_tag" );

              $link = get_field( "module_{$i}_link" );
              if ( ! $link ) {
                  $link = home_url( '/page-product-core-banking/' );
              }

              // Skip rendering a card entirely if it has no title set
              if ( ! $title ) { continue; }
          ?>
          <a href="<?php echo esc_url( $link ); ?>" class="module-link">
            <article class="module-card">
              <div class="module-icon">
                <?php if ( $icon ) : ?>
                  <img src="<?php echo esc_url( $icon ); ?>" alt="<?php echo esc_attr( $title ); ?> Icon">
                <?php endif; ?>
              </div>
              <h3 style="color: var(--blue-accent);">
                <?php echo esc_html( $title ); ?><span><?php echo esc_html( $subtitle ); ?></span>
              </h3>
              <p><?php echo esc_html( $desc ); ?></p>
              <span class="module-tag"><?php echo esc_html( $tag ); ?></span>
            </article>
            </a>
          <?php endfor; ?>
        </div>
      </div>

      <button class="carousel-arrow" id="nextArrow" aria-label="Next modules"><svg viewBox="0 0 24 24" width="18" height="18"><path d="M9 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
    </div>
  </div>
</section>

<!-- ============ REAL SCREENS ============ -->
<section class="section">
  <div class="section-inner">
    <div class="screens-head">
      <div>
        <span class="eyebrow"><?php the_field('screens_eyebrow'); ?></span>
        <h2 class="section-title"><?php the_field('screens_title'); ?><br><?php the_field('screens_title_line_2'); ?></h2>        <p class="section-desc"><?php the_field('screens_description'); ?></p>
      </div>
    </div>
  </div>

  <div class="showcase-row">
    <div class="phone-cluster">
      <?php $showcase1_img = get_field('showcase_1_image'); if ( $showcase1_img ) : ?>
        <img src="<?php echo esc_url( $showcase1_img ); ?>" alt="<?php the_field('showcase_1_badge'); ?>">
      <?php endif; ?>
    </div>
    <div class="showcase-copy">
      <span class="badge-tag"><?php the_field('showcase_1_badge'); ?></span>
      <h3><?php the_field('showcase_1_title'); ?></h3>
      <p><?php the_field('showcase_1_description'); ?></p>
      <ul class="check-list">
        <?php for ( $i = 1; $i <= 3; $i++ ) :
          $check = get_field( "showcase_1_check_{$i}" );
          if ( $check ) : ?>
          <li><?php echo esc_html( $check ); ?></li>
        <?php endif; endfor; ?>
      </ul>
      <a href="<?php the_field('showcase_1_url'); ?>" class="learn-more">Learn More <svg viewBox="0 0 24 24" width="14" height="14"><path d="M9 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>

  <div class="showcase-row reverse">
    <div class="showcase-copy">
      <span class="badge-tag"><?php the_field('showcase_2_badge'); ?></span>
      <h3><?php the_field('showcase_2_title'); ?></h3>
      <p><?php the_field('showcase_2_description'); ?></p>
      <ul class="check-list">
        <?php for ( $i = 1; $i <= 3; $i++ ) :
          $check = get_field( "showcase_2_check_{$i}" );
          if ( $check ) : ?>
          <li><?php echo esc_html( $check ); ?></li>
        <?php endif; endfor; ?>
      </ul>
      <a href="<?php the_field('showcase_2_url'); ?>" class="learn-more">Learn More <svg viewBox="0 0 24 24" width="14" height="14"><path d="M9 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
    <div class="phone-cluster single">
      <?php $showcase2_img = get_field('showcase_2_image'); if ( $showcase2_img ) : ?>
        <img src="<?php echo esc_url( $showcase2_img ); ?>" alt="<?php the_field('showcase_2_badge'); ?>">
      <?php endif; ?>
    </div>
  </div>

  <div class="device-strip">
    <div class="device-strip-inner">
      <?php $device_img = get_field('device_strip_image'); if ( $device_img ) : ?>
        <img src="<?php echo esc_url( $device_img ); ?>" alt="<?php the_field('device_strip_caption'); ?>">
      <?php endif; ?>
    </div>
    <span class="device-caption"><?php the_field('device_strip_caption'); ?></span>
  </div>
</section>

<!-- ============ PERFORMANCE / COMPLIANCE ============ -->
<section class="perf-section">
  <div class="section-inner perf-grid-wrap">
    <div class="perf-copy">
      <span class="eyebrow"><?php the_field('perf_eyebrow'); ?></span>
      <h2 class="section-title light"><?php the_field('perf_title'); ?></h2>
      <p class="section-desc light"><?php the_field('perf_description'); ?></p>
    </div>
    <div class="perf-grid">
      <?php for ( $i = 1; $i <= 8; $i++ ) :
          $tag     = get_field( "perf_card_{$i}_tag" );
          $heading = get_field( "perf_card_{$i}_heading" );
          $desc    = get_field( "perf_card_{$i}_description" );

          if ( ! $heading ) { continue; }
      ?>
        <div class="perf-card">
          <span class="perf-tag"><?php echo esc_html( $tag ); ?></span>
          <h4><?php echo esc_html( $heading ); ?></h4>
          <p><?php echo esc_html( $desc ); ?></p>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ CONTACT ============ -->
<section class="section">
  <div class="section-inner">
    <div class="contact-card">
      <div class="contact-left">
        <h3>Let's plan your digital transformation.</h3>
        <p>Tell us about your institution and we'll walk you through the right VBANX modules — from core banking to CIFRS compliance and mobile banking.</p>
        <ul class="contact-info">
          <li><svg viewBox="0 0 24 24" width="16" height="16"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" fill="none" stroke="currentColor" stroke-width="1.6"/></svg>012 751 275 / 087 333 187 / 085 816 000</li>
          <li><svg viewBox="0 0 24 24" width="16" height="16"><path d="M4 4h16v16H4z" fill="none" stroke="currentColor" stroke-width="1.6"/><path d="M4 6l8 7 8-7" fill="none" stroke="currentColor" stroke-width="1.6"/></svg>info@vbanx.com</li>
          <li><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z" fill="none" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="10" r="2.4" fill="none" stroke="currentColor" stroke-width="1.6"/></svg>Building #314, Road 6A, Kean Khlaing Village, Chroy Changvar, Phnom Penh 12101, Cambodia</li>
          <li><svg viewBox="0 0 24 24" width="16" height="16"><circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.6"/><path d="M3 12h18M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18" fill="none" stroke="currentColor" stroke-width="1.6"/></svg>www.vbanx.com</li>
        </ul>
        <div class="contact-social">
          <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12z" fill="currentColor"/></svg></a>
          <a href="#" aria-label="Gmail"><svg viewBox="0 0 24 24" width="16" height="16"><rect x="2" y="4" width="20" height="16" rx="2" fill="none" stroke="currentColor" stroke-width="1.6"/><path d="M2.5 5.5l9.5 7 9.5-7" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        </div>
      </div>
     <form class="contact-right" onsubmit="event.preventDefault();" method="post">
        <?php wp_nonce_field( 'vbanx_contact_form', 'vbanx_contact_nonce' ); ?>
        <div class="form-row">
          <div class="form-field"><label>First Name</label><input type="text" name="first_name" placeholder="John"></div>
          <div class="form-field"><label>Last Name</label><input type="text" name="last_name" placeholder="Doe"></div>
        </div>
        <div class="form-field">
          <label>Email</label>
          <input type="email" name="email" placeholder="you@company.com">
        </div>
        <div class="form-field">
          <label>What service are you interested in</label>
          <select name="service">
            <option value="">Select project type</option>
            <option>Core Banking</option>
            <option>Microfinance</option>
            <option>CIFRS Compliance</option>
            <option>Mobile Banking</option>
          </select>
        </div>
        <div class="form-field">
          <label>Message</label>
          <textarea rows="3" name="message" placeholder="Write your message..."></textarea>
        </div>
        <button type="submit" class="submit-btn">Request a Free Demo</button>
      </form>
    </div>
  </div>
</section>

<script>
/* ---------------- Modern network globe ---------------- */
(function(){
  const canvas = document.getElementById('globeCanvas');
  const ctx = canvas.getContext('2d');
  const DPR = Math.min(window.devicePixelRatio || 1, 2);
  const SIZE = 480;
  canvas.width = SIZE * DPR;
  canvas.height = SIZE * DPR;
  canvas.style.width = SIZE + 'px';
  canvas.style.height = SIZE + 'px';
  ctx.scale(DPR, DPR);

  const R = 190;
  const cx = SIZE/2, cy = SIZE/2;

  function landDensity(lat, lon){
    return Math.sin(lat*2.1 + lon*1.3) + Math.sin(lat*3.7 - lon*2.6) * 0.6
         + Math.sin(lat*1.2 + lon*4.1) * 0.5 + Math.sin(lon*0.7) * 0.4;
  }

  // base dot field
  const points = [];
  const latSteps = 30;
  for(let i=0;i<=latSteps;i++){
    const lat = (Math.PI * i/latSteps) - Math.PI/2;
    const circleR = Math.cos(lat);
    const steps = Math.max(6, Math.round(latSteps*2*circleR));
    for(let j=0;j<steps;j++){
      const lon = (Math.PI*2*j/steps);
      points.push({lat, lon, land: landDensity(lat, lon) > 0.15});
    }
  }

  // pick a handful of "hub" land points to connect with arcs, like flight routes
  const landPoints = points.filter(p => p.land);
  const hubs = [];
  for(let i=0;i<9;i++){
    hubs.push(landPoints[Math.floor(Math.random()*landPoints.length)]);
  }
  const routes = [];
  for(let i=0;i<hubs.length;i++){
    const a = hubs[i];
    const b = hubs[(i + 3) % hubs.length];
    routes.push({a, b, offset: Math.random(), speed: 0.0028 + Math.random()*0.002});
  }

  // gentle mouse parallax
  let tiltX = 0, tiltY = 0, targetTiltX = 0, targetTiltY = 0;
  const wrap = canvas.parentElement.parentElement;
  wrap.addEventListener('mousemove', (e)=>{
    const rect = wrap.getBoundingClientRect();
    targetTiltX = ((e.clientX - rect.left) / rect.width - 0.5) * 0.35;
    targetTiltY = ((e.clientY - rect.top) / rect.height - 0.5) * 0.35;
  });
  wrap.addEventListener('mouseleave', ()=>{ targetTiltX = 0; targetTiltY = 0; });

  function project(lat, lon, angle){
    const lo = lon + angle;
    const x3 = Math.cos(lat) * Math.cos(lo);
    const y3 = Math.sin(lat) + tiltY;
    const z3 = Math.cos(lat) * Math.sin(lo);
    const rx = x3 * Math.cos(tiltX) - z3 * Math.sin(tiltX);
    const rz = x3 * Math.sin(tiltX) + z3 * Math.cos(tiltX);
    return { x: cx + rx * R, y: cy - y3 * R * 0.94, z: rz };
  }

  let angle = 0;
  let pulse = 0;

  function draw(){
    ctx.clearRect(0,0,SIZE,SIZE);
    tiltX += (targetTiltX - tiltX) * 0.06;
    tiltY += (targetTiltY - tiltY) * 0.06;
    pulse += 0.02;

    // outer breathing ring
    const ringPulse = 1 + Math.sin(pulse) * 0.01;
    ctx.beginPath();
    ctx.arc(cx,cy,(R+2)*ringPulse,0,Math.PI*2);
    ctx.strokeStyle = 'rgba(37,99,235,0.20)';
    ctx.lineWidth = 1;
    ctx.stroke();

    // faint latitude rings for structure
    for(let k=-2;k<=2;k++){
      const lat = k * 0.5;
      ctx.beginPath();
      let started = false;
      for(let j=0;j<=64;j++){
        const lon = (Math.PI*2*j/64);
        const p = project(lat, lon, angle);
        if(p.z < -0.15) { started=false; continue; }
        if(!started){ ctx.moveTo(p.x,p.y); started=true; } else ctx.lineTo(p.x,p.y);
      }
      ctx.strokeStyle = 'rgba(37,99,235,0.10)';
      ctx.lineWidth = 1;
      ctx.stroke();
    }

    // route arcs (great-circle-ish curved connectors)
    for(const r of routes){
      const pa = project(r.a.lat, r.a.lon, angle);
      const pb = project(r.b.lat, r.b.lon, angle);
      if(pa.z < -0.25 || pb.z < -0.25) continue;
      const mx = (pa.x + pb.x)/2, my = (pa.y + pb.y)/2;
      const dx = pb.x - pa.x, dy = pb.y - pa.y;
      const dist = Math.hypot(dx,dy);
      const bow = Math.min(dist*0.35, 46);
      const nx = -dy/ (dist||1), ny = dx/(dist||1);
      const cxp = mx + nx*bow, cyp = my + ny*bow;

      ctx.beginPath();
      ctx.moveTo(pa.x, pa.y);
      ctx.quadraticCurveTo(cxp, cyp, pb.x, pb.y);
      ctx.strokeStyle = 'rgba(37,99,235,0.30)';
      ctx.lineWidth = 1;
      ctx.stroke();

      // traveling pulse dot along the curve
      r.offset += r.speed;
      if(r.offset > 1) r.offset -= 1;
      const t = r.offset;
      const px = (1-t)*(1-t)*pa.x + 2*(1-t)*t*cxp + t*t*pb.x;
      const py = (1-t)*(1-t)*pa.y + 2*(1-t)*t*cyp + t*t*pb.y;
      ctx.beginPath();
      ctx.arc(px,py,2.4,0,Math.PI*2);
      ctx.fillStyle = '#2563eb';
      ctx.shadowColor = 'rgba(37,99,235,0.6)';
      ctx.shadowBlur = 8;
      ctx.fill();
      ctx.shadowBlur = 0;
    }

    // dot field, back-to-front
    const sorted = points.map(p=>{
      const proj = project(p.lat, p.lon, angle);
      return {x:proj.x, y:proj.y, z:proj.z, land:p.land};
    }).sort((a,b)=>a.z-b.z);

    for(const p of sorted){
      const depth = (p.z + 1) / 2;
      const size = p.land ? (1.5 + depth*1.7) : (0.8 + depth*1.0);
      const alpha = p.land ? (0.25 + depth*0.75) : (0.08 + depth*0.25);
      ctx.beginPath();
      ctx.arc(p.x,p.y,size,0,Math.PI*2);
      if(p.land && depth > 0.72){
        ctx.shadowColor = 'rgba(37,99,235,0.5)';
        ctx.shadowBlur = 4;
      }
      ctx.fillStyle = p.land
        ? `rgba(37,99,235,${alpha})`
        : `rgba(148,163,184,${alpha*0.6})`;
      ctx.fill();
      ctx.shadowBlur = 0;
    }

    angle += 0.0045;
    requestAnimationFrame(draw);
  }
  draw();
})();

/* ---------------- Auto-scrolling partner logos ---------------- */
(function(){
  // Populated from the WordPress Media Library — see the
  // $vbanx_partner_logos array near the top of this template.
  const logos = <?php echo wp_json_encode( $vbanx_partner_logos ); ?>;

  function renderSet(){
    return logos.map(l => `
      <div class="partner-logo">
        <img src="${l.src}" alt="${l.alt}" loading="lazy">
      </div>
    `).join('');
  }

  const track = document.getElementById('marqueeTrack');
  track.innerHTML = renderSet() + renderSet();
})();

/* ---------------- Module carousel arrows ---------------- */
(function(){
  const track = document.getElementById('moduleTrack');
  const prev = document.getElementById('prevArrow');
  const next = document.getElementById('nextArrow');
  if(!track) return;
  let offset = 0;

  function cardStep(){
    const firstCard = track.querySelector('.module-card');
    if(!firstCard) return 300;
    const style = getComputedStyle(track);
    const gap = parseFloat(style.columnGap || style.gap || '20') || 20;
    return firstCard.getBoundingClientRect().width + gap;
  }

  function update(){
    const mask = track.parentElement;
    const maxOffset = Math.max(0, track.scrollWidth - mask.clientWidth);
    offset = Math.min(Math.max(offset,0), maxOffset);
    track.style.transform = `translateX(-${offset}px)`;
  }
  next.addEventListener('click', ()=>{ offset += cardStep(); update(); });
  prev.addEventListener('click', ()=>{ offset -= cardStep(); update(); });
  window.addEventListener('resize', update);
})();

/* ---------------- Scroll reveal ---------------- */
(function(){
  const groups = [
    document.querySelectorAll('.module-card'),
    document.querySelectorAll('.showcase-row'),
    document.querySelectorAll('.perf-card'),
    document.querySelectorAll('.contact-card')
  ];
  groups.forEach(list => list.forEach((el,i)=>{
    el.style.transitionDelay = (i * 70) + 'ms';
  }));

  const io = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
      if(entry.isIntersecting){
        entry.target.classList.add('in-view');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  groups.forEach(list => list.forEach(el => io.observe(el)));
})();
</script>
<?php
get_footer();