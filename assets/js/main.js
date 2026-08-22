/**
 * Spicy Video Theme
 * Main JavaScript
 */

document.addEventListener('DOMContentLoaded', () => {

	const header = document.querySelector('.site-header');
	const menuToggle = document.querySelector('.mobile-menu-toggle');
	const mobileNavigation = document.querySelector('.mobile-navigation');

	if (!header || !menuToggle || !mobileNavigation) {
		return;
	}

	menuToggle.addEventListener('click', () => {

		const isOpen = header.classList.toggle('menu-open');

		menuToggle.setAttribute(
			'aria-expanded',
			isOpen ? 'true' : 'false'
		);

		menuToggle.setAttribute(
			'aria-label',
			isOpen ? 'Close menu' : 'Open menu'
		);

		mobileNavigation.setAttribute(
			'aria-hidden',
			isOpen ? 'false' : 'true'
		);
	});


	/*
	 * Close mobile menu when clicking a menu link.
	 */
	const mobileLinks = mobileNavigation.querySelectorAll('a');

	mobileLinks.forEach((link) => {

		link.addEventListener('click', () => {

			header.classList.remove('menu-open');

			menuToggle.setAttribute(
				'aria-expanded',
				'false'
			);

			menuToggle.setAttribute(
				'aria-label',
				'Open menu'
			);

			mobileNavigation.setAttribute(
				'aria-hidden',
				'true'
			);
		});

	});


	/*
	 * Close menu when pressing Escape.
	 */
	document.addEventListener('keydown', (event) => {

		if (event.key !== 'Escape') {
			return;
		}

		if (!header.classList.contains('menu-open')) {
			return;
		}

		header.classList.remove('menu-open');

		menuToggle.setAttribute(
			'aria-expanded',
			'false'
		);

		menuToggle.setAttribute(
			'aria-label',
			'Open menu'
		);

		mobileNavigation.setAttribute(
			'aria-hidden',
			'true'
		);

		menuToggle.focus();
	});

});
