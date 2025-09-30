<section class="contact-section" style="background:#fff;">
	<div class="contact-container">
		<div class="contact-left">
			<h2 class="contact-title">Begin Your<span style="color:#A259FF;">Journey Today</span></h2>
			<p class="contact-desc">We’ll use your details only to reach out and chat about how we can support your project.</p>
			<div class="contact-phone">
				<span class="contact-phone-icon">
					<svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.5 19.5v2a2 2 0 01-2.18 2A19.86 19.86 0 014 6.68 2 2 0 016 4.5h2a1 1 0 011 .78l.45 2.01a1 1 0 01-.29.95l-1.27 1.27a16 16 0 007.07 7.07l1.27-1.27a1 1 0 01.95-.29l2.01.45a1 1 0 01.78 1z" stroke="#A259FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
				<span class="contact-phone-number">+44 123 654 7890</span>
			</div>
			<div class="contact-image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/contact-image.png" alt="Contact" />
			</div>
		</div>
		<form class="contact-form" method="post">
			<div class="contact-form-row">
				<div class="contact-form-group">
					<label>What best describes you <span class="required">*</span></label>
					<input type="text" name="describe_you" placeholder="Enter here" required />
				</div>
				<div class="contact-form-group">
					<label>What Services are you interested in? <span class="required">*</span></label>
					<input type="text" name="services" placeholder="Enter here" required />
				</div>
			</div>
			<div class="contact-form-group">
				<label>Title <span class="required">*</span></label>
				<input type="text" name="title" placeholder="Enter Title" required />
			</div>
			<div class="contact-form-row">
				<div class="contact-form-group">
					<label>First Name <span class="required">*</span></label>
					<input type="text" name="first_name" placeholder="First Name" required />
				</div>
				<div class="contact-form-group">
					<label>Last Name <span class="required">*</span></label>
					<input type="text" name="last_name" placeholder="Last Name" required />
				</div>
			</div>
			<div class="contact-form-row">
				<div class="contact-form-group">
					<label>Email <span class="required">*</span></label>
					<input type="email" name="email" placeholder="Enter Email" required />
				</div>
				<div class="contact-form-group">
					<label>Phone Number <span class="required">*</span></label>
					<input type="tel" name="phone" placeholder="Enter Phone Number" required />
				</div>
			</div>
			<div class="contact-form-row">
				<div class="contact-form-group">
					<label>State <span class="required">*</span></label>
					<input type="text" name="state" placeholder="Enter" required />
				</div>
				<div class="contact-form-group">
					<label>Post Code <span class="required">*</span></label>
					<input type="text" name="postcode" placeholder="Enter" required />
				</div>
			</div>
			<div class="contact-form-group">
				<label>Message</label>
				<textarea name="message" placeholder="Write Something..." rows="4"></textarea>
			</div>
		</form>
		<button type="submit" class="contact-submit-btn">Submit</button>
	</div>
</section>
