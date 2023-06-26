

document.addEventListener('click', function(event) {
	const target = document.querySelector('.edit-site-header-edit-mode__inserter-toggle');
	const check = document.querySelector('.block-editor-inserter__tabs .swt-spectra-cta');
	const html = `
		<div style="padding: 1.5em; background-color: pink;"class="swt-spectra-cta">
			This a cta
		</div>
	`
	if( target.classList.contains('is-pressed') ) {
		if( ! check ) {
			document.querySelector(".block-editor-inserter__tabs .components-tab-panel__tabs").insertAdjacentHTML("afterend", html );
		}
	}
});