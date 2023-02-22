/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./src/admin/welcome-notice.js ***!
  \*************************************/
function handleWelcomeNotice() {
  const {
    activating,
    installing,
    done,
    activationUrl,
    ajaxUrl,
    pluginSlug,
    nonce,
    pluginStatus
  } = spectra;
  let installStatusText;
  let loadingIcon;
  const CloseButton = document.querySelector('.swt-welcome-notice .notice-dismiss');
  const WelcomeNoticeContainer = document.querySelector('.swt-welcome-notice');
  const InstallButton = document.querySelector('.swt-welcome-notice #swt-install-spectra');
  if (InstallButton) {
    installStatusText = InstallButton.querySelector('.text');
    loadingIcon = InstallButton.querySelector('.dashicons');
  }
  const hideAndRemoveNotice = () => {
    if (WelcomeNoticeContainer) {
      WelcomeNoticeContainer.remove();
    }
  };
  const activateSpectra = async () => {
    installStatusText.textContent = activating;
    await activatePlugin(activationUrl);
    if (loadingIcon) {
      loadingIcon.classList.remove('dashicons-update');
      loadingIcon.classList.add('dashicons-yes');
    }
    installStatusText.textContent = done;
    setTimeout(hideAndRemoveNotice, 2000);
  };
  if (InstallButton) {
    InstallButton.addEventListener('click', async () => {
      loadingIcon.classList.remove('hidden');
      InstallButton.setAttribute('disabled', true);
      if (pluginStatus === 'installed') {
        await activateSpectra();
        return;
      }
      installStatusText.textContent = installing;
      await installPlugin(pluginSlug);
      await activateSpectra();
    });
  }
  CloseButton.addEventListener('click', async () => {
    const res = {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
      },
      body: `action=swt_dismiss_welcome_notice&security=${nonce}`
    };
    try {
      const reqResponse = await fetch(ajaxUrl, res);
      if (200 === reqResponse.status) {
        hideAndRemoveNotice();
      }
    } catch (err) {}
  });
}
document.addEventListener('DOMContentLoaded', () => {
  handleWelcomeNotice();
});
async function installPlugin(slug) {
  return new Promise(resolve => {
    wp.updates.ajax('install-plugin', {
      slug,
      success: () => {
        resolve({
          success: true
        });
      },
      error: err => {
        resolve({
          success: false,
          code: err.errorCode
        });
      }
    });
  });
}
;
async function activatePlugin(url) {
  try {
    const reqResponse = await fetch(url);
    if (200 === reqResponse.status) {
      return {
        success: true
      };
    }
  } catch (err) {
    return {
      success: false
    };
  }
}
;
/******/ })()
;
//# sourceMappingURL=welcome_notice.js.map