<?php
if (!defined('ABSPATH')) exit;
$contact_title = function_exists('get_query_var') ? get_query_var('contact_title', 'Begin Your<span style="color:#A259FF;">Journey Today</span>') : 'Begin Your<span style="color:#A259FF;">Journey Today</span>';
$contact_desc = function_exists('get_query_var') ? get_query_var('contact_desc', 'We’ll use your details only to reach out and chat about how we can support your project.') : 'We’ll use your details only to reach out and chat about how we can support your project.';
$contact_phone = function_exists('get_query_var') ? get_query_var('contact_phone', '+44 123 654 7890') : '+44 123 654 7890';
$contact_image = function_exists('get_query_var') ? get_query_var('contact_image', (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/contact-image.png') : (function_exists('get_template_directory_uri') ? get_template_directory_uri() : '') . '/assets/images/home/contact-image.png';
$contact_form_fields = function_exists('get_query_var') ? get_query_var('contact_form_fields', [
	[ 'label' => 'What best describes you', 'type' => 'text', 'name' => 'describe_you', 'placeholder' => 'Enter here', 'required' => true ],
	[ 'label' => 'What Services are you interested in?', 'type' => 'text', 'name' => 'services', 'placeholder' => 'Enter here', 'required' => true ],
	[ 'label' => 'Title', 'type' => 'text', 'name' => 'title', 'placeholder' => 'Enter Title', 'required' => true ],
	[ 'label' => 'First Name', 'type' => 'text', 'name' => 'first_name', 'placeholder' => 'First Name', 'required' => true ],
	[ 'label' => 'Last Name', 'type' => 'text', 'name' => 'last_name', 'placeholder' => 'Last Name', 'required' => true ],
	[ 'label' => 'Email', 'type' => 'email', 'name' => 'email', 'placeholder' => 'Enter Email', 'required' => true ],
	[ 'label' => 'Phone Number', 'type' => 'tel', 'name' => 'phone', 'placeholder' => 'Enter Phone Number', 'required' => true ],
	[ 'label' => 'State', 'type' => 'text', 'name' => 'state', 'placeholder' => 'Enter', 'required' => true ],
	[ 'label' => 'Post Code', 'type' => 'text', 'name' => 'postcode', 'placeholder' => 'Enter', 'required' => true ],
	[ 'label' => 'Message', 'type' => 'textarea', 'name' => 'message', 'placeholder' => 'Write Something...', 'required' => false ],
]) : [
	// fallback array
];
$contact_submit_text = function_exists('get_query_var') ? get_query_var('contact_submit_text', 'Submit') : 'Submit';
if (!function_exists('esc_html')) { function esc_html($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
if (!function_exists('esc_url')) { function esc_url($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
if (!function_exists('esc_attr')) { function esc_attr($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); } }
?>
<section class="contact-section" style="background:#fff;">
	<div class="contact-container">
		<div class="contact-left">
			<h2 class="contact-title"><?php echo $contact_title; ?></h2>
			<p class="contact-desc"><?php echo esc_html($contact_desc); ?></p>
			<div class="contact-phone">
				<span class="contact-phone-icon">
					<svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.5 19.5v2a2 2 0 01-2.18 2A19.86 19.86 0 014 6.68 2 2 0 016 4.5h2a1 1 0 011 .78l.45 2.01a1 1 0 01-.29.95l-1.27 1.27a16 16 0 007.07 7.07l1.27-1.27a1 1 0 01.95-.29l2.01.45a1 1 0 01.78 1z" stroke="#A259FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
				<span class="contact-phone-number"><?php echo esc_html($contact_phone); ?></span>
			</div>
			<div class="contact-image">
				<img src="<?php echo esc_url($contact_image); ?>" alt="Contact" />
			</div>
		</div>
		<form class="contact-form" method="post">
			<?php
			$rowFields = [];
			foreach ($contact_form_fields as $i => $field) {
				// Textarea and single fields go in their own row
				if ($field['type'] === 'textarea' || in_array($field['name'], ['title', 'message'])) {
					if (!empty($rowFields)) {
						echo '<div class="contact-form-row">';
						foreach ($rowFields as $rf) {
							echo '<div class="contact-form-group">';
							echo '<label>' . esc_html($rf['label']) . ($rf['required'] ? ' <span class="required">*</span>' : '') . '</label>';
							echo '<input type="' . esc_attr($rf['type']) . '" name="' . esc_attr($rf['name']) . '" placeholder="' . esc_attr($rf['placeholder']) . '"' . ($rf['required'] ? ' required' : '') . ' />';
							echo '</div>';
						}
						echo '</div>';
						$rowFields = [];
					}
					echo '<div class="contact-form-group">';
					echo '<label>' . esc_html($field['label']) . ($field['required'] ? ' <span class="required">*</span>' : '') . '</label>';
					echo '<textarea name="' . esc_attr($field['name']) . '" placeholder="' . esc_attr($field['placeholder']) . '" rows="4"' . ($field['required'] ? ' required' : '') . '></textarea>';
					echo '</div>';
				} else {
					$rowFields[] = $field;
					if (count($rowFields) === 2) {
						echo '<div class="contact-form-row">';
						foreach ($rowFields as $rf) {
							echo '<div class="contact-form-group">';
							echo '<label>' . esc_html($rf['label']) . ($rf['required'] ? ' <span class="required">*</span>' : '') . '</label>';
							echo '<input type="' . esc_attr($rf['type']) . '" name="' . esc_attr($rf['name']) . '" placeholder="' . esc_attr($rf['placeholder']) . '"' . ($rf['required'] ? ' required' : '') . ' />';
							echo '</div>';
						}
						echo '</div>';
						$rowFields = [];
					}
				}
			}
			// Output any remaining fields
			if (!empty($rowFields)) {
				echo '<div class="contact-form-row">';
				foreach ($rowFields as $rf) {
					echo '<div class="contact-form-group">';
					echo '<label>' . esc_html($rf['label']) . ($rf['required'] ? ' <span class="required">*</span>' : '') . '</label>';
					echo '<input type="' . esc_attr($rf['type']) . '" name="' . esc_attr($rf['name']) . '" placeholder="' . esc_attr($rf['placeholder']) . '"' . ($rf['required'] ? ' required' : '') . ' />';
					echo '</div>';
				}
				echo '</div>';
			}
			?>
		</form>
		<button type="submit" class="contact-submit-btn"><?php echo esc_html($contact_submit_text); ?></button>
	</div>
</section>
