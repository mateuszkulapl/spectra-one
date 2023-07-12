import { __ } from '@wordpress/i18n';
import {
	activatePluginUrl,
	installPlugin,
} from '../components/plugin-helpers.js';


const {
    activating,
    installing,
    done,
    activationUrl,
    pluginSlug,
    pluginStatus,
} = spectraOne;

const activateSpectra = async (target) => {

    console.log(target);

    target.textContent = activating;
    await activatePluginUrl( activationUrl );

    target.classList.remove( 'updating-message' );
    target.classList.add( 'updated-message' );

    target.textContent = done;
};

document.addEventListener('click', async (e) => {
    let elementClass = e?.target?.className ? e.target.className : '';

    if (elementClass && ( typeof elementClass === 'string' ) && elementClass.includes( 'block-editor-inserter__patterns-explore-button' )) {


        const button = document.createElement('button');
        button.textContent = __( 'Get more blocks with Spectra','spectra-one');
        button.setAttribute("class", "swt-template-kit-spectra components-button is-primary");

        const container = document.querySelector('.block-editor-block-patterns-explorer__sidebar__categories-list');

        if( container && ! container.querySelector('.swt-template-kit-spectra') ) {
            container.appendChild( button);
        }
    }

    if (elementClass && ( typeof elementClass === 'string' ) && elementClass.includes( 'swt-template-kit-spectra' )) {
        const target = document.querySelector('#ast-block-templates-button');

        console.log(pluginStatus);

        if( pluginStatus === 'not-installed' ) {
            e.target.classList.add( 'updating-message' );
            e.target.classList.add( 'disabled' );
            e.target.textContent = installing;
            await installPlugin( pluginSlug );
            await activateSpectra(e.target);
            location.reload();
        }

        if ( pluginStatus === 'installed' ) {
            e.target.classList.add( 'updating-message' );
            e.target.classList.add( 'disabled' );
            await activateSpectra(e.target);
            location.reload();
        }

        if( target ) {

            if( pluginStatus === 'activated' ) {
                target.click();
            }
        }
    }
});