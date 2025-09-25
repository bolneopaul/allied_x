<section class="faq-section">
  <div class="faq-header">
    <h2>Frequently Asked <span class="highlight">Questions</span></h2>
    <div class="faq-sub">Here are some of the most common questions families ask us , answered simply and clearly to help you get started with confidence.</div>
  </div>
  <div class="faq-list">
    <div class="faq-item">
      <button class="faq-question">What is allied health and how can it help my child?<span class="faq-toggle">+</span></button>
      <div class="faq-answer">Allied health professionals help people improve their health, wellbeing, and independence through a range of therapies and supports.</div>
    </div>
    <div class="faq-item active">
      <button class="faq-question">What allied health services do you provide?<span class="faq-toggle">-</span></button>
      <div class="faq-answer">Allied X provides a full range of allied health services in Australia across the lifespan. Our team includes Occupational Therapists, Speech Pathologists, Psychologists, Behaviour Support Practitioners, Physiotherapists, Exercise Physiologists, and Allied Health Assistants.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question">How do I book an appointment or make a referral?<span class="faq-toggle">+</span></button>
      <div class="faq-answer">You can book or refer by calling us, using our online form, or speaking with your support coordinator.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question">Are your services only for people with NDIS plans?<span class="faq-toggle">+</span></button>
      <div class="faq-answer">No, we support both NDIS participants and private clients of all ages.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question">What does a therapy session look like and how long is it?<span class="faq-toggle">+</span></button>
      <div class="faq-answer">Sessions are tailored to your needs and may last from 30 to 60 minutes, depending on the service and goals.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question">Do you provide therapy at home, in school, or in the community?<span class="faq-toggle">+</span></button>
      <div class="faq-answer">Yes, we offer flexible service delivery in homes, schools, community settings, and at our clinics.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question">What is the NDIS, and how does it work?<span class="faq-toggle">+</span></button>
      <div class="faq-answer">The NDIS (National Disability Insurance Scheme) provides funding for supports and services to people with disability in Australia.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question">What ages do you cater to?<span class="faq-toggle">+</span></button>
      <div class="faq-answer">We support children, teens, adults, and older people across the lifespan.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question">What types of NDIS plans do you work with?<span class="faq-toggle">+</span></button>
      <div class="faq-answer">We work with all NDIS plan types: self-managed, plan-managed, and NDIA-managed.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question">I'm already working with another therapist — can I still access Allied X services?<span class="faq-toggle">+</span></button>
      <div class="faq-answer">Yes, we can work alongside your existing supports to help you achieve your goals.</div>
    </div>
  </div>
  <div class="faq-refer">
    <a href="/refer" class="refer-btn">Refer Now</a>
  </div>
</section>
<script>
(function() {
  const items = document.querySelectorAll('.faq-item');
  items.forEach(item => {
    const btn = item.querySelector('.faq-question');
    btn.addEventListener('click', function() {
      const isActive = item.classList.contains('active');
      items.forEach(i => {
        i.classList.remove('active');
        i.querySelector('.faq-toggle').textContent = '+';
      });
      if (!isActive) {
        item.classList.add('active');
        btn.querySelector('.faq-toggle').textContent = '-';
      }
    });
  });
})();
</script>
